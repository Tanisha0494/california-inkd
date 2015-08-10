<?php /* Template Name: Gallery */
get_header(); //include header.php ?>

<main class="cf">

	<?php //THE LOOP
	if(function_exists('cal_gallery')){
	cal_gallery(); 
	}else{
		if( have_posts() ): ?>
		
		<?php while( have_posts() ): the_post(); ?>
	
		<section id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> >
		
		<a href="<?php the_permalink(); ?>"> 	
			
			<h2 class="entry-title" > 

				

					<?php the_title(); ?> 

				

			</h2>

			<?php the_post_thumbnail('crew', array('class' => 'crew' )); //featured image (activate in functions.php) ?>

			<article class="entry-content cf" >
				<?php //logic!!! show short content on 'archive views' , show full content on single posts pages 
						the_excerpt();//shortened content
				?>
			</article>
			</a>			
		</section><!-- end post -->
		
		<?php endwhile; ?>

		<section class="pagination">
			<?php 
			//if pagenavi plugin is available, use it

			if(function_exists('wp_pagenavi')){
				wp_pagenavi();
			}
			else{
			//pagenavi not available, use the standard wordpress navigation
			previous_posts_link( '&larr; Newer Posts' );

			next_posts_link( 'Older Posts &rarr;' );

			}
			 ?>
		</section>
		
		<?php else: ?>

	<h2>Sorry, no posts found</h2>
	<p>Try using the search bar instead</p>

	<?php endif;  //end THE LOOP ?>

<?php  } ?>

</main>

<?php //get_sidebar(); //include sidebar.php ?>

<?php get_footer(); //include footer.php ?>