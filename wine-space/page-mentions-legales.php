<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package winespace
 */

get_header(); ?>

<style>
	#primary{
		background-color: #fff;
	}
	#primary .entry-header{
		display: none;
	}
	#primary h1 {
	    font-size: 2em;
	    margin: 0;
	    display: block;
	    padding: 1em;
	    color: #a18e38;
	    line-height: 1;
	}
		
	#primary h2 {
	    padding: 1em;
	    text-align: center;
	}
	
	#primary a {
		color: #38393a;
		font-style: normal;
	}
	
	#primary .entry-content{
		padding: 1em;
		text-align: center;
	}
	
</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php get_template_part( 'content', 'page' ); ?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
