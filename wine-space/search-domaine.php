<?php
/**
 * The template for displaying search domaines results.
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

	.bp-header__main {
		background: transparent;
		position: fixed;
	}
	
	.bp-header__main.black-theme .bp-nav a.bp-nav__item, .bp-header__main.black-theme .bp-nav a.cart-contents, .black-theme.action--open {
		color: #FFFFFF;
	}

	#primary{
		background-color: #fff;
		/* height: 100vh; */
		background-image: url('<?php bloginfo('template_directory'); ?>/images/products-background.png');
		background-size: cover;
		background-position: center center;
		background-attachment: fixed;
		padding: 8rem 1rem 2.5rem 1rem;
		min-height: 100vh;
	}
	
	h1.actus-title {
		color: #FFF;
		margin: 0.5rem auto 4rem 2rem;
		font-size: 2.5rem;
	}
	
	h1.search-result-title {
		color: #FFFFFF;
	    position: absolute;
	    right: 0;
	    top: 8rem;
	    font-size: 1.6rem;
	    z-index: 99;
	    margin: 0 0 0 auto;
	    padding: 0.6rem 5rem 0;
	    text-align: right;
	}
	
	.masonry {
	    column-count: 3;
	    column-gap: 1rem;
	    padding: 2rem 2rem;
	}
	
	.item {
	    display: inline-block;
	    padding: 1rem;
	    margin: 0;
	    width: 100%;
	    min-height: 7rem;
	}
	
	.item a, .item a:hover {
	    color: #FFF;
	}
	
	.item h5.actu-title {
		color: #FFF;
		font-size: 1.4rem;
		margin-bottom: 0;
		text-transform: capitalize;
	}
	
	.item p.actu-date {
		font-size: 1.5rem;
		color: #FFF;
		margin: 0 auto;
		font-style: italic;
	}
	
	.item .actu-more {	
	    margin: 2rem auto 2.3rem auto;
	}
	
	.item .actu-more a{
		text-transform: uppercase;
		font-weight: 600;
		font-size: 1rem;
	}
	
	p.no-actu {
		position: absolute;
	    font-weight: 600;
	    padding: 1.5rem;
	    width: 20rem;
	    top: 30%;
	    left: 50%;
	    margin-left: -10rem;
	    text-align: center;
	    color: #FFFFFF;
	    text-transform: inherit;
	}
	
	@media only screen and (max-width: 60em){
	
		.masonry {
		    column-count: 0;
		}
		
		h1.actus-title {
			margin: 8rem auto 4rem 2rem;
    	}
	
	}
	
</style>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<h1 class="page-title search-result-title"><?php printf( __( 'Résultats de recherche : %s', 'winespace' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			
			<?php if ( have_posts() ) : ?>				
				
				<div class="masonry">
				
			<?php
			
				while ( have_posts() ) : the_post();
			
			?>
								
					<div class="item">
						<h5 class="actu-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h5>
					</div>
							
			<?php 
			
				endwhile;
			
			?>
				
				<div style="clear:both"></div>
				</div>
				
			<?php
				
				else :
			
			?>
					
					<p class="no-actu">Aucun domaine ne correspond à votre sélection.</p>
				
			<?php
			
				endif;
				
			?>
			
		</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
