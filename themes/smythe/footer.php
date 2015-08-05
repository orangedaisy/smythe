<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package smythe
 */

?>

<footer id="colophon" class="site-footer" role="contentinfo">
  <div class="site-info">
    <p>&copy;<?php echo date('Y'); ?> Cordelia Smythe Murder Mysteries</p>
    <nav class="site-nav" role="navigation">
      <div class="site-nav__wrapper--left">
        <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
      </div>
    </nav>
  </div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
