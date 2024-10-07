<?php
/**
 * Stories Custom Post Type
 *
 * @package Alpha
 */

/**
 * Registers a new post type
 *
 * @uses $wp_post_types Inserts new post type object into the list
 *
 * @param string       $post_type Post type key, must not exceed 20 characters
 * @param array|string $args See optional args description above.
 * @return object|WP_Error the registered post type object, or an error object
 */
function alpha_register_story_post_type() {

	$labels = array(
		'name'               => __( 'Stories', 'alpha' ),
		'singular_name'      => __( 'Story', 'alpha' ),
		'add_new'            => _x( 'Add New Story', 'alpha', 'alpha' ),
		'add_new_item'       => __( 'Add New Story', 'alpha' ),
		'edit_item'          => __( 'Edit Story', 'alpha' ),
		'new_item'           => __( 'New Story', 'alpha' ),
		'view_item'          => __( 'View Story', 'alpha' ),
		'search_items'       => __( 'Search Stories', 'alpha' ),
		'not_found'          => __( 'No Stories found', 'alpha' ),
		'not_found_in_trash' => __( 'No Stories found in Trash', 'alpha' ),
		'parent_item_colon'  => __( 'Parent Story:', 'alpha' ),
		'menu_name'          => __( 'Stories', 'alpha' ),
	);

	$args = array(
		'labels'              => $labels,
		'hierarchical'        => false,
		'description'         => 'description',
		'taxonomies'          => array(),
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => true,
		'has_archive'         => false,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => false,
		'capability_type'     => 'post',
		'supports'            => array(
			'title',
			'editor',
			'author',
			'thumbnail',
			'excerpt',
			'custom-fields',
			'trackbacks',
			'comments',
			'revisions',
			'page-attributes',
			'post-formats',
		),
	);

	register_post_type( 'story', $args );
}
add_action( 'init', 'alpha_register_story_post_type' );

/**
 * Register Story Type Taxonomy
 *
 * @see https://developer.wordpress.org/reference/functions/register_taxonomy/
 *
 * @return void
 */
function alpha_register_story_type_taxonomy() {
	$labels = array(
		'name'                       => _x( 'Story Types', 'Taxonomy General Name', 'alpha' ),
		'singular_name'              => _x( 'Story Type', 'Taxonomy Singular Name', 'alpha' ),
		'menu_name'                  => __( 'Story Types', 'alpha' ),
		'all_items'                  => __( 'All Items', 'alpha' ),
		'parent_item'                => __( 'Parent Item', 'alpha' ),
		'parent_item_colon'          => __( 'Parent Item:', 'alpha' ),
		'new_item_name'              => __( 'New Item Name', 'alpha' ),
		'add_new_item'               => __( 'Add New Item', 'alpha' ),
		'edit_item'                  => __( 'Edit Item', 'alpha' ),
		'update_item'                => __( 'Update Item', 'alpha' ),
		'view_item'                  => __( 'View Item', 'alpha' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'alpha' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'alpha' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'alpha' ),
		'popular_items'              => __( 'Popular Items', 'alpha' ),
		'search_items'               => __( 'Search Items', 'alpha' ),
		'not_found'                  => __( 'Not Found', 'alpha' ),
		'no_terms'                   => __( 'No items', 'alpha' ),
		'items_list'                 => __( 'Items list', 'alpha' ),
		'items_list_navigation'      => __( 'Items list navigation', 'alpha' ),
	);

	$args = array(
		'labels'            => $labels,
		'hierarchical'      => false,
		'public'            => true,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud'     => true,
	);

	register_taxonomy( 'story_type', array( 'story' ), $args );
}
add_action( 'init', 'alpha_register_story_type_taxonomy', 0 );
