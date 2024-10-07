<?php
/**
 * Card Block
 *
 * @package Alpha
 */

$block_id = 'alpha-card-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-card';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}
if ( get_field( 'style' ) ) {
	$class_name .= ' has-style has-style-' . get_field( 'style' );
} else {
	$class_name .= ' has-style has-style-default';
}
if ( get_field( 'image_position' ) ) {
	$class_name .= ' has-image-position has-image-position-' . get_field( 'image_position' );
} else {
	$class_name .= ' has-image-position has-image-position-default';
}
if ( get_field( 'icon' ) ) {
	$class_name .= ' has-icon';
}

$allowed_blocks = array( 'core/heading', 'core/paragraph', 'core/image', 'core/button', 'core/buttons', 'core/embed' );

$template = array(
	array(
		'core/heading',
		array(
			'level'   => 4,
			'content' => 'Card Title',
		),
	),
	array(
		'core/paragraph',
		array(
			'content' => 'Card Content',
		),
	),
);


?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<div class="card-content">
		<?php if ( get_field( 'image' ) ) : ?>
			<div class="alpha-card-image">
				<?php echo wp_get_attachment_image( get_field( 'image' ), 'large' ); ?>
			</div>
		<?php endif; ?>
		<?php if ( get_field( 'icon' ) ) : ?>
			<span class="alpha-card-icon aicon-<?php echo esc_attr( get_field( 'icon' ) ); ?>"></span>
		<?php endif; ?>
		<InnerBlocks template="<?php echo esc_attr( wp_json_encode( $template ) ); ?>" allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks ) ); ?>"/>
	</div>
</section>
