<?php
/** 
* The Header for our theme. 
* Displays all of the <head> section and everything up till <div id="main"> 
**/
?><!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

	<title><?php wp_title(); ?></title> 

	<meta name="description" content="<?php bloginfo('description'); ?>" /> 


	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="HandheldFriendly" content="true"/>
	<meta name="MobileOptimized" content="320"/>   


	<link href="<?php bloginfo('template_directory');?>/_include/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/_include/css/main.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/_include/css/supersized.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/_include/css/supersized.shutter.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/_include/css/fonts.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/_include/css/shortcodes.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/_include/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/_include/css/responsive.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/_include/css/supersized.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/_include/css/supersized.shutter.css" rel="stylesheet">

	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

	<link rel="shortcut icon" href="#">

	<link rel="apple-touch-icon" href="#">
	<link rel="apple-touch-icon" sizes="114x114" href="#">
	<link rel="apple-touch-icon" sizes="72x72" href="#">
	<link rel="apple-touch-icon" sizes="144x144" href="#">

	<script src="<?php bloginfo('template_directory');?>/_include/js/modernizr.js"></script>

	<script type="text/javascript">

	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'Insert Your Code']);
	  _gaq.push(['_trackPageview']);

	  (function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>

	<script type="text/javascript" src="<?php bloginfo('template_directory');?>/_include/js/skrollr.js"></script>
	<script type="text/javascript">
	skrollr.init({
		forceHeight: false
	});
	</script>


<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php fruitful_get_favicon(); ?>

</head>