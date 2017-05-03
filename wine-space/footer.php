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
	        
				if(typeof localStorage!='undefined') {
				  var legal_age = parseInt(localStorage.getItem('majority'));
				  var date_save = localStorage.getItem('datesave');
				  var date_today = get_actual_date();
				  
				  if(legal_age!=1 && legal_age!=2) {
				    window.location.replace("<?php echo get_site_url(); ?>/majority/");
				  }
				  else if(legal_age==1){
				  	if(date_save === date_today){
					  	
				  	}
				  	else{
					  	window.location.replace("<?php echo get_site_url(); ?>/majority/");
				  	}
				  }
				  else if(legal_age==2){
					 window.location.replace("<?php echo get_site_url(); ?>/sorry-majority/ ");
				  }
				}
			</script>

       <!--
 <div class="footer-container">
            <footer class="wrapper">
            	<p><?php bloginfo('name'); ?> © 2017</p>
            	<p><a href="<?php echo get_site_url(); ?>/conditions-generales-de-vente/">CGV</a> | <a href="<?php echo get_site_url(); ?>/mentions-legales/">Mentions Légales</a></p>
            	<p>L'abus d'alcool est dangereux pour la santé, à consommer avec modération.</p>
            	<br/>
                <p style="color: #989696;">Developped by <a style="color: #989696;" href="http://www.brainfactory.fr/" target="_blank"> Brain Factory</a></p>
            </footer>
        </div>
-->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
		
		
        <script src="<?php bloginfo('template_directory'); ?>/js/mobile.js"></script>
        <script src="<?php bloginfo('template_directory'); ?>/js/plugin.js"></script>

		
		<script src="<?php bloginfo('template_directory'); ?>/lightbox/js/lightbox.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/dialogFx.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/classie.js"></script>
		
		<script src="<?php bloginfo('template_directory'); ?>/js/menu-classie.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/dummydata.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/menu-main.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/js/search-hotline-popup.js"></script>
	
		<script src="<?php bloginfo('template_directory'); ?>/js/quantity-input.js"></script>
		
		<?php 
			
			$currentCategory = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
			$currentCategoryParent = '';
			if($currentCategory->parent != 0) { $currentCategoryParent = get_category( $currentCategory->parent ); }
			
		?>
	
	<script>
	(function() {
		
		var submenuIndex = null
		var initSubmenu = false
		
		<?php if($currentCategory && $currentCategoryParent != '') { ?>
			submenuIndex = document.querySelector('ul[data-menu="' + '<?php echo $currentCategoryParent->slug; ?>' + '"]').getAttribute('data-menuindex')
		<?php } ?>
		
		if(submenuIndex != null) {
			initSubmenu = <?php if($currentCategory) { ?> true <?php } else { ?> false <?php } ?>;
		} else {
			initSubmenu = false
		}
	
		var menuEl = document.getElementById('ml-menu'),
			mlmenu = new MLMenu(menuEl, {
				initSubmenu: initSubmenu,
				defaultSlideOnInit: {
					index: parseInt(submenuIndex),
					slug: '<?php echo $currentCategoryParent->slug; ?>',
					name: '<?php echo $currentCategoryParent->name; ?>'	
				},
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
			
			var link = "<?php bloginfo('template_directory') ?>";
			
			$(".payment_method_bacs").append("<img src='" + link + "/images/payment/virement.png'>");
			$(".payment_method_cheque").append("<img src='" + link + "/images/payment/cheque.png'>");
			$(".payment_method_etransactions_std").append("<img src='" + link + "/images/payment/cb.png'>");
			$(".payment_method_etransactions_std").append("<img src='" + link + "/images/payment/visa.png'>");
			$(".payment_method_etransactions_std").append("<img src='" + link + "/images/payment/mastercard.png'>");
			$(".payment_method_etransactions_std").append("<img src='" + link + "/images/payment/etransactions.png'>");
			
		</script>
		
		
		<script>
		     
		      var productsForm = document.getElementById('product-search-form');
		      var domainesForm = document.getElementById('domaine-search-form');
		      productsForm.style.display = 'block';
		      domainesForm.style.display = 'none';
		      var selectPostType = document.getElementById('select-option-post-type');
		      selectPostType.onchange = function () {
		        if (selectPostType.options[selectPostType.selectedIndex].value == 2) {
		        	productsForm.style.display = 'none';
					domainesForm.style.display = 'block';
		        } else {
					productsForm.style.display = 'block';
					domainesForm.style.display = 'none';
				}
			  }
		</script>

</body>
</html>
