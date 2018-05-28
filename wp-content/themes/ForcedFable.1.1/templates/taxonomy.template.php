<?php get_header(); ?>
		
	<?php
	
		//list terms in taxonomy
		$types[0] = "taxonomy_name";

		foreach ($types as $type) {
		  $taxonomy = $type;
		  $terms = get_terms( $taxonomy, '' );
		  if ($terms) {
		    foreach($terms as $term) {
		    	if ($term->slug == get_query_var(get_query_var('taxonomy')))
		    	{
		    		echo '<div class="' . $types[0] . '">';
		        }
		    }
		  }
		}
	
	?>

	<?php if( have_posts() ): while( have_posts() ): the_post(); ?>
	
		<?php get_template_part('content', 'type'); ?>

	<?php endwhile; else: ?>
		<p>Nothing to see here!</p>
	<?php endif; ?>

<?php get_footer(); ?>