<?php
/** 
* The Header for our theme. 
* Displays all of the <head> section and everything up till <div id="main"> 
* @package WordPress 
* @subpackage Fruitful theme 
* @since Fruitful theme 1.0 
**/
?><!DOCTYPE html>
<!--[if IE 7]><html class="ie ie7" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="ie ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php fruitful_metadevice(); ?>
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

	<link href="<?php bloginfo('template_directory');?>/_include/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/_include/css/supersized.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/_include/css/supersized.shutter.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/_include/css/fonts.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/_include/css/shortcodes.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/_include/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/_include/css/responsive.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/_include/css/supersized.css" rel="stylesheet">
	<link href="<?php bloginfo('template_directory');?>/_include/css/supersized.shutter.css" rel="stylesheet">
		<link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
	
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
	
	<!-- Js -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
	<script src="<?php bloginfo('template_directory');?>/_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
	<script src="<?php bloginfo('template_directory');?>/_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
	<script src="<?php bloginfo('template_directory');?>/_include/js/waypoints.js"></script> <!-- WayPoints -->
	<script src="<?php bloginfo('template_directory');?>/_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
	<script src="<?php bloginfo('template_directory');?>/_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
	<script src="<?php bloginfo('template_directory');?>/_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
	<script src="<?php bloginfo('template_directory');?>/_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
	<script src="<?php bloginfo('template_directory');?>/_include/js/jquery.tweet.js"></script> <!-- Tweet -->
	<script src="<?php bloginfo('template_directory');?>/_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
	<script src="<?php bloginfo('template_directory');?>/_include/js/main.js"></script> <!-- Default JS -->
	<!-- End Js -->


<?php fruitful_get_favicon(); ?>
<!--[if lt IE 9]><script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script><![endif]-->
<?php wp_head(); ?> 
</head>
<body <?php 
		$additional_body_classes = '';
		if (class_exists('Woocommerce')) {
			if (is_shop()) { $additional_body_classes .= 'shop-page '; }
		} 
		$theme_options = fruitful_ret_options("fruitful_theme_options");
		if (isset($theme_options['responsive']) && ($theme_options['responsive'] == 'on')) {
			$additional_body_classes .= 'responsive ';
		}
		body_class(trim($additional_body_classes)); 
	  ?>>
	
			<div class="head-container">
					<header id="masthead" class="site-header" role="banner">
					<div class="sticky-nav">
					<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
						<?php	
							if (fruitful_is_social_header()) { 
								fruitful_get_socials_icon(); 
							} 
									
							$logo_pos_class = $menu_pos_class = '';
							$options = fruitful_get_theme_options();
							$logo_position = $options['logo_position'];
							$menu_position = $options['menu_position'];
							
							$logo_pos_class = fruitful_get_class_pos($logo_position);
							$menu_pos_class = fruitful_get_class_pos($menu_position);
						?>
						<div id="logo">
						<div data-originalstyle="<?php echo $logo_pos_class; ?>" class="header-hgroup <?php echo $logo_pos_class; ?>">  
							<?php echo fruitful_get_logo(); ?>
						</div>	
						</div>
						
						<nav id="menu">	
						<div data-originalstyle="<?php echo $menu_pos_class; ?>" class="menu-wrapper <?php echo $menu_pos_class; ?>">
							<?php fruitful_get_languages_list(); ?>
								
							<?php if (class_exists('Woocommerce')) { ?>
								<?php if (!empty($theme_options['showcart'])) {
										if (($theme_options['showcart']) == 'on'){?>
											<div class="cart-button">
												<a href="<?php echo get_permalink( woocommerce_get_page_id( 'cart' ) ); ?>" class="cart-contents">
													<div class="cart_image"></div> 
													<span class="num_of_product_cart"><?php global $woocommerce;
													echo $woocommerce->cart->cart_contents_count; ?> </span>
												</a>
											</div>							
									<?php } ?>
								<?php } ?>
							<?php } ?>
								
							<nav role="navigation" class="site-navigation main-navigation">
								<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>					
							</nav><!-- .site-navigation .main-navigation -->	
							</nav>
						</div>
					</div>
					
					</header><!-- #masthead .site-header -->	

				</div>
		
			<div id="icons" class="page-alternate">
					<div class="span-3">
						<a href="<?php get_home_url();?>/upaggregatesinc/cetalk"><img src="<?php bloginfo('template_directory');?>/_include/img/icons/org/about.png" alt="CE Talk"></a>
					</div>

					<div class="span-3 profile">
						<a href="<?php get_home_url();?>/upaggregatesinc/cetalk"><img src="<?php bloginfo('template_directory');?>/_include/img/icons/org/history.png" alt="Photofest"></a>
					</div>
							
					<div class="span-3 profile">
						<a href="<?php get_home_url();?>/upaggregatesinc/cetalk"><img src="<?php bloginfo('template_directory');?>/_include/img/icons/org/structure.png" alt="ES Quiz"></a>
					</div>
			</div>
		
		
		<div class="container">		
				<div class="sixteen columns">			
				</div>		

			
		</div>		
		<div id="page" class="hfeed site">
		<div class="container page-container">		
			<?php do_action( 'before' ); ?>		
				<div class="sixteen columns">