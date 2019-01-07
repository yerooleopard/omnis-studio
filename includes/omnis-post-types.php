<?php 
// Register Custom Post Type
function omnis_templates() {

	$labels = array(
		'name'                  => esc_html_x( 'Templates', 'Post Type General Name', 'omnis' ),
		'singular_name'         => esc_html_x( 'Template', 'Post Type Singular Name', 'omnis' ),
		'menu_name'             => esc_html__( 'Templates', 'omnis' ),
		'name_admin_bar'        => esc_html__( 'Templates', 'omnis' ),
		'archives'              => esc_html__( 'Template Archives', 'omnis' ),
		'attributes'            => esc_html__( 'Template Attributes', 'omnis' ),
		'parent_item_colon'     => esc_html__( 'Parent Template:', 'omnis' ),
		'all_items'             => esc_html__( 'Templates', 'omnis' ),
		'add_new_item'          => esc_html__( 'Add New Template', 'omnis' ),
		'add_new'               => esc_html__( 'Add New Template', 'omnis' ),
		'new_item'              => esc_html__( 'New Template', 'omnis' ),
		'edit_item'             => esc_html__( 'Edit Template', 'omnis' ),
		'update_item'           => esc_html__( 'Update Template', 'omnis' ),
		'view_item'             => esc_html__( 'View Template', 'omnis' ),
		'view_items'            => esc_html__( 'View Templates', 'omnis' ),
		'search_items'          => esc_html__( 'Search Template', 'omnis' ),
		'not_found'             => esc_html__( 'Not found', 'omnis' ),
		'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'omnis' ),
		'featured_image'        => esc_html__( 'Featured Image', 'omnis' ),
		'set_featured_image'    => esc_html__( 'Set featured image', 'omnis' ),
		'remove_featured_image' => esc_html__( 'Remove featured image', 'omnis' ),
		'use_featured_image'    => esc_html__( 'Use as featured image', 'omnis' ),
		'insert_into_item'      => esc_html__( 'Insert into item', 'omnis' ),
		'uploaded_to_this_item' => esc_html__( 'Uploaded to this item', 'omnis' ),
		'items_list'            => esc_html__( 'Templates list', 'omnis' ),
		'items_list_navigation' => esc_html__( 'Items templates navigation', 'omnis' ),
		'filter_items_list'     => esc_html__( 'Filter templates list', 'omnis' ),
	);
	$args = array(
		'label'                 => esc_html__( 'Template', 'omnis' ),
		'description'           => esc_html__( 'Custom Templates for posts, pages and projects.', 'omnis' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', 'custom-fields', 'page-attributes', ),
		'hierarchical'          => true,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => false,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-schedule',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'rewrite'         => array( 'slug' => 'omnis-template', ), // Permalinks format
	);
	register_post_type( 'omnis_templates', $args );

}
add_action( 'init', 'omnis_templates', 0 );


// Register Custom Post Type
function omnis_elements() {

	$labels = array(
		'name'                  => esc_html_x( 'Elements', 'Post Type General Name', 'omnis' ),
		'singular_name'         => esc_html_x( 'Element', 'Post Type Singular Name', 'omnis' ),
		'menu_name'             => esc_html__( 'Elements', 'omnis' ),
		'name_admin_bar'        => esc_html__( 'Elements', 'omnis' ),
		'archives'              => esc_html__( 'Element Archives', 'omnis' ),
		'attributes'            => esc_html__( 'Element Attributes', 'omnis' ),
		'parent_item_colon'     => esc_html__( 'Parent Element:', 'omnis' ),
		'all_items'             => esc_html__( 'Elements', 'omnis' ),
		'add_new_item'          => esc_html__( 'Add New Element', 'omnis' ),
		'add_new'               => esc_html__( 'Add New Element', 'omnis' ),
		'new_item'              => esc_html__( 'New Element', 'omnis' ),
		'edit_item'             => esc_html__( 'Edit Element', 'omnis' ),
		'update_item'           => esc_html__( 'Update Element', 'omnis' ),
		'view_item'             => esc_html__( 'View Element', 'omnis' ),
		'view_items'            => esc_html__( 'View Element', 'omnis' ),
		'search_items'          => esc_html__( 'Search Elements', 'omnis' ),
		'not_found'             => esc_html__( 'Not found', 'omnis' ),
		'not_found_in_trash'    => esc_html__( 'Not found in Trash', 'omnis' ),
		'featured_image'        => esc_html__( 'Featured Image', 'omnis' ),
		'set_featured_image'    => esc_html__( 'Set featured image', 'omnis' ),
		'remove_featured_image' => esc_html__( 'Remove featured image', 'omnis' ),
		'use_featured_image'    => esc_html__( 'Use as featured image', 'omnis' ),
		'insert_into_item'      => esc_html__( 'Insert into item', 'omnis' ),
		'uploaded_to_this_item' => esc_html__( 'Uploaded to this item', 'omnis' ),
		'items_list'            => esc_html__( 'Elements list', 'omnis' ),
		'items_list_navigation' => esc_html__( 'Items element navigation', 'omnis' ),
		'filter_items_list'     => esc_html__( 'Filter elements list', 'omnis' ),
	);
	$args = array(
		'label'                 => esc_html__( 'Template', 'omnis' ),
		'description'           => esc_html__( 'Custom Elements for posts, pages and projects.', 'omnis' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'revisions', 'custom-fields', 'page-attributes'),
		'hierarchical'          => true,
		'public'                => false,
		'show_ui'               => true,
		'show_in_menu'          => false,
		'menu_position'         => 20,
		'menu_icon'             => 'dashicons-schedule',
		'show_in_admin_bar'     => false,
		'show_in_nav_menus'     => false,
		'can_export'            => true,
		'has_archive'           => false,		
		'exclude_from_search'   => true,
		'publicly_queryable'    => true,
		'capability_type'       => 'post',
		'rewrite'         => array( 'slug' => 'omnis-element', ), // Permalinks format
	);
	register_post_type( 'omnis_elements', $args );

}
add_action( 'init', 'omnis_elements', 0 );