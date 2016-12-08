<?php
/**
 * winespace hooks
 *
 * @package winespace
 */

/**
 * General
 * @see  winespace_setup()
 * @see  winespace_widgets_init()
 * @see  winespace_scripts()
 * @see  winespace_header_widget_region()
 * @see  winespace_get_sidebar()
 */
add_action( 'after_setup_theme',			'winespace_setup' );
add_action( 'widgets_init',					'winespace_widgets_init' );
add_action( 'wp_enqueue_scripts',			'winespace_scripts',				10 );
add_action( 'winespace_before_content',	'winespace_header_widget_region',	10 );
add_action( 'winespace_sidebar',			'winespace_get_sidebar',			10 );

/**
 * Header
 * @see  winespace_skip_links()
 * @see  winespace_secondary_navigation()
 * @see  winespace_site_branding()
 * @see  winespace_primary_navigation()
 */
add_action( 'winespace_header', 'winespace_skip_links', 				0 );
add_action( 'winespace_header', 'winespace_site_branding',			20 );
add_action( 'winespace_header', 'winespace_secondary_navigation',		30 );
add_action( 'winespace_header', 'winespace_primary_navigation',		50 );

/**
 * Footer
 * @see  winespace_footer_widgets()
 * @see  winespace_credit()
 */
add_action( 'winespace_footer', 'winespace_footer_widgets',	10 );
add_action( 'winespace_footer', 'winespace_credit',			20 );

/**
 * Homepage
 * @see  winespace_homepage_content()
 * @see  winespace_product_categories()
 * @see  winespace_recent_products()
 * @see  winespace_featured_products()
 * @see  winespace_popular_products()
 * @see  winespace_on_sale_products()
 */
add_action( 'homepage', 'winespace_homepage_content',		10 );
add_action( 'homepage', 'winespace_product_categories',	20 );
add_action( 'homepage', 'winespace_recent_products',		30 );
add_action( 'homepage', 'winespace_featured_products',		40 );
add_action( 'homepage', 'winespace_popular_products',		50 );
add_action( 'homepage', 'winespace_on_sale_products',		60 );

/**
 * Posts
 * @see  winespace_post_header()
 * @see  winespace_post_meta()
 * @see  winespace_post_content()
 * @see  winespace_paging_nav()
 * @see  winespace_single_post_header()
 * @see  winespace_post_nav()
 * @see  winespace_display_comments()
 */
add_action( 'winespace_loop_post',			'winespace_post_header',		10 );
add_action( 'winespace_loop_post',			'winespace_post_meta',			20 );
add_action( 'winespace_loop_post',			'winespace_post_content',		30 );
add_action( 'winespace_loop_after',		'winespace_paging_nav',		10 );
add_action( 'winespace_single_post',		'winespace_post_header',		10 );
add_action( 'winespace_single_post',		'winespace_post_meta',			20 );
add_action( 'winespace_single_post',		'winespace_post_content',		30 );
add_action( 'winespace_single_post_after',	'winespace_post_nav',			10 );
add_action( 'winespace_single_post_after',	'winespace_display_comments',	10 );

/**
 * Pages
 * @see  winespace_page_header()
 * @see  winespace_page_content()
 * @see  winespace_display_comments()
 */
add_action( 'winespace_page', 			'winespace_page_header',		10 );
add_action( 'winespace_page', 			'winespace_page_content',		20 );
add_action( 'winespace_page_after', 	'winespace_display_comments',	10 );

/**
 * Extras
 * @see  winespace_setup_author()
 * @see  winespace_body_classes()
 * @see  winespace_page_menu_args()
 */
add_filter( 'body_class',			'winespace_body_classes' );
add_filter( 'wp_page_menu_args',	'winespace_page_menu_args' );