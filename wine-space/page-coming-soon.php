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
	    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css"><link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/supersized.css">

	    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    </head>

    <style>
		body{
			background: #fff;
		}
		#majority{
			margin: auto;
		    padding: 2rem;
		    text-align: center;
		    position: absolute;
		    top: 50%;
		    left: 50%;
		    margin-left: -32.5rem;
		    margin-top: -22.5rem;
		    width: 65rem;
		    height: 45rem;
		}
		#majority h1{
			line-height: 1;
		}
		#majority p{
			padding: 0 0 1em 0;
			font-size: 1.6rem;
		}
		#majority input{
			margin-bottom: 1em;
		}
		#majority img{
			padding: 2em 1rem;
			width: 10rem;
			max-width: 100%;
		}
		
		@media screen and (max-width: 50em) {

			#majority{
			    position: relative;
			    top: inherit;
			    left: inherit;
			    margin-left: auto;
			    margin-top: auto;
			    width: auto;
			    height: auto;
			}
		}
		
		@media screen and (max-height: 30em) {

			#majority{
			    position: relative;
			    top: inherit;
			    left: inherit;
			    margin-left: auto;
			    margin-top: auto;
			    width: auto;
			    height: auto;
			}
		}
		
	</style>

	<body>
		<div id="majority">
			 <h1>Le site <?php bloginfo('name'); ?> est actuellement en cours de reconstruction.</h1>
			 <img src="<?php bloginfo('template_directory'); ?>/images/logo-icon.png"/>
			 <p>Nous vous prions de bien vouloir nous excuser pour le dérangement occasionné. Nous restons tout de même disponible à la boutique.</p>
		</div>
	</body>
</html>
