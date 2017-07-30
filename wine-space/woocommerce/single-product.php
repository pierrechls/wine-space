<?php
/**
 * The Template for displaying all single products.
 *
 * Override this template by copying it to yourtheme/woocommerce/single-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php

get_header( 'shop' ); ?>

<style>


.content .illustration {
	float: right;
    width: 45%;
    height: 100vh;
    text-align: center;
    background: #000;
    background-size: cover;
    background-attachment: fixed;
    background-position: center center;
}

.content .illustration .wine-image {
	width: 100%;
    height: 100%;
    text-align: center;  /* align the inline(-block) elements horizontally */
    font: 0/0 a;         /* remove the gap between inline(-block) elements */
}

.content .illustration .wine-image:before {      /* create a full-height inline block pseudo-element */
    content: ' ';
    display: inline-block;
    vertical-align: middle; /* vertical alignment of the inline element */
    height: 100%;
}

.content .illustration .wine-image .wine-image-child {
    display: inline-block;
    vertical-align: middle;
    height: 100vh;
    width: 100%;
}

.content .illustration .wine-image .wine-image-child span.align-img {
	display: inline-block;
    height: 100%;
    vertical-align: middle;
}

.content .illustration .wine-image .wine-image-child img {
	height: 80%;
	margin-top: 5rem;
	width: auto;
}

.content .description {
    background: #FFF;
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
	text-transform: capitalize;
}
.content .description h3 {
	text-align: left;
    padding: 0;
    color: #000;
    margin: 1rem auto;
    font-size: 2rem;
}

.content .description .go-to-fiche-domaine {
	text-align: left;
	margin: 1rem auto 4rem auto;
}

