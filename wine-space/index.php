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
				
						query_posts(array( 'category_name'  => 'code-promo', 'posts_per_page' => -1));
						while (have_posts()) : the_post();
					
					?>
							<li style="background-image:url('<?php the_post_thumbnail_url( 'full' ); ?>');"></li>
					<?php 
					
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
						adaptiveHeight: true
					});
				}); 
		    });
	   </script>

<?php get_footer(); ?>