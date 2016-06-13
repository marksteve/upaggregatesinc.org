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

<style>
#his { 
  background: url("http://upaggregatesinc.org/wp-content/uploads/2014/12/cover.jpg") no-repeat center center fixed; 
  margin: 0 auto;
  background-size: cover;
  width: 100%;
  min-height: 250px;
  padding-top: 100px;
  padding-bottom: 50px;
  position: relative; 
}

#his p, #his h3 {
	color: #eee;
	margin: 10px 50px 0px 50px;
}

.subtitle a {
	color: #999;
}

.subtitle a:hover {
	color: #333;
}

.fancybox-close:hover {
	opacity: 1;
	background-color:#63c5df;
}

.fancybox-nav:hover span {
	opacity: 1;
	background-color:#63c5df;
}

#apps, #alum {
	margin-top: -100px;
}

#member .span12 {
	float: left;
	min-height: 1px;
	margin-left: 0;
	padding-left: 0px;
}

#home-slider {
	position: relative;
	overflow: hidden;
	height: 100%;
}

#home-slider .overlay { 
	position: absolute;
	width: 100%;
	height: 100%;
	background: #222;
	opacity: 0.7;
	filter: alpha(opacity=70);
	z-index: 0;
}

#home-slider .slider-text {
	position: absolute;
	left: 50%;
	top: 50%;
	margin: -150px 0 0 -585px;
	width: 1170px;
	height: 250px;
	text-align: center;
	z-index: 2;	
}

#home-slider #slidecaption {
	width: 100%;
	line-height: 250px;
	margin: 0;
	text-align: center;
	text-shadow: none;	
}

#home-slider .slide-content {
	font-size: 60px;
	color: #FFFFFF;
	letter-spacing: -3px;
	text-transform: uppercase;	
}

#home-slider .control-nav {
	position: absolute;
	width: 100%;
	background: #2F3238;
	height: 50px;
	bottom: 0;
	z-index: 2;
}

#home-slider #nextslide,
#home-slider #prevslide {
	background-image: none;
	background-color: #26292E;
	display: inline-block;
	margin: 0;
	position: relative;
	top: 0;
	left: 0;
	right: 0;
	width: 50px;
	height: 50px;
	opacity: 1;
	filter: alpha(opacity=100);
	
	-webkit-transition: background 0.1s linear 0s;	
	   -moz-transition: background 0.1s linear 0s;
		 -o-transition: background 0.1s linear 0s;
		    transition: background 0.1s linear 0s;
}

#home-slider #nextslide {
	margin-left: -3px;	
}

#home-slider #nextsection {
	float:right;
}

#home-slider #nextslide:hover,
#home-slider #prevslide:hover {
	background: #63c5df;
}

#home-slider #nextslide i,
#home-slider #prevslide i {
	font-size: 16px;
	color: #FFFFFF;
	position: absolute;
	left: 50%;
	top: 50%;
	margin-top: -7px;
	line-height: 1em;
}

#home-slider #nextslide i {
	margin-left: -8px;	
}

#home-slider #prevslide i {
	margin-left: -9px;	
}

#home-slider ul#slide-list {
	top: 50%;
	padding: 0;
	margin:-6px 0 0 0;	
}

#home-slider ul#slide-list li {
	margin-right: 12px;
}

#home-slider ul#slide-list li:last-child {
	margin-right: 0;	
}

#home-slider ul#slide-list li a {
	background-color: #6E7074;
	background-image: none;
	width: 12px;
	height: 12px;
	
	-webkit-border-radius: 999px;
	-moz-border-radius: 999px;
	border-radius: 999px;	
	
	-webkit-transition: background 0.1s linear 0s;	
	   -moz-transition: background 0.1s linear 0s;
		 -o-transition: background 0.1s linear 0s;
		    transition: background 0.1s linear 0s;
}

#home-slider ul#slide-list li a:hover {
	background-color: #FFFFFF;	
}

#home-slider ul#slide-list li.current-slide a,
#home-slider ul#slide-list li.current-slide a:hover {
	background: #63c5df;
}

#home-slider #nextsection {
	background-color: #26292E;
	margin: 0;
	position: relative;
	float:right;
	width: 50px;
	height: 50px;
	
	-webkit-transition: background 0.1s linear 0s;	
	   -moz-transition: background 0.1s linear 0s;
		 -o-transition: background 0.1s linear 0s;
		    transition: background 0.1s linear 0s;
}

#home-slider #nextsection:hover {
	background: #63c5df;
}

#home-slider #nextsection i {
	font-size: 16px;
	color: #FFFFFF;
	position: absolute;
	left: 50%;
	top: 50%;
	margin-top: -7px;
	line-height: 1em;
}

#home-slider #nextsection i {
	margin-left: -7px;	
}

video#bgvid {
position: fixed; right: 0; bottom: 0;
min-width: 100%; min-height: 100%;
width: auto; height: auto; z-index: -100;
background: url(http://upaggregatesinc.org/wp-content/uploads/2014/12/membership.jpg) no-repeat;
background-size: cover;
}

</style>


<meta charset="<?php bloginfo( 'charset' ); ?>" />
<?php fruitful_get_favicon(); ?>



</head>