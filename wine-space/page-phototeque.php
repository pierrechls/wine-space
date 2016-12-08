<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package winegrower
 */

get_header(); ?>

<style>
	#primary{
		background-color: #fff;
	}
	#primary .entry-header{
		display: none;
	}
</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'content', 'page' ); ?>

				<?php
				/**
				 * @hooked winegrower_display_comments - 10
				 */
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<script>

function mosaique_img(){
	$(".gallery-icon img").each(function () {
		var width = $(this).width();
		var height = $(this).height();
		if( width > height ){
			$(this).height('100%');
			$(this).width('auto'); 
		}
		else{
			$(this).width('100%'); 
			$(this).height('auto');
		}
	});
	
	setTimeout(mosaique_img, 2000);
}

$( document ).ready(function(){
	$(".gallery-icon a").each(function () {
	        $(this).attr("data-lightbox", "roadtrip");
	});
	mosaique_img();
});

$( window ).resize(function(){
	$(".gallery-icon").each(function () {
			var width = $(this).width();
	        $(this).css({'height':width+'px'});
	});
	mosaique_img();
});
</script>

<?php get_footer(); ?>
