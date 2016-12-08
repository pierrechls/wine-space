<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package winegrower
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	/**
	 * @hooked winegrower_page_header - 10
	 * @hooked winegrower_page_content - 20
	 */
	do_action( 'winegrower_page' );
	?>
</article><!-- #post-## -->
