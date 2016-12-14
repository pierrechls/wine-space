<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package winespace
 */

get_header(); ?>


	<style>
	
		div#wpform-field-hp {
			display: none;
		}
		
		#map {
			height: 50vh;
		}
		
		.contact-post {
			padding: 1rem 2rem;	
		}
		
		.contact-post .contact-formulaire {
			width: 40%;
			font-size: 1.6rem;
			display: inline-block;
			float: left;
		}
		
		.contact-post .contact-formulaire .wpforms-container input, .contact-post .wpforms-container textarea {
			width: 100%;
			max-width: 100%;
		}
		
		.contact-post .contact-formulaire .wpforms-container .wpforms-field {
			margin: 1rem auto 2rem auto;
		}
		
		.contact-post .contact-formulaire .wpforms-container .wpforms-field label.wpforms-field-label {
			display: block;
			margin-bottom: 0.5rem;
		}
		
		.contact-post .contact-formulaire .wpforms-container .wpforms-submit-container {
			text-align: right;
		}
		
		.contact-post .contact-formulaire .wpforms-container .wpforms-submit-container button {
			margin: 1rem auto;
		    padding: 1rem 2rem;
		    background: #b7a56d;
		    border: 0;
		    border-radius: 0.5rem;
		    color: #FFF;
		    text-transform: uppercase;
		    font-size: 1.5rem;
		    outline: none;
		}
		
		.contact-post .contact-infos-diverses {
			display: inline-block;
			float: right;
			width: 40%;
			font-size: 1.6rem;
		}
		
		.contact-post .contact-infos-diverses p {
			margin: 1rem auto 1.5rem auto;
		}
		
		.contact-post .contact-infos-diverses a {
			color: #000;
		}
		
		.contact-post .contact-infos-diverses a:hover {
			color: #000;
		}
		
		@media only screen and (max-width: 60em){
			.contact-post .contact-formulaire {
			    float: none;
			    display: block;
			    width: 100%;
			}
			
			.contact-post .contact-infos-diverses {
				display: block;
				float: none;
				width: 100%;
			}
	
		}
		
	</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		
			<div id="map"></div>
		    <script>
		      function initMap() {
		        
		        var positionLatLng = {
			        lat: 43.425083,
			        lng: 2.946325
		        };
		        
		        var map = new google.maps.Map(document.getElementById('map'), {
		          center: positionLatLng,
		          scrollwheel: false,
		          zoom: 9,
		          styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#707070"},{"lightness":40}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#000000"},{"lightness":16}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#000000"},{"lightness":17},{"weight":1.2}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#424242"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":21}]},{"featureType":"poi","elementType":"labels","stylers":[{"visibility":"on"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"lightness":17},{"color":"#484848"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"lightness":29},{"weight":0.2},{"color":"#ff0000"},{"visibility":"off"}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":16}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":19}]},{"featureType":"water","elementType":"geometry","stylers":[{"color":"#000000"},{"lightness":17}]}]
		        });
		        
		        var marker = new google.maps.Marker({
				    position: positionLatLng,
				    map: map
				});
		      }
		
		    </script>
		    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtzUBl4h5LTIA8Hm_QhRM5MD8RlzwBPKo&callback=initMap"
		    async defer></script>
		    
		    <div class="contact-post">

				<?php while ( have_posts() ) : the_post(); ?>
	
					<?php the_content() ?>
	
				<?php endwhile; // end of the loop. ?>
				
		    </div>

		</main><!-- #main -->
	</div><!-- #primary -->
    </div>
        
<?php get_footer(); ?>
