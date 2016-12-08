<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package winespace
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	/**
	 * @hooked winespace_page_header - 10
	 * @hooked winespace_page_content - 20
	 */
	do_action( 'winespace_page' );
	?>
</article><!-- #post-## -->
