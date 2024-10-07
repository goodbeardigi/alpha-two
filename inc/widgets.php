<?php
/**
 * Alpha custom widgets
 *
 * @package Alpha
 */

/**
 * Register custom Alpha widgets
 *
 * @return void
 */
function alpha_register_widgets() {

	require_once get_template_directory() . '/inc/widgets/class-alpha-cta-widget.php';

	register_widget( 'Alpha_CTA_Widget' );

	new WP_Nav_Menu_Widget();
}
add_action( 'widgets_init', 'alpha_register_widgets' );


function alpha_nav_menu_widget_params( $params ) {
	$widget_id    = $params[0]['widget_id'];
	$widget_style = get_field( 'style', 'widget_' . $widget_id );
	if ( ! empty( $widget_style ) ) {
		$params[0]['before_widget'] = preg_replace( '/class\=\"widget/', 'class="widget alpha-menu-' . $widget_style, $params[0]['before_widget'] );
	}
	return $params;
}
add_filter( 'dynamic_sidebar_params', 'alpha_nav_menu_widget_params', 10, 4 );
