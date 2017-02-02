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
}

.content .illustration {
	float: right;
    width: 45%;
    height: 100vh;
    text-align: center;
    background: #000;
    background-image: url('<?php bloginfo('template_directory'); ?>/images/products-background.png');
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
    vertical-align: middle;          /* vertical alignment of the inline element */
    font: 16px/1 Arial, sans-serif;  /* reset the font property */
    padding: 5px;
}

.content .illustration .wine-image .wine-image-child img {
	height: 80%;
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

	<?php while ( have_posts() ) : the_post(); ?>
			
			<div class="illustration">
				<div class="wine-image">
					<div class="wine-image-child">
						<img src="<?php the_post_thumbnail_url( 'full' ); ?>" />
					</div>
				</div>
			</div>
			<div class="description">
			
				<p class="back-to-category"><a href="<?php echo get_site_url(); ?>" class="product-category-title"><i class="fa fa-arrow-left" aria-hidden="true"></i> Retour</a></p>
			
				<h1><?php the_title(); ?></h1>
				
				<div class="informations">
					<div class="domaine"><?php the_content() ?></div>
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
	
<?php get_footer(); ?>
