<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>

<style>

	.bp-header__main.home {
		position: fixed;
		z-index: 2;
	}

	.regular-price {
		/* color: rgba(255,255,255,0.4); */
		color: #FFF;
	}

	.product-price {
		color: #FFF;
		font-weight: 600;
	}

	.bp-header__main {
		background: transparent;
		position: fixed;
	}

	.filter-bar {
		color: #FFFFFF;
	    position: absolute;
	    left: 0;
	    top: 8rem;
	    font-size: 1.6rem;
	    z-index: 99;
	    margin: 0 auto;
	    text-align: left;
	    text-transform: uppercase;
	}

	.filter-bar p {
		margin: 0 auto;
		padding: 0.6rem 0 0 2.8rem;
	}

	.filter-bar p a {
		margin: 0 1rem;
	}

	.filter-bar form {
		margin: 0 auto;
		padding: 0.6rem 0 0 2.8rem;
		margin-bottom: 1rem;
	}

	.filter-bar form select {
		margin: 0 auto;
		margin-left: 1rem;
	}

	.filter-bar p a.filter-active {
		color: #baa571;
	}

	.filter-bar p a i:first-child {
		font-size: 1.1rem;
	    padding-right: 0.3rem;
	    vertical-align: bottom;
	    padding: 0rem 0.3rem 0.3rem 0;
	}

	@media screen and (max-width: 60em){

		.filter-bar {
			top: 9rem;
		}

		.filter-bar p {
			padding: 0.6rem 0 0 1.5rem;
		}
	}

	@media screen and (max-width: 40em){

		.filter-bar {
			right: 0;
		    left: inherit;
		    top: 13rem;
		    margin-right: 2.5rem;
		}

		.products {
		    padding: 22rem 4rem 3rem 4rem;
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
		do_action( 'woocommerce_before_main_content' );
	?>

		<?php
			$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
			$thumbnail_id = get_woocommerce_term_meta( $term->term_id, 'thumbnail_id', true );
			$categoryImage = wp_get_attachment_url( $thumbnail_id );
		?>

		<?php

			$currentOrder = 'price';
			$orderBy = 'meta_value_num';
			$metakey = '_price';
			$order = 'ASC';

			$orderByFilter = array('pricedesc', 'title', 'titledesc'); // 'price' filter is not mandatory because this is the default filter

			$newOrderBy = $_GET['orderby'];

			if( isset($newOrderBy) && $newOrderBy != '' && in_array($newOrderBy, $orderByFilter) ) {
				$currentOrder = $newOrderBy;
				if( $newOrderBy == 'pricedesc' ) {
					$order = 'DESC';
				} else if(  $newOrderBy == 'title' ) {
					$orderBy = 'title';
					$metakey = '';
				} else if(  $newOrderBy == 'titledesc' ) {
					$orderBy = 'title';
					$metakey = '';
					$order = 'DESC';
				}
			}

		?>

		<div class="category-product" style="background-image: url('<?php if( $categoryImage != '' ) { echo $categoryImage; } else { echo get_template_directory_uri() . '/images/products-background.png'; } ?>');">

		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

			<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

			<div class="filter-bar">
				<?php $currentURL = '?' . $_SERVER['QUERY_STRING']; ?>
				<form method="get">
				    <span class="custom-dropdown custom-dropdown--white">
						<select name='color' onchange='this.form.submit();' class="custom-dropdown__select custom-dropdown__select--white">
							 <option value='all' <?php if( $_GET['color'] === 'all' ) { echo 'selected'; }?> >Toutes les couleurs</option>
					         <option value='red' <?php if( $_GET['color'] === 'red' ) { echo 'selected'; }?>>Rouge</option>
					         <option value='rose' <?php if( $_GET['color'] === 'rose' ) { echo 'selected'; }?>>Rose</option>
					         <option value='white' <?php if( $_GET['color'] === 'white' ) { echo 'selected'; }?>>Blanc</option>
						</select>
					</span>
				    <?php if($currentOrder == 'title') {?> <input type="hidden" name="orderby" value="title"/> <?php } ?>
				    <?php if($currentOrder == 'titledesc') {?> <input type="hidden" name="orderby" value="titledesc"/> <?php } ?>
				    <?php if($currentOrder == 'price') {?> <input type="hidden" name="orderby" value="price"/> <?php } ?>
				    <?php if($currentOrder == 'pricedesc') {?> <input type="hidden" name="orderby" value="pricedesc"/> <?php } ?>
				</form>

				<p>
					<a class="<?php if($currentOrder == 'title') { echo "filter-active"; } ?>" href="<?php echo add_query_arg( 'orderby', 'title', $currentURL ); ?>"><i class="fa fa-arrow-down" aria-hidden="true"></i><i class="fa fa-font" aria-hidden="true"></i></a>
					<a class="<?php if($currentOrder == 'titledesc') { echo "filter-active"; } ?>" href="<?php echo add_query_arg( 'orderby', 'titledesc', $currentURL ); ?>"><i class="fa fa-arrow-up" aria-hidden="true"></i><i class="fa fa-font" aria-hidden="true"></i></a>
					<a class="<?php if($currentOrder == 'price') { echo "filter-active"; } ?>" href="<?php echo add_query_arg('orderby', 'price', $currentURL ); ?>"><i class="fa fa-arrow-down" aria-hidden="true"></i><i class="fa fa-eur" aria-hidden="true"></i></a>
					<a class="<?php if($currentOrder == 'pricedesc') { echo "filter-active"; } ?>" href="<?php echo add_query_arg( 'orderby', 'pricedesc', $currentURL ); ?>"><i class="fa fa-arrow-up" aria-hidden="true"></i><i class="fa fa-eur" aria-hidden="true"></i></a></p>
			</div>

		<?php endif; ?>

		<?php //do_action( 'woocommerce_archive_description' ); ?>

		<?php if ( have_posts() ) : ?>

			<?php
				/**
				 * woocommerce_before_shop_loop hook
				 *
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */

				//do_action( 'woocommerce_before_shop_loop' );
			?>

			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php

					$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

					$possibleColors = array('red', 'white', 'rose');

					$wine_color =  ( $_GET['color'] && in_array($_GET['color'], $possibleColors) ) ? ( array($_GET['color']) ) : array('red', 'white', 'rose', 'none');

					if ( is_search() ) {
						$products = new WP_Query( array(
							's' => get_search_query(),
					        'product_cat' => $term->slug,
					        'post_type' => 'product',
						    'posts_per_page' => 20,
							'paged' => $paged,
							'order' => $order,
				            'orderby' => $orderBy,
				            'meta_key' => $metakey,
				            'meta_query' => array(
				               array(
				               'key'       => '_price',
				               'compare'   => '=',
				               'type'      => 'NUMERIC',
				               ),
				               array(
									'key'	 	=> 'wine-color',
									'value'	  	=> $wine_color,
									'compare' 	=> 'IN',
								)
				            )

					    ) );
					} else {
						$products = new WP_Query( array(
					        'product_cat' => $term->slug,
					        'post_type' => 'product',
						    'posts_per_page' => 20,
							'paged' => $paged,
							'order' => $order,
				            'orderby' => $orderBy,
				            'meta_key' => $metakey,
				            'meta_query' => array(
				               array(
				               'key'       => '_price',
				               'compare'   => '=',
				               'type'      => 'NUMERIC',
				               ),
				               array(
									'key'	 	=> 'wine-color',
									'value'	  	=> $wine_color,
									'compare' 	=> 'IN',
								)
				            )
					    ) );
					}

					while ( $products->have_posts() ) : $products->the_post(); global $product;

				?>

					    <li class="product">
					        	<?php the_post_thumbnail( 'medium'); ?> <br/>
					        	<div class="info">
					        		<h3>
										<!-- <a href="<?php echo esc_url( add_query_arg( 'cat', $term->term_id, get_permalink( $products->post->ID )) ); ?>"> -->
										<?php the_title(); ?>
										<!-- </a> -->
									</h3>
					        		<?php
										$parent_id = wpcf_pr_post_get_belongs(get_the_ID(), 'domaine');
										if (!empty($parent_id)) {
									?>
											<p class="product-info-domaine">
												<!-- <a href="<?php echo esc_url( get_permalink($parent_id) ); ?>"> -->
												<?php echo get_the_title($parent_id); ?>
												<!-- </a> -->
											</p>
									<?php
										}
									?>

									<?php $millesime = do_shortcode( "[types field='product-millesime'][/types]" ); if( $millesime != '' ) { ?>											<div class="product-info-millesime">
											<!-- <a href="<?php echo esc_url( add_query_arg( 'cat', $term->term_id, get_permalink( $products->post->ID )) ); ?>"> -->
											<?php echo $millesime; ?>
											<!-- </a> -->
										</div>
									<?php }	?>

									<p style="margin: 0 0 1.8rem 0;">
										<?php
											if($product->get_sale_price() > 0 ){
										?>
												<span class="regular-price"><?php echo number_format($product->get_regular_price(), 2); ?> €</span>
												<span class="product-price"><?php echo number_format($product->get_price(), 2); ?> €</span>
										<?php
											} else {
										?>
												<span class="product-price"><?php echo number_format($product->get_price(), 2); ?> €</span>
										<?php
											}
										?>
									</p>
									
									<div class="info-actions">
										<div class="actions <?php if ( !$product->is_in_stock() ) { echo 'not-is-stock'; } ?>">
											<div class="see-product p-action">
												<p>
													<a href="<?php echo esc_url( add_query_arg( 'cat', $term->term_id, get_permalink( $products->post->ID )) ); ?>">
														<i class="fa fa-eye" aria-hidden="true"></i>Voir
													</a>
												</p>
											</div>
											<hr class="p-action-separator"/>
											<div class="add-product p-action">
												<?php if ( $product->is_in_stock() ) { ?>
												<div class="loading-add-to-cart"></div>
												<form id="add-to-card-product-<?php echo $products->post->ID; ?>" onsubmit="return submitAddProductForm(<?php echo $products->post->ID; ?>)">
												    	<?php woocommerce_quantity_input(); ?>
												    	<div class="product-details">
												    		<input type="hidden" value="<?php echo $products->post->ID; ?>" name="productId" class="product-identifier">
												    	</div>
														
														<button type="submit" class="add-to-cart-ajax">
															<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
															Ajouter au panier
														</button>
											    </form>
											    <?php } else { ?>
													<form action="<?php echo esc_url( $product->add_to_cart_url() ); ?>" class="cart" method="post" enctype='multipart/form-data'>
							
			                <button disabled="true" style="background: rgba(0,0,0,0.5); outline: 0; text-transform: uppercase; border: 0; font-size: 1.1rem; color: #FFF; padding: 1.1rem 1.3rem; vertical-align: top; border-radius: 0.8rem; margin: 1rem auto 0 auto;" type="submit" class="button alt">Produit épuisé</button>
			
			            </form>
												
												<?php } ?>
											</div>
										</div>
									</div>
					        	</div>
					    </li>

				<?php

					endwhile;
					wp_reset_query();
				?>
				
				<script type="text/javascript">
				
					function submitAddProductForm(productId) {
						  addToCartAjax(productId);
						  return false;
					}
					
					function addToCartAjax (productId) {
							var form = document.querySelector('#add-to-card-product-' + productId);
							var idProduct = form.querySelector('input.product-identifier').value;
							var quantity = form.querySelector('input.input-text.qty').value;
							if(quantity > 0) {
								 var loading = form.parentElement.querySelector('.loading-add-to-cart');
								 form.style.display = 'none';
								 loading.style.marginTop = '4rem';
								 loading.innerHTML = '<div class="spinner"></div>';
						    	 $.get('<?php echo get_site_url(); ?>/?post_type=product&add-to-cart='+idProduct+'&quantity='+quantity, function() {
									 $.ajax({
										    type : 'POST',
										    url : '<?php echo get_site_url(); ?>/',
										    data : '&cartDetails=true',
										    dataType : 'html',
										    success: function (data) {
										      var cartContents = document.querySelector('.bp-nav a.cart-contents');
								              cartContents.innerHTML = data;
										      loading.innerHTML = '<p style="font-size: 2rem; color:#000 !important;"><i class="fa fa-check" aria-hidden="true"></i></p>';
										      setTimeout(function(){ 
										      	loading.innerHTML = '';
										      	loading.style.marginTop = '0';
										      	form.style.display = 'block';
										      }, 1 * 1000);
								              
								            },
								            error : function(result) {}
									 })
							      });
							 }
					}
					
					$(document).ready(function() {
					
						$('.info').bind('touchstart', function(e) {
							var infoElement = $(this);
							if(!infoElement.hasClass('hoverEffect')) {
						        infoElement.addClass('hoverEffect')
						        infoElement.find('.info-actions').addClass('noClick');
						        setTimeout(function(){
							        infoElement.find('.info-actions').removeClass('noClick');
						        }, 0.3 * 1000);
					        }
					    });
						
						$(".products").on("touchstart", function(event){
							if(event.target === this) {
								$('.info').removeClass('hoverEffect');
							}
						});
					});
				
				</script>

			<?php woocommerce_product_loop_end(); ?>

			<?php if (function_exists("pagination") && $products->max_num_pages > 1) { ?>
					<div class="pagination-footer">
				     <?php pagination($products->max_num_pages); ?>
					</div>
			<?php } ?>


			<?php
				/**
				 * woocommerce_after_shop_loop hook
				 *
				 * @hooked woocommerce_pagination - 10
				 */

				//do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>

		</div>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */
		do_action( 'woocommerce_sidebar' );
	?>

<?php get_footer( 'shop' ); ?>
