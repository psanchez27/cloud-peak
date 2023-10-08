<?php

function cloud_peak_customizer( $wp_customize ){

// 1 Layout Section ************************************************************************************
$wp_customize->add_section(
  'sec_layout',
  array(
    'title' => 'Layout',
    'description' => 'Set the layout settings for your website.',
    'priority' => 30
  )
);

$wp_customize->add_setting(
  'set_container_width',
  array(
    'type' => 'theme_mod',
    'default' => '1120',
    'sanitize_callback' => 'sanitize_text_field'
  )
);

$wp_customize->add_control(
  'set_container_width',
  array(
    'label' => 'Container width',
    'description' => 'Set the width for your site container',
    'section' => 'sec_layout',
    'type' => 'text'
  )
);



// 2 Header section ****************************************************************************************
$wp_customize->add_section(
  'sec_header',
  array(
    'title' => 'Header',
    'description' => 'Customize the settings for your header',
    'priority' => 40
  )
);

//Settings for Fixed header
$wp_customize->add_setting(
  'set_sticky_header',
  array(
    'type' => 'theme_mod',
    'default' => 0
  )
);

$wp_customize->add_control(
  'set_sticky_header',
  array(
    'label' => 'Stick to top',
    'description' => 'Fix the main header to the top of the page',
    'section' => 'sec_header',
    'type' => 'checkbox'
  )
);

//Settings for header banner text
$wp_customize->add_setting(
  'set_banner',
  array(
    'type' => 'theme_mod',
    'default' => '',
    'sanitize_callback' => 'sanitize_text_field'
  )
);

$wp_customize->add_control(
  'set_banner',
  array(
    'label' => 'Banner Alert',
    'description' => 'Set an alert banner above the main header',
    'section' => 'sec_header',
    'type' => 'text'
  )
);

//Settings for header banner styling
//Background colors
$wp_customize->add_setting(
  'set_banner_bg_color',
  array(
    'type' => 'theme_mod',
    'default' => '#333',
  )
);

$wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize,
    'set_banner_bg_color_control',
    array(
      'label' => "Banner background color",
      'description' => 'Background color for banner alert',
      'section' => 'sec_header',
      'settings' => 'set_banner_bg_color'
) ) );

//Text color
$wp_customize->add_setting(
  'set_banner_text_color',
  array(
    'type' => 'theme_mod',
    'default' => '#fff'
  )
);

$wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize,
    'set_banner_text_color_control',
    array(
      'label' => 'Banner text Color',
      'description' => 'Text color for banner alert',
      'section' => 'sec_header',
      'settings' => 'set_banner_text_color'
    )
  )
);

//Settings for main header styling
//Background colors
$wp_customize->add_setting(
  'set_main_header_bg_color',
  array(
    'type' => 'theme_mod',
    'default' => '#222',
  )
);

$wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize,
    'set_main_header_bg_color_control',
    array(
      'label' => "Main header background color",
      'description' => 'Background color for main header',
      'section' => 'sec_header',
      'settings' => 'set_main_header_bg_color'
) ) );

//Text color
$wp_customize->add_setting(
  'set_main_header_text_color',
  array(
    'type' => 'theme_mod',
    'default' => '#fff'
  )
);

$wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize,
    'set_main_header_text_color_control',
    array(
      'label' => 'Main header text Color',
      'description' => 'Text color for main header',
      'section' => 'sec_header',
      'settings' => 'set_main_header_text_color'
    )
  )
);

//settings for mobile menu
//Background color
$wp_customize->add_setting(
  'set_mobile_menu_bg_color',
  array(
    'type' => 'theme_mod',
    'default' => '#222'
  )
);

$wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize,
    'set_mobile_menu_bg_color_control',
    array(
      'label' => 'Mobile menu background color',
      'description' => 'Set the background color for the mobile menu',
      'section' => 'sec_header',
      'settings' => 'set_mobile_menu_bg_color'
    )
  )
);

//Text color
$wp_customize->add_setting(
  'set_mobile_menu_text_color',
  array(
    'type' => 'theme_mod',
    'default' => '#fff'
  )
);

$wp_customize->add_control(
  new WP_Customize_Color_Control(
    $wp_customize,
    'set_mobile_menu_text_color_control',
    array(
      'label' => 'Mobile menu text color',
      'description' => 'Set the text color for the mobile menu',
      'section' => 'sec_header',
      'settings' => 'set_mobile_menu_text_color'
    )
  )
);

// 3 Footer Section ****************************************************************************************
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



// 4 Site Identity Section **********************************************************************
$wp_customize->add_setting(
  'set_logo_size',
  array(
    'type' => 'theme_mod',
    'default' => '110',
    'sanitize_callback' => 'sanitize_text_field'
  )
);

$wp_customize->add_control(
  'set_logo_size',
  array(
    'label' => 'Logo size',
    'description' => 'Enter only the number value in pixels',
    'section' => 'title_tagline',
    'type' => 'text'
  )
);



// 5 Button Section **********************************************************************
$wp_customize->add_section(
  'sec_buttons',
  array(
    'title' => 'Buttons',
    'description' => 'Change the settings for your site\'s buttons',
    'priority' => 60
  )
);

//Border Radius
$wp_customize->add_setting(
  'set_button_rad',
  array(
    'type' => 'theme_mod',
    'default' => '0',
    'sanitize_callback' => 'sanitize_text_field'
  )
);

$wp_customize->add_control(
  'set_button_rad',
  array(
    'label' => 'Button Radius',
    'description' => 'Set the button Radius',
    'section' => 'sec_buttons',
    'type' => 'text'
  )
);



// 6 Typeography Section **********************************************************************
$wp_customize->add_section(
  'sec_typeography',
  array(
    'title' => 'Typeography',
    'description' => 'Customize the typeography settings for your site',
    'priority' => 30
  )
);

//heading font
$wp_customize->add_setting(
  'set_heading_font',
  array(
    'type' => 'theme_mod',
  )
);

$wp_customize->add_control(
  'set_heading_font',
  array(
    'label' => 'Heading Font',
    'description' => 'Set your site\'s heading font',
    'section' => 'sec_typeography',
    'type' => 'select',
    'choices' => array(
      "'serif'" => 'Serif',
      "sans-serif" => 'Sans Serif'
    )
  )
);

// paragraph font
$wp_customize->add_setting(
  'set_paragraph_font',
  array(
    'type' => 'theme_mod',
  )
);

$wp_customize->add_control(
  'set_paragraph_font',
  array(
    'label' => 'Paragraph Font',
    'description' => 'Set your site\'s paragraph font',
    'section' => 'sec_typeography',
    'type' => 'select',
    'choices' => array(
      "'serif'" => 'Serif',
      "sans-serif" => 'Sans Serif'
    )
  )
);



}

add_action( 'customize_register', 'cloud_peak_customizer' );
