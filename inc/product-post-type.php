<?php
/**
 * Product Custom Post Type
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
function alpha_register_product_post_type() {

	$labels = array(
		'name'               => __( 'Products', 'alpha' ),
		'singular_name'      => __( 'Product', 'alpha' ),
		'add_new'            => _x( 'Add New Product', 'alpha', 'alpha' ),
		'add_new_item'       => __( 'Add New Product', 'alpha' ),
		'edit_item'          => __( 'Edit Product', 'alpha' ),
		'new_item'           => __( 'New Product', 'alpha' ),
		'view_item'          => __( 'View Product', 'alpha' ),
		'search_items'       => __( 'Search Products', 'alpha' ),
		'not_found'          => __( 'No Products found', 'alpha' ),
		'not_found_in_trash' => __( 'No Products found in Trash', 'alpha' ),
		'parent_item_colon'  => __( 'Parent Product:', 'alpha' ),
		'menu_name'          => __( 'Products', 'alpha' ),
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
		'show_in_rest'        => true,
		'menu_position'       => null,
		'menu_icon'           => null,
		'show_in_nav_menus'   => true,
		'publicly_queryable'  => true,
		'exclude_from_search' => false,
		'has_archive'         => true,
		'query_var'           => true,
		'can_export'          => true,
		'rewrite'             => array( 'slug' => 'preview' ),
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

	register_post_type( 'product', $args );
}
add_action( 'init', 'alpha_register_product_post_type' );

/**
 * Default template for Product post type
 *
 * @return void
 */
function alpha_product_register_template() {
	$post_type_object           = get_post_type_object( 'product' );
	$post_type_object->template = array(
		array(
			'acf/hero',
			array(
				'data' => array(
					'is_full_page' => 1,
					'hero_style'   => 'product',
					'title'        => __( 'Product Title', 'alpha' ),
				),
			),
		),
		array(
			'core/group',
			array(),
			array(
				array(
					'core/heading',
					array(
						'placeholder' => __( 'Product subtitle', 'alpha' ),
						'level'       => 4,
					),
				),
				array(
					'core/columns',
					array(),
					array(
						array(
							'core/column',
							array( 'width' => '75%' ),
							array(
								array(
									'core/heading',
									array(
										'placeholder' => __( 'Title', 'alpha' ),
										'level'       => 3,
									),
								),
								array( 'core/paragraph', array( 'placeholder' => __( 'Description', 'alpha' ) ) ),
								array( 'core/button', array( 'placeholder' => __( 'Button', 'alpha' ) ) ),
							),
						),
						array(
							'core/column',
							array(),
							array(
								array( 'acf/product-meta' ),
							),
						),
					),
				),
			),
		),
		array(
			'core/group',
			array(),
			array(
				array(
					'core/heading',
					array(
						'content' => __( 'Presenters', 'alpha' ),
						'level'   => 2,
					),
				),
				array( 'core/paragraph' ),
				array(
					'core/columns',
					array(),
					array(
						array(
							'core/column',
							array(),
							array(
								array( 'core/image', array( 'align' => 'center' ) ),
								array(
									'core/heading',
									array(
										'level'     => 4,
										'textAlign' => 'center',
									),
								),
								array( 'core/paragraph', array( 'align' => 'center' ) ),
							),
						),
						array(
							'core/column',
							array(),
							array(
								array( 'core/image', array( 'align' => 'center' ) ),
								array(
									'core/heading',
									array(
										'level'     => 4,
										'textAlign' => 'center',
									),
								),
								array( 'core/paragraph', array( 'align' => 'center' ) ),
							),
						),
						array(
							'core/column',
							array(),
							array(
								array( 'core/image', array( 'align' => 'center' ) ),
								array(
									'core/heading',
									array(
										'level'     => 4,
										'textAlign' => 'center',
									),
								),
								array( 'core/paragraph', array( 'align' => 'center' ) ),
							),
						),
					),
				),
			),
		),
		array( 'acf/episodes' ),
		array(
			'core/group',
			array(),
			array(
				array(
					'core/heading',
					array(
						'content' => __( 'Contributors', 'alpha' ),
						'level'   => 2,
					),
				),
				array(
					'core/columns',
					array(),
					array(
						array(
							'core/column',
							array(),
							array(
								array(
									'acf/contributor',
									array(),
									array(
										array( 'core/heading', array( 'level' => 4 ) ),
										array( 'core/paragraph' ),
									),
								),
							),
						),
						array(
							'core/column',
							array(),
							array(
								array(
									'acf/contributor',
									array(),
									array(
										array( 'core/heading', array( 'level' => 4 ) ),
										array( 'core/paragraph' ),
									),
								),
							),
						),
						array(
							'core/column',
							array(),
							array(
								array(
									'acf/contributor',
									array(),
									array(
										array( 'core/heading', array( 'level' => 4 ) ),
										array( 'core/paragraph' ),
									),
								),
							),
						),
					),
				),
			),
		),
		array(
			'core/group',
			array(),
			array(
				array(
					'core/heading',
					array(
						'level'   => 2,
						'content' => __( 'What\'s included', 'alpha' ),
					),
				),
				array( 'core/paragraph', array( 'content' => __( 'Alpha comes with everything you need to get started, and everything is available for free.', 'alpha' ) ) ),
				array(
					'core/columns',
					array(),
					array(
						array(
							'core/column',
							array(),
							array(
								array(
									'acf/card',
									array(
										'data' => array(
											'style' => 'plain',
											'icon'  => 'logo',
										),
									),
									array(
										array(
											'core/heading',
											array(
												'level'   => 5,
												'content' => __( 'Item description', 'alpha' ),
											),
										),
									),
								),
							),
						),
						array(
							'core/column',
							array(),
							array(
								array(
									'acf/card',
									array(
										'data' => array(
											'style' => 'plain',
											'icon'  => 'logo',
										),
									),
									array(
										array(
											'core/heading',
											array(
												'level'   => 5,
												'content' => __( 'Item description', 'alpha' ),
											),
										),
									),
								),
							),
						),
						array(
							'core/column',
							array(),
							array(
								array(
									'acf/card',
									array(
										'data' => array(
											'style' => 'plain',
											'icon'  => 'logo',
										),
									),
									array(
										array(
											'core/heading',
											array(
												'level'   => 5,
												'content' => __( 'Item description', 'alpha' ),
											),
										),
									),
								),
							),
						),
					),
				),
				array( 'core/button', array( 'text' => __( 'Sign Up', 'alpha' ) ) ),
			),
		),
	);
}
add_action( 'init', 'alpha_product_register_template' );
