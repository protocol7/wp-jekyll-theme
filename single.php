
<?php get_header(); ?>	
		<?php if (have_posts()) : ?>

			<?php while (have_posts()) : the_post(); ?>
  			<h1><?php the_title(); ?></h1>

			<?php the_content('Read the rest of this entry &raquo;'); ?>

			<div class="post-footer"><?php the_tags('Tags: ', ', ', '.'); ?>  <?php comments_popup_link('No Comments &raquo;', '1 Comment &raquo;', '% Comments &raquo;'); ?></div>

			<?php comments_template(); ?>

			<?php endwhile; ?>

			   <p class="pagination"><?php next_posts_link('&laquo; Previous Entries') ?> <?php previous_posts_link('Next Entries &raquo;') ?></p>

			<?php else : ?>

			<h2 align="center">Not Found</h2>

			<p align="center">Sorry, but you are looking for something that isn't here.</p>

			<?php endif; ?>
			
			
	

		<?php get_footer(); ?>  

<script type="text/javascript">
  <!--
      idselector_input_id = "url";
    -->
</script>
 
	<!-- BEGIN ID SELECTOR -->
<script type="text/javascript" id="__openidselector" src="https://www.idselector.com/selector/eee86340a4c330d0e2bdd895a2bee574dfc4c354" charset="utf-8"></script>
<!-- END ID SELECTOR -->
</body>
</html>
