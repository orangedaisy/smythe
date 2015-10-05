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
  .single-post .site-main,
  .single-product .site-main {
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

<!-- mailchimp styles -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
  #mc_embed_signup {
    background: #f0f0f0;
    box-shadow: 0 2px 4px $c-shadow;
    display: block;
    margin: 0 auto 2.25rem;
    max-width: 67.5em;
    padding: 2.25rem;
    width: 90%;
  }

  #mc_embed_signup form {
    padding: 0;
  }

  #mc_embed_signup_scroll p {
    font-style: italic;
    text-align: center;
  }

  #mc_embed_signup_scroll h2 {
    margin: .5rem auto;
    text-align: center;
  }

  #mc_embed_signup .mc-field-group {
    height: auto;
    margin-bottom: 1rem;
    min-height: none;
    padding-bottom: 0;
    width: 100%;
  }

  #mc_embed_signup .button {
    background: #595959;
    border-radius: 0;
    box-shadow: 0 2px 4px rgba(48,48,48,.25);
    color: #f0f0f0;
    font-size: 1rem;
    margin: 0;
    text-shadow: none;
  }

  #mc_embed_signup .button:hover,
  #mc_embed_signup .button:focus {
    box-shadow: 0 4px 8px rgba(48,48,48,.25);
  }

  #mc_embed_signup .button:active {
    background: #303030;
    box-shadow: 0 1px 2px rgba(48,48,48,.5);
  }
</style>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="o-paper c-note c-note--site-notice">
    <p class="c-note__contents">Welcome to the new home for Cordelia Smythe Murder Mysteries! Please pardon the dust as we continue to improve your browsing experience.</p>
  </div>
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
