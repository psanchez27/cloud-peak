<?php

//Load theme customizer
require get_template_directory() . '/inc/customizer.php';

function cloud_peak_enqueue_scripts() {
  //load theme info stysheet
  wp_enqueue_style( 'cloud-peak-theme-info', get_stylesheet_uri(), array(), wp_get_theme()->get( 'version' ), 'all' );
  //load main style sheet
  wp_enqueue_style( 'cloud-peak-main-styles', get_template_directory_uri() . '/assets/css/styles-main.css', array(), wp_get_theme()->get( 'version' ), 'all' );

  //Load Font Awesome
  wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/f323f1d940.js', array(), '6.4.2' );
  //load main scripts file
  wp_enqueue_script('cloud-peak-main-scripts', get_template_directory_uri() . '/assets/js/app.js', array(), wp_get_theme()->get( 'version' ), true );
  //load header shrink js file
  wp_enqueue_script('cloud-peak-header-shrink-script', get_template_directory_uri() . '/assets/js/header-shrink.js', array(), wp_get_theme()->get( 'version' ), true );
}

add_action( 'wp_enqueue_scripts', 'cloud_peak_enqueue_scripts' );

// config function
function cloud_peak_config() {
  //Register nav menus
  register_nav_menus(
    array(
      'cloud_peak_primary_menu' => 'Main Menu',
      'clous_peak_footer_menu' => 'Footer Menu'
    )
  );

  //Theme support
  add_theme_support( 'title-tag' );
  add_theme_support( 'custom-logo' );
}

add_action( 'after_setup_theme', 'cloud_peak_config' );



// Customizer API css options ********************************************************************************
function cloud_peak_customize_css(){ ?>
  
     <!-- sticky header styles -->
      <?php if ( get_theme_mod( 'set_sticky_header' )  == 1 ) : ?>
        <script>
          header.classList.add('fixed')
        </script>

        <?php else : ?>

        <script>
          fixedHeader = document.getElementById('header')
          header.classList.remove('fixed')
        </script>


<?php endif; ?>

  <style>
    /* Banner alert styles */
      .header-top{
        background-color: <?php echo get_theme_mod( 'set_banner_bg_color' ); ?>;
        color: <?php echo get_theme_mod( 'set_banner_text_color' ); ?>;
      }

    /* Main header styles */
      .header-main{
        background-color: <?php echo get_theme_mod( 'set_main_header_bg_color' ); ?>;
        color: <?php echo get_theme_mod( 'set_main_header_text_color' ); ?>;
      }
      .header-main a{
        color: <?php echo get_theme_mod( 'set_main_header_text_color' ); ?>;
      }

    /* Mobile menu styles */
    @media only screen and (max-width: 820px){
      .header-main nav{
        background-color: <?php echo get_theme_mod( 'set_mobile_menu_bg_color' ); ?>;
      }
      .header-main nav a{
        color: <?php echo get_theme_mod( 'set_mobile_menu_text_color' ); ?>;
      }
    }

    /* Footer Style */
      footer{
        background-color: <?php echo get_theme_mod( 'set_footer_background_color' ); ?>;
        color: <?php echo get_theme_mod( 'set_footer_text_color' ); ?>;
      }
      footer ul li a{
        color: <?php echo get_theme_mod( 'set_footer_text_color' ); ?>;
      }

  </style>


  <?php
}

add_action( 'wp_footer', 'cloud_peak_customize_css' );