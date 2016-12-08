<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package winegrower
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function winegrower_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'winegrower_jetpack_setup' );
