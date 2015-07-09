<?php  
/*
Plugin Name: Hamburger Menu
Description: A basic plugin that adds hamburger/toggle nav functionality 
Author: Tanisha Rose
Plugin URI: http://path to documentation
Author URI:
Version: 0.1
License: GPLv3
*/

add_action('wp_enqueue_scripts', 'cal_responsive_menu');

function cal_responsive_menu(){

	$rnstyle_path = plugins_url('css/responsive-nav.css', __FILE__);
	wp_enqueue_style('rnstylesheet', $rnstyle_path);

	$style_path = plugins_url('css/style.css', __FILE__);
	wp_enqueue_style('stylesheet', $style_path);

	$rn_path = plugins_url('js/responsive-nav.js', __FILE__);
	wp_enqueue_script('responsivenav', $rn_path);

	$custom_path = plugins_url('js/custom.js', __FILE__);
	wp_enqueue_script('customjs', $custom_path, 'responsivenav', 0.1, true
		);
}

function cal_hamburger_button(){
	echo '<a id="nav-toggle" href="#"><span></span></a>';
}