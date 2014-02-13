<?php
/**
* Slider custom post type setup
* 
* Makes use of Cuztom post type helper to setup post type, taxonomies, fields
* for Cii home page slider
* 
* @access 	public
* @author	Ben Moody
*/

/**
* Setup post type
* 
* First let's register our custom post type
*
* @access 	public
* @author	Ben Moody
*/
add_action( 'init', 'slider_register_post_type', 1 );
function slider_register_post_type() {
	
	//Init vars
	$CustomPostType = NULL;
	$args			= array();
	$labels			= array();
	$name			= array();
	
	//Set name label vars
	$name[0]	= 'Slide'; //Singluar name
	$name[1]	= 'Slides'; //Plural name
	
	$singular 	= $name[0];
	$plural		= $name[1];
	$slug		= Cuztom::uglify( $name[0] ); //Create a slug string from singular name
	
	//Set args
	$args = array(
		'public' 				=> true,
		'publicly_queryable' 	=> true,
		'show_ui' 				=> true, 
		'show_in_menu' 			=> true, 
		'query_var' 			=> true,
		'rewrite' 				=> array( 'slug' => $slug ),
		'capability_type' 		=> 'post',
		'has_archive' 			=> true, 
		'hierarchical' 			=> false,
		'menu_position' 		=> null,
		'menu_icon'         	=> get_template_directory_uri() . '/images/slider/icon.png',
		'supports' 				=> array( 'title','thumbnail' ),
		'taxonomies'			=> array( '' )
	);
	
	//Set labels
	$labels = array(
		"name" 					=> $plural,
		"singular_name" 		=> $singular,
		"add_new" 				=> sprintf( __( 'Add New %1$s', 'text-domain' ), $singular ),
		"add_new_item" 			=> sprintf( __( 'Add New  %1$s', 'text-domain' ), $singular ),
		"edit_item" 			=> sprintf( __( 'Edit %1$s', 'text-domain' ), $singular ),
		"new_item" 				=> sprintf( __( 'New %1$s', 'text-domain' ), $singular ),
		"all_items" 			=> sprintf( __( 'All %1$s', 'text-domain' ), $plural ),
		"view_item" 			=> sprintf( __( 'View %1$s', 'text-domain' ), $plural ),
		"search_items" 			=> sprintf( __( 'Search %1$s', 'text-domain' ), $plural ),
		"not_found" 			=> sprintf( __( 'No %1$s', 'text-domain' ), $plural ),
		"not_found_in_trash" 	=> sprintf( __( 'No %1$s found in Trash', 'text-domain' ), $plural ), 
		"parent_item_colon" 	=> "",
		"menu_name" 			=> $plural
	);
	
	//Call cuztom helper to create post type
	$CustomPostType = new Cuztom_Post_type( $name, $args, $labels );
	
}

// Create custom post admin column support
add_action( 'after_setup_theme', 'my_theme_setup' );
function my_theme_setup() {
	add_image_size( 'edit-screen-thumbnail', 100, 75, true );
}

add_filter( 'manage_edit-slide_columns', 'my_columns_filter', 10, 1 );
function my_columns_filter( $columns ) {
	$column_thumbnail = array( 'thumbnail' => 'Thumbnail' );
	$columns = array_slice( $columns, 0, 1, true ) + $column_thumbnail + array_slice( $columns, 1, NULL, true );
	return $columns;
}

add_action( 'manage_posts_custom_column', 'my_column_action', 10, 1 );
function my_column_action( $column ) {
	global $post;
	switch ( $column ) {
		case 'thumbnail':
			echo get_the_post_thumbnail( $post->ID, 'edit-screen-thumbnail' );
		break;
	}
}