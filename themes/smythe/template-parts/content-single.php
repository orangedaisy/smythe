<?php
/**
 * Template part for displaying single posts.
 *
 * @package smythe
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'o-paper c-letter' ); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="entry-meta">
			<?php smythe_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'smythe' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<!--<footer class="entry-footer">
		<?php smythe_entry_footer(); ?>
	</footer>--><!-- .entry-footer -->
</article><!-- #post-## -->

