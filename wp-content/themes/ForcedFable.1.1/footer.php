		</div>
		
		<?php get_sidebar(); ?>
	</div>
</div>
<footer>
	<div class="footer_container">
		<?php
			$args = array(
				'menu' => 'main-menu',
				'container' => '',
				'container_class' => '',
				'menu_class' => 'nav',
				'menu_id' => ''
			);
		
			wp_nav_menu($args);
		?>
		
		<?php
			$args = array(
				'menu' => 'footer - social',
				'container' => '',
				'container_class' => '',
				'menu_class' => 'nav',
				'menu_id' => ''
			);
		
			wp_nav_menu($args);
		?>
		
		
      
      <div class="right">
	      <p>A small group who writes, plays video games, reviews video games, and attempts to show others' works of art. We want to share our own work, as much as anyone elses we come across.</p>
	      <p>Copyright (c) 2014 Forced Fable Productions</p>
      </div>
      
	  <span class="logo"></span>
	</div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>