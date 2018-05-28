<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>
  		<?php
  			wp_title( '-', true, 'right');
  			bloginfo( 'name' );
  		?>
  	</title>
  	<?php wp_head(); ?>
  	<meta name="author" content="Jordan Foreman" />
  	<meta name="description" content="<?php 
  		$obj = get_queried_object();
  		//print_r($obj);
	  	if (is_front_page()){
		  	echo bloginfo('description');
		} else if (is_single()){
			echo $obj->post_excerpt;
	  	} else if (is_category()) {
	  		echo 'Posts in the ' . $obj->cat_name;
	  	} else if ($obj->description) {
	  		echo $obj->description;
	  	} else {
	  		echo bloginfo('description');
	  	}
  	?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js" type="text/javascript"></script>
  </head>
  <body>
     <header>
       		<a href="#" class="menu-toggle" onclick="toggleMenu()">&#9776;</a>
         	<?php
				$args = array(
					'menu' => 'main-menu',
					'container' => 'nav',
					'container_class' => '',
					'menu_class' => 'nav',
					'menu_id' => ''
				);
			
				wp_nav_menu($args);
			?>
     </header>
     
	 <div class="container">
     
	     <?php if (is_front_page()): ?>
	     	<div class="flexslider">
		      <ul class="slides">
		      	<?php
		      	
		      		$args = array( 'post_type' => 'slides' );
		      		$query = new WP_Query($args);
		      		
		      		if ($query->have_posts()): while ($query->have_posts()): $query->the_post();
		      	
		      	?>
		      	<li>
		      		<img src="<?php the_field('image'); ?>" />
		      		<div class="flex-caption">
		      			<a href="<?php the_field('url'); ?>"><h1><?php the_title(); ?></h1></a>
		      			<p><?php the_field('description'); ?></p>
		      			<?php $btnTxt = get_field('button_text'); ?>
		      			<?php if($btnTxt != ""): ?>
		      				<a class="btn" href="<?php the_field('url'); ?>"><?php echo $btnTxt; ?></a>
		      			<?php endif; ?>
		      		</div>
		      	</li>
		      	<?php endwhile; endif; ?>
		      </div>
		    </div>
	     <?php endif; ?>
	     
		<div class="main_content">
			<div class="articles">
