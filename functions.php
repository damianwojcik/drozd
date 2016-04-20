<?php
	
	define("THEME_URL", get_stylesheet_directory_uri());
	define("SITE_URL", site_url());

	add_theme_support( 'post-thumbnails' );	

	if (function_exists( 'register_sidebar' )) {

		register_sidebar(array(
			'name' => 'Menu główne',
			'id'  => 'main_menu',
			'before_title' => '', 
			'after_title' => '',
			'before_widget' => '',
			'after_widget'  => '',
		));

		register_sidebar(array(
			'name' => 'Menu Stopka',
			'id'  => 'footer_menu',
			'before_title' => '', 
			'after_title' => '',
			'before_widget' => '',
			'after_widget'  => '',
		));

	}

	if( function_exists('acf_add_options_page') ) {
	
		acf_add_options_page(array(
			'page_title' 	=> 'Strona Główna',
			'menu_title'	=> 'Strona Główna',
			'menu_slug' 	=> 'theme-general-settings',
			'capability'	=> 'edit_posts',
			'redirect'		=> false
		));

			acf_add_options_sub_page(array(
			'page_title' 	=> 'Slajdy',
			'menu_title'	=> 'Slajdy',
			'parent_slug'	=> 'theme-general-settings',
		));
		
	}