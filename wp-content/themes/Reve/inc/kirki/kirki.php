<?php

Kirki::add_config( 'my_config', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );


Kirki::add_panel( 'Theme_Setting', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Reve', 'kirki' ),
    'description' => esc_html__( '', 'kirki' ),
) );



Kirki::add_section( 'Theme_header_Setting', [
	'title'    => esc_html__( 'Header Setting', 'kirki' ),
    'priority' => 10,
	'panel'          => 'Theme_Setting',
    
] );

Kirki::add_field( 'my_config', [
	'type'        => 'background',
	'settings'    => 'background_setting',
	'label'       => esc_html__( 'Header Background Color', 'kirki' ),
	'description' => esc_html__( 'Please Choose Header Background Color', 'kirki' ),
	'section'     => 'Theme_header_Setting',
	'default'     => [
		'background-color'      => 'rgba(20,20,20,.8)',
		'background-image'      => '',
		'background-repeat'     => 'repeat',
		'background-position'   => 'center center',
		'background-size'       => 'cover',
		'background-attachment' => 'scroll',
	],
	'transport'   => 'auto',
	'output'      => [
		[
			'element' => '#header',
		],
	],
	] );


//Hero Background


	Kirki::add_field( 'my_config', [
		'type'        => 'background',
		'settings'    => 'hero_background_setting',
		'label'       => esc_html__( 'Hero Background Color', 'kirki' ),
		'description' => esc_html__( 'Please Choose Hero Section Background Color', 'kirki' ),
		'section'     => 'Theme_header_Setting',
		'default'     => [
			'background-color'      => 'rgba(20,20,20,.8)',
			'background-image'      => '',
			'background-repeat'     => 'repeat',
			'background-position'   => 'center center',
			'background-size'       => 'cover',
			'background-attachment' => 'scroll',
		],
		'transport'   => 'auto',
		'output'      => [
			[
				'element' => '#hero',
			],
		],

] );



?>