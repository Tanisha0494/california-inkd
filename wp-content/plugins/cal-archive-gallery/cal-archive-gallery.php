<?php 
/*
Plugin Name: Archive Gallery
Description: A plugin that makes a simple gallery that resembles the google images gallery 
Author: Tanisha Rose
Plugin URI: http://path to documentation
Author URI:
Version: 0.1
License: GPLv3
*/

add_action('init', 'cal_image_sizes');

function cal_image_sizes(){
add_image_size( 'gallery-small' , 200 , 200 , true );
add_image_size( 'gallery-large' , 400 , 400 , true );
}

function cal_gallery(){
	if(is_post_type_archive('gallery')){
		$type="gallery";
	}elseif(is_post_type_archive('merch')){
		$type="merch";
	}
	//additional query object to get up to 5 slides
	$gallery_query = new WP_Query(array(
		'post_type' => $type,
		'showposts'	=> 1000,
		'nopaging'  => true,
		)); 

	if( $gallery_query->have_posts() ){
?>
<ul id="og-grid" class="og-grid">

	<?php while($gallery_query->have_posts()){ 
		$gallery_query-> the_post(); 
		$thumb = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()), 'gallery-large' );
		$url = $thumb['0']; 
		$full = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id()));
		$full_url = $thumb['0']; 
		?>
		
	<li>
		<a href="<?php the_permalink() ?>" data-largesrc="<?php echo $url ?>" data-title="<?php the_title(); ?>" data-description="<?php the_content(); ?>">

			<?php the_post_thumbnail('gallery-small'); ?>

		</a>
	</li>
	<?php }//end while ?>
</ul>
<?php

}//end if
wp_reset_postdata();
}
add_action('wp_enqueue_scripts', 'cal_gallery_scripts');

function cal_gallery_scripts(){
	if(is_archive()):
	wp_enqueue_script('jquery');

	$g_path = plugins_url('js/grid.js' , __FILE__);
	wp_enqueue_script('cal-grid-js',$g_path,'jquery',false, true);

	$style_path = plugins_url('css/component.css' , __FILE__);
	wp_enqueue_style('cal-gallery-css', $style_path);

	$m_path = plugins_url('js/modernizr.custom.js' , __FILE__);
	wp_enqueue_script('cal-modernizr-js',$m_path);

	endif;
}	
 ?>