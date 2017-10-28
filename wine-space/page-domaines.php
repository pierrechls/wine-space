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

	.bp-header__main {
		background: transparent;
		position: absolute;
	}
	
	.bp-header__main.black-theme .bp-nav a.bp-nav__item, .bp-header__main.black-theme .bp-nav a.cart-contents, .black-theme.action--open {
		color: #FFFFFF;
	}

	#primary{
		background-color: #fff;
		/* height: 100vh; */
		
		background: #737373;
		/* background-image: url('<?php bloginfo('template_directory'); ?>/images/domaines-background.jpg'); */
		/* background-size: cover; */
		/* background-position: center center; */
		/* background-attachment: fixed; */
		padding: 8rem 1rem 2.5rem 1rem;
		min-height: 100vh;
	}
	
	h1.actus-title {
		color: #FFF;
		margin: 0.5rem auto 4rem 2rem;
		font-size: 2.5rem;
	}
	
	h3.region-title {
		padding: 0 5rem 0 3rem;
	}
		
	.masonry {
	    column-count: 4;
	    column-gap: 1rem;
	    padding: 2rem 2rem;
	}
	
	.item {
	    display: inline-block;
	    padding: 1rem;
	    margin: 0;
	    width: 100%;
	    min-height: 2rem;
	}
	
	.item a, .item a:hover {
	    color: #FFF;
	}
	
	.item h5.actu-title {
		color: #FFF;
		font-size: 1.3rem;
		margin: 0;
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
		    column-count: 1;
		}
		
		h1.actus-title {
			margin: 8rem auto 4rem 2rem;
    	}
	
	}
	
</style>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<div style="color:#FFF !important;">
			
			<?php
				
				$argsDomaines = array(
					'posts_per_page' => -1,
					'post_type'      => 'domaine',
					'orderby'=> 'title',
					'order' => 'ASC'
				);
				
				$allDomaines = new WP_Query( $argsDomaines );
				
				if ( $allDomaines->have_posts() ) :
			
			?>
				
				<?php
				
					$allRegions = [];
					$firstDomaine = $allDomaines->posts[0];
					$domaineCat = get_field_object( "region-du-domaine", $firstDomaine->ID );
					$allRegions = $domaineCat['choices'];
					
					?>
					
					<?php 
					
						foreach ($allRegions as $region) { ?>
						
							<h3 class="region-title"><?php echo $region; ?></h3>
						    
						    <div class="masonry">
						    
						    <?php
						    
						    while ( $allDomaines->have_posts() ) : $allDomaines->the_post();
						    
						    	$hide = get_field( "hide-into-domaines-page", get_the_ID() );
						    	
						    	if(!$hide){
						   
						    		$domainCat = get_field_object( "region-du-domaine", get_the_ID() );	
						    		
						    		$domaineCatValue = $domainCat['value'];
									$domaineCatLabel = $domainCat['choices'][ $domaineCatValue ];
									
									if($domaineCatLabel === $region) {
									
									?>
										<div class="item">
											<h5 class="actu-title">
												<a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
											</h5>
										</div>
									<?php
									}
						    	}
						    
							endwhile;
							
							?>
							
						    </div>
						    
						    <?php
						    
						}
					
					?>
				
			<?php
				
				else :
			
			?>
					
					<p class="no-actu">Désolé, le site <?php echo get_bloginfo('name' ); ?> n'a pas encore de domaines.</p>
				
			<?php
			
				endif;
				
			?>
			
			</div>
						
		</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
