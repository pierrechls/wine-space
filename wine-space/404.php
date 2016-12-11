<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package winespace
 */

get_header(); ?>

<style>

#primary{
	height: 100vh;
	/*margin-top: -20px;*/
	background-image: url('<?php bloginfo('template_directory'); ?>/images/404-background.png');
	background-size: cover;
	background-position: center center;
	background-attachment: fixed;
	padding: 2.5rem 1rem;
	min-height: 100vh;
}

#primary .entry-content{
	padding-top: 3em;
}

.page-content h1{
	font-size: 2.2rem;
	margin: 0;
	text-align: center;
	color: #FFFFFF;
}

.page-content p{
	margin: 0;
	text-align: center;
	font-size: 1.5rem;
    line-height: 2rem;
    padding: 3rem;
	color: #FFFFFF;
}

.page-content a{
    text-align: center;
    display: block;
    margin: auto;
    border: none;
    background-color: #b7a56d;
    color: white;
    font-size: 1.6rem;
    padding: 1rem 2rem;
    width: 50%;
    max-width: 20rem;
    -moz-transition: 0.25s;
    -o-transition: 0.25s;
    transition: 0.25s;
    -webkit-backface-visibility: hidden;
    font: 15px 'Lato', sans-serif;
    font-weight: 300;
    text-indent: 0.1rem;
    -webkit-border-radius: 0.6rem;
    -moz-border-radius: 0.6rem;
    border-radius: 0.6rem;
    -moz-box-shadow: none;
    box-shadow: none;
}

.page-content a:hover {
    background-color: #ad993e;
}

.footer-container{
	margin-top: 0;
}

section.error-404.not-found {
	top: 30%;
    left: 50%;
    position: absolute;
    margin-left: -15rem;
    width: 30rem;
}

</style>

	<div id="primary" class="content-area 404">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">

				<div class="page-content">
					
					<h1 class="page-title">Oups ! Cette page n’a pas été trouvée.</h1>
				
					<p>Il semblerait qu'aucune page ne corresponde à votre recherche...</p>
					
					<a class="return-to-shop" href="<?php echo get_site_url(); ?>">Retour à l'accueil</a>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
