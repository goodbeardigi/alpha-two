<?php
/**
 * Alpha menu functions
 *
 * @package Alpha
 */

require_once get_template_directory() . '/inc/class-alpha-menu-walker.php';

/**
 * Add button class to menu item if "Is Button" checkbox checked
 *
 * @param array    $atts {
 *        The HTML attributes applied to the menu item's `<a>` element, empty strings are ignored.
 *
 *     @type string $title        Title attribute.
 *     @type string $target       Target attribute.
 *     @type string $rel          The rel attribute.
 *     @type string $href         The href attribute.
 *     @type string $aria_current The aria-current attribute.
 * }
 * @param WP_Post  $item  The current menu item.
 * @param stdClass $args  An object of wp_nav_menu() arguments.
 * @param int      $depth Depth of menu item. Used for padding.
 * @return array
 */
function alpha_menu_item_link_attributes( $atts = array(), $item = null ) {

	$is_button = (bool) get_post_meta( $item->ID, 'is_button', true );

	if ( true === $is_button ) {
		if ( ! isset( $atts['class'] ) ) {
			$atts['class'] = 'btn';
		} else {
			$atts['class'] .= ' btn';
		}
	}

	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'alpha_menu_item_link_attributes', 10, 2 );

/**
 * Adds custom Alpha menu content: image and description
 *
 * @param string   $title The menu item's title.
 * @param WP_Post  $item  The current menu item.
 * @param stdClass $args  An object of wp_nav_menu() arguments.
 * @param int      $depth Depth of menu item. Used for padding.
 * @return string
 */
function alpha_nav_menu_item_title( $title = '', $item = null, $args = array(), $depth = 0 ) {

	$image = (int) get_post_meta( $item->ID, 'image', true );

	if ( $image > 0 || ! empty( trim( $item->post_content ) ) ) {
		$title = "<div class=\"title\">{$title}</div>";

		if ( $image > 0 ) {
			$title = '<div class="image">' . wp_get_attachment_image( $image, 'medium' ) . '</div>' . $title;
		}

		if ( ! empty( $item->post_content ) ) {
			$title .= '<div class="description">' . $item->post_content . '</div>';
		}
	}

	return $title;
}
add_filter( 'nav_menu_item_title', 'alpha_nav_menu_item_title', 10, 4 );
