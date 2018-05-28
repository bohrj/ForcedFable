<?php get_header(); ?>
<div class="container">

	<p>This is the home.php file</p>

	<div class="main_content">
		<div class="articles">

	<!-- Das Loop -->
	<?php if (have_posts()) : 
			while (have_posts()) : 
				the_post(); ?>
	
		<?php get_template_part('content', 'post'); ?>
		
		<?php next_posts_link('Older Posts'); ?>
		<?php previous_posts_link('Newer Posts'); ?>
	
	<?php endwhile; else: ?>
	
		<p>Sorry, there are no posts to show :'(</p>
	
	<?php endif; ?>
	
		</div>
		
		<?php get_sidebar(); ?>
	</div>
	
</div>

<?php get_footer(); ?>