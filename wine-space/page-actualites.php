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
		height: 100vh;
		background-image: url('<?php bloginfo('template_directory'); ?>/images/products-background.png');
		background-size: cover;
		background-position: center center;
		background-attachment: fixed;
		padding: 2.5rem 1rem;
		min-height: 100vh;
	}
	
	h1.actus-title {
		color: #FFF;
		margin: 0.5rem auto 4rem 2rem;
		font-size: 2.5rem;
	}
	
	.masonry {
	    column-count: 2;
	    column-gap: 1rem;
	    padding: 2rem 2rem;
	}
	
	.item {
	    background-color: #FFF;
	    display: inline-block;
	    padding: 1rem 2rem;
	    margin: 0 0 4rem;
	    width: 100%;
	}
	
	.item a, .item a:hover {
	    color: #000;
	}
	
	.item h5.actu-title {
		color: #000;
		font-size: 2rem;
		margin-bottom: 2rem;
	}
	
	.item p.actu-date {
		font-size: 1.5rem;
		color: #000;
		margin: 0 auto;
		font-style: italic;
	}
	
	.item .actu-more {	
	    margin: 2rem auto 2.3rem auto;
	}
	
	.item .actu-more a{
		text-transform: uppercase;
		font-weight: 600;
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
		    column-count: 1;
		}
		
		h1.actus-title {
			margin: 8rem auto 4rem 2rem;
    	}
	
	}
	
</style>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<h1 class="actus-title"><?php the_title() ?></h1>
			
			<?php
				
				$args = array(
					'category_name' 	 => 'actualites',
					'order'    			 => 'DESC',
					'orderby' => 'date'
				);
				
				$the_query = new WP_Query( $args );
				
				if ( $the_query->have_posts() ) :
			
			?>
				
				<div class="masonry">
				
			<?php
			
				while ( $the_query->have_posts() ) : $the_query->the_post();
			
			?>
								
					<div class="item">
						<h5 class="actu-title"><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h5>
						<p class="actu-date"><span class="">Publié le <?php the_time('d.m.Y'); ?></span></p>
						<div class="actu-more">
							<a href="<?php echo get_permalink(); ?>">Lire <i class="fa fa-plus" aria-hidden="true"></i></a>
						</div>
					</div>
							
			<?php 
			
				endwhile;
			
			?>
				
				<div style="clear:both"></div>
				</div>
				
			<?php
				
				else :
			
			?>
					
					<p class="no-actu">Désolé, le site <?php echo get_bloginfo('name' ); ?> n'a pas encore publié d'actualités.</p>
				
			<?php
			
				endif;
				
			?>
			
		</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
