<?php

function cloud_peak_customizer( $wp_customize ){
// 1 Footer Section ****************************************************************************************
$wp_customize->add_section(
  'sec_footer',
  array(
    'title' => 'Footer',
    'description' => 'Footer Settings',
    'priority' => 50
  )
);

$wp_customize->add_setting(
  'set_copyright',
  array(
    'type' => 'theme_mod',
    'default' => 'Copyright Cloud Peak Systems - All Rights Reserved',
    'sanitize_callback' => 'sanitize_text_field'
  )
);

$wp_customize->add_control(
  'set_copyright',
  array(
    'label' => 'Copyright Information',
    'description' => 'Please, type your copyright here',
    'section' => 'sec_footer',
    'type' => 'text'
  )
);

// Customize footer colors

// Footer background color
$wp_customize->add_setting(
  'set_footer_background_color',
  array(
    'type' => 'theme_mod',
    'default' => '#000'
  )
);

$wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize,
    'set_footer_background',
    array(
      'label' => 'Footer Background Color',
      'description' => 'Set the footer background color',
      'section' => 'sec_footer',
      'settings' => 'set_footer_background_color'
    )
  )
);

// Footer text color
$wp_customize->add_setting(
  'set_footer_text_color',
  array(
    'type' => 'theme_mod',
    'default' => '#fff'
  )
);

$wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize,
    'set_footer_text',
    array(
      'label' => 'Footer Text Color',
      'description' => 'Set the footer text color',
      'section' => 'sec_footer',
      'settings' => 'set_footer_text_color'
    )
  )
);
}

add_action( 'customize_register', 'cloud_peak_customizer' );
