<?php
/**
 *
 * @package winespace
 */

 include (TEMPLATEPATH . '/to-cart.php');
 include (TEMPLATEPATH . '/mail-wine-grower.php');
 
 get_header(); ?>
        
         <div class="main-container" style="background-color: rgba(247,247,247,0.8)">
            <article id="cuvees">
                <div class="bxslider">
                	<ul class="home-slider">
					
					<?php 
				
						query_posts(array( 'category_name'  => 'code-promo', 'posts_per_page' => -1));
						while (have_posts()) : the_post();
					
					?>
							<li><a href='<?php the_permalink() ?>'><?php the_title(); ?></a></li>
					<?php 
					
						endwhile;
					?>
					
					<?php wp_reset_query(); ?>
					
					</ul>
		        </div>
            </article>
        </div>
        
		</div> <!-- end content div -->
		</div> <!-- end container div -->
		
		<script type="text/javascript"> 
		        var j = jQuery.noConflict();
				
				var maxSlides, minSlides, width = j(window).width();
				
				if (width < 430) {
					minSlides = 1;
				    maxSlides = 1;
				} else {
					minSlides = 2;
				    maxSlides = 2;
				}
		
		        j(function ($) {
		        j(document).ready(function(){
		          j('.home-slider').bxSlider({
		            mode: 'horizontal',
		            captions: false
		          });
		        }); 
		        });
	   </script>

<?php get_footer(); ?>
