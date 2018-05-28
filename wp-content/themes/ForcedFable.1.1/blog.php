<?php
	/*
	* Template Name: Blog
	* Description: A Page layout theme for the main blog roll
	*/
?>
<?php get_header(); ?>

<h2 class="page_title"><?php the_title(); ?></h2>

<!-- cat = -2 in production -->
<?php $posts = new wp_query(array('post_type' => 'post', 'cat' => '-2', 'posts_per_page' => '5')); ?>

<?php if ($posts->have_posts()) : while ($posts->have_posts()) : $posts->the_post(); ?>
	<?php get_template_part('content', 'post'); ?>
<?php endwhile; ?>
	<!-- pagination -->
<?php else: ?>
	<p>Nothing to see here folks!</p>
<?php endif; ?>

<?php get_footer(); ?>