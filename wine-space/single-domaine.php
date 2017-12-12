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
	/* width: 8rem; */
	width: auto;
    height: 30rem;
}

.domaine-products .domaine-products-all .domaine-products-list .domaine-product .info {
	background: rgba(0,0,0,0.5);
    /* border: 0.2rem solid #b7a56d; */
    margin: 1rem auto 0rem auto;
    padding-bottom: 2rem;
    -webkit-hyphens: auto;
	-moz-hyphens: auto;
	-ms-hyphens: auto;
	-o-hyphens: auto;
	hyphens: auto;
	position: relative;
	color: #FFF;
	width: 10rem;
}


.domaine-products .domaine-products-all .domaine-products-list .domaine-product .info h3 {
	text-transform: uppercase;
	text-align: center;
	margin: 1rem auto 0 auto;
	font-size: 1.3rem;
}

.domaine-products .domaine-products-all .domaine-products-list .domaine-product .info p, .domaine-products .domaine-products-all .domaine-products-list .domaine-product .info .product-info-millesime {
	color: #FFF !important;
	font-size: 1.3rem;
	margin: 0 0 1.3rem 0;
}

.domaine-products .domaine-products-all .domaine-products-list .domaine-product .info .info-actions {
	position: absolute;
    top: 0;
    left: 0;
    background: #b7a56d;
    width: 100%;
    height: 100%;
    opacity: 0;
    visibility: hidden;
    transition: visibility 0s, opacity 0.2s linear;
}

.domaine-products .domaine-products-all .domaine-products-list .domaine-product .info .info-actions .quantity input {
    text-align: center;
    padding: 0.5rem 0;
    margin-bottom: 0.2rem;
    width: 3rem;
}

.domaine-products .domaine-products-all .domaine-products-list .domaine-product .info-actions.noClick {
	pointer-events: none;
}

.domaine-products .domaine-products-all .domaine-products-list .domaine-product .info:hover .info-actions,
.domaine-products .domaine-products-all .domaine-products-list .domaine-product .info.hoverEffect .info-actions {
	opacity: 1;
	visibility: visible;
}

.domaine-products .domaine-products-all .domaine-products-list .domaine-product .info .info-actions .actions {
	width: 10rem;
    height: 12rem;
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: -6rem;
    margin-left: -5rem;
}

.domaine-products .domaine-products-all .domaine-products-list .domaine-product .info .info-actions .actions i {
	display: block;
	font-size: 1.4rem;
}

.domaine-products .domaine-products-all .domaine-products-list .domaine-product .info .info-actions .actions a {
	color: #000;
    font-weight: 700;
    text-transform: uppercase;
    font-size: 1rem;
}

.domaine-products .domaine-products-all .domaine-products-list .domaine-product .info .info-actions .actions hr { 
	width: 50%;
    margin: 1rem auto;
    border: 0;
    height: 0px;
    border-top: 1px solid #000;
}

.domaine-products .domaine-products-all .domaine-products-list .domaine-product .info .info-actions .actions.not-is-stock {
	height: 12rem;
    margin-top: -6rem;
}

