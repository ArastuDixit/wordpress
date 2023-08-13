<!DOCTYPE html>
<html lang="en-US">
<head>
<meta charset="UTF-8">
<title>WordPress Tutorial</title>

</head>

<body class="home blog logged-in admin-bar no-customize-support">
<header class="site-header">
  <h1>WordPress Tutorial</h1>
  <h4>WordPress Tutorial Site</h4>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
	<?php wp_head() ?>

  <?php if ( is_singular() ) : // Check if we're on a single post or page ?>
  <?php
  $post_id = get_queried_object_id(1); // Get the current post ID
  $post_title = get_the_title( $post_id ); // Get the post title
  $post_excerpt = get_the_excerpt( $post_id ); // Get the post excerpt
  $post_thumbnail = get_the_post_thumbnail_url( $post_id ); // Get the post thumbnail URL
  ?>
  <?php if ( ! empty( $post_title ) ) : // Check if the post has a title ?>
    <meta property="og:title" content="<?php echo esc_attr( $post_title ); ?>" />
    <meta name="twitter:title" content="<?php echo esc_attr( $post_title ); ?>" />
  <?php endif; ?>
  <?php if ( ! empty( $post_excerpt ) ) : // Check if the post has an excerpt ?>
    <meta name="description" content="<?php echo esc_attr( $post_excerpt ); ?>" />
    <meta property="og:description" content="<?php echo esc_attr( $post_excerpt ); ?>" />
    <meta name="twitter:description" content="<?php echo esc_attr( $post_excerpt ); ?>" />
  <?php endif; ?>
  <?php if ( ! empty( $post_thumbnail ) ) : // Check if the post has a featured image ?>
    <meta property="og:image" content="<?php echo esc_attr( $post_thumbnail ); ?>" />
    <meta name="twitter:image" content="<?php echo esc_attr( $post_thumbnail ); ?>" />
  <?php endif; ?>
<?php endif; ?>


</header>
<h2><a href="http://wordpresstutorial.dev/2017/06/12/php-tutorial-blog-post/">PHP Tutorial Blog Post</a></h2>
<p>PHP is the language that most of WordPress is built with.  It is a scripting language that has humble roots, but has evolved to become a very powerful and modern language with full support for namespaces, object oriented programming, class reflection, closures, and much more.  This in fact, is just an example post so we can test our custom wordpress theme.  So glad you could read this example WordPress Post.</p>
<h2><a href="http://wordpresstutorial.dev/2017/06/12/wordpress-tutorial-blog-post/">WordPress Tutorial Blog Post</a></h2>
<p>Hello World!  We will write a short tutorial here about WordPress.  Of course this is just dummy text for this post so that we can have something to read.  Maybe you like swimming during the summer.  Eating hamburgers at the cook out is fun for all.  On Monday, you can go back to WordPress Website Development.  There are many things to do.</p>
<ul>
  <li>Commute to office</li>
  <li>Update WordPress Theme</li>
  <li>Finish Statistics Reports</li>
</ul>
<p>This is the end of this dummy post.</p>
</body>
</html>
 
 
 
 
 
