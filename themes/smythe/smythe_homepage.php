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

    <div class="u-row" style="marign:0 auto;max-width:67.5em;width:90%;">

      <div class="u-two-thirds">
        <?php
          echo do_shortcode("[medaslider id=114]");
        ?>
      </div>

      <div class="u-one-third">
        <?php while ( have_posts() ) : the_post(); ?>

          <?php get_template_part( 'template-parts/content', 'page' ); ?>

        <?php endwhile; // End of the loop. ?>
      </div>

    </div>

  </main><!-- #main -->

<?php get_footer(); ?>
