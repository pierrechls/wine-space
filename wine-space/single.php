<?php
/**
 * The template for displaying all single posts.
 *
 * @package winegrower
 */

get_header(); ?>

<style>
	#primary{
		background: #fff;
	}
	#primary .article_content {
	    padding: 1em;
	    max-width: 986px;
	    margin: auto;
	    width: 100%;
	    text-align: justify;
	}
	#primary .article_content h1{
		color:#a18e38 !important;
		text-align: center;
		line-height: 1;
	}
	#primary .article_content h2, #primary .article_content h3, #primary .article_content h4, #primary .article_content h5, #primary .article_content h6{
		color:#38393a !important;
	}
	#primary .article_content a{
		color:#38393a !important;
	}
	#primary .article_content img {
		display: block;
		height: auto;
		width: auto;
		max-width: 100%;
	    margin: auto;
	}
	#primary .article_content img.size-medium{
		width: 50%;
	}
	#primary .article_content img.size-large{
		width: 100%;
	}
</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="article_content">

				<?php while ( have_posts() ) : the_post(); ?>
					
					<h1> <?php the_title(); ?> </h1>
					<?php the_content(); ?>
				
				<?php endwhile; // end of the loop. ?>
				
			</div>
		<div style="clear:both"></div>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>