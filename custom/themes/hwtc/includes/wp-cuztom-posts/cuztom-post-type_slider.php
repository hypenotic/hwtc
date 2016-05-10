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
		'menu_icon'         	=> 'dashicons-format-gallery',
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


// Create Slider
function hype_slider_template() {
    // Query Arguments
    $args = array(
        'post_type' => 'slide',
        'posts_per_page' => 10
	);	
	
	// The Query
	$the_query = new WP_Query( $args );
	
	// Check if the Query returns any posts
	if ( $the_query->have_posts() ) {
	
	// Start the Slider ?>
		<ul class="slider">
			
			<?php while ( $the_query->have_posts() ) : $the_query->the_post();
			
				$url = wp_get_attachment_url( get_post_thumbnail_id($post->ID, 'banner') );
			?>
			
				<li class="slide-container">
					<img src="<?php echo $url;?>" alt="<?php the_title();?>" />
				</li>	
			<?php endwhile; ?>
	
		</ul><!-- .slides -->
	<?php }	
	// Reset Post Data
	wp_reset_postdata();
}

// Slider Shortcode
function hype_slider_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
		'id' => ''
	), $atts ) );

	ob_start();
	hype_slider_template();
	$output = ob_get_clean();
	return $output;
}
add_shortcode( 'slider', 'hype_slider_shortcode' );