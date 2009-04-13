
<?php get_header(); ?>	
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
			<h1><?php the_title(); ?></h1>

			<?php the_content('Read the rest of this entry &raquo;'); ?>

			<?php endwhile; ?>
			<?php else : ?>

			<h2 align="center">Not Found</h2>

			<p align="center">Sorry, but you are looking for something that isn't here.</p>

			<?php endif; ?>
	
		<?php get_footer(); ?>   
</body>
</html>
