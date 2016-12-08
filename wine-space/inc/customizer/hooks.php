<?php
/**
 * winespace customizer hooks
 *
 * @package winespace
 */

add_action( 'customize_preview_init', 	'winespace_customize_preview_js' );
add_action( 'customize_register', 		'winespace_customize_register' );
add_filter( 'body_class', 				'winespace_layout_class' );
add_action( 'wp_enqueue_scripts', 		'winespace_add_customizer_css', 130 );
add_action( 'after_setup_theme', 		'winespace_custom_header_setup' );