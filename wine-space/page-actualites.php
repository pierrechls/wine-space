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
		padding-top: 10rem;
	}
	
	h1.actus-title {
		color: #000;
		margin: 2rem auto 4rem 4rem;
		font-size: 2.5rem;
	}
	
	.subscribe-to-newsletter {
		margin: 2rem auto 4rem 4rem;
	}
	
	.subscribe-to-newsletter i {
		margin-right: 1rem;
	}
	
	.subscribe-to-newsletter a, .subscribe-to-newsletter a:hover {
		color: #000;
	}
	
	.masonry {
	    column-count: 1;
	    column-gap: 1rem;
	    padding: 2rem 3rem;
	}
	
	.item {
	    background-color: rgba(0,0,0,0.1);
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
		
			<?php while ( have_posts() ) : the_post(); ?>
		
			<h1 class="actus-title"><?php the_title() ?></h1>
			
			<?php if( get_field('subscribe_text') && get_field('newsletter_page_link') ): ?>
				<div class="subscribe-to-newsletter"><p><i class="fa fa-newspaper-o" aria-hidden="true"></i><a href="<?php the_field('newsletter_page_link'); ?>"><?php the_field('subscribe_text'); ?></a></p></div>
			<?php endif; ?>
			
			<?php
			
				$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
				
				$args = array(
					'category_name' 	 => 'actualites',
					'order'    			 => 'DESC',
					'orderby'			 => 'date',
					'posts_per_page' 	 => 20,
					'paged' 			 => $paged
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
				
				<?php if (function_exists("pagination") && $the_query->max_num_pages > 1) { ?>
					     <?php pagination($the_query->max_num_pages); ?>
				<?php } ?>
				
				</div>
				
			<?php
				
				else :
			
			?>
					
					<p class="no-actu">Désolé, le site <?php echo get_bloginfo('name' ); ?> n'a pas encore publié d'actualités.</p>
				
			<?php
			
				endif;
				
			?>
			
			<?php 
			
				endwhile;
			
			?>
			
		</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
