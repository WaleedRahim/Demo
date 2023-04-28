<?php

// This is Customizer Settings

function reve_customize_register( $wp_customize ) {

    $wp_customize->add_panel( 'theme_setting', array(
        'title' => __( 'Theme Options '),
        'priority' => 20, 
    ) );
    $wp_customize->add_section( 'header_options', array(
        'title' => __( 'Header Settings' ),
        'panel' => 'theme_setting', 
        'capability' => 'edit_theme_options',
       
    ) );


     $wp_customize->add_setting( 'reve_header_setting', array(
        'type' => 'theme_mod',
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', 
        'sanitize_callback' => 'esc_attr',
        
      ) );


      $wp_customize->add_control( 'reve_header_setting', array(
        'label' => __( 'Header Background Color' ),
        'type' => 'textarea',
        'section' => 'header_options',
      ) );

}

add_action('customize_register','reve_customize_register');

?>