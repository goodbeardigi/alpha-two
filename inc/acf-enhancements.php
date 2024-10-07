<?php
/**
 *  Functions to enhance ACF flexible content layouts.
 *
 * @package Alpha
 */

/**
 * Adds current Flexible Content's Row field as descriptor to the layout
 * label. An analogue to "Collapsed" field for Repeaters. Useful to
 * identify an item in a large list of rows.
 *
 * @param string $title  Title of flexible content section.
 * @param array  $field  Field Definition.
 * @param array  $layout Layout data.
 * @param int    $i      I think it's row index.
 *
 * @return mixed
 */
function alpha_acf_layout_title( $title, $field, $layout, $i ) {
	// Use only for certain layouts.

	/*
	if ( 'simple_content' == $layout['name'] ) {

		// Get field content to expand default layout label
		$name = get_sub_field('title');

		if ( $name ) {
			$title .= ': ' . $name;
		}
	}
	*/

	return $title;
}
add_filter( 'acf/fields/flexible_content/layout_title', 'alpha_acf_layout_title', 10, 4 );

/**
 * Adds Alpha block's category.
 */
add_filter(
	'block_categories',
	function ( $categories, $post ) {

		$custom_categories = array(
			array(
				'slug'  => 'alpha',
				'title' => __( 'Alpha', 'alpha' ),
			),
		);

		$categories_slugs = array_reduce(
			$categories,
			function ( $res, $cat ) {
				if ( ! empty( $cat['slug'] ) ) {
					$res[] = $cat['slug'];
				}

				return $res;
			},
			array()
		);

		foreach ( $custom_categories as $custom_category ) {
			if ( false === array_search( $custom_category['slug'], $categories_slugs, true ) ) {
				$categories[] = $custom_category;
			}
		}

		return $categories;
	},
	10,
	2
);

