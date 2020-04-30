<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

	// This gets the theme name from the stylesheet (lowercase and without spaces)
	$themename = get_option( 'stylesheet' );
	$themename = preg_replace("/\W/", "_", strtolower($themename) );

	$optionsframework_settings = get_option('optionsframework');
	$optionsframework_settings['id'] = $themename;
	update_option('optionsframework', $optionsframework_settings);

	// echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options() {

	// Test data
	$test_array = array(
		'one' => __('One', 'options_check'),
		'two' => __('Two', 'options_check'),
		'three' => __('Three', 'options_check'),
		'four' => __('Four', 'options_check'),
		'five' => __('Five', 'options_check')
	);

	// Multicheck Array
	$multicheck_array = array(
		'one' => __('French Toast', 'options_check'),
		'two' => __('Pancake', 'options_check'),
		'three' => __('Omelette', 'options_check'),
		'four' => __('Crepe', 'options_check'),
		'five' => __('Waffle', 'options_check')
	);

	// Multicheck Defaults
	$multicheck_defaults = array(
		'one' => '1',
		'five' => '1'
	);

	// Background Defaults
	$background_defaults = array(
		'color' => '',
		'image' => '',
		'repeat' => 'repeat',
		'position' => 'top center',
		'attachment'=>'scroll' );

	// Typography Defaults
	$typography_defaults = array(
		'size' => '15px',
		'face' => 'georgia',
		'style' => 'bold',
		'color' => '#bada55' );

	// Typography Options
	$typography_options = array(
		'sizes' => array( '6','12','14','16','20' ),
		'faces' => array( 'Helvetica Neue' => 'Helvetica Neue','Arial' => 'Arial' ),
		'styles' => array( 'normal' => 'Normal','bold' => 'Bold' ),
		'color' => true
	);

	// Pull all the categories into an array
	$options_categories = array();
	$options_categories_obj = get_categories();
	foreach ($options_categories_obj as $category) {
		$options_categories[$category->cat_ID] = $category->cat_name;
	}

	// Pull all tags into an array
	$options_tags = array();
	$options_tags_obj = get_tags();
	foreach ( $options_tags_obj as $tag ) {
		$options_tags[$tag->term_id] = $tag->name;
	}

	// Pull all the pages into an array
	$options_pages = array();
	$options_pages_obj = get_pages('sort_column=post_parent,menu_order');
	$options_pages[''] = 'Select a page:';
	foreach ($options_pages_obj as $page) {
		$options_pages[$page->ID] = $page->post_title;
	}

	// If using image radio buttons, define a directory path
	$imagepath =  get_template_directory_uri() . '/image/';

	$options = array();

	

	/*$options[] = array(
		'name' => __('Input Text Mini', 'options_check'),
		'desc' => __('A mini text input field.', 'options_check'),
		'id' => 'example_text_mini',
		'std' => 'Default',
		'class' => 'mini',
		'type' => 'text');*/
    $wp_editor_settings = array(
		'wpautop' => true, // Default
		'textarea_rows' => 5,
		'tinymce' => array( 'plugins' => 'wordpress' )
	);

