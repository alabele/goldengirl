<?php


/* 
* 	Register Tech Library Custom Post Type
*/

function my_custom_post_tech_lib() {
  $labels = array(
    'name'               => _x( 'Tech Library', 'post type general name' ),
    'singular_name'      => _x( 'Tech Library Item', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Tech Library Item' ),
    'edit_item'          => __( 'Edit Tech Library Item' ),
    'new_item'           => __( 'New Tech Library Item' ),
    'all_items'          => __( 'All Tech Library Items' ),
    'view_item'          => __( 'View Tech Library Item' ),
    'search_items'       => __( 'Search Tech Library Items' ),
    'not_found'          => __( 'No Tech Library Items found' ),
    'not_found_in_trash' => __( 'No Tech Library Items found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Tech Library'
  );
  $args = array(
    'labels'        => $labels,
    'menu_icon' => 'dashicons-book-alt',
    'description'   => 'Holds all of our awesome tech inspiration and resources',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments'),
    'has_archive'   => true,
  );
  register_post_type( 'tech_library', $args ); 
}
add_action( 'init', 'my_custom_post_tech_lib' );



/* 
* 	Register Design Library Custom Post Type
*/


function my_custom_post_design_lib() {
  $labels = array(
    'name'               => _x( 'Design Library', 'post type general name' ),
    'singular_name'      => _x( 'Design Library Item', 'post type singular name' ),
    'add_new'            => _x( 'Add New', 'book' ),
    'add_new_item'       => __( 'Add New Design Library Item' ),
    'edit_item'          => __( 'Edit Design Library Item' ),
    'new_item'           => __( 'New Design Library Item' ),
    'all_items'          => __( 'All Design Library Items' ),
    'view_item'          => __( 'View Design Library Item' ),
    'search_items'       => __( 'Search Design Library Items' ),
    'not_found'          => __( 'No Design Library Items found' ),
    'not_found_in_trash' => __( 'No Design Library Items found in the Trash' ), 
    'parent_item_colon'  => '',
    'menu_name'          => 'Design Library'
  );
  $args = array(
    'labels'        => $labels,
    'menu_icon' => 'dashicons-book-alt',
    'description'   => 'Holds all of our awesome design inspiration and resources',
    'public'        => true,
    'menu_position' => 5,
    'supports'      => array( 'title', 'editor', 'thumbnail', 'excerpt', 'comments'),
    'has_archive'   => true,
  );
  register_post_type( 'design_library', $args ); 
}
add_action( 'init', 'my_custom_post_design_lib' );


/* 
* 	Create Custom Messages - Tech Library
*/


function my_updated_tech_messages( $messages ) {
  global $post, $post_ID;
  $messages['tech_library'] = array(
    0 => '', 
    1 => sprintf( __('Tech Library Item updated. <a href="%s">View Tech Library Item</a>'), esc_url( get_permalink($post_ID) ) ),
    2 => __('Custom field updated.'),
    3 => __('Custom field deleted.'),
    4 => __('Tech Library Item updated.'),
    5 => isset($_GET['revision']) ? sprintf( __('Tech Library Item restored to revision from %s. Phew.'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Tech Library Item published. Woohoo! Good on ya! <a href="%s">View Tech Library Item</a>'), esc_url( get_permalink($post_ID) ) ),
    7 => __('Product saved.'),
    8 => sprintf( __('Tech Library Item submitted. Suhweet. <a target="_blank" href="%s">Preview Tech Library Item</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('Tech Library Item scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Tech Library Item</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('Tech Library Item draft updated. <a target="_blank" href="%s">Preview Tech Library Item</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );
  return $messages;
}
add_filter( 'post_updated_messages', 'my_updated_tech_messages' );

/* 
* 	Create Custom Messages - Design Library
*/


function my_updated_design_messages( $messages ) {
  global $post, $post_ID;
  $messages['design_library'] = array(
    0 => '', 
    1 => sprintf( __('Design Library Item updated. <a href="%s">View Design Library Item</a>'), esc_url( get_permalink($post_ID) ) ),
    2 => __('Custom field updated.'),
    3 => __('Custom field deleted.'),
    4 => __('Design Library Item updated.'),
    5 => isset($_GET['revision']) ? sprintf( __('TDesign Library Item restored to revision from %s. Phew.'), wp_post_revision_title( (int) $_GET['revision'], false ) ) : false,
    6 => sprintf( __('Design Library Item published. Woohoo! Good on ya! <a href="%s">View Design Library Item</a>'), esc_url( get_permalink($post_ID) ) ),
    7 => __('Product saved.'),
    8 => sprintf( __('Design Library Item submitted. Suhweet. <a target="_blank" href="%s">Preview Design Library Item</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
    9 => sprintf( __('Design Library Item scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview Design Library Item</a>'), date_i18n( __( 'M j, Y @ G:i' ), strtotime( $post->post_date ) ), esc_url( get_permalink($post_ID) ) ),
    10 => sprintf( __('Design Library Item draft updated. <a target="_blank" href="%s">Preview TDesign Library Item</a>'), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
  );
  return $messages;
}
add_filter( 'post_updated_messages', 'my_updated_design_messages' );


/**
 * Add custom taxonomies for DESIGN LIBRARY
 *
 * Additional custom taxonomies can be defined here
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function add_custom_design_taxonomies() {

   // Add new "DESIGN CATEGORIES" taxonomy to Design Library Custom Post Type
  register_taxonomy('design_category', 'design_library', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Design Categories', 'taxonomy general name' ),
      'singular_name' => _x( 'Design Category', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Design Categories' ),
      'all_items' => __( 'All Design Categories' ),
      'parent_item' => __( 'Parent Design Category' ),
      'parent_item_colon' => __( 'Parent Design Category:' ),
      'edit_item' => __( 'Edit Design Category' ),
      'update_item' => __( 'Update Design Category' ),
      'add_new_item' => __( 'Add New Design Category' ),
      'new_item_name' => __( 'New Design Category Name' ),
      'menu_name' => __( 'Design Categories' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'design_category', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));

  // Add new "DESIGN TAGS" taxonomy to Design Library Custom Post Type
  register_taxonomy('design_tag', 'design_library', array(
    // Non-Hierarchical taxonomy (like tags)
    'hierarchical' => false,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Design Tags', 'taxonomy general name' ),
      'singular_name' => _x( 'Design Tag', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Design Tags' ),
      'all_items' => __( 'All Design Tags' ),
      'parent_item' => null,
      'parent_item_colon' => null,
      'edit_item' => __( 'Edit Design Tag' ),
      'update_item' => __( 'Update Design Tag' ),
      'add_new_item' => __( 'Add New Design Tag' ),
      'new_item_name' => __( 'New Design Tag Name' ),
      'separate_items_with_commas' => __( 'Separate design tags with commas' ),
      'add_or_remove_items'        => __( 'Add or remove design tags' ),
      'choose_from_most_used'      => __( 'Choose from the most used design tags' ),
      'not_found'                  => __( 'No design tags found.' ),
      'menu_name' => __( 'Design Tags' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'design_tag', // This controls the base slug that will display before each term
    ),
  ));
}
add_action( 'init', 'add_custom_design_taxonomies', 0 );

/**
 * Add custom taxonomies for TECH LIBRARY
 *
 * Additional custom taxonomies can be defined here
 * http://codex.wordpress.org/Function_Reference/register_taxonomy
 */
function add_custom_tech_taxonomies() {

   // Add new "TECH CATEGORIES" taxonomy to Tech Library Custom Post Type
  register_taxonomy('tech_category', 'tech_library', array(
    // Hierarchical taxonomy (like categories)
    'hierarchical' => true,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Tech Categories', 'taxonomy general name' ),
      'singular_name' => _x( 'Tech Category', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Tech Categories' ),
      'all_items' => __( 'All Tech Categories' ),
      'parent_item' => __( 'Parent Tech Category' ),
      'parent_item_colon' => __( 'Parent Tech Category:' ),
      'edit_item' => __( 'Edit Tech Category' ),
      'update_item' => __( 'Update Tech Category' ),
      'add_new_item' => __( 'Add New Tech Category' ),
      'new_item_name' => __( 'New Tech Category Name' ),
      'menu_name' => __( 'Tech Categories' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'tech_category', // This controls the base slug that will display before each term
      'with_front' => false, // Don't display the category base before "/locations/"
      'hierarchical' => true // This will allow URL's like "/locations/boston/cambridge/"
    ),
  ));

  // Add new "DESIGN TAGS" taxonomy to Design Library Custom Post Type
  register_taxonomy('tech_tag', 'tech_library', array(
    // Non-Hierarchical taxonomy (like tags)
    'hierarchical' => false,
    // This array of options controls the labels displayed in the WordPress Admin UI
    'labels' => array(
      'name' => _x( 'Tech Tags', 'taxonomy general name' ),
      'singular_name' => _x( 'Tech Tag', 'taxonomy singular name' ),
      'search_items' =>  __( 'Search Tech Tags' ),
      'all_items' => __( 'All Tech Tags' ),
      'parent_item' => null,
      'parent_item_colon' => null,
      'edit_item' => __( 'Edit Tech Tag' ),
      'update_item' => __( 'Update Tech Tag' ),
      'add_new_item' => __( 'Add New Tech Tag' ),
      'new_item_name' => __( 'New Tech Tag Name' ),
      'separate_items_with_commas' => __( 'Separate tech tags with commas' ),
      'add_or_remove_items'        => __( 'Add or remove tech tags' ),
      'choose_from_most_used'      => __( 'Choose from the most used tech tags' ),
      'not_found'                  => __( 'No tech tags found.' ),
      'menu_name' => __( 'Tech Tags' ),
    ),
    // Control the slugs used for this taxonomy
    'rewrite' => array(
      'slug' => 'tech_tag', // This controls the base slug that will display before each term
    ),
  ));
}
add_action( 'init', 'add_custom_tech_taxonomies', 0 );


/*
* REGISTER CUSTOM FIELDS FOR BOTH TECH + DESIGN LIBRARIES
*/

if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_design-library-custom-fields',
		'title' => 'Design Library Custom Fields',
		'fields' => array (
			array (
				'key' => 'field_5761a47eb21ed',
				'label' => 'Design Library Image 1',
				'name' => 'design_library_image_1',
				'type' => 'image',
				'instructions' => 'Please add an image of your design inspiration! You can add up to three images.',
				'required' => 1,
				'save_format' => 'id',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5761a4b1b21ee',
				'label' => 'Design Library Image 2',
				'name' => 'design_library_image_2',
				'type' => 'image',
				'instructions' => 'Have more pictures? Cool! Please add another image of your design inspiration.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'id',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5761a502b21ef',
				'label' => 'Design Library Image 3',
				'name' => 'design_library_image_3',
				'type' => 'image',
				'instructions' => 'Have one last picture? Alright! Please add the last image of your design inspiration.',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'null',
							'operator' => '==',
							'value' => '',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'id',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5761a52bb21f0',
				'label' => 'Design Library Reference URL',
				'name' => 'design_library_reference_url',
				'type' => 'text',
				'instructions' => 'Please include the URL of where you found your inspiration.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5761a588b21f2',
				'label' => 'Design Library Reference Name',
				'name' => 'design_library_reference_name',
				'type' => 'text',
				'instructions' => 'Please add the name of the website where you found your design inspiration.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'design_library',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
	register_field_group(array (
		'id' => 'acf_tech-library-custom-fields',
		'title' => 'Tech Library Custom Fields',
		'fields' => array (
			array (
				'key' => 'field_5761a6857b6b0',
				'label' => 'Tech Library Reference URL',
				'name' => 'tech_library_reference_url',
				'type' => 'text',
				'instructions' => 'Please include the URL of where you found your tech resource/inspiration.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
			array (
				'key' => 'field_5761a6987b6b1',
				'label' => 'Tech Library Reference Name',
				'name' => 'tech_library_reference_name',
				'type' => 'text',
				'instructions' => 'Please add the name of the website where you found your tech resource/inspiration.',
				'required' => 1,
				'default_value' => '',
				'placeholder' => '',
				'prepend' => '',
				'append' => '',
				'formatting' => 'html',
				'maxlength' => '',
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'post_type',
					'operator' => '==',
					'value' => 'tech_library',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'acf_after_title',
			'layout' => 'no_box',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}



?>