<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package smythe
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Calligraffitti%7CLora:400,400italic,700">

<style>
  /* get the featured image */
  <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>

  /* styles to show a nicely gradient-overlain background image in posts, etc */
  .single-post .site-main {
    background:
      linear-gradient(
        to bottom,
        rgba(48,48,48,.75),
        rgba(48,48,48,.5) 30%,
        #d8d8d8
      ),
      url('<?php echo $thumb['0'];?>');
    background-repeat: no-repeat;
    background-size: cover;
  }
</style>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'smythe' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
    <h2 class="wordmark"><?php bloginfo( 'name' ); ?></h2>
    <h3 class="tagline"><?php bloginfo( 'description' ); ?></h3>

		<nav id="site-navigation" class="site-nav" role="navigation">
      <!--<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'smythe' ); ?></button>-->
      <div class="site-nav__wrapper">
        <div class="site-nav__wrapper--left">
          <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </div>
        <div class="site-nav__wrapper--right">
          <?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'secondary-menu' ) ); ?>
        </div>
      </div>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