///////////////////GENERAL SETTINGS START/////////////////////////////////////
	$options[] = array(
		'name' => __('General Settings', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Site Name', 'options_check'),
		'id' => 'sitename',
		'type' => 'text');
		
	$options[] = array(

		'name' => __('Upload Favicon Image', 'options_check'),

		'id' => 'fav',

		'type' => 'upload');
		
	$options[] = array(
		'name' => __('Upload  Logo', 'options_check'),
		'id' => 'logo',
		'type' => 'upload');
		
  $options[] = array(
		'name' => __('Upload footer logo', 'options_check'),
		'id' => 'logo-ft',
		'type' => 'upload');
		
  
		
		$options[] = array(
		'name' => __('Footer Copyright Text', 'options_check'),
		'id' => 'copyright_ftext',
		'type' => 'text',
		'settings' => $wp_editor_settings );
		
		
///////////////////GENERAL SETTINGS START/////////////////////////////////////
	$options[] = array(
		'name' => __('Frontpage Titles Settings', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Title One', 'options_check'),
		'id' => 't1',
		'type' => 'text');

//////////////Contact Info. Home  starts/////////////////////////
	$options[] = array(
		'name' => __('Locations', 'options_check'),
		'type' => 'heading');
	
	$options[] = array(
		'name' => __('Lisboa E-mail ', 'options_check'),
		'id' => 'l1',
		'type' => 'text');

        $options[] = array(
		'name' => __('Lisboa E-mail Link', 'options_check'),
		'id' => 'lE1',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Lisboa phone ', 'options_check'),
		'id' => 'l2',
		'type' => 'text');
       
       $options[] = array(
		'name' => __('Lisboa phone Link', 'options_check'),
		'id' => 'll2',
		'type' => 'text');
		
		
	$options[] = array(
		'name' => __('Porto E-mail ', 'options_check'),
		'id' => 'p1',
		'type' => 'text');
        
        $options[] = array(
		'name' => __('Porto E-mail Link ', 'options_check'),
		'id' => 'pe1',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Porto phone ', 'options_check'),
		'id' => 'p2',
		'type' => 'text');

        $options[] = array(
		'name' => __('Porto phone Link', 'options_check'),
		'id' => 'pl2',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Setúbal E-mail ', 'options_check'),
		'id' => 's1',
		'type' => 'text');

       $options[] = array(
		'name' => __('Setúbal E-mail Link ', 'options_check'),
		'id' => 'se1',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Setúbal phone ', 'options_check'),
		'id' => 's2',
		'type' => 'text');

     $options[] = array(
		'name' => __('Setúbal phone Link', 'options_check'),
		'id' => 'sl2',
		'type' => 'text');

$options[] = array(
		'name' => __('Funchal E-mail ', 'options_check'),
		'id' => 'f1',
		'type' => 'text');

$options[] = array(
		'name' => __('Funchal E-mail Link', 'options_check'),
		'id' => 'fe1',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Funchal phone ', 'options_check'),
		'id' => 'f2',
		'type' => 'text');

$options[] = array(
		'name' => __('Funchal phone Link', 'options_check'),
		'id' => 'fl2',
		'type' => 'text');

		
		
	//////////////Contact Info. Contact  starts/////////////////////////
	$options[] = array(
		'name' => __('Contact Info(Contact)', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Title for area 1', 'options_check'),
		'id' => 'tr1',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('Address for area 1', 'options_check'),
		'id' => 'ar1',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Phone Number for area 1', 'options_check'),
		'id' => 'pr1',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Fax Number for area 1', 'options_check'),
		'id' => 'fr1',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('E-mail for area 1', 'options_check'),
		'id' => 'er1',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Map for area 1', 'options_check'),
		'id' => 'mr1',
		'type' => 'editor');
		
		
	$options[] = array(
		'name' => __('Title for area 2', 'options_check'),
		'id' => 'tr2',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('Address for area 2', 'options_check'),
		'id' => 'ar2',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Phone Number for area 2', 'options_check'),
		'id' => 'pr2',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Fax Number for area 2', 'options_check'),
		'id' => 'fr2',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('E-mail for area 2', 'options_check'),
		'id' => 'er2',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Map for area 2', 'options_check'),
		'id' => 'mr2',
		'type' => 'editor');
		
		
		
	$options[] = array(
		'name' => __('Title for area 3', 'options_check'),
		'id' => 'tr3',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('Address for area 3', 'options_check'),
		'id' => 'ar3',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Phone Number for area 3', 'options_check'),
		'id' => 'pr3',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Fax Number for area 3', 'options_check'),
		'id' => 'fr3',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('E-mail for area 3', 'options_check'),
		'id' => 'er3',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Map for area 3', 'options_check'),
		'id' => 'mr3',
		'type' => 'editor');
		
		
	$options[] = array(
		'name' => __('Title for area 4', 'options_check'),
		'id' => 'tr4',
		'type' => 'text');
	
	$options[] = array(
		'name' => __('Address for area 4', 'options_check'),
		'id' => 'ar4',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Phone Number for area 4', 'options_check'),
		'id' => 'pr4',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Fax Number for area 4', 'options_check'),
		'id' => 'fr4',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('E-mail for area 4', 'options_check'),
		'id' => 'er4',
		'type' => 'text');
		
	$options[] = array(
		'name' => __('Map for area 4', 'options_check'),
		'id' => 'mr4',
		'type' => 'editor');
		
		
	//////////////Feed  starts/////////////////////////
	$options[] = array(
		'name' => __('Social Feed', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('Social feed(Contact)', 'options_check'),
		'id' => 'sf1',
		'type' => 'editor');
		
		
	//////////////Feed  starts/////////////////////////
	$options[] = array(
		'name' => __('Typography', 'options_check'),
		'type' => 'heading');
		
	$options[] = array(
		'name' => __('h1', 'options_check'),
		'id' => 's-h1',
		'type' => 'typography');
		
		
		
  $options[] = array( 'name' => __( 'Typography', 'theme-textdomain' ),
		'desc' => __( 'Example typography.', 'theme-textdomain' ),
		'id' => "example_typography",
		'std' => $typography_defaults,
		'type' => 'typography'
	);

	$options[] = array(
		'name' => __( 'Custom Typography', 'theme-textdomain' ),
		'desc' => __( 'Custom typography options.', 'theme-textdomain' ),
		'id' => "custom_typography",
		'std' => $typography_defaults,
		'type' => 'typography',
		'options' => $typography_options
	);

	
	
		
	
		
	
		
		
		
	return $options;
}
?>