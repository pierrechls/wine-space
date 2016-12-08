<?php
/**
 * @package winespace
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="" itemtype="http://schema.org/BlogPosting">

	<?php
	/**
 	 * @hooked winespace_post_header() - 10
 	 * @hooked winespace_post_meta() - 20
 	 * @hooked winespace_post_content() - 30
	 */
	do_action( 'winespace_loop_post' );
	?>

</article><!-- #post-## -->