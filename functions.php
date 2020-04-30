<?php
/**
 * Dynasty3 functions and definitions
 *
 * @package WordPress
 * @subpackage Dynasty3
 * @since Dynasty3 1.0
 */
/**
 * Set the content width based on the theme's design and stylesheet. *
 * @since Dynasty3 1.0
 */

if ( ! isset( $content_width ) ) {
	$content_width = 660;
}
if ( ! function_exists( 'dynasty3_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 * @since Dynasty3 1.0
 */

function dynasty3_setup() {
	// Add default posts and comments RSS feed links to head.

	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 825, 510, true );	
	// This theme uses wp_nav_menu() in two locations.

	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'dynasty3' ),
		'top'  => __( 'Top Menu', 'dynasty3' ),

		'footer'  => __( 'Footer Menu', 'dynasty3' ),

	) );
	// Adds RSS feed links to <head> for posts and comments.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Switches default core markup for search form, comment form,
	 * and comments to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );

	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link','comment-form', 'comment-list', 'gallery', 'status', 'audio', 'chat'
	) );
}
endif; // dynasty3_setup
add_action( 'after_setup_theme', 'dynasty3_setup' );
function dynasty3_widgets_init() {

	register_sidebar( array(
		'name'          => __( 'Widget Area', 'dynasty3' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'dynasty3' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	
	register_sidebar( array(
		'name'          => __( 'Search', 'dynasty3' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'dynasty3' ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
	
}


add_action( 'widgets_init', 'dynasty3_widgets_init' );


if ( !function_exists( 'of_get_option' ) ) {

function of_get_option($name, $default = false) { 

    $optionsframework_settings = get_option('optionsframework');  
    // Gets the unique option id

    $option_name = $optionsframework_settings['id'];   
    if ( get_option($option_name) ) {

        $options = get_option($option_name);
    }
    if ( isset($options[$name]) ) {
        return $options[$name];
    } else {
        return $default;
    }
}
}




if ( !function_exists( 'of_get_option' ) ) {
function of_get_option($name, $default = false) {   
    $optionsframework_settings = get_option('optionsframework'); 
    // Gets the unique option id

    $option_name = $optionsframework_settings['id']; 
    if ( get_option($option_name) ) {
        $options = get_option($option_name);
    }
    if ( isset($options[$name]) ) {
        return $options[$name];

    } else {
        return $default;
    }
}
}

if ( !function_exists( 'of_get_option' ) ) {
function of_get_option($name, $default = false) {     
    $optionsframework_settings = get_option('optionsframework');     
    // Gets the unique option id
    $option_name = $optionsframework_settings['id'];   
    if ( get_option($option_name) ) {
        $options = get_option($option_name);
    }
    
    if ( isset($options[$name]) ) {
        return $options[$name];
    } else {
        return $default;
    }
}
}

//Slider

add_action( 'init', 'create_slider' );
function create_slider() {  
    register_post_type( 'slider',  
        array(  
            'labels' => array(  
                'name' => __( 'Slider' , 'dynasty3'),
                'singular_name' => __( 'Slider' , 'dynasty3'), 
                'add_new' => __('Add New slider', 'dynasty3'),
				'edit_item' => __('Edit slider', 'dynasty3'), 
                'new_item' => __('New slider', 'dynasty3'),  
                'view_item' => __('View slider', 'dynasty3'), 
                'search_items' => __('Search slider', 'dynasty3'), 
                'not_found' => __('No slider found', 'dynasty3'),
                'not_found_in_trash' => __('No slider found in Trash', 'dynasty3') 
            ),  
            'public' => true, 
            'menu_position' => 22,  
          //  'rewrite' => array('slug' => 'single-medical-gallery'),

            'supports' => array('title','editor','thumbnail','wps_subtitle') 
			//'register_meta_box_cb' => 'add_events_metaboxes'
           //'taxonomies' => array('category', 'post_tag')  
        )  
    );  
}  
add_action( 'init', 'create_slider' );


//team


function create_team() {  
    register_post_type( 'team',  
        array(  
            'labels' => array(  
                'name' => __( 'Team' , 'dynasty3'),
                'singular_name' => __( 'Team' , 'dynasty3'), 
                'add_new' => __('Add New Team', 'dynasty3'),
				'edit_item' => __('Edit Team', 'dynasty3'), 
                'new_item' => __('New Team', 'dynasty3'),  
                'view_item' => __('View Team', 'dynasty3'), 
                'search_items' => __('Search Team', 'dynasty3'), 
                'not_found' => __('No Team found', 'dynasty3'),
                'not_found_in_trash' => __('No Team found in Trash', 'dynasty3') 
            ),  
            'public' => true, 
            'menu_position' => 22,  
          //  'rewrite' => array('slug' => 'single-medical-gallery'),

            'supports' => array('title','editor','wps_subtitle','thumbnail','custom-fields') 
			//'register_meta_box_cb' => 'add_events_metaboxes'
           //'taxonomies' => array('category', 'post_tag')  
        )  
    );  
}  
add_action( 'init', 'create_team' );


//faq


function create_faq() {  
    register_post_type( 'faq',  
        array(  
            'labels' => array(  
                'name' => __( 'Faq' , 'dynasty3'),
                'singular_name' => __( 'Faq' , 'dynasty3'), 
                'add_new' => __('Add New Faq', 'dynasty3'),
				'edit_item' => __('Edit Faq', 'dynasty3'), 
                'new_item' => __('New Faq', 'dynasty3'),  
                'view_item' => __('View Faq', 'dynasty3'), 
                'search_items' => __('Search Faq', 'dynasty3'), 
                'not_found' => __('No Faq found', 'dynasty3'),
                'not_found_in_trash' => __('No Faq found in Trash', 'dynasty3') 
            ),  
            'public' => true, 
            'menu_position' => 22,  
          //  'rewrite' => array('slug' => 'single-medical-gallery'),

            'supports' => array('title','editor') 
			//'register_meta_box_cb' => 'add_events_metaboxes'
           //'taxonomies' => array('category', 'post_tag')  
        )  
    );  
}  
add_action( 'init', 'create_faq' );


//Clients

add_action( 'init', 'create_clients' );
function create_clients() {  
    register_post_type( 'clients',  
        array(  
            'labels' => array(  
                'name' => __( 'clients' , 'dynasty3'),
                'singular_name' => __( 'clients' , 'dynasty3'), 
                'add_new' => __('Add New clients', 'dynasty3'),
				'edit_item' => __('Edit clients', 'dynasty3'), 
                'new_item' => __('New clients', 'dynasty3'),  
                'view_item' => __('View clients', 'dynasty3'), 
                'search_items' => __('Search clients', 'dynasty3'), 
                'not_found' => __('No clients found', 'dynasty3'),
                'not_found_in_trash' => __('No clients found in Trash', 'dynasty3'),

            ),  
            'public' => true, 
            'menu_position' => 22,  
          //  'rewrite' => array('slug' => 'single-medical-gallery'),

            'supports' => array('thumbnail'), 
			//'register_meta_box_cb' => 'add_events_metaboxes'
           'taxonomies' => array('category', 'clients')
           


        )  
    );  
}  
add_action( 'init', 'create_clients' );


if (class_exists('MultiPostThumbnails')) {

new MultiPostThumbnails(array(
'label' => 'Second Image',
'id' => 'secondary-image',
'post_type' => 'clients'
 ) );

new MultiPostThumbnails(array(
'label' => 'Third Image',
'id' => 'third-image',
'post_type' => 'clients'
 ) );

 }











//Gallery

add_action( 'init', 'create_gallery' );
function create_gallery() {  
    register_post_type( 'gallery',  
        array(  
            'labels' => array(  
                'name' => __( 'Gallery' , 'dynasty3'),
                'singular_name' => __( 'gallery' , 'dynasty3'), 
                'add_new' => __('Add New gallery', 'dynasty3'),
				'edit_item' => __('Edit gallery', 'dynasty3'), 
                'new_item' => __('New gallery', 'dynasty3'),  
                'view_item' => __('View gallery', 'dynasty3'), 
                'search_items' => __('Search gallery', 'dynasty3'), 
                'not_found' => __('No gallery found', 'dynasty3'),
                'not_found_in_trash' => __('No gallery found in Trash', 'dynasty3') 
            ),  
            'public' => true, 
            'menu_position' => 22,  
          //  'rewrite' => array('slug' => 'single-medical-gallery'),

            'supports' => array('title','thumbnail') 
			//'register_meta_box_cb' => 'add_events_metaboxes'
           //'taxonomies' => array('category', 'post_tag')  
        )  
    );  
}  
add_action( 'init', 'create_gallery' );




//Featured Gallery in project

function add_featured_galleries_to_ctp( $post_types ) {
    return array('project','guide');
}
add_filter('fg_post_types', 'add_featured_galleries_to_ctp' );
//$post_types= 'event';
//function add_featured_galleries_to_ctp('event') {
	//return array( 'ctp1', 'ctp2', 'ctp3' );
//}
add_action( 'fg_post_types', 'add_featured_galleries_to_ctp' );




function category_top_parent_id ($catid) {

while ($catid) {
$cat = get_category($catid); // get the object for the catid
$catid = $cat->category_parent; // assign parent ID (if exists) to $catid
// the while loop will continue whilst there is a $catid
// when there is no longer a parent $catid will be NULL so we can assign our $catParent
$catParent = $cat->cat_ID;
}

return $catParent;
}






//Custom Taxonomy

/*function add_phones_cat_taxonomies() {

	register_taxonomy('phones-cat', 'phones', array(
		// Hierarchical taxonomy (like categories)
		'hierarchical' => true,
		// This array of options controls the labels displayed in the WordPress Admin UI
		'labels' => array(
			'name' => _x( 'phones Category', 'taxonomy general name' ),
			'singular_name' => _x( 'phones-Category', 'taxonomy singular name' ),
			'search_items' =>  __( 'Search phones-Categories' ),
			'all_items' => __( 'All phones-Categories' ),
			'parent_item' => __( 'Parent phones-Category' ),
			'parent_item_colon' => __( 'Parent phones-Category:' ),
			'edit_item' => __( 'Edit phones-Category' ),
			'update_item' => __( 'Update phones-Category' ),
			'add_new_item' => __( 'Add New phones-Category' ),
			'new_item_name' => __( 'New phones-Category Name' ),
			'menu_name' => __( 'phones Categories' ),
		),

		// Control the slugs used for this taxonomy
		'rewrite' => array(
			'slug' => 'phones-cat', // This controls the base slug that will display before each term
			'with_front' => false, // Don't display the category base before "/locations/"
			'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
		),
	));
}
add_action( 'init', 'add_phones_cat_taxonomies', 0 ); */








//function add_featured_galleries_to_ctp( $post_types ) {
   // return array('phones','guide');
//}
//add_filter('fg_post_types', 'add_featured_galleries_to_ctp' );
//$post_types= 'event';
//function add_featured_galleries_to_ctp('event') {
	//return array( 'ctp1', 'ctp2', 'ctp3' );
//}
//add_action( 'fg_post_types', 'add_featured_galleries_to_ctp' );



function dynasty3_scripts_styles() {
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );


}
add_action( 'wp_enqueue_scripts', 'dynasty3_scripts_styles' );




@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );


