<!DOCTYPE html>
<html>
    <head>
	    <meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <title><?php bloginfo('name'); ?></title>
	    <meta name="description" content="<?php bloginfo('description'); ?>">
	    <meta name="author" content="<?php bloginfo('name'); ?>" />
	    <meta property="og:url" content="<?php echo get_site_url(); ?>/" />
	    <meta property="og:image" content="<?php echo get_site_url(); ?>/images/og-image.png" />
	    <meta property="og:site_name" content="<?php bloginfo('name'); ?>" />
	    <meta property="og:description" content="<?php bloginfo('description'); ?>" />

	    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.png" type="image/png">
	    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/normalize.min.css">
	    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
	    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/home-style.css">
	    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/supersized.css">

		<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style_video.css">
	    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bigvideo.css">

	    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/lightbox/css/lightbox.css">

	    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

	    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/slider/jquery.bxslider.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/slider/jquery.bxslider.js"></script>
		<link href="<?php bloginfo('template_directory'); ?>/slider/jquery.bxslider.css" rel="stylesheet" />
		
		<script type="text/javascript">
			localStorage.setItem('website', '<?php echo get_site_url(); ?>');
		</script>
    </head>

	<body>

        <!--[if lt IE 8]>
             <p class="chromeframe">Vous utilisez un navigateur obsolète. <a href="http://browsehappy.ch/fr/">Mettez à jour votre navigateur</a> ou <a href="http://www.google.com/chromeframe/?redirect=true">installez Google Chrome Frame</a> pour une meilleure expérience de ce site.</p>
        <![endif]-->
        <div class="header-container" id="top">
            <header class="wrapper clearfix">
                <h1 class="title"><a href="<?php echo get_site_url(); ?>/"><span></span></a></h1>
            </header>
        </div>
        <nav id="nav-container">
            <ul class="wrapper clearfix menu_complete">
                <li><a href="<?php echo get_site_url(); ?>/histoire/">Histoire</a></li>
                <li><a href="<?php echo get_site_url(); ?>/terroir/">Le terroir</a></li>
                <li><a href="<?php echo get_site_url(); ?>/#cuvees">Nos cuvées</a></li>
                <li><a class="big" href="<?php echo get_site_url(); ?>/partenaires-distributeurs/">Partenaires<br/>distributeurs</a></li>
                <li><a class="big" href="<?php echo get_site_url(); ?>/operations-speciales/">Opérations<br/>spéciales</a></li>
                <li><a href="<?php echo get_site_url(); ?>/phototeque/">Phototèque</a></li>
                <li><a href="<?php echo get_site_url(); ?>/blog/">Actualités</a></li>
                <li><a href="<?php echo get_site_url(); ?>/#contact">Contact</a></li>
            </ul>
            <ul class="wrapper clearfix menu_responsive">
            	<li id="open_menu" data-dialog="somedialog" style="width: 100%; cursor:pointer;"><img src="<?php bloginfo('template_directory'); ?>/images/menu/menu.svg" style="width: auto; height: 100%;" /></li>
            </ul>
        </nav>
