<?php $category = get_the_category(); ?>
<article class="<?php echo $category[0]->slug . ' '; ?><?php if(is_single()){echo "single";}?> <?php if(!has_post_thumbnail()){echo "no-thumb";} ?>">
	<h4 class="ribbon <?php echo $category[0]->slug; ?>">
		<?php echo $category[0]->cat_name; ?>
	</h4>
	
	<!-- SINGLE -->
	<?php if(is_single()): ?>
		<?php if ($category[0]->slug == "video"):?>
			<object class="video" data="http://www.youtube.com/v/<?php the_field('video_id'); ?>" type="application/x-shockwave-flash"><param name="src" value="http://www.youtube.com/v/<?php the_field('video_id'); ?>" /></object>
		<?php else: ?>
		<?php 
			if(has_post_thumbnail())
				the_post_thumbnail('large');
		?>
		<?php endif; ?>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<small>by <?php the_author_link(); ?></small>		
		<?php the_content(); ?>
		<hr />
		<?php comments_template(); ?>
		
	<!-- HOMEPAGE -->
	<?php else: ?>
		<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		<small>by <?php the_author_link(); ?></small>
		<br />
		<?php if ($category[0]->slug == "video"):?>
			<a href="<?php the_permalink();?>"><img class="wp-post-image" src="http://img.youtube.com/vi/<?php the_field('video_id'); ?>/hqdefault.jpg"></a>
		<?php else: ?>
		<?php if(has_post_thumbnail()): ?>
			<a href="<?php the_permalink(); ?>">
			<?php the_post_thumbnail('medium'); ?>
			</a>
		<?php endif; ?>
		<?php endif; ?>
		<div class="excerpt">
			<?php the_excerpt(); ?>
		</div>
		<a href="<?php the_permalink(); ?>" class="readMore <?php echo $category[0]->slug; ?>">
			<?php if($category[0]->slug == 'video'):?>
			Watch Now!
			<?php else: ?>
			Read More...
			<?php endif; ?>
		</a>
	<?php endif; ?>
</article>