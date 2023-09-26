<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >

<!-- Header Start -->
<header id="header" class="header">

<!-- Header banner -->
<?php if ( ! empty( get_theme_mod( 'set_banner') ) ) : ?>
    <div class="header-top">
      <div class="container">
        <?php echo get_theme_mod( 'set_banner', '' ); endif; ?>
      </div>
    </div>

  <!-- Main header -->
  <div class="header-main">
      <div class="container">
        <!-- Logo or site title -->
    <div class="branding">
      <?php
        if( has_custom_logo() ) {
          the_custom_logo();
        } else {
          ?>
            <a href="<?php esc_url( bloginfo( 'url' ) ); ?>">
              <div class="site-title"><?php bloginfo( 'title' ); ?></div>
            </a>
          <?php
        }
      ?>
    </div>

    <!-- Mobile menu toggle -->
    <button id="mobile-menu-toggle" class="mobile-menu-toggle"><i class="fa fa-solid fa-bars fa-2x"></i></button>

    <!-- Nav Menu -->
    <nav id="main-menu" class="main-menu">
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'cloud_peak_primary_menu'
          )
        );
      ?>
    </nav>
      </div>
  </div>

</header>