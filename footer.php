<?php wp_footer(); ?>

<!-- Footer -->
<footer>
  <div class="footer-main">
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
