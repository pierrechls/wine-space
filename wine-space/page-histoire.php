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
		background-color: #000000;
	}
	#primary .entry-header{
		display: none;
	}
	
	#primary img.photo_back{
		width: 100%;
		height: auto;
	}
	
	#primary #background_section_image{
		width: 49%;
	    height: auto;
	    display: inline-block;
	    color: #D4D4D4;
	}
	
	#primary #background_section_image img{
		width: 100%;
		height: auto;
	}
	
	#primary #text{
		width: 50%;
		padding: 1em;
	    height: auto;
	    vertical-align: top;
	    display: inline-block;
	    color: #D4D4D4;
	    
	}
	
	#primary #text .pag_1, #primary #text .pag_2{
		width: 49%;
	    display: inline-block;
	    vertical-align: top;
		text-align: justify;
	}
	
	#primary #text .pag_1{
		padding-right: 1.3em;	
	}
	
	#primary #text h1{
		font-size: 3em;
		color: #D4D4D4;
		line-height: 1;
	}
	
	#primary #text h2{
		font-size: 1em;
		color: #D4D4D4;
	}
	
	@media only screen and (max-width: 1000px){
		#primary #background_section_image{
			width: 100% !important;
		    height: auto;
		    margin: auto;
		    display: block !important;
		    color: #D4D4D4;
		}
		
		#primary #text{
			width: 100% !important;
			padding: 1em;
		    vertical-align: top;
		    display: block !important;
		    color: #D4D4D4;
		    
		}

	}
	@media only screen and (max-width: 600px){
		#primary #text .pag_1, #primary #text .pag_2{
			width: 100%;
		    display: block;
			text-align: justify;
		}
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

<?php get_footer(); ?>
