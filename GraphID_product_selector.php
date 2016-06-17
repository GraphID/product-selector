<?php
/*
Plugin Name: GraphID product selector
Plugin URI: http://www.graphid.nl/
Description: A product / post selector plugin
Author: GraphID, Norbert Hekkink
Author URI: http://www.graphid.nl/
Version: 0.0.1
*/
//Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
 
// Toevoegen custom post type
 
function grwp_register_post_type() {
	
	$singular = 'Article';
	$plural = 'Articles';
	
	$labels = array(
		'name'			=> $plural,
		'singular_name'		=> $singular,
		'add_name'		=> 'Add New',
		'add_new_item'		=> 'Add New ' .$singular,
		'edit'			=> 'Edit',
		'edit_item'		=> 'Edit ' .$singular,
		'new_item'		=> 'New ' .$singular,
		'view'			=> 'View ' .$singular,
		'search_term'		=> 'Search ' .$plural,
		'parent'		=> 'Parent ' .$singular,
		'not_found'		=> 'No ' .$plural .' found',
		'not_found_in_trash'	=> 'No ' .$plural .' in Trash'		
		);
		
	$args = array(
		'labels'		=> $labels,
		'public'		=> true,
		'publicly_queryable'	=> true,		
		'exclude_from_search'	=> false,
		'show_in_nav_menus'	=> true,
		'show_ui'		=> true,
		'show_in_menu'		=> true,
		'show_in_admin_bar'	=> true,
		'menu_position'		=> 6,
		'menu_icon'     	=> 'dashicons-media-default',		
		'can_export'    	=> true,
		'delete_with_user'	=> false,
		'hierarchical'		=> false,
		'has_archive'		=> true,
		'query_var'		=> true,
		'capability_type'	=> 'page',
		'map_meta_cap'		=> true,
		// 'capabilities'	=> array(),
			'rewrite'	=> array(
			'slug'		=> 'articles',
			'with_front'	=> true,
			'pages'		=> true,
			'feeds'		=> false,
		),
		'supports'		=> array(
			'title',
			'editor',
			'author',
			'custom-fields'
		)
	);
	register_post_type( 'emax', $args);
}
add_action( 'init', 'grwp_register_post_type' );

function grwp_register_taxonomy() {
$singular = 'Printing method';
$plural = 'Printing methods';
$slug = str_replace( ' ', '_', strtolower( $singular ) );
$labels = array(
	'name'				=> $plural,
	'singular_name'			=> $singular,
	'search_items'			=> 'Search ' . $plural,
	'popular_items'			=> 'Popular ' . $plural,
	'all_items'			=> 'All ' . $plural,
	'parent_item'			=> null,
	'parent_item_colon'		=> null,
	'edit_item'			=> 'Edit ' . $singular,
	'update_item'			=> 'Update ' . $singular,
	'add_new_item'			=> 'Add New ' . $singular,
	'new_item_name'			=> 'New ' . $singular . ' Name',
	'separate_items_with_commas' 	=> 'Separate ' . $plural . ' with commas',
	'add_or_remove_items'		=> 'Add or remove ' . $plural,
	'choose_from_most_used'		=> 'Choose from the most used ' . $plural,
	'not_found'			=> 'No ' . $plural . ' found.',
	'menu_name'			=> $plural,
);
$args = array(
	'hierarchical'		=> true,
	'labels'		=> $labels,
	'show_ui'		=> true,
	'show_admin_column'	=> true,
	'update_count_callback'	=> '_update_post_term_count',
	'query_var'		=> true,
	'rewrite'		=> array( 'slug' => $slug ),
);
register_taxonomy( $slug, 'emax', $args );
}
add_action( 'init', 'grwp_register_taxonomy' );

// Nieuwe taxonomy

function grwp_register_taxonomy2() {
$singular = 'Material';
$plural = 'Materials';
$slug = str_replace( ' ', '_', strtolower( $singular ) );
$labels = array(
	'name'				=> $plural,
	'singular_name'			=> $singular,
	'search_items'			=> 'Search ' . $plural,
	'popular_items'			=> 'Popular ' . $plural,
	'all_items'			=> 'All ' . $plural,
	'parent_item'			=> null,
	'parent_item_colon'		=> null,
	'edit_item'			=> 'Edit ' . $singular,
	'update_item'			=> 'Update ' . $singular,
	'add_new_item'			=> 'Add New ' . $singular,
	'new_item_name'			=> 'New ' . $singular . ' Name',
	'separate_items_with_commas' 	=> 'Separate ' . $plural . ' with commas',
	'add_or_remove_items'		=> 'Add or remove ' . $plural,
	'choose_from_most_used'		=> 'Choose from the most used ' . $plural,
	'not_found'			=> 'No ' . $plural . ' found.',
	'menu_name'			=> $plural,
);
$args = array(
	'hierarchical'		=> true,
	'labels'		=> $labels,
	'show_ui'		=> true,
	'show_admin_column'	=> true,
	'update_count_callback'	=> '_update_post_term_count',
	'query_var'		=> true,
	'rewrite'		=> array( 'slug' => $slug ),
);
register_taxonomy( $slug, 'emax', $args );
}
add_action( 'init', 'grwp_register_taxonomy2' );
