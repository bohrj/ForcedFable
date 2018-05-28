<?php
	/*
	* Template Name: Videos
	* Description: A Page layout theme for Video items
	*/
?>
<?php get_header(); ?>
<h1><?php echo get_queried_object()->post_title; ?></h1>
<?php $query = new WP_Query(array('category_name' => 'video', 'posts_per_page' => '5')); ?>

<?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); ?>
	<?php get_template_part('content', 'post'); ?>
<?php endwhile; else: ?>
	<p>Nothing to see here folks!</p>
<?php endif; ?>

<?php wp_reset_postdata(); ?>

<?php get_footer(); ?>