.domaine-products .domaine-products-all .domaine-products-list .domaine-product .info .info-actions button {
	background: none;
    border: 0;
    outline: 0;
    font-size: 1.1rem;
    text-shadow: none;
    font-weight: 600;
    text-transform: uppercase;
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
		background: #414141 !important;
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
			
				<p class="back-to-category" id="domaine-back-to-category"><a href="<?php echo get_site_url() . '/domaines/'; ?>" class="product-category-title"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</a></p>
				
				<script type="text/javascript">
				
					function removeParam(key, sourceURL) {
					    var rtn = sourceURL.split("?")[0],
					        param,
					        params_arr = [],
					        queryString = (sourceURL.indexOf("?") !== -1) ? sourceURL.split("?")[1] : "";
					    if (queryString !== "") {
					        params_arr = queryString.split("&");
					        for (var i = params_arr.length - 1; i >= 0; i -= 1) {
					            param = params_arr[i].split("=")[0];
					            if (param === key) {
					                params_arr.splice(i, 1);
					            }
					        }
					        rtn = rtn + "?" + params_arr.join("&");
					    }
					    return rtn;
					}
				
					var history_prev = document.referrer;
						if(history_prev != null || history_prev.length > 0 || history_prev != '') {
							if(history_prev.indexOf("<?php echo get_site_url(); ?>") > -1) {
								var originalURL = history_prev;
								var alteredURL = removeParam("add-to-cart", originalURL);
								document.querySelector('#domaine-back-to-category a').setAttribute('href', alteredURL);
							}
						}
						
					
				</script>
				
				<p class="go-to-fiche-domaine"><a href="<?php echo get_site_url(); ?>/domaines/">Voir tous les domaines <i class="fa fa-arrow-right" aria-hidden="true"></i></a></p>
				
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
					        		<?php echo get_the_post_thumbnail($child_post->ID, 'medium'); ?> <br/>
					        	</a>
					        	<div class="info">
					        		<h3>
										<?php echo $child_post->post_title; ?>
									</h3>
									
									<?php 
					        			$child_post_array = (array)$child_post;
					        			$millesime = $child_post_array['fields']['product-millesime'] ? $child_post_array['fields']['product-millesime'] : '';
					        			if($millesime != '') {
						        			?> <div class="product-info-millesime">
						        				<?php echo $millesime; ?>
												</div> <?php
					        			};
					        		?>
					        		
					        		<?php $_product = wc_get_product( $child_post->ID ); ?>

									<p style="margin: 0 0 1.8rem 0;">
										<?php
											if($_product->get_sale_price() > 0 ){
										?>
												<span class="regular-price"><?php echo number_format($_product->get_regular_price(), 2); ?> €</span>
												<span class="product-price"><?php echo number_format($_product->get_price(), 2); ?> €</span>
										<?php
											} else {
										?>
												<span class="product-price"><?php echo number_format($_product->get_price(), 2); ?> €</span>
										<?php
											}
										?>
									</p>
									
									<div class="info-actions">
										<div class="actions <?php if ( !$_product->is_in_stock() ) { echo 'not-is-stock'; } ?>">
											<div class="see-product p-action">
												<p>
													<a href="<?php echo esc_url( add_query_arg( 'cat', $term->term_id, get_permalink( $child_post->ID )) ); ?>">
														<i class="fa fa-eye" aria-hidden="true"></i>Voir
													</a>
												</p>
											</div>
											<hr class="p-action-separator"/>
											<div class="add-product p-action">
												<?php if ( $_product->is_in_stock() ) { ?>
												<div class="loading-add-to-cart"></div>
												<form id="add-to-card-product-<?php echo $child_post->ID; ?>" onsubmit="return submitAddProductForm(<?php echo $child_post->ID; ?>)">
												    	<?php woocommerce_quantity_input(); ?>
												    	<div class="product-details">
												    		<input type="hidden" value="<?php echo $child_post->ID; ?>" name="productId" class="product-identifier">
												    	</div>
														
														<button type="submit" class="add-to-cart-ajax">
															<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
															Ajouter
														</button>
											    </form>
											    <?php } else { ?>
													<form action="<?php echo esc_url( $_product->add_to_cart_url() ); ?>" class="cart" method="post" enctype='multipart/form-data'>
							
			                <button disabled="true" style="background: rgba(0,0,0,0.5); outline: 0; text-transform: uppercase; border: 0; font-size: 1.1rem; color: #FFF; padding: 1.1rem 1.3rem; vertical-align: top; border-radius: 0.8rem; margin: 1rem auto 0 auto;" type="submit" class="button alt">Produit épuisé</button>
			
			            </form>
												
												<?php } ?>
											</div>
										</div>
									</div>
					        	</div>
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
	
<?php get_footer(); ?>
