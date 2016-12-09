<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package winespace
 */
?>
	        
	        <script>
	        	
	        	function get_actual_date(){
		        	var today = new Date();
				    var dd = today.getDate();
				    var mm = today.getMonth()+1; //January is 0!
				
				    var yyyy = today.getFullYear();
				    if(dd<10){
				        dd='0'+dd
				    } 
				    if(mm<10){
				        mm='0'+mm
				    } 
				    var today = dd+'/'+mm+'/'+yyyy;
				    return today;
				}
	        
				// Détection
				if(typeof localStorage!='undefined') {
				  // Récupération de la valeur dans web storage
				  var legal_age = parseInt(localStorage.getItem('majority'));
				  var date_save = localStorage.getItem('datesave');
				  var date_today = get_actual_date();
				  
				  // Vérification de la présence du compteur
				  if(legal_age!=1 && legal_age!=2) {
				    //On sait pas si il a 18ans ou pas
				    window.location.replace("<?php echo get_site_url(); ?>/majority/");
				  }
				  else if(legal_age==1){
				  	//Il a 18ans, on fait rien
				  	if(date_save === date_today){
					  	//Si il a déjà répondu au questionnaire aujourd'hui on fait rien
				  	}
				  	else{
					  	//Sinon, on le redirige vers le questionnaire
					  	window.location.replace("<?php echo get_site_url(); ?>/majority/");
				  	}
				  }
				  else if(legal_age==2){
					 //Il n'a pas 18ans 
					 window.location.replace("<?php echo get_site_url(); ?>/sorry-majority/ ");
				  }
				}
			</script>

        <div class="footer-container">
            <footer class="wrapper">
            	<p><?php bloginfo('name'); ?> © 2016</p>
            	<p><a href="<?php echo get_site_url(); ?>/conditions-generales-de-vente/">CGV</a> | <a href="<?php echo get_site_url(); ?>/mentions-legales/">Mentions Légales</a></p>
            	<p>L'abus d'alcool est dangereux pour la santé, à consommer avec modération.</p>
            	<br/>
                <p style="color: #989696;">Developped by <a style="color: #989696;" href="http://www.brainfactory.fr/" target="_blank"> Brain Factory</a></p>
            </footer>
        </div>
        
        <div id="somedialog" class="dialog">
			<div class="dialog__overlay"></div>
			<div class="dialog__content">
				<ul>
					<li><a class="close_menu" href="<?php echo get_site_url(); ?>/histoire/">Histoire</a></li>
	                <li><a class="close_menu" href="<?php echo get_site_url(); ?>/terroir/">Le terroir</a></li>
	                <li><a class="close_menu" href="<?php echo get_site_url(); ?>/#cuvees">Nos cuvées</a></li>
	                <li><a class="close_menu" href="<?php echo get_site_url(); ?>/partenaires-distributeurs/">Partenaires<br/>distributeurs</a></li>
					<li><a class="close_menu" href="<?php echo get_site_url(); ?>/operations-speciales/">Opérations<br/>spéciales</a></li>
	                <li><a class="close_menu" href="<?php echo get_site_url(); ?>/phototeque/">Phototèque</a></li>
	                <li><a class="close_menu" href="<?php echo get_site_url(); ?>/blog/">Actualités</a></li>
	                <li><a class="close_menu" href="<?php echo get_site_url(); ?>/#contact">Contact</a></li>
				</ul>
				<div id="close_menu" class="action" data-dialog-close><img src="<?php bloginfo('template_directory'); ?>/images/menu/close.svg" /></div>
			</div>
		</div>

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
		<script src="<?php bloginfo('template_directory'); ?>/js/responsiveslides.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/retina.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/supersized.3.2.7.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/supersized.shutter.js"></script>
		
		
        <script src="<?php bloginfo('template_directory'); ?>/js/mobile.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/plugin.js"></script>

		
		<script src="<?php bloginfo('template_directory'); ?>/lightbox/js/lightbox.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/dialogFx.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/classie.js"></script>
		
		<script src="<?php bloginfo('template_directory'); ?>/js/menu-classie.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/dummydata.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/menu-main.js"></script>
	<script>
	(function() {
		var menuEl = document.getElementById('ml-menu'),
			mlmenu = new MLMenu(menuEl, {
				// breadcrumbsCtrl : true, // show breadcrumbs
				// initialBreadcrumb : 'all', // initial breadcrumb text
				backCtrl : false, // show back button
				// itemsDelayInterval : 60, // delay between each menu item sliding animation
				onItemClick: loadDummyData // callback: item that doesn´t have a submenu gets clicked - onItemClick([event], [inner HTML of the clicked item])
			});

		// mobile menu toggle
		var openMenuCtrl = document.querySelector('.action--open'),
			closeMenuCtrl = document.querySelector('.action--close');

		openMenuCtrl.addEventListener('click', openMenu);
		closeMenuCtrl.addEventListener('click', closeMenu);

		function openMenu() {
			classie.add(menuEl, 'menu--open');
		}

		function closeMenu() {
			classie.remove(menuEl, 'menu--open');
		}

		// simulate grid content loading
		var gridWrapper = document.querySelector('.content');

		function loadDummyData(ev, itemName) {
			ev.preventDefault();

			closeMenu();
			gridWrapper.innerHTML = '';
			classie.add(gridWrapper, 'content--loading');
			setTimeout(function() {
				classie.remove(gridWrapper, 'content--loading');
				gridWrapper.innerHTML = '<ul class="products">' + dummyData[itemName] + '<ul>';
			}, 700);
		}
	})();
	</script>

		<script>
			(function() {

				var dlgtrigger = document.querySelector( '[data-dialog]' ),
					somedialog = document.getElementById( dlgtrigger.getAttribute( 'data-dialog' ) ),
					dlg = new DialogFx( somedialog );

				dlgtrigger.addEventListener( 'click', dlg.toggle.bind(dlg) );

			})();
		</script>
		
		
		<script>
			$( ".close_menu" ).click(function() {
			  $("#close_menu").trigger( "click" );
			  enableScroll();
			  $("#nav-container").css("opacity", "1");
			});
			$( "#close_menu" ).click(function() {
			  enableScroll();
			  $("#nav-container").css("opacity", "1");
			});
			$( ".dialog__overlay").click(function() {
			  enableScroll();
			  $("#nav-container").css("opacity", "1");
			});
			$( ".dialog__content").click(function() {
			  enableScroll();
			  $("#nav-container").css("opacity", "1");
			});
			
			var link = "<?php bloginfo('template_directory') ?>";
			
			$(".payment_method_bacs").append("<img src='" + link + "/images/payment/virement.png'>");
			$(".payment_method_cheque").append("<img src='" + link + "/images/payment/cheque.png'>");
			$(".payment_method_etransactions_std").append("<img src='" + link + "/images/payment/cb.png'>");
			$(".payment_method_etransactions_std").append("<img src='" + link + "/images/payment/visa.png'>");
			$(".payment_method_etransactions_std").append("<img src='" + link + "/images/payment/mastercard.png'>");
			$(".payment_method_etransactions_std").append("<img src='" + link + "/images/payment/etransactions.png'>");
			
		</script>

        <script>
            var _gaq=[['_setAccount','UA-33115124-15'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>

</body>
</html>
