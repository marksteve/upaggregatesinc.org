<?php
/*
Plugin Name: Under Construction Page
Plugin URI: http://nitinmaurya.com/
Description: Set Under Construction Message for website.
Version: 1.1
Author: Nitin Maurya
Author URI: http://nitinmaurya.com/
License: A "Slug" license name e.g. GPL2
*/
register_activation_hook(__FILE__,'under_construction_install');
function under_construction_install(){
	global $wp_version;
	if(version_compare($wp_version, "3.2.1", "<")) {
		deactivate_plugins(basename(__FILE__));
		wp_die("This plugin requires WordPress version 3.2.1 or higher.");
	}
	set_under_construction();
}
add_action('admin_menu','under_construction_menu');
    function under_construction_menu(){
        add_menu_page('Under Construction', 'Under Construction','administrator', 'under-construction.php', 'under_construction_action', plugins_url('uc.png', __FILE__));
   }
   
   
function under_construction_action(){
	$option_name1 = 'set_opt' ;
	$option_name2 = 'set_msg' ;
	$option_name3 = 'set_font' ;
	$option_name4 = 'set_fb' ;
	$option_name5 = 'set_tweet' ;
	$option_name6 = 'set_size' ;
	switch($_REQUEST[act]) {
			case "save":
				set_under_construction();
				echo '<div class="updated below-h2" id="message" style="position:relative; clear:both;"><p>Under Construction: '.$_REQUEST['set_opt'].'</p></div>';
				break;
			default:
				
	}
	$set_opt=get_option( $option_name1 );
	$set_msg=get_option( $option_name2 );
	$set_font=get_option( $option_name3 );
	$set_fb=get_option( $option_name4 );
	$set_tweet=get_option( $option_name5 );
	$set_size=get_option( $option_name6 );
	require_once('form.php');
}   
   

function set_under_construction(){
		$option_name1 = 'set_opt' ;
		$option_name2 = 'set_msg' ;	
		$option_name3 = 'set_font' ;
		$option_name4 = 'set_fb' ;
		$option_name5 = 'set_tweet' ;
		$option_name6 = 'set_size' ;
		$new_value1 = ($_REQUEST['set_opt']=="")?'No': $_REQUEST['set_opt'];
		if ( get_option( $option_name1 ) !== false ) {
			update_option( $option_name1, $new_value1 );
		} else {
			$deprecated = null;
			$autoload = 'no';
			add_option( $option_name1, $new_value1, $deprecated, $autoload );
		}
		
		
		$new_value2 = ($_REQUEST['set_msg']=="")?'Website is Coming Soon': $_REQUEST['set_msg'];
		if ( get_option( $option_name2 ) !== false ) {
			update_option( $option_name2, $new_value2 );
		} else {
			$deprecated = null;
			$autoload = 'no';
			add_option( $option_name2, $new_value2, $deprecated, $autoload );
		}
		
		
		$new_value3 = ($_REQUEST['set_font']=="")?'Arial': $_REQUEST['set_font'];
		if ( get_option( $option_name3 ) !== false ) {
			update_option( $option_name3, $new_value3 );
		} else {
			$deprecated = null;
			$autoload = 'no';
			add_option( $option_name3, $new_value3, $deprecated, $autoload );
		}
		
		$new_value4 = ($_REQUEST['set_fb']=="")?'#': $_REQUEST['set_fb'];
		if ( get_option( $option_name4 ) !== false ) {
			update_option( $option_name4, $new_value4 );
		} else {
			$deprecated = null;
			$autoload = 'no';
			add_option( $option_name4, $new_value4, $deprecated, $autoload );
		}
		
		$new_value5 = ($_REQUEST['set_tweet']=="")?'#': $_REQUEST['set_tweet'];
		if ( get_option( $option_name5 ) !== false ) {
			update_option( $option_name5, $new_value5 );
		} else {
			$deprecated = null;
			$autoload = 'no';
			add_option( $option_name5, $new_value5, $deprecated, $autoload );
		}	
		
		$new_value6 = ($_REQUEST['set_size']=="")?'14': $_REQUEST['set_size'];
		if ( get_option( $option_name6 ) !== false ) {
			update_option( $option_name6, $new_value6 );
		} else {
			$deprecated = null;
			$autoload = 'no';
			add_option( $option_name6, $new_value6, $deprecated, $autoload );
		}
		
	
		
}

function show_uc(){
	$option_name1 = 'set_opt' ;
	$option_name2 = 'set_msg' ;
	$option_name3 = 'set_font' ;
	$option_name4 = 'set_fb' ;
	$option_name5 = 'set_tweet' ;
	$option_name6 = 'set_size' ;
	$set_opt=get_option( $option_name1 );
	$set_msg=get_option( $option_name2 );
	$set_font=get_option( $option_name3 );
	$set_fb=get_option( $option_name4 );
	$set_tweet=get_option( $option_name5 );	
	$set_size=get_option( $option_name6 );	
	$under_msg="";
	if($set_opt=='Yes'){
		if($set_font!='Arial'){
			$render_font=str_replace('+',' ',$set_font);
			$under_msg.="<link href='http://fonts.googleapis.com/css?family=".$set_font."' rel='stylesheet' type='text/css'><style>.under_css{font-family: '".$render_font."', sans-serif;margin:0 auto; text-align:center;font-size:".$set_size."px;padding-top:30px;}</style>";
		}else{
			$under_msg.="<style>.under_css{font-family: Arial, sans-serif;margin:0 auto; text-align:center;font-size:".$set_size."px;padding-top:30px;}</style>";
		}
		if($set_fb!="#"){
			$fb_msg="<a href='".$set_fb."' target='_blank'><img src='wp-content/plugins/under-construction-page/facebook.png'></a>";
		}
		if($set_tweet!="#"){
			$tweet_msg="<a href='".$set_tweet."' target='_blank'><img src='wp-content/plugins/under-construction-page/twitter.png'></a>";
		}
		
		$under_msg.="<div class='under_css'>".$set_msg."<br>".$fb_msg."&nbsp;".$tweet_msg."</div>";
		echo $under_msg;
		exit(0);
	}
	
}
add_action('wp_head', 'show_uc');


?>