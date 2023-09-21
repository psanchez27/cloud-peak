<?php

function cloud_peak_enqueue_scripts() {
  //load theme info stysheet
  wp_enqueue_style( 'cloud-peak-theme-info', get_stylesheet_uri(), array(), wp_get_theme()->get( 'version' ), 'all' );
 
}

add_action( 'wp_enqueue_scripts', 'cloud_peak_enqueue_scripts' );