<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package winespace
 */

get_header(); ?>

<style>

#primary{
	background-color: #fff;
	height: 1000px;
	/*margin-top: -20px;*/
}

#primary .entry-content{
	padding-top: 3em;
}

.page-content h1{
	margin: 0;
	text-align: center;
	padding: 2em;
}

.page-content p{
	margin: 0;
	text-align: center;
	padding: 2em;
}

.page-content a{
    text-align: center;
    display: block;
    margin: auto;
    border: none;
    background-color: #b7a56d;
    color: white;
    font-size: 16.5px;
    padding: 10px 20px;
    width: 50%;
    max-width: 200px;
    -moz-transition: 0.25s;
    -o-transition: 0.25s;
    transition: 0.25s;
    -webkit-backface-visibility: hidden;
    font: 15px 'Lato', sans-serif;
    font-weight: 300;
    text-indent: 1px;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
    -moz-box-shadow: none;
    box-shadow: none;
}

.page-content a:hover {
    background-color: #ad993e;
}

.footer-container{
	margin-top: 0;
}

</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<div class="page-content">
					
					<h1 class="page-title">Oups ! Cette page n’a pas été trouvée.</h1>
				
					<p>Il semblerait qu'aucune page corresponde à votre recherche...</p>
					
					<a class="return-to-shop" href="<?php echo get_site_url(); ?>">Retour à la boutique</a>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
