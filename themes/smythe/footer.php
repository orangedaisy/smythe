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
      <div class="site-nav__wrapper--right">
        <ul>
          <li><a href="http://www.orangedaisy.co" title="orange daisy" target="_blank">crafted by orange daisy</a></li>
        </ul>
      </div>
    </nav>
  </div><!-- .site-info -->
</footer><!-- #colophon -->

<?php wp_footer(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-63901538-1', 'auto');
  ga('send', 'pageview');

</script>

</body>
</html>
