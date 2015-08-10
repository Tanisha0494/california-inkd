<?php get_header(); //include header.php ?>

<main class="cf">
	
	<?php //THE LOOP
		if( have_posts() ): ?>
		
		<?php while( have_posts() ): the_post(); ?>

		<section id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> >
			
			<h2 class="entry-title" > 

				<a href="<?php the_permalink(); ?>"> 

					<?php the_title(); ?> 

				</a>

			</h2>

			<?php the_post_thumbnail('thumbnail', array('class' => 'thumb' )); //featured image (activate in functions.php) ?>

			<article class="entry-content cf" >
				<?php //logic!!! show short content on 'archive views' , show full content on single posts pages 
					if( is_single() OR is_page() ){ 
						the_content();
					}else{
						the_excerpt();//shortened content
					}
				?>
			</article>
						
		</section><!-- end post -->
		</a>
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

</main>

<?php get_footer(); //include footer.php ?>