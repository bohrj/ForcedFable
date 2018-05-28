<?php if(is_single()): ?>
	<article class="work">
		<h1><a href="<?php the_field('work_url'); ?>"><?php the_title(); ?></a></h1>
		<h3>
			<?php the_field( 'subtitle' ); ?>
		</h3>
		<!--<small>by <?php the_author_link(); ?></small>-->
		<br />
		
		<img class="work-image" src="<?php the_field( 'work_image' ); ?>" alt="" />
		<p style="margin-top: 10px;"><?php the_terms($post->ID, 'technology', '<span style="font-weight: 400;">Technologies used: </span>', ', '); ?></p>
		<?php the_content(); ?>
	</article>
<?php else : ?>
	<article class="work" style="float: left;">
	<a href="<?php the_permalink(); ?>" class="thumb work-thumb">
		<img src="<?php the_field('work_image'); ?>" alt="<?php the_title(); ?>" />
		<span class="subtitle"><?php the_title(); ?></span>
	</a>
	</article>
<?php endif; ?>