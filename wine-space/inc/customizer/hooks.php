<?php
/**
 * winegrower customizer hooks
 *
 * @package winegrower
 */

add_action( 'customize_preview_init', 	'winegrower_customize_preview_js' );
add_action( 'customize_register', 		'winegrower_customize_register' );
add_filter( 'body_class', 				'winegrower_layout_class' );
add_action( 'wp_enqueue_scripts', 		'winegrower_add_customizer_css', 130 );
add_action( 'after_setup_theme', 		'winegrower_custom_header_setup' );