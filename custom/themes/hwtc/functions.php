<?php

# Slug in Body class

add_filter('body_class', 'add_slug_to_body_class');
function add_slug_to_body_class($classes) {
	global $post;
    	$classes[] = $post->post_name . ' animated fadeIn offcanvas';
	return $classes;
}

// Register Menus
function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      //'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );

// Clean up menu ids and classes but leave current-menu-item
add_filter('nav_menu_css_class', 'remove_css_attributes_filter', 100, 1);
add_filter('nav_menu_item_id', 'remove_css_attributes_filter', 100, 1);
add_filter('page_css_class', 'remove_css_attributes_filter', 100, 1);
function remove_css_attributes_filter($var) {
	return is_array($var) ? array_intersect($var, array('current-menu-item')) : '';
}

//Featured image support
add_theme_support( 'post-thumbnails' );
add_image_size( 'banner', 1400, 800, true );

//Add custom size to media library
if ( function_exists( 'add_image_size' ) ) {
add_image_size( 'new-size', 750, 500, true ); //(cropped)
}
add_filter('image_size_names_choose', 'my_image_sizes');
function my_image_sizes($sizes) {
$addsizes = array(
"new-size" => __( "Post Size")
);
$newsizes = array_merge($sizes, $addsizes);
return $newsizes;
}

//Add class to next and previous post_link
function add_class_next_post_link($html){
    $html = str_replace('<a','<a class="older"',$html);
    return $html;
}
add_filter('next_post_link','add_class_next_post_link',10,1);
function add_class_previous_post_link($html){
    $html = str_replace('<a','<a class="newer"',$html);
    return $html;
}
add_filter('previous_post_link','add_class_previous_post_link',10,1);

//Pagination
function pagination() {
    global $wp_query;
    $big = 999999999; // need an unlikely integer

    echo paginate_links( array(
    'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
    'format' => '?paged=%#%',
    'current' => max( 1, get_query_var('paged') ),
    'total' => $wp_query->max_num_pages
    ) );
}

//Post count
function wp_get_postcount($id) {
  //return count of post in category child of ID 15
  $count = 0;
  $taxonomy = 'category';
  $args = array(
    'child_of' => $id,
  );
  $tax_terms = get_terms($taxonomy,$args);
  foreach ($tax_terms as $tax_term) {
  $count +=$tax_term->count;
  }
  return $count;
}

// Why remove jQuery Migrate
add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );

function dequeue_jquery_migrate( &$scripts){
  if(!is_admin()){
    $scripts->remove( 'jquery');
    $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
  }
}

//Enqueue scripts - Reference: http://codex.wordpress.org/Function_Reference/wp_enqueue_script
add_action( 'wp_enqueue_scripts', 'hype_scripts' );
function hype_scripts() {
		//wp_enqueue_script('jquery');
		//wordpress/wp-includes/js/jquery/jquery.js?ver=1.10.2
		wp_deregister_script('jquery');
		wp_register_script('jquery', includes_url()."js/jquery/jquery.js", null, '1.10.2',true);
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'map', 'https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false', array('jquery'), '', true);
		//wp_enqueue_script( 'widowFix', get_template_directory_uri() . '/js/jquery.widowFix-1.3.2.js', array('jquery'), '1.3.2', true);
		wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app.js', array('jquery'), '1.0', true);
		wp_enqueue_script( 'bxslider-script', get_template_directory_uri() . '/js/bxslider.js', array('jquery'), '1.0', true);
		wp_enqueue_script( 'slider', get_template_directory_uri() . '/js/slider.js', array('jquery'), '1.0', true);
		wp_enqueue_script( 'menu', get_template_directory_uri() . '/js/menu.js', array('jquery'), '1.0', true);
		wp_enqueue_script( 'menu-function', get_template_directory_uri() . '/js/menu-function.js', array('jquery'), '1.0', true);
}
//Enqueue styles
function hype_styles() {
        wp_register_style('style', get_template_directory_uri() . '/style.css', '1.2');
		wp_enqueue_style( 'style' );
}
add_action('wp_enqueue_scripts', 'hype_styles');

/**
 * Adds a meta box to the post editing screen
 */
function prfx_custom_meta() {
    add_meta_box( 'prfx_meta', __( 'Second Title', 'prfx-textdomain' ), 'prfx_meta_callback', 'page' );
}
add_action( 'add_meta_boxes', 'prfx_custom_meta' );

/**
 * Outputs the content of the meta box
 */
function prfx_meta_callback( $post ) {
    wp_nonce_field( basename( __FILE__ ), 'prfx_nonce' );
    $prfx_stored_meta = get_post_meta( $post->ID );
    ?>
 
    <p>
        <input type="text" name="second-title" size="160" id="second-title" value="<?php if ( isset ( $prfx_stored_meta['second-title'] ) ) echo $prfx_stored_meta['second-title'][0]; ?>" />
    </p>
 
    <?php
}
// Exclude category from feed.
function myFeedExcluder($query) {
 if ($query->is_feed) {
   $query->set('cat','-75');
 }
return $query;
}
 
add_filter('pre_get_posts','myFeedExcluder');


/**
 * Saves the custom Second Title
 */
function prfx_meta_save( $post_id ) {
 
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'prfx_nonce' ] ) && wp_verify_nonce( $_POST[ 'prfx_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
    // Checks for input and sanitizes/saves if needed
    if( isset( $_POST[ 'second-title' ] ) ) {
        update_post_meta( $post_id, 'second-title', sanitize_text_field( $_POST[ 'second-title' ] ) );
    }
 
}
add_action( 'save_post', 'prfx_meta_save' );


#REGISTER WIDGETS

	if ( function_exists('register_sidebar') )

	register_sidebar(array(
    'name'=>'Find Talent Page Bottom Content',
		'before_widget' => '<div class="">',
		'after_widget' => '</div>',
		'before_title' => '<h6>',
		'after_title' => '</h6>',
	));

  register_sidebar(array(
    'name'=>'Sign Up Form',
    'id' => 'sign-up-form',
    'before_widget' => '',
    'after_widget' => '',
    'before_title' => '',
    'after_title' => '',
  ));
	
// #CUZTOM HELPER CLASS
// 	$cuztom_inc = get_template_directory() . '/includes/wordpress-cuztom-helper-master/cuztom.php';
// 	if( file_exists($cuztom_inc) ) {
// 		include_once( $cuztom_inc );
// 	}


// #CUSTOM POST TYPE 
// 	// Include code for creating slider post type
// 	if( file_exists( get_template_directory() . "/includes/cuztom-post-type_slider.php" ) ) {
// 		include_once( get_template_directory() . '/includes/cuztom-post-type_slider.php' );
// 	}
	
// 	// Include code for creating course post type
// 	if( file_exists( get_template_directory() . "/includes/cuztom-post-type_course.php" ) ) {
// 		include_once( get_template_directory() . '/includes/cuztom-post-type_course.php' );
// 	}

include('includes/wp-cuztom-helper/cuztom.php');
//Include post custom posts type. Dependent on /wp-cuztom-helper classes.
// include('includes/wp-cuztom-posts/custom-generic.php');
// include('includes/wp-cuztom-posts/custom-generic-post.php');
include('includes/wp-cuztom-posts/cuztom-post-type_course.php');
include('includes/wp-cuztom-posts/cuztom-post-type_slider.php');
include('includes/wp-cuztom-posts/custom-team-members.php');

