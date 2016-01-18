<?php


// CUSTOM POST TYPES /////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// Team
		$labels = array(
			'name'          => 'Equipo',
			'singular_name' => 'Equipo',
			'add_new'       => 'Nuevo miembro',
			'add_new_item'  => 'Nuevo miembro',
			'edit_item'     => 'Editar miembro',
			'new_item'      => 'Nuevo miembro',
			'all_items'     => 'Todos',
			'view_item'     => 'Ver miembro',
			'search_items'  => 'Buscar miembro',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Equipo'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'team' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'team', $args );

		// Work
		$labels = array(
			'name'          => 'Trabajo',
			'singular_name' => 'Trabajo',
			'add_new'       => 'Nuevo elemento',
			'add_new_item'  => 'Nuevo elemento',
			'edit_item'     => 'Editar elemento',
			'new_item'      => 'Nuevo elemento',
			'all_items'     => 'Todos',
			'view_item'     => 'Ver elemento',
			'search_items'  => 'Buscar elemento',
			'not_found'     => 'No se encontro',
			'menu_name'     => 'Trabajo'
		);

		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => true,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => true,
			'rewrite'            => array( 'slug' => 'work' ),
			'capability_type'    => 'post',
			'has_archive'        => true,
			'hierarchical'       => false,
			'menu_position'      => 6,
			'taxonomies'         => array( 'category' ),
			'supports'           => array( 'title', 'editor', 'thumbnail' )
		);
		register_post_type( 'work', $args );

	});