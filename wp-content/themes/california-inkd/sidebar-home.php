<aside class="cf">
<?php if(!dynamic_sidebar('Front Page Sidebar')){ ?>
	<section class="widget">
	<h2>Tags</h2>
	<?php wp_tag_cloud(); ?>
	</section>

	<section class="widget">
	<h2>Tags</h2>
	<?php wp_tag_cloud(); ?>
	</section>

	<section class="widget">
	<h2>Tags</h2>
	<?php wp_tag_cloud(); ?>
	</section>
<?php } ?>

</aside>
<aside class="cf">
<?php  
 	$gallery_query = new WP_Query(array(
		'post_type' => 'gallery',
		'showposts'	=> 3,
		'nopaging'  => false,
		)); 

	if( $gallery_query->have_posts() ){ ?>

<section class="gallery-widget widget cf">
	<h2>Latest Tattoos</h2>
	<?php while($gallery_query->have_posts()){ 
	$gallery_query-> the_post(); 
	?>
	<a href="<?php the_permalink(); ?>">
	<figure>
	<?php the_post_thumbnail('gallery-large'); ?>
	<figcaption>
		<h3><?php the_title(); ?></h3>
	</figcaption>
	</figure>
	</a>
	<?php }//end while ?>
</section>

<?php

}//end if
wp_reset_postdata();
 ?>
</aside>