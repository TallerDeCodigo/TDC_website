<?php


// CUSTOM METABOXES //////////////////////////////////////////////////////////////////



	add_action('add_meta_boxes', function(){

		add_meta_box( 'link_metabox', 'Link a la aplicación', 'link_meta_callback', 'work', 'normal', 'high' );

	});



// CUSTOM METABOXES CALLBACK FUNCTIONS ///////////////////////////////////////////////



	function link_meta_callback($post){
		$link = get_post_meta($post->ID, '_link_meta', true);
		wp_nonce_field(__FILE__, '_link_meta_nonce');
		echo "<input type='text' class='widefat' id='link' name='_link_meta' value='$link'/>";
	}



// SAVE METABOXES DATA ///////////////////////////////////////////////////////////////



	add_action('save_post', function($post_id){


		if ( ! current_user_can('edit_page', $post_id)) 
			return $post_id;


		if ( defined('DOING_AUTOSAVE') and DOING_AUTOSAVE ) 
			return $post_id;
		
		
		if ( wp_is_post_revision($post_id) OR wp_is_post_autosave($post_id) ) 
			return $post_id;


		if ( isset($_POST['_link_meta']) and check_admin_referer(__FILE__, '_link_meta_nonce') ){
			update_post_meta($post_id, '_link_meta', $_POST['_link_meta']);
		}


		// Guardar correctamente los checkboxes
		/*if ( isset($_POST['_checkbox_meta']) and check_admin_referer(__FILE__, '_checkbox_nonce') ){
			update_post_meta($post_id, '_checkbox_meta', $_POST['_checkbox_meta']);
		} else if ( ! defined('DOING_AJAX') ){
			delete_post_meta($post_id, '_checkbox_meta');
		}*/


	});



// OTHER METABOXES ELEMENTS //////////////////////////////////////////////////////////
