<?php
/**
 * Template part for displaying posts.
 *
 * @package smythe
 */

?>

<?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'o-paper c-postcard' ); ?> style="background-image: url('<?php echo $thumb['0'];?>')">
  <div class="c-postcard__content">
    <header class="entry-header">
      <?php the_title( sprintf( '<h2 class="c-postcard__title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

      <?php if ( 'post' == get_post_type() ) : ?>
      <div class="entry-meta">
        <?php smythe_posted_on(); ?>
      </div><!-- .entry-meta -->
      <?php endif; ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
      <?php
        the_content( sprintf(
          /* translators: %s: Name of current post. */
          wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'smythe' ), array( 'span' => array( 'class' => array() ) ) ),
          the_title( '<span class="screen-reader-text">"', '"</span>', false )
        ) );
      ?>

      <?php
        wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'smythe' ),
          'after'  => '</div>',
        ) );
      ?>
    </div><!-- .entry-content -->

    <footer class="entry-footer">
      <?php smythe_entry_footer(); ?>
    </footer><!-- .entry-footer -->
  </div>
</article><!-- #post-## -->
