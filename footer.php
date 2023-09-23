<?php wp_footer(); ?>

<!-- Footer -->
<footer>
  <div class="footer-main">
  <p class="copyright"><?php echo get_theme_mod( 'set_copyright', 'Copyright Cloud Peak Systems - All Rights Reserved' ); ?></p>
    <div class="footer-menu">
      <nav>
        <?php
          wp_nav_menu(
            array(
              'theme_location' => 'cloud_peak_footer_menu'
            )
          );
        ?>
      </nav>
    </div>
  </div>
</footer>
