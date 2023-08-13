<?php
include "../../../wp-config.php";
require_once 'vendor/jwt/JWT.php';
require_once 'vendor/jwt/SignatureInvalidException.php';
require_once 'vendor/jwt/BeforeValidException.php';
require_once 'vendor/jwt/ExpiredException.php';
require_once 'vendor/jwt/JWK.php';

//Namespaces
use \Firebase\JWT\JWT;

global $wpdb;

add_action( 'rest_api_init', function () {

// Register a new route for user registration
register_rest_route( 'myplugin/v1', '/register', array(
    'methods' => 'POST',
    'callback' => 'register_user',
) );

// Register a new route for user login
register_rest_route( 'myplugin/v1', '/login', array(
    'methods' => 'POST',
    'callback' => 'login_user',
) );

} );

// Callback function for user registration
function register_user( $request ) {

// Get user data from the request
$username = $request->get_param( 'username' );
$email = $request->get_param( 'email' );
$password = $request->get_param( 'password' );

// Check if the username and email are available
if ( username_exists( $username ) || email_exists( $email ) ) {
    return new WP_Error( 'registration_failed', __( 'Username or email already taken.', 'myplugin' ), array( 'status' => 400 ) );
}

// Create the user
$user_id = wp_create_user( $username, $password, $email );

// Set the user's display name
wp_update_user( array( 'ID' => $user_id, 'display_name' => $username ) );

// Return the user ID
return array( 'user_id' => $user_id );
}

// Callback function for user login
function login_user( $request ) {

// Get user credentials from the request
$username = $request->get_param( 'username' );
$password = $request->get_param( 'password' );

// Attempt to log the user in
$user = wp_authenticate( $username, $password );

// Check if the login was successful
if ( is_wp_error( $user ) ) {
    return new WP_Error( 'login_failed', __( 'Invalid username or password.', 'myplugin' ), array( 'status' => 401 ) );
}

// Generate a JSON Web Token (JWT)
$secret_key = 'my_secret_key'; // Replace with your own secret key
$token_payload = array(
    'user_id' => $user->ID,
    'username' => $user->user_login,
    'exp' => time() + ( 7 * 24 * 60 * 60 ), // Token expires in 7 days
);
$jwt = JWT::encode( $token_payload, $secret_key );

// Return the JWT
return array( 'jwt' => $jwt );
}
?>