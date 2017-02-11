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
	.regular-price {
		color: rgba(255,255,255,0.4);
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
		
		<div class="category-product" style="background-image: url('<?php if( $categoryImage != '' ) { echo $categoryImage; } else { echo get_template_directory_uri() . '/images/products-background.png'; } ?>');">
		
		<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

			<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

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
				
					$products = new WP_Query( array(
				        'posts_per_page' => -1,
				        'product_cat' => $term->slug,
				        'post_type' => 'product',
				        'orderby' => 'date',
				        'order' => 'DESC'
				    ) );

					while ( $products->have_posts() ) : $products->the_post(); global $product;
				
				?>

					    <li class="product">
					    	<a href="<?php echo get_permalink( $products->post->ID ) ?>">
					        	<img src="<?php the_post_thumbnail_url( 'full' ); ?>" /><br/>
					        	<div class="info">
					        		<h3><?php the_title(); ?></h3>
					        		<?php
										$parent_id = wpcf_pr_post_get_belongs(get_the_ID(), 'domaine');
										if (!empty($parent_id)) {
									?>
											<p><?php echo get_the_title($parent_id); ?></p>
									<?php
										}
									?>
									
									<p style="margin: 0 0 1.8rem 0;">
										<?php 
											if($product->get_sale_price() > 0 ){
										?>
												<span class="regular-price"><?php echo number_format($product->get_regular_price(), 2); ?> €</span>
												<span><?php echo number_format($product->get_price(), 2); ?> €</span>
										<?php
											} else { 
										?>
												<span><?php echo number_format($product->get_price(), 2); ?> €</span>
										<?php 
											}
										?>
									</p>
									<p><a class="btn-add-to-cart" href="?add-to-cart=<?php echo $products->post->ID ?>">Ajouter au panier</a></p>
					        	</div>
					    	</a>
					    </li>

				<?php 
					
					endwhile;
					wp_reset_query();
				?>

			<?php woocommerce_product_loop_end(); ?>

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
