<?php get_header(); ?>

<h1>Posts in <?php single_cat_title(); ?></h1>
<hr>

<?php if (have_posts()) : 
		while (have_posts()) : 
			the_post(); ?>

	<?php get_template_part('content', 'post'); ?>

<?php endwhile; else: ?>

	<p>Nothing to see here <i class='icon-confused'></i></p>

<?php endif; ?>

<?php get_footer(); ?>
