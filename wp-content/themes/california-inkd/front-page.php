<?php get_header(); //include header.php ?>

<main>
	<?php  cal_slider();?>
	<?php //THE LOOP
		if( have_posts() ): ?>
		<?php while( have_posts() ): the_post(); ?>

		<section id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> >
			<h2 class="entry-title" > 
				<a href="<?php the_permalink(); ?>"> 
					<?php the_title(); ?> 
				</a>
			</h2>
			<?php the_post_thumbnail('feature', array('class' => 'thumb' )); //featured image (activate in functions.php) ?>
			<article class="entry-content cf" >
				<?php the_content();?>
			</article>
				
		</section><!-- end post -->

		<?php endwhile; ?>

		
		<?php else: ?>

	<h2>Sorry, no posts found</h2>
	<p>Try using the search bar instead</p>

	<?php endif;  //end THE LOOP ?>

</main>

<?php get_sidebar('home'); //include sidebar.php ?>

<?php get_footer(); //include footer.php ?>