<?php
/**
 * The template for displaying all single posts.
 *
 * @package winespace
 */

get_header(); ?>

<style>

.bp-header__main {
	background: transparent;
	position: absolute;
}

.domaine-separator {
	margin-top: 3rem;
	width: 100%;
	height: 1rem;
}

.content .domaine-products {
	float: right;
    width: 55%;
    height: 100vh;
    text-align: center;
    background: #000;
    background-image: url('<?php bloginfo('template_directory'); ?>/images/products-background.png');
    background-size: cover;
    background-attachment: fixed;
    background-position: center center;
}

.content .domaine-products .mCSB_scrollTools {
	top: 1rem;
	bottom: 1rem;
}

.domaine-products .domaine-products-all {
	height: 100vh;
    min-height: 100vh;
}

.domaine-products .domaine-products-all .domaine-products-list {
	margin: 0;
    padding: 0;
    height: 100vh;
    text-align: center;
}

.domaine-products .domaine-products-all .domaine-products-list .domaine-product {
	display: inline-block;
	text-align: center;
	width: 10rem;
    vertical-align: top;
    margin: 5rem 4rem;
}

.domaine-products .domaine-products-all .domaine-products-list .domaine-product img {
	width: 8rem;
}

.domaine-products .domaine-products-all .domaine-products-list .domaine-product .info h3{
	text-transform: uppercase;
	text-align: center;
	margin: 1rem auto 0 auto;
	font-size: 1.3rem;
}

.domaine-products .domaine-products-all .domaine-products-list .domaine-product .info p{
	font-size: 1.3rem;
	margin: 0 0 1.3rem 0;
}

.domaine-products .domaine-products-all .domaine-products-list .domaine-product .info .btn-add-to-cart {
    font-size: 1rem;
    text-transform: uppercase;
    border: 0.1rem solid #FFFFFF;
    padding: 0.5rem 1rem;
}

.content .description {
	float: left;
    background: #FFF;
    width: 45%;
    display: inline-block;
    color: #000;
    overflow: auto;
    padding: 0 2rem 0 4rem;
    background-image: url('<?php bloginfo('template_directory'); ?>/images/product-info-bg.jpg');
    background-size: auto;
    background-repeat: repeat;
    height: 100vh;
}

.content .description .mCSB_scrollTools {
	top: 1rem;
	bottom: 1rem;
}

.content .description .description-content {
	overflow-y: auto;
    height: 100vh;
    padding: 4rem 0;
    width: calc(100% + 20rem);
}

.content .description .description-content .description-content-scroll {
	width: calc(100% - 20rem);
}

.content .description h1 {
	text-align: left;
	padding: 0;
	font-size: 3.5rem;
}
.content .description h3 {
	text-align: left;
    padding: 0;
    color: #000;
    margin: 1rem auto;
    font-size: 2rem;
}

.content .description .back-to-category {
	text-align: left;
	text-transform: uppercase;
    font-size: 1.2rem;
    margin: 4rem auto 5rem auto;
}

.content .description .back-to-category a i {
	margin-right: 1rem;
}


.content .description .back-to-category a {
	color: #000;
}

.content .description .form-add-to-cart {
	text-align: left;
	margin: 4em auto;
}

.content .description .form-add-to-cart form .quantity {
	vertical-align: top;
	display: inline-block;
	margin-right: 1.5rem;
}

.content .description .form-add-to-cart form .quantity input.qty{
	width: 7rem;
    background: transparent;
    color: #000;
    font-size: 1.2rem;
    font-weight: 600;
    margin-right: 2rem;
    vertical-align: middle;
    text-align: center;
    border: 0.3rem solid #000;
    margin: 1rem auto;
}


.content .description .form-add-to-cart form button.button {
	background: #000;
    outline: 0;
    text-transform: uppercase;
    border: 0;
    font-size: 1.3rem;
    color: #FFF;
    padding: 1.1rem 1.3rem;
    vertical-align: top;
    border-radius: 0.8rem;
    margin: 1rem auto;
}

