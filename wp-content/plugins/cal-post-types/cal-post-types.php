<?php /*
Plugin Name: Custom Post Types
Description:  Adds Post types to the site
Author: Tanisha Rose
Plugin URI: http://
Author URI:
Version: 0.1
License: GPLv3
*/ 

/**
 * Create Products post type
 * @since 0.1
 */

add_action('init', 'cal_setup_merch');

function cal_setup_merch(){
	register_post_type('merch', array(
    	'public' 		=> true,
    	'has_archive' 	=> true,
    	'menu_position'	=> 5,
    	'menu_icon'		=> 'dashicons-products',
    	'supports'		=> array('title','editor','thumbnail','excerpt','custom-fields'),
    	'labels' 		=> array(
    		'name' 			=> 'Merch',
    		'singular_name' => 'Merch Item',
    		'add_new_item'	=> 'Add New Merch Item',
    		'not_found'		=> 'No merch found.',
    	),

		) );

	// add the Brand taxonomy to products
	register_taxonomy( 'brand', 'merch', array(
		'hierarchical' => true,  //checklist interface, can have parent/child terms
		'labels' 	   => array(
			'name' 			=> 'Brands',
			'singular_name' => 'Brand',
			'search_items'	=> 'Search Brands',
			'add_new_item'	=> 'Add New Brand',
			),
	));

		// add the Brand taxonomy to products
	register_taxonomy( 'size', 'merch', array(
		'hierarchical' => true,  //checklist interface, can have parent/child terms
		'labels' 	   => array(
			'name' 			=> 'Sizes',
			'singular_name' => 'Size',
			'search_items'	=> 'Search Sizes',
			'add_new_item'	=> 'Add New Size',
			),
	));

	register_taxonomy( 'color', 'merch', array(
		'hierarchical' => false,  //comma - separated interfac, flat list
		'labels' 	   => array(
			'name' 			=> 'Colors',
			'singular_name' => 'Color',
			'search_items'	=> 'Search Colors',
			'add_new_item'	=> 'Add New Color',
			),
	));	

	register_taxonomy( 'feature', 'merch', array(
		'hierarchical' => false,  //comma - separated interfac, flat list
		'labels' 	   => array(
			'name' 			=> 'Features',
			'singular_name' => 'Feature',
			'search_items'	=> 'Search Features',
			'add_new_item'	=> 'Add New Feature',
			),
	));	
}

add_action('init', 'cal_setup_crew');

function cal_setup_crew(){
	register_post_type('crew', array(
    	'public' 		=> true,
    	'has_archive' 	=> true,
    	'menu_position'	=> 5,
    	'menu_icon'		=> 'dashicons-groups',
    	'supports'		=> array('title','editor','thumbnail','excerpt','custom-fields'),
    	'labels' 		=> array(
    		'name' 			=> 'Crew',
    		'singular_name' => 'Crew Member',
    		'add_new_item'	=> 'Add New Crew Member',
    		'not_found'		=> 'No crew members found.',
    	),

		) );
	
	register_taxonomy( 'crew_type', 'crew', array(
		'hierarchical' => true,  //comma - separated interfac, flat list
		'labels' 	   => array(
			'name' 			=> 'Types',
			'singular_name' => 'Type',
			'search_items'	=> 'Search Types',
			'add_new_item'	=> 'Add New Type',
			),
	));	
}

add_action('init', 'cal_setup_gallery');

function cal_setup_gallery(){
	register_post_type('gallery', array(
    	'public' 		=> true,
    	'has_archive' 	=> true,
    	'menu_position'	=> 5,
    	'menu_icon'		=> 'dashicons-format-gallery',
    	'supports'		=> array('title','editor','thumbnail','excerpt','custom-fields'),
    	'labels' 		=> array(
    		'name' 			=> 'Gallery',
    		'singular_name' => 'Gallery Item',
    		'add_new_item'	=> 'Add New Gallery Items',
    		'not_found'		=> 'No gallery items found.',
    	),

		) );
	
	register_taxonomy( 'artist', 'gallery', array(
		'hierarchical' => false,  //comma - separated interfac, flat list
		'labels' 	   => array(
			'name' 			=> 'Artists',
			'singular_name' => 'Artist',
			'search_items'	=> 'Search Artists',
			'add_new_item'	=> 'Add New Artist',
			),
	));

	register_taxonomy( 'style', 'gallery', array(
		'hierarchical' => false,  //comma - separated interfac, flat list
		'labels' 	   => array(
			'name' 			=> 'Styles',
			'singular_name' => 'Style',
			'search_items'	=> 'Search Styles',
			'add_new_item'	=> 'Add New Style',
			),
	));	

	register_taxonomy( 'color', 'gallery', array(
		'hierarchical' => false,  //comma - separated interfac, flat list
		'labels' 	   => array(
			'name' 			=> 'Colors',
			'singular_name' => 'Color',
			'search_items'	=> 'Search Colors',
			'add_new_item'	=> 'Add New Color',
			),
	));	
}

add_action('init', 'cal_setup_slides');

function cal_setup_slides(){
	register_post_type('slides', array(
    	'public' 		=> true,
    	'has_archive' 	=> true,
    	'menu_position'	=> 5,
    	'menu_icon'		=> 'dashicons-images-alt2',
    	'supports'		=> array('title','editor','thumbnail'),
    	'labels' 		=> array(
    		'name' 			=> 'Slides',
    		'singular_name' => 'Slide',
    		'add_new_item'	=> 'Add New Slide',
    		'not_found'		=> 'No slides found.',
    	),

		) );
}

function rad_rewrite_flush(){
	cal_setup_merch();//call the func. that registers CPT/Taxonomies
	
	flush_rewrite_rules();//recreate the htaccess rules
}

register_activation_hook( __FILE__, 'rad_rewrite_flush' );

?>