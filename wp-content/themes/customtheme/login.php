<?php
/**
 * Template Name: Custom Login
 */


if (isset($_POST['submit'])) {
    $login_data = array();
    $login_data['user_login'] = $_POST['username'];
    $login_data['user_password'] = $_POST['password'];
    $login_data['remember'] = $_POST['remember'];

    $user_verify = wp_signon($login_data, false);

    if (is_wp_error($user_verify)) {
        echo '<div class="login_error">' . __('Invalid username or password. Please try again!', 'textdomain') . '</div>';
    } else {
        wp_redirect(home_url());
        exit;
    }
}

?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <div class="login-form">

            <h2><?php _e('Login', 'textdomain'); ?></h2>

            <form method="post" action="">
                <p>
                    <label for="username"><?php _e('Username', 'textdomain'); ?></label>
                    <input type="text" name="username" id="username" class="input" value="" size="20" />
                </p>
                <p>
                    <label for="password"><?php _e('Password', 'textdomain'); ?></label>
                    <input type="password" name="password" id="password" class="input" value="" size="20" />
                </p>
                <p>
                    <label for="rememberme">
                        <input name="rememberme" type="checkbox" id="rememberme" value="forever" />
                        <?php _e('Remember Me', 'textdomain'); ?>
                    </label>
                </p>
                <p>
                    <input type="submit" name="submit" value="<?php _e('Login', 'textdomain'); ?>" class="button" />
                </p>
            </form>

            <p>
                <?php _e('Not registered yet?'); ?>
                <a href="<?php echo wp_registration_url(); ?>"><?php _e('Register Here!', 'textdomain'); ?></a>
            </p>

            <p>
                <a href="<?php echo wp_lostpassword_url(); ?>"><?php _e('Lost your password?', 'textdomain'); ?></a>
            </p>

        </div><!-- .login-form -->

    </main><!-- #main -->
</div><!-- #primary -->

