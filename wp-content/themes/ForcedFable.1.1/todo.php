	
	<!-- BLOGROLL -->
	<?php elseif(!is_front_page()): ?>
		<a href="<?php the_permalink(); ?>">
			<?php 
				if(has_post_thumbnail())
					the_post_thumbnail('small');
			?>
			<div class="excerpt">
				<h2><?php the_title(); ?></h2>
				<?php the_excerpt(); ?>
			</div>
			<h2><?php the_title(); ?></h2>
		</a>