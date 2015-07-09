<?php
/*
Plugin Name: Front Page Slideshow
Description: A plugin that let you put a slideshow on a homepage 
Author: Tanisha Rose
Plugin URI: http://path to documentation
Author URI:
Version: 0.1
License: GPLv3
*/

function cal_slider(){
	//additional query object to get up to 5 slides
	$slide_query = new WP_Query(array(
		'post_type' => 'slides',
		'showposts'	=> 5,
		'nopaging'  => true,
		)); 

	if( $slide_query->have_posts() ){
?>

<section id="slidr-section" class="cf">
    	<?php while($slide_query->have_posts()){ 
			$slide_query-> the_post();  ?>
        <figure data-slidr="<?php the_title(); ?>"><?php the_post_thumbnail('slide'); ?>
        <figcaption>
        	<h2> <?php the_title(); ?> </h2>
        	<p> <?php the_content(); ?> </p>
        </figcaption>
        </figure>
        <?php }//end while ?>  
</section>

<?php

	}//endif
	wp_reset_postdata();
}

/**
 * Attach CSS and Javascript
 */



add_action('wp_enqueue_scripts', 'cal_slideshow_scripts');

function cal_slideshow_scripts(){
	if(is_front_page()):
	$s_path = plugins_url('js/slidr.js' , __FILE__);
	wp_enqueue_script('cal-slideshow-js',$s_path);

	$custom_path = plugins_url('js/custom.js' , __FILE__);
	wp_enqueue_script('cal-custom-js',$custom_path,'cal-slideshow-js',"",true);
	endif;
}
