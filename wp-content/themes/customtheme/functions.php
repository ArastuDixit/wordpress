<?php

function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );

/**
 * Register a custom menu page.
 */
function custom_add_menu_pages(){
	add_menu_page( 
		__( 'Custom Plugin', 'textdomain' ),
		'Custom Plugin',
		'manage_options',
		'Custom Plugin',
		'',
		'dashicons-admin-plugins',
		6
	); 
}
add_action( 'admin_menu', 'custom_add_menu_pages' );
