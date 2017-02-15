<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <title><?php bloginfo('name'); ?></title>
	    <meta name="description" content="<?php bloginfo('description'); ?>">
	    <meta name="author" content="<?php bloginfo('name'); ?>" />
	    <meta property="og:url" content="<?php echo get_site_url(); ?>/" />
	    <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/images/og-image.png" />
	    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	    <meta property="og:description" content="<?php bloginfo('description'); ?>" />

	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" type="image/png">
	    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.min.css">
	    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
	    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/home-style.css">
	    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/supersized.css">
		
	    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/lightbox/css/lightbox.css">
	    
	    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/scrollbar/css/mCustomScrollbar.css">

	    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

	    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/slider/jquery.bxslider.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/slider/jquery.bxslider.js"></script>
		<link href="<?php bloginfo('template_directory'); ?>/slider/jquery.bxslider.css" rel="stylesheet" />
		
		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/fonts/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/organicfoodicons.css" />
		<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/component.css" />
		<script src="<?php bloginfo('template_directory'); ?>/js/modernizr-custom.js"></script>
		
		
		<script type="text/javascript">
			localStorage.setItem('website', '<?php echo get_site_url(); ?>');
		</script>
    </head>

	<body>

        <!--[if lt IE 8]>
             <p class="chromeframe">Vous utilisez un navigateur obsolète. <a href="http://browsehappy.ch/fr/">Mettez à jour votre navigateur</a> ou <a href="http://www.google.com/chromeframe/?redirect=true">installez Google Chrome Frame</a> pour une meilleure expérience de ce site.</p>
        <![endif]-->
        
        <div class="container">
		<!-- Blueprint header -->
		<header class="bp-header cf">
			<div class="dummy-logo">
				<a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo.png"/></a>
			</div>
		</header>
		<button class="action action--open <?php if( 'domaine' == get_post_type() ) { echo "black-theme"; }?> " aria-label="Open Menu"><span class="icon icon--menu"></span></button>
		<nav id="ml-menu" class="menu">
			<div class="dummy-logo-icon">
				<a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/logo-icon.png"/></a>
			</div>
			<button class="action action--close" aria-label="Close Menu"><span class="icon icon--cross"></span></button>
			<a href="<?php echo get_site_url(); ?>" class="come-back-home"><i class="fa fa-home" aria-hidden="true"></i></a>
			<div class="menu__wrap">
				<ul data-menu="main" class="menu__level">
				<?php 
				$wcatTerms = get_terms('product_cat', array('hide_empty' => 0, 'orderby'=>'id','order'=>'ASC',  'parent' =>0));
				foreach($wcatTerms as $wcatTerm) :
				?>
					 <?php $children = get_terms( $wcatTerm->taxonomy, array( 'parent' => $wcatTerm->term_id, 'hide_empty' => false ) ); ?>
					 
					 <?php if ( $children ) { ?>
						 	<li class="menu__item"><a class="menu__link in" data-submenu="<?php echo $wcatTerm->slug ?>" href="#"><?php echo $wcatTerm->name; ?></a></li>
					 <?php } else { ?>
						 <li class="menu__item"><a class="menu__link" data-submenu="<?php echo $wcatTerm->slug ?>" href="<?php echo get_term_link( $wcatTerm->slug, $wcatTerm->taxonomy );?>"><?php echo $wcatTerm->name; ?></a></li>
					 <?php } ?>
				<?php 
				endforeach; 
				?>
					<li class="menu__item space__item"><a class="menu__link" href="#"></a></li>
					<li class="menu__item"><a class="menu__link" data-submenu="presse-distinctions" href="<?php echo get_site_url(); ?>/presse-distinctions/">Presse & Distinctions</a></li>
					<li class="menu__item"><a class="menu__link" data-submenu="a-propos" href="<?php echo get_site_url(); ?>/a-propos/">Qui sommes nous ?</a></li>
					<li class="menu__item"><a class="menu__link" data-submenu="conditions-generales-de-vente" href="<?php echo get_site_url(); ?>/conditions-generales-de-vente/">CGV</a></li>
					<li class="menu__item"><a class="menu__link" data-submenu="contact" href="<?php echo get_site_url(); ?>/contact/">Contact</a></li>
					<li class="menu__item space__item"><a class="menu__link" href="#"></a></li>
					
					
					<?php 
					
						$args = array( 'post_type' => 'reseau-social', 'posts_per_page' => -1, 'orderby' => 'date', 'order' => 'ASC' );
						
						if( count($args) > 0 ) { ?>
						
							<li class="menu__item">
							
						<?php
						
							$loop = new WP_Query( $args );
						
							while ( $loop->have_posts() ) : $loop->the_post();
								
								$socialID = do_shortcode( "[types field='id'][/types]" );
								$socialLink = do_shortcode( "[types field='lien'][/types]" );
								$socialIcon = do_shortcode( "[types field='icon-fontawesome'][/types]" );
								
								if( $socialID != '' && $socialLink != '' && $socialIcon != '' ) {
								?>
								
								<a class="menu__link menu__link__inline menu__link__social" data-submenu="link-<?php echo $socialID; ?>" href="<?php echo $socialLink; ?>"><i class="<?php echo $socialIcon; ?>" aria-hidden="true"></i></i></a>
								
								<?php
								}
						
							endwhile; ?>
							
							</li>
							
							<?php
						
						}
					?>
					
					<?php wp_reset_query(); ?>
				</ul>
				
				<?php 
				foreach($wcatTerms as $wcatTerm) :
				?>
					<ul data-menu="<?php echo $wcatTerm->slug ?>" class="menu__level">
						<?php
						$wsubargs = array(
						   'hierarchical' => 1,
						   'show_option_none' => '',
						   'hide_empty' => 0,
						   'parent' => $wcatTerm->term_id,
						   'taxonomy' => 'product_cat'
						);
						$wsubcats = get_categories($wsubargs);
						foreach ($wsubcats as $wsc):
						?>
							<li class="menu__item"><a class="menu__link" href="<?php echo get_term_link( $wsc->slug, $wsc->taxonomy );?>"><?php echo $wsc->name;?></a></li>
						<?php
						endforeach;
						?>  
					</ul>
			    <?php 
					endforeach; 
				?>
			</div>
		</nav>
		<div class="content">
			<div class="bp-header__main <?php if(is_home() || is_product_category() || is_product() || is_404() ) { echo "home"; } if(is_home()) { echo " up"; } if( 'domaine' == get_post_type() ) { echo " black-theme"; } ?> ">
				<nav class="bp-nav">
					<a class="bp-nav__item" href="<?php echo get_site_url(); ?>/mon-compte/" data-info="<?php if(is_user_logged_in()){ echo 'Compte'; } else { echo 'Connexion / Inscription'; } ?>"><i class="fa fa-user" aria-hidden="true"></i></a>
					<a class="bp-nav__item" href="<?php echo wc_get_cart_url(); ?>" data-info="Panier"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a>
					<a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>">
						<?php 
						if( WC()->cart->get_cart_contents_count() > 1 ) {
							echo sprintf ( _n( '%d produits', '%d produits', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total();
						} else {
							echo sprintf ( _n( '%d produit', '%d produit', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?> - <?php echo WC()->cart->get_cart_total();
						}
						?>
					</a>
				</nav>
			</div>