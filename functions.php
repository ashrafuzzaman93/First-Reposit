<?php
	
	/*-----------------------------*/
    /* Theme bootstrapping */
    /*-----------------------------*/
	if ( !function_exists('massively_theme_setup') ) {

		function massively_theme_setup() {

			/* Load theme textdomain for translation */
			load_theme_textdomain('massively');

			/* Getting feed links options */
			add_theme_support( 'automatic-feed-links' );

			/* Getting title tag */
			add_theme_support('title-tag');

			// add_theme_support('custom-header');

			/* Getting background options */
			add_theme_support('custom-background');

			/* Getting post thumbnail options */
			add_theme_support('post-thumbnails');

			/* Getting post formats */ 
			add_theme_support( 'post-formats', ['aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'] );

			/*  */
			add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) ); // 

			/* Register menu */
			register_nav_menu( 'mainmenu', __( 'Main Menu', 'massively' ) );
		}
		add_action('after_setup_theme', 'massively_theme_setup');
	}


	/*-----------------------------*/
    /* Sidebar register */
    /*-----------------------------*/
	function massively_register_sidebar() {
		$args = array(

			'id'			=> 'footer_sidebar',
			'name'			=> __( 'Footer Sidebar', 'massively' ),
			'description'	=> __( 'Set your footer widgets from widgets area.', 'massively' ),
			'before_widget'	=> '<section>',
			'after_section'	=> '</section>'
		);
		register_sidebar($args);
	}
	add_action( 'widgets_init', 'massively_register_sidebar' );


	/*-----------------------------*/
    /* Include theme assets */
    /*-----------------------------*/
	function massively_theme_assets() {

		$var = '1.0.0';

		/* CSS */
		wp_enqueue_style( 'main-css', get_theme_file_uri('/assets/css/main.css'), '', $var );
		wp_enqueue_style( 'noscript-css', get_theme_file_uri('/assets/css/noscript.css'), '', $var );
		wp_enqueue_style( 'theme-css', get_stylesheet_uri(), '', $var );

		/* JavaScripts */
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'scrollex-js', get_theme_file_uri('/assets/js/jquery.scrollex.min.js'), '', $var );
		wp_enqueue_script( 'scrolly-js', get_theme_file_uri('/assets/js/jquery.scrolly.min.js'), '', $var );
		wp_enqueue_script( 'browser-js', get_theme_file_uri('/assets/js/browser.min.js'), '', $var );
		wp_enqueue_script( 'breakpoints-js', get_theme_file_uri('/assets/js/breakpoints.min.js'), '', $var );
		wp_enqueue_script( 'util-js', get_theme_file_uri('/assets/js/util.js'), '', $var );
		wp_enqueue_script( 'main-js', get_theme_file_uri('/assets/js/main.js'), array('jquery'), $var, true );
	}
	add_action('wp_enqueue_scripts', 'massively_theme_assets');


	/*-----------------------------*/
    /* Required file */
    /*-----------------------------*/
	require_once('custom-widgets.php');
	require_once('customizer.php');


	// Increase File Upload Size
	@ini_set( 'upload_max_size' , '64M' );
	@ini_set( 'post_max_size', '64M');
	@ini_set( 'max_execution_time', '300' );


	
