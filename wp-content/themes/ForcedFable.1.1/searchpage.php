<?php
/*
Template Name: Search Page
*/
?>

<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<h2 class="page_title"><?php the_title(); ?></h2>
	<?php the_content(); ?>
<?php endwhile; else: ?>
	<p>Nothing to see here folks!</p>
<?php endif; ?>

<?php get_footer(); ?>