<?php get_header(); //include header.php ?>

<main>
	

	<?php //THE LOOP
		if( have_posts() ): ?>
		<?php while( have_posts() ): the_post(); ?>

		<section id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
			<h2 class="entry-title"> 
				<a href="<?php the_permalink(); ?>"> 
					<?php the_title(); ?> 
				</a>
			</h2>
			<?php the_post_thumbnail('full', array('class' => 'full' )); //featured image (activate in functions.php) ?>
			<article class="entry-content cf">
				<?php //logic!!! show short content on 'archive views' , show full content on single posts pages 
					the_content(); ?>
			</article>
			<article class="postmeta"> 
				<span class="author"> Posted by: <?php the_author(); ?></span>
				<span class="date"><a href="<?php the_permalink(); ?>"><?php the_date(); ?></a></span>
				<span class="num-comments"> <?php comments_number(); ?></span>
				<span class="categories"><?php the_category(); ?></span>
				<span class="tags"><?php the_tags(); ?></span> 
			</article><!-- end postmeta -->			
		</section><!-- end post -->

		<?php comments_template(); //shows comments list and form ?>

		<?php endwhile; ?>

		

	<?php else: ?>

	<h2>Sorry, no posts found</h2>
	<p>Try using the search bar instead</p>

	<?php endif;  //end THE LOOP ?>

</main>


<?php get_footer(); //include footer.php ?>