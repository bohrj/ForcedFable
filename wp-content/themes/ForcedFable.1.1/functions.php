<?php

	// Styles
	function theme_styles() {
		wp_enqueue_style( 'default', get_template_directory_uri() . '/style.css');
		wp_enqueue_style( 'main', get_template_directory_uri() . '/css/style.css');
		wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css');
		wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/flexslider/flexslider.css');
		wp_enqueue_style( 'bebasNeue', get_template_directory_uri() . '/fonts/bebasneue/stylesheet.css');
		wp_enqueue_style( 'icons', get_template_directory_uri() . '/icons/style.css');
	}
	add_action( 'wp_enqueue_scripts', 'theme_styles');
	
	// Scripts
	function theme_scripts() {
		//wp_enqueue_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js');
		wp_enqueue_script( 'main', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '', true);
		wp_enqueue_script( 'masonry', get_template_directory_uri() . '/js/masonry.js');
		wp_enqueue_script( 'prefixfree', get_template_directory_uri() . '/prefixfree/prefixfree.min.js');
		wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/flexslider/jquery.flexslider-min.js', array('jquery'), '', true);
	}
	add_action( 'wp_enqueue_scripts', 'theme_scripts');
	
	//	Filters
	function new_excerpt_more( $more ) {
		return '...';
	}
	function custom_excerpt_length( $length ) {
		return 20;
	}
	add_filter('excerpt_more', 'new_excerpt_more');
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	
	// Technology Taxonomy
	function technology_taxonomy() {
		register_taxonomy(
			'technology',
			'work',
			array(
				'hierarchical' => false,
				'label' => __('Technologies'),
				'rewrite' => array('slug' => 'technology'),
				'capabilities' => array(
					'assign_terms' => true,
					'edit_terms' => true,
					'manage_terms' => true
				)
			)
		);
		//add technologies
	}
	add_action('init', 'technology_taxonomy');

	//Theme Support
	add_theme_support( 'menus' );
	add_theme_support( 'post-thumbnails' ); 
	
	/**
	 * Register our sidebars and widgetized areas.
	 *
	 */
	function arphabet_widgets_init() {
	
		register_sidebar( array(
			'name' => 'Home right sidebar',
			'id' => 'home_right_sidebar',
			'class' => 'links',
			'before_widget' => '<div class="widget">',
			'after_widget' => '</div>',
			'before_title' => '<h4>',
			'after_title' => '</h4>',
		) );
	}
	add_action( 'widgets_init', 'arphabet_widgets_init' );

?>