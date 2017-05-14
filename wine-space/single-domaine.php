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
	z-index: 9;
	width: 50%;
}

.domaine-separator {
	margin-top: 3rem;
	width: 100%;
	height: 1rem;
}

.content .go-to-fiche-domaine {
	text-align: left;
	margin: 1rem auto 4rem auto;
}

.content .go-to-fiche-domaine a {
	/*background: #000; */
    outline: 0;
    text-transform: uppercase;
    border: 0;
    font-size: 1.1rem;
    color: #000;
    padding: 1.1rem 0rem;
    vertical-align: middle;
    border-radius: 0.8rem;
    font-style: italic;
    /* border-top: 0.2rem solid #000; */
    margin: 1rem auto;
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

.content .description h1.title {
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

.content .description .back-to-category a {
	color: rgba(0,0,0,0.75);
    background: #baa571;
    padding: 1rem 1.7rem;
    border-radius: 0.8em;
}

.content .description .back-to-category a i {
	margin-right: 1rem;
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

.content .description .informations .domaine-map {
	width: 80%;
	margin: 5rem auto;
}

.content .description .informations .domaine-map img {
	width: 100%;
	height: auto;
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

	.bp-header__main {
		width: 100%;
	}

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
		padding: 7rem 4rem 4rem 4rem;
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
	
			<?php 
			
				$queryCat = get_query_var( 'cat', 0 );
				$categoryImage = '';
						
				if($queryCat != 0){
					$thumbnail_id = get_woocommerce_term_meta( $queryCat, 'thumbnail_id', true ); 
					$categoryImage = wp_get_attachment_url( $thumbnail_id );
				}
			?>
	
			<div class="description">
			
				<p class="back-to-category" id="domaine-back-to-category"><a href="<?php echo get_site_url(); ?>" class="product-category-title"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</a></p>
				
				<script type="text/javascript">
					var history_prev = document.referrer;
						if(history_prev != null || history_prev.length > 0 || history_prev != '') {
							if(history_prev.indexOf("<?php echo get_site_url(); ?>") > -1) {
								document.querySelector('#domaine-back-to-category a').setAttribute('href', history_prev);
							}
						}
				</script>
				
				<p class="go-to-fiche-domaine"><a href="<?php echo get_site_url(); ?>/domaine/">Voir tous les domaines <i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
				
				<h1 class="title"><?php the_title(); ?></h1>
				
				<div class="informations">
					<div class="domaine"><?php the_content() ?></div>
					
					<?php $map = do_shortcode( "[types field='carte'][/types]" ); if( $map != '' ) { ?>
						<div class="domaine-map">
							<?php echo $map; ?>
						</div>
					<?php }	?>
					
				</div>
			</div>
			
			<div class="domaine-products" style="background-image: url('<?php if( $categoryImage != '' ) { echo $categoryImage; } else { echo get_template_directory_uri() . '/images/products-background.png'; } ?>');">
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
					        		<?php $_product = wc_get_product( $child_post->ID ); ?>
					        		<p style="margin: 0 0 1.8rem 0;">
										<?php 
											if($_product->get_sale_price() > 0 ){
										?>
												<span class="regular-price"><?php echo number_format($_product->get_regular_price(), 2); ?> €</span>
												<span><?php echo number_format($_product->get_price(), 2); ?> €</span>
										<?php
											} else { 
										?>
												<span><?php echo number_format($_product->get_price(), 2); ?> €</span>
										<?php 
											}
										?>
									</p>
									<p><a class="btn-add-to-cart" href="?add-to-cart=<?php echo $child_post->ID ?>">Ajouter</a></p>
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
