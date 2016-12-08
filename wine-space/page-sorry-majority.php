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
			<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style_video.css">
	    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bigvideo.css">

	    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/lightbox/css/lightbox.css">

	    <script src="<?php bloginfo('template_directory'); ?>/js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/slider/jquery.bxslider.min.js"></script>
		<script src="<?php bloginfo('template_directory'); ?>/slider/jquery.bxslider.js"></script>
		<link href="<?php bloginfo('template_directory'); ?>/slider/jquery.bxslider.css" rel="stylesheet" />
    </head>

    <style>
		body{
			background: #fff;
		}
		#majority{
			margin: auto;
			margin-top: 5%;
			text-align: center;
		}
		#majority h1{
			line-height: 1;
		}
		#majority p{
			padding: 0 0 1em 0;
		}
		#majority input{
			margin-bottom: 1em;
		}
		#majority img{
			padding: 2em 0;
		}
	</style>

	<body>
		<div id="majority">
			<h1>Désolé, en raison de votre âge,<br/> vous ne pouvez accéder au site <?php bloginfo('name'); ?></h1>
			 <img src="<?php bloginfo('template_directory'); ?>/images/logo.png"/>
			 <p>Pour accéder au site, vous devez avoir l'âge légal pour acheter ou consommer de l'alcool dans votre pays de résidence.</p>
		</div>
	</body>
</html>
