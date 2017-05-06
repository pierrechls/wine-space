<?php
/**
 *
 * @package winespace
 */
 include (TEMPLATEPATH . '/to-cart.php');
 include (TEMPLATEPATH . '/mail-wine-grower.php');
 
 get_header(); ?>
        
         <div class="home-container" style="background-color: rgba(247,247,247,0.8); height:100vh;">
            <div class="bxslider" style="height:100vh;">
                	<ul class="home-slider" style="height:100vh;">
   				
					<?php 
					
						$args = array( 'post_type' => 'slider', 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'ASC' );
						$loop = new WP_Query( $args );
						while ( $loop->have_posts() ) : $loop->the_post();
						
							if( has_post_thumbnail() ) {
							
								$urlPageOrCat = get_field('slider-link-page-or-cat', get_the_ID());	
								$urlToGo = '';
								
								if( $urlPageOrCat === 'category') {
									$categorySelected = get_field('slider-url-to-go-cat', get_the_ID());
									if($categorySelected) {
										$urlToGo = get_category_link($categorySelected->term_id);
									}
									
								} else if ( $urlPageOrCat === 'page' ) {
									
									$urlRelationship = get_field('slider-url-to-go', get_the_ID());
									
									if($urlRelationship) {
										foreach( $urlRelationship as $url):
											$urlToGo = get_the_permalink($url->ID);
										endforeach;
									}
								}
							?>
							
							<?php if($urlToGo != '') { ?>
								<a href="<?php echo $urlToGo; ?>">
							<?php }?>
								<li style="background-image:url('<?php the_post_thumbnail_url( 'full' ); ?>');"><div class="slider-text"><div class="content-text"><?php the_content(); ?></div></div></li>
							<?php if($urlToGo != '') { ?>
								</a>
							<?php }?>
					<?php 
							
							}
					
						endwhile;
					?>
					
					<?php wp_reset_query(); ?>
					
					</ul>
		    </div>
        </div>
        
		</div> <!-- end content div -->
		</div> <!-- end container div -->
		
		<script type="text/javascript"> 
			var j = jQuery.noConflict();
		
		    j(function ($) {
				j(document).ready(function(){
		        	j('.home-slider').bxSlider({
		            	mode: 'horizontal',
						captions: false,
						pager: false,
						maxSlides: 1,
						minSlides: 1,
						adaptiveHeight: true,
						auto: true,
						onSlideAfter: function (currentSlideNumber, totalSlideQty, currentSlideHtmlObject) {
				            $('.active-slide').removeClass('active-slide');
				            $('.home-slider li').eq(currentSlideHtmlObject + 1).addClass('active-slide');
				        },
				        onSliderLoad: function () {
				            $('.home-slider li').eq(1).addClass('active-slide');
				        }
					});
				});
		    });
	   </script>

<?php get_footer(); ?>