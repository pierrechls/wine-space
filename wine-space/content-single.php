<?php
/**
 * @package winegrower
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> itemscope="" itemtype="http://schema.org/BlogPosting">

	<?php
	/**
	 * @hooked winegrower_post_header - 10
	 * @hooked winegrower_post_meta - 20
	 * @hooked winegrower_post_content - 30
	 */
	do_action( 'winegrower_single_post' );
	?>

</article><!-- #post-## -->