.content .description .go-to-fiche-domaine a {
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

.content .description .go-to-fiche-domaine a i {
	color: #baa571;
	margin-left: 0.4rem;
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

.content .description h4.product-price {
	font-size: 1.5rem;
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
	margin: 2rem auto;
}

.content .description .informations .fiche-technique .element h4 {
	margin: 0 auto 0.2rem auto;
    font-size: 1.9rem;
    line-height: 2.3rem;
}

.content .description .informations .fiche-technique .element p {
	margin: 0 auto;
	font-size: 1.5rem;
    line-height: 2.3rem;
}

.content .description .informations .fiche-technique .element p:first-letter {
    text-transform: uppercase;
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

	.content .illustration {
		float: none;
		width: 100%;
	}
	
	.content .description {
		padding: 2rem 4rem;
		overflow: inherit;
		height: auto;
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

	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
	?>

		<?php while ( have_posts() ) : the_post(); ?>
		
				<?php 
			
					$product_cats = wp_get_post_terms( get_the_ID(), 'product_cat' );
					$categoryID = '';
					$categoryName = '';
					$categoryImage = '';

					if ( $product_cats && ! is_wp_error ( $product_cats ) ){
					
						$queryCat = get_query_var( 'cat', 0 );
						
						if($queryCat != 0){
						
							foreach ($product_cats as $product_cat){
							    if( $product_cat->term_taxonomy_id == $queryCat ) {
								    $categoryID = $queryCat;
								    $categoryName = get_cat_name( $categoryID );
								    break;
							    }
							}
						}
						
						if($categoryID == '') {
							$single_cat = array_shift($product_cats);  
							if($single_cat->parent == 0) {
								foreach ($product_cats as $product_cat){
								    if( $product_cat->parent > 0 ) {
									    $single_cat = $product_cat;
									    break;
								    }
								}
							}
							$categoryID = $single_cat->term_taxonomy_id;
							$categoryName = $single_cat->name;
						}
						
						$thumbnail_id = get_woocommerce_term_meta( $categoryID, 'thumbnail_id', true ); 
						$categoryImage = wp_get_attachment_url( $thumbnail_id );
				
					}
				?>
					
			
			<div class="illustration" style="background-image: url('<?php if( $categoryImage != '' ) { echo $categoryImage; } else { echo get_template_directory_uri() . '/images/products-background.png'; } ?>');">
				<div class="wine-image">
					<div class="wine-image-child">
						<span class="align-img"></span>
						<?php the_post_thumbnail( 'full'); ?>
					</div>
				</div>
			</div>
			<div class="description">
			
				<p class="back-to-category" id="product-back-to-category"><a href="<?php echo get_category_link( $categoryID ) ?>" class="product-category-title"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour <!--<?php echo $categoryName; ?>--></a></p>
				
				<script type="text/javascript">
					var history_prev = document.referrer;
						if(history_prev != null || history_prev.length > 0 || history_prev != '') {
							if(history_prev.indexOf("<?php echo get_site_url(); ?>") > -1) {
								var urlWithoutParams = location.protocol + '//' + location.host + location.pathname;
								var lastUrlSaved = localStorage.getItem('previousUrl');
								if(!lastUrlSaved) {
									localStorage.setItem('previousUrl', history_prev);
									document.querySelector('#product-back-to-category a').setAttribute('href', history_prev);	
								} else if (lastUrlSaved.indexOf(urlWithoutParams) > -1) {
									localStorage.setItem('previousUrl', history_prev);
									document.querySelector('#product-back-to-category a').setAttribute('href', lastUrlSaved);	
								}
							}
						}
				</script>
				
				<?php
					$parent_id = wpcf_pr_post_get_belongs(get_the_ID(), 'domaine');
					if (!empty($parent_id)) { 
						$parentTitle = get_the_title($parent_id);
						$parentURL = get_post_permalink( $parent_id );
					}
				?>
			
				<?php if($parentTitle != '') { ?>
					<h3><?php echo $parentTitle ?></h3>	
					<?php if($parentURL != '') { ?>
						<p class="go-to-fiche-domaine"><a href="<?php if($categoryID != '') { echo esc_url( add_query_arg( 'cat', $categoryID, $parentURL) ); } else { echo $parentURL; } ?>">Voir la fiche domaine <i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
					<?php } ?>
				<?php } ?>
				<h1><?php the_title(); ?></h1>
				<h4 class="product-price">Prix : <?php 
					if($product->get_sale_price() > 0 ){ ?>
						<span class="regular-price"><?php echo number_format($product->get_regular_price(), 2); ?> €</span>
						<span><?php echo number_format($product->get_price(), 2); ?> €</span>
					<?php } else { ?>
						<span><?php echo number_format($product->get_price(), 2); ?> €</span>
					<?php } ?>
				</h4>
				<div class="form-add-to-cart">
					<?php if ( $product->is_in_stock() ) { ?>

					    <?php
					        if ( $product->product_type == 'simple' ) {
					
					            ?>
					            <form action="<?php echo esc_url( $product->add_to_cart_url() ); ?>" class="cart" method="post" enctype='multipart/form-data'>
									
					                <?php woocommerce_quantity_input(); ?>
					
					                <button type="submit" class="button alt">Ajouter au panier</button>
					
					            </form>
					            <?php
					
					        }
					    ?>
					
					<?php } else { ?>
					
						<form action="<?php echo esc_url( $product->add_to_cart_url() ); ?>" class="cart" method="post" enctype='multipart/form-data'>
							
			                <button disabled="true" style="background: rgba(0,0,0,0.5);" type="submit" class="button alt">Produit épuisé</button>
			
			            </form>
						
					<?php } ?>
					
				</div>
				
				<div class="informations">
					<div class="domaine"><?php the_content() ?></div>
					<div class="fiche-technique">
					
							<?php $elevage = do_shortcode( "[types field='product-elevage'][/types]" ); if( $elevage != '' ) { ?>
								<div class="element">
									<h4>Élevage</h4>
									<?php echo $elevage; ?>
								</div>
							<?php }	?>
					
							<?php $cepages = do_shortcode( "[types field='product-cepages'][/types]" ); if( $cepages != '' ) { ?>
								<div class="element">
									<h4>Cépages</h4>
									<?php echo $cepages; ?>
								</div>
							<?php }	?>
							
							<?php $vinification = do_shortcode( "[types field='product-vinification'][/types]" ); if( $vinification != '' ) { ?>
								<div class="element">
									<h4>Vinification</h4>
									<?php echo $vinification; ?>
								</div>
							<?php }	?>
						
							<?php $service = do_shortcode( "[types field='product-service'][/types]" ); if( $service != '' ) { ?>
								<div class="element">
									<h4>Service</h4>
									<?php echo $service; ?>
								</div>
							<?php }	?>
							
							<?php $garde = do_shortcode( "[types field='product-garde'][/types]" ); if( $garde != '' ) { ?>
								<div class="element">
									<h4>Garde</h4>
									<?php echo $garde; ?>
								</div>
							<?php }	?>
							
							<?php $contenance = do_shortcode( "[types field='product-contenance'][/types]" ); if( $contenance != '' ) { ?>
								<div class="element">
									<h4>Contenance</h4>
									<?php echo $contenance; ?>
								</div>
							<?php }	?>
							
							<?php $appellation = do_shortcode( "[types field='product-appellation'][/types]" ); if( $appellation != '' ) { ?>
								<div class="element">
									<h4>Appellation</h4>
									<?php echo $appellation; ?>
								</div>
							<?php }	?>
							
							<?php $millesime = do_shortcode( "[types field='product-millesime'][/types]" ); if( $millesime != '' ) { ?>
								<div class="element">
									<h4>Millésime</h4>
									<?php echo $millesime; ?>
								</div>
							<?php }	?>
							
							<?php $commentairesDegustation = do_shortcode( "[types field='product-commentaires-degustations'][/types]" ); if( $commentairesDegustation != '' ) { ?>
								<div class="element">
									<h4>Commentaire de dégustation</h4>
									<?php echo $commentairesDegustation; ?>
								</div>
							<?php }	?>
							
					</div>
				</div>
			</div>

		<?php endwhile; // end of the loop. ?>
		
		<script src="<?php bloginfo('template_directory'); ?>/scrollbar/js/mCustomScrollbar.min.js"></script>
		
		<script>
			(function($){
				$(window).on("load",function(){
					
					$(".content .description").mCustomScrollbar({
						theme:"dark-thin"
					});
					
				});
			})(jQuery);
		</script>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
	?>

	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
	?>	

<?php get_footer( 'shop' ); ?>