.content .description .informations {
	padding: 0 0 0 0;
}

.content .description .informations .domaine {
	text-align: justify;
	font-size: 1.5rem;
    line-height: 2.3rem;
}

.content .description .informations .fiche-technique {
	text-align: left;
}

.content .description .informations .fiche-technique .element {
	margin: 4rem auto;
}

.content .description .informations .fiche-technique .element h4 {
	margin: 0 auto 0.9rem auto;
    font-size: 1.9rem;
    line-height: 2.3rem;
}

.content .description .informations .fiche-technique .element p {
	margin: 0 auto;
	font-size: 1.5rem;
    line-height: 2.3rem;
}


.content .description .informations .go-to-fiche-domaine {
	text-align: left;
	margin: 7rem auto;
}

.content .description .informations .go-to-fiche-domaine a {
	background: #000;
    outline: 0;
    text-transform: uppercase;
    border: 0;
    font-size: 1.3rem;
    color: #FFF;
    padding: 1.1rem 1.3rem;
    vertical-align: top;
    border-radius: 0.8rem;
    margin: 1rem auto;
}

.content .description .informations .go-to-fiche-domaine a i { 
	margin-left: 1rem;
}

@media screen and (max-width: 60em){

	.content .domaine-products {
		float: none;
		width: 100%;
		height: auto;
	}
	
	.domaine-products .domaine-products-all {
		height: auto;
	}
	
	.domaine-products .domaine-products-all .domaine-products-list {
		height: auto;
	}
	
	.content .illustration .mCustomScrollBox {
		height: auto;
	}
	
	.content .description {
		padding: 2rem 4rem;
		overflow: inherit;
		height: auto;
		width: 100%;
		display: block;
		float: none;
	}
	
	.content .description .mCustomScrollBox {
		height: auto;
	}
	
	.content .description .description-content {
		overflow: inherit;
		height: auto;
		width: 100%;
	}
	
	.content .description .description-content .description-content-scroll {
		width: 100%;
	}

}

</style>

	<?php while ( have_posts() ) : the_post(); ?>
			<div class="description">
			
				<p class="back-to-category"><a href="<?php echo get_site_url(); ?>" class="product-category-title"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</a></p>
			
				<h1><?php the_title(); ?></h1>
				
				<div class="informations">
					<div class="domaine"><?php the_content() ?></div>
				</div>
			</div>
			
			<div class="domaine-products">
				<?php 
					$child_posts = types_child_posts('product');
				?>
				
				<?php 
					if( count($child_posts > 0) ) {
				?>
				
					<div class="domaine-products-all">
					<ul class="domaine-products-list">
						<div class="domaine-separator"></div>
				
				<?php 
					foreach($child_posts as $child_post) :
				?>
						<li class="domaine-product">
					    	<a href="<?php echo get_permalink( $child_post->ID ) ?>">
					        	<img src="<?php echo get_the_post_thumbnail_url($child_post->ID, 'full' ); ?>" /><br/>
					        	<div class="info">
					        		<h3><?php echo $child_post->post_title; ?></h3>
									<p><a class="btn-add-to-cart" href="?add-to-cart=<?php echo $child_post->ID ?>">Panier</a></p>
					        	</div>
					    	</a>
					    </li>
				<?php 
					endforeach; 
				?>
					
					</ul>
					</div>
					
				<?php
					}
				?>
			</div>

		<?php endwhile; // end of the loop. ?>
		
		<script src="<?php bloginfo('template_directory'); ?>/scrollbar/js/mCustomScrollbar.min.js"></script>
		
		<script>
			(function($){
				$(window).on("load",function(){
					
					$(".content .description").mCustomScrollbar({
						theme:"dark-thin"
					});
					
					$(".content .domaine-products .domaine-products-all .domaine-products-list").mCustomScrollbar({
						theme:"light-thin"
					});
					
				});
			})(jQuery);
		</script>
	
<?php get_footer(); ?>
