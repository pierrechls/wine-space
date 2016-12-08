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
	}
	#primary .entry-header{
		display: none;
	}
	#primary h1 {
	    font-size: 2em;
	    margin: 0;
	    display: block;
	    padding: 1em;
	    color: #a18e38;
	    line-height: 1;
	}
		
	#primary h2 {
	    padding: 1em;
	    text-align: center;
	}
	
	#primary h3 {
	    font-size: 1em;
	    text-align: center;
	    padding: 1em;
	    color: #38393a;
	    font-weight: 800;
	    text-transform: uppercase;
	}
	
	#primary a {
		color: #38393a;
		font-style: normal;
	}
	
	#primary .entry-content{
		padding: 1em;
		text-align: center;
	}
	
	.content {
	    width: 100%;
	    max-width: 986px;
	    padding-top: 20px;
	    margin: auto;
	    position: relative;
	}
	
	.news {
	    width: 50%;
	    float: left;
	    display: inline-block;
	    height: auto;
	    font-family: Arial, Helvetica, sans-serif;
	    color: #666;
	}
	
	.news .contentnew {
	    margin: 20px;
	    background-color: #f7f7f7;
	    padding: 1em;
	    border-bottom: 6px solid #a18e38;
	    text-align: left;
	}
	
	.newstitle {
	    font-family: Arial, Helvetica, sans-serif;
	    font-size: 12px;
	}
	
	.newstitle .newsTitleName a {
	    font-size: 18px;
	    font-weight: 100;
	    display: block;
	    padding: 0.5em;
	    color: #a18e38 !important;
	    text-align: center;
	}
	
	.newstitle .newsTitleDate {
	    color: #38393a;
	    margin-bottom: 10px;
	    text-align: center;
	    display: block;
	}
	
	.contentnew .thumb {
	    display: block;
	    height: auto;
	    margin-bottom: 10px;
	    overflow: hidden;
	}
	
	.contentnew .more {
	    text-align: center;
	    display: block;
	    margin-top: 1em;
	}
	
	.contentnew .more a{
	    background-color: #a18e38;
	    text-transform: uppercase;
	    font-size: 13px;
	    color: #f7F7F7 !important;
	    padding: 0.5em;
	    margin-top: 8em;
	}
	
	.contentnew .thumb img {
	    max-width: 100%;
	    height: auto;
	    margin: auto;
	}
	
	.footer-container {
	    margin-top: 0;
	}
	
	@media only screen and (max-width: 750px){
		.news {
		    width: 100%;
		    display: block;
		    height: auto;
		}

	}
	
</style>

<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<!--DEBUT CONTENT-->
<div class="content"><!--DEBUT content-->
     <div class="allNews"><!--DEBUT allNews-->
                     	<?php
							$args = array(
								'category_name' 	 => 'blog',
								'order'    			 => 'DESC',
								'orderby' => 'date'
							);
							$the_query = new WP_Query( $args );
							if ( $the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
								<div class="news"><!--DEBUT news-->
								<div class="contentnew">
									<div class="newstitle"><!--DEBUT newstitle-->
									<span class="newsTitleName">
	                                    <a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a>
	                                </span>
	                                <span class="newsTitleDate">Publié le <?php the_time('d.m.Y'); ?></span>
	                                
									</div><!--FIN newstitle-->
									<div class="thumb">
										<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())) the_post_thumbnail('imgnew');?>
									</div>
									<div class="more">
										<a href="<?php echo get_permalink(); ?>">+</a>
									</div>
								</div>
								</div><!--FIN news-->
						<?php endwhile; ?>
							<div style="clear:both"></div>
						<?php	else : ?>
							<style>
								#primary{height: 1000px;}
							</style>
							<h2 style="text-align: center;margin-top: 100px;">Désolé, le site Cailhol Gautran n'a pas encore publié d'article.</h2>
						    <?php endif; ?>   
						             
                    </div><!--FIN allNews-->
                
                </div><!--FIN Cat Evenement Cadre-->
                
                
             </div><!--FIN Cat Evenement-->
             <!--FIN CATEGORIE EVENEMENTS--> 
      
        </div><!--FIN ContenuCategorie-->
    </div> <!--FIN ContentFond-->
</div><!--FIN Content-->
<!--FIN CONTENT-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
