<?php
/**
 *  Set here desired option's pages.
 *
 * @package Alpha
 */

if ( function_exists( 'acf_add_options_page' ) ) {

	acf_add_options_page(
		array(
			'page_title'  => 'Theme Settings',
			'menu_title'  => 'Theme Settings',
			'menu_slug'   => 'theme-settings',
			'capability'  => 'manage_options',
			'parent_slug' => '',
			'position'    => false,
			'icon_url'    => false,
			'redirect'    => false,
		)
	);

}
