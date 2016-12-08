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
		padding: 1em;
		text-align: center;
	}
	#primary header.entry-header h1{
		margin: 0;
		padding: 1em;
		color: #a18e38;
	}
	#primary h2{
		text-align: center;
	}
	table tr td, table tr th {
	    text-align: center;
	    width: 25%;
	}
	#primary ul{
		text-align: left;
		padding: 0 0 0 3em;
	}
	#primary h4{
		text-align: left;
		padding: 0 0 0 3em;
	}
	
	table tr:nth-of-type(1){background-color: #a18e38; color: #fff;}
	table tr td:nth-of-type(1) {background-color: #a18e38;color: #fff;}
	
	@media only screen and (max-width: 480px){
		table tr td, table tr th {
		    width: auto;
		}
		
		table tr:nth-of-type(1){display: none;}
		
		table tr td:nth-of-type(1):before { content: "";}
		table tr td:nth-of-type(2):before { content: "6 bouteilles";}
		table tr td:nth-of-type(3):before { content: "12 bouteilles";}
		table tr td:nth-of-type(4):before { content: "15 bouteilles";}
		table tr td:nth-of-type(5):before { content: "";}
		
		table tr td:nth-of-type(1) {padding-left: 0;background-color: #a18e38;color: #fff;}
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
