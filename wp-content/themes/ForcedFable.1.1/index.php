<?php get_header(); ?>

<?php get_header(); ?>

	<!-- Recent Posts -->
	<?php 
		$args = array('posts_per_page' => 4, 'paged' => get_query_var('paged'));
		$query = new WP_Query($args);
		//echo var_dump($query); 
	?>
	
	<?php if ($query->have_posts()) : 
			while ($query->have_posts()) : 
				$query->the_post(); ?>
	
		<?php get_template_part('content', 'post'); ?>
	<?php endwhile; ?>
		
		<div class="pagination">
		<?php wp_pagenavi(array(
			'query' => $query
		)) ?>
		</div>
		<!--
<div class="pagination">
			<a href="<?php get_next_posts_link(); ?>" class="btn left">&lt; Older Posts</a>
			<a href="" class="btn right">Newer Posts &gt;</a>
		</div>
-->
	<?php else: ?>
	
		<p>Sorry, there are no posts to show :'(</p>
	
	<?php endif; ?>
	
	<?php wp_reset_postdata(); ?>
<?php get_footer(); ?>

<?php get_footer(); ?>