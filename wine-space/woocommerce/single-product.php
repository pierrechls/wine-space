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

<style>

.text_scena_description{
	position: absolute;
    top: 500px;
    width: 25%;
}

.text_scena_description.right{
    right: 10%;
}

.text_scena_description.left{
    left: 10%;
}

.text_scena_description h2, .text_scena_description p{
	/*color: #6e5145;*/
	color: #fff;
} 

.text_scena_description h2.black, .text_scena_description p.black{
	color: #000;
} 

.slide_scena img:nth-child(2){
	display: none;
}



@media screen and (max-width: 860px){
	.slide_scena img:nth-child(1){
		display: none;
	}
	.slide_scena img:nth-child(2){
		display: block;
	}
	.text_scena_description {
	    position: relative;
	    width: 100%;
	    top: 0;
		right: 0 !important;
		left: 0 !important;
	    background-color: #000;
	    margin-top: -20px;
	    text-align: center;
	    padding-bottom: 3em;
	    padding-left: 0.5em;
	    padding-right: 0.5em;
	    
	}
	.text_scena_description h2{
		text-align: center;
	}
}

.text_scena_description h2{
	margin-bottom: 4em;
} 
.text_scena_description p{
	margin-bottom: 1em;
} 

div.summary.entry-summary{
	display: none;
}

.slide_scena a{
	display: block;
    margin: 1em auto;
    text-transform: uppercase;
}

.slide_scena a.black{
	color: #000;
}

.slide_scena a#fiche_technique{
	text-transform: capitalize;	
}

.footer-container{
	margin-top: 0px !important;
}

</style>

<?php

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
	?>

		<?php while ( have_posts() ) : the_post(); ?>
			
			
			<?php $cepages = do_shortcode( "[types field='cepages'][/types]" ); if( $cepages != '' ) { ?>
					<p>Cépages : <?php echo $cepages; ?></p>
			<?php }	?>
			
			<?php $terroir = do_shortcode( "[types field='terroir'][/types]" ); if( $terroir != '' ) { ?>
					<p>Terroir : <?php echo $terroir; ?></p>
			<?php }	?>
			
			<?php $rendement = do_shortcode( "[types field='rendement'][/types]" ); if( $rendement != '' ) { ?>
					<p>Rendement : <?php echo $rendement; ?></p>
			<?php }	?>
			
			<?php $vignification = do_shortcode( "[types field='vignification'][/types]" ); if( $vignification != '' ) { ?>
					<p>Vignification : <?php echo $vignification; ?></p>
			<?php }	?>
			
			<?php $degustation = do_shortcode( "[types field='degustation'][/types]" ); if( $degustation != '' ) { ?>
					<p>Dégustation : <?php echo $degustation; ?></p>
			<?php }	?>
			
			<?php $fichetechnique = do_shortcode( "[types field='fiche-technique' link='true' title='Fiche technique'][/types]" ); if( $fichetechnique != '' ) { ?>
					<?php echo $fichetechnique; ?>
			<?php }	?>

			
			<?php the_content() ?>

		<?php endwhile; // end of the loop. ?>

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
