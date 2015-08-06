<?php
/**
 * Template Name: Homepage
 *
 * The template for displaying the homepage
 *
 * @package smythe
 */

get_header(); ?>

  <main id="main" class="site-main hfeed" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <?php endwhile; // End of the loop. ?>

  </main><!-- #main -->

<?php get_footer(); ?>
