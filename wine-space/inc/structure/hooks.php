<?php
/**
 * winegrower hooks
 *
 * @package winegrower
 */

/**
 * General
 * @see  winegrower_setup()
 * @see  winegrower_widgets_init()
 * @see  winegrower_scripts()
 * @see  winegrower_header_widget_region()
 * @see  winegrower_get_sidebar()
 */
add_action( 'after_setup_theme',			'winegrower_setup' );
add_action( 'widgets_init',					'winegrower_widgets_init' );
add_action( 'wp_enqueue_scripts',			'winegrower_scripts',				10 );
add_action( 'winegrower_before_content',	'winegrower_header_widget_region',	10 );
add_action( 'winegrower_sidebar',			'winegrower_get_sidebar',			10 );

/**
 * Header
 * @see  winegrower_skip_links()
 * @see  winegrower_secondary_navigation()
 * @see  winegrower_site_branding()
 * @see  winegrower_primary_navigation()
 */
add_action( 'winegrower_header', 'winegrower_skip_links', 				0 );
add_action( 'winegrower_header', 'winegrower_site_branding',			20 );
add_action( 'winegrower_header', 'winegrower_secondary_navigation',		30 );
add_action( 'winegrower_header', 'winegrower_primary_navigation',		50 );

/**
 * Footer
 * @see  winegrower_footer_widgets()
 * @see  winegrower_credit()
 */
add_action( 'winegrower_footer', 'winegrower_footer_widgets',	10 );
add_action( 'winegrower_footer', 'winegrower_credit',			20 );

/**
 * Homepage
 * @see  winegrower_homepage_content()
 * @see  winegrower_product_categories()
 * @see  winegrower_recent_products()
 * @see  winegrower_featured_products()
 * @see  winegrower_popular_products()
 * @see  winegrower_on_sale_products()
 */
add_action( 'homepage', 'winegrower_homepage_content',		10 );
add_action( 'homepage', 'winegrower_product_categories',	20 );
add_action( 'homepage', 'winegrower_recent_products',		30 );
add_action( 'homepage', 'winegrower_featured_products',		40 );
add_action( 'homepage', 'winegrower_popular_products',		50 );
add_action( 'homepage', 'winegrower_on_sale_products',		60 );

/**
 * Posts
 * @see  winegrower_post_header()
 * @see  winegrower_post_meta()
 * @see  winegrower_post_content()
 * @see  winegrower_paging_nav()
 * @see  winegrower_single_post_header()
 * @see  winegrower_post_nav()
 * @see  winegrower_display_comments()
 */
add_action( 'winegrower_loop_post',			'winegrower_post_header',		10 );
add_action( 'winegrower_loop_post',			'winegrower_post_meta',			20 );
add_action( 'winegrower_loop_post',			'winegrower_post_content',		30 );
add_action( 'winegrower_loop_after',		'winegrower_paging_nav',		10 );
add_action( 'winegrower_single_post',		'winegrower_post_header',		10 );
add_action( 'winegrower_single_post',		'winegrower_post_meta',			20 );
add_action( 'winegrower_single_post',		'winegrower_post_content',		30 );
add_action( 'winegrower_single_post_after',	'winegrower_post_nav',			10 );
add_action( 'winegrower_single_post_after',	'winegrower_display_comments',	10 );

/**
 * Pages
 * @see  winegrower_page_header()
 * @see  winegrower_page_content()
 * @see  winegrower_display_comments()
 */
add_action( 'winegrower_page', 			'winegrower_page_header',		10 );
add_action( 'winegrower_page', 			'winegrower_page_content',		20 );
add_action( 'winegrower_page_after', 	'winegrower_display_comments',	10 );

/**
 * Extras
 * @see  winegrower_setup_author()
 * @see  winegrower_body_classes()
 * @see  winegrower_page_menu_args()
 */
add_filter( 'body_class',			'winegrower_body_classes' );
add_filter( 'wp_page_menu_args',	'winegrower_page_menu_args' );