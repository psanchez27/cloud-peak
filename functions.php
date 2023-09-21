<?php

function cloud_peak_enqueue_scripts() {
  //load theme info stysheet
  wp_enqueue_style( 'cloud-peak-theme-info', get_stylesheet_uri(), array(), wp_get_theme()->get( 'version' ), 'all' );
 
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
}

add_action( 'after_setup_theme', 'cloud_peak_config' );
