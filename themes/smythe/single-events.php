<?php
/**
 * The template for displaying all single events posts.
 *
 * @package smythe
 */

get_header(); ?>

	<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>

      <article class="o-paper c-telegram">

        <h6 class="c-telegram__header">event telegram</h6>

        <div class="u-row">

          <div class="u-one-third">
            <img src="<?php the_field('image'); ?>" alt="" class="c-telegram__pic">
          </div>

          <div class="u-two-thirds">
            <h2 class="c-telegram__title">
              <?php echo get_the_title(); ?>
            </h2>
            <p class="c-telegram__date">
              <?php
                $date = DateTime::createFromFormat('Ymd', get_field('event_date'));
                echo $date->format('F j, Y');
              ?>
            </p>
            <p class="c-telegram__venue">
              <a href="<?php the_field('venue_website'); ?>" class="c-link">
                <?php the_field('venue_name'); ?>
              </a>
            </p>
            <div class="c-telegram__description">
              <?php the_content(); ?>
            </div>
          </div>
        </div>
      </article>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
