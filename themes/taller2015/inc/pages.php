<?php


// CUSTOM PAGES //////////////////////////////////////////////////////////////////////


	add_action('init', function(){


		// About
		if( ! get_page_by_path('about-us') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => '¿Qué somos?',
				'post_name'   => 'about-us',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}

		// Contact
		if( ! get_page_by_path('contact-us') ){
			$page = array(
				'post_author' => 1,
				'post_status' => 'publish',
				'post_title'  => 'Contacto',
				'post_name'   => 'contact-us',
				'post_type'   => 'page'
			);
			wp_insert_post( $page, true );
		}


	});
