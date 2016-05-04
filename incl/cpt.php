<?php

	function custom_post_type() {

		$labels = array(
			'name'                  => _x( 'Lekarze', 'Post Type General Name', 'text_domain' ),
			'singular_name'         => _x( 'Lekarz', 'Post Type Singular Name', 'text_domain' ),
			'menu_name'             => __( 'Lekarze', 'text_domain' ),
			'name_admin_bar'        => __( 'Lekarze', 'text_domain' ),
			'archives'              => __( 'Wszyscy lekarze', 'text_domain' ),
			'parent_item_colon'     => __( 'Lekarz', 'text_domain' ),
			'all_items'             => __( 'Wszyscy lekarze', 'text_domain' ),
			'add_new_item'          => __( 'Dodaj nowego lekarza', 'text_domain' ),
			'add_new'               => __( 'Dodaj nowego lekarza', 'text_domain' ),
			'new_item'              => __( 'Dodaj nowego lekarza', 'text_domain' ),
			'edit_item'             => __( 'Edytuj dane', 'text_domain' ),
			'update_item'           => __( 'Aktualizuj dane', 'text_domain' ),
			'view_item'             => __( 'Zobacz dane', 'text_domain' ),
			'search_items'          => __( 'Wyszukaj lekarza', 'text_domain' ),
			'not_found'             => __( 'Nie znaleziono lekarza', 'text_domain' ),
			'not_found_in_trash'    => __( 'Nie znaleziono w koszu', 'text_domain' ),
			'featured_image'        => __( 'Wyróżniony obrazek', 'text_domain' ),
			'set_featured_image'    => __( 'Ustaw wyróżniony obrazek', 'text_domain' ),
			'remove_featured_image' => __( 'Usuń wyróżniony obrazek', 'text_domain' ),
			'use_featured_image'    => __( 'Użyj jako wyróżniony obrazek', 'text_domain' ),
			'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
			'items_list'            => __( 'Items list', 'text_domain' ),
			'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
			'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
		);
		$rewrite = array(
			'slug'                  => 'lekarze',
			'with_front'            => true,
			'pages'                 => true,
			'feeds'                 => true,
		);
		$args = array(
			'label'                 => __( 'Lekarz', 'text_domain' ),
			'description'           => __( 'Opis lekarza', 'text_domain' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'thumbnail' ),
			'taxonomies'            => false,
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-groups',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'rewrite'               => $rewrite,
			'capability_type'       => 'page',
		);
		register_post_type( 'doctor', $args );

	}

?>