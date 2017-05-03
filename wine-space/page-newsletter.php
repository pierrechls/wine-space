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
		background: #fff;
		min-height: 100vh;
	}

	#primary p {
		font-size: 1.6rem;
	}

	#primary .article_content {
	    margin: auto;
	    width: 100%;
	    text-align: justify;
	}

	#primary .article_content h1.title{
		color: #FFF !important;
		background: #b7a56d;
		padding: 10rem 2rem 5rem 3rem;
		margin: 0 auto;
		text-align: center;
		line-height: 1;
		font-size: 3rem;
	}

	#primary .article_content .actu-content{
		padding: 2rem;
	    margin: auto;
	    width: 100%;
	    text-align: justify;
	}

	#primary .article_content a{
		color:#38393a !important;
	}

	#primary .article_content a.checkout-button{
		color: #FFFFFF !important;
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
	
	.tnp-subscription input.tnp-submit {
		text-align: center;
		text-transform: uppercase;
		display: block;
		margin: 1rem auto;
	}
	
	.tnp-field.tnp-field-email label {
		display: block;
		margin: 1rem auto;
		text-align: center;
	}
	
	.tnp-field.tnp-field-email input.tnp-email {
		text-align: center;
		margin: 1rem auto;
		display: block;
	}

</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<div class="article_content">

				<?php while ( have_posts() ) : the_post(); ?>
				
					<?php if( !is_realy_woocommerce_page() ) { ?>
				
						<h1 class="title"><?php the_title() ?></h1>
						<div class="actu-content"><?php the_content() ?></div>
				
					<?php } else { ?>

						<?php
						//do_action( 'winespace_page_before' );
						?>

						<?php //get_template_part( 'content', 'page' ); ?>

						<?php
						/**
						 * @hooked winespace_display_comments - 10
						 */
						//do_action( 'winespace_page_after' );
						?>

						<?php the_content() ?>

					<? } ?>

				<?php endwhile; // end of the loop. ?>

			</div>

		</main><!-- #main -->
	</div><!-- #primary -->
	
	
	<script>
		document.querySelector('.tnp-field.tnp-field-email label').innerHTML = 'Adresse e-mail :';
		
		document.querySelector('.tnp-subscription input.tnp-submit').value = 'Souscrire';
  	</script>
	
<?php get_footer(); ?>
