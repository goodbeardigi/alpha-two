<?php
/**
 * Image with text Block
 *
 * @package Alpha
 */

$block_id = 'alpha-image-text-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-image-text';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}
if ( get_field( 'style' ) ) {
	$class_name .= ' has-style has-style-' . get_field( 'style' );
}
if ( get_field( 'image_position' ) ) {
	$class_name .= ' image-position image-position-' . get_field( 'image_position' );
}

$allowed_blocks = array( 'core/heading', 'core/paragraph', 'core/image', 'core/button', 'core/buttons', 'core/embed' );

$template = array(
	array(
		'core/heading',
		array(
			'level'   => 4,
			'content' => 'Title',
		),
	),
	array(
		'core/paragraph',
		array(
			'content' => 'Content',
		),
	),
);

?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<div class="alpha-image-text-columns">
		<?php if ( get_field('image') ) : ?>
			<div class="alpha-image-text-image">
				<?php echo wp_get_attachment_image( get_field( 'image' ), 'large' ); ?>
			</div>
		<?php endif; ?>
		<div class="alpha-image-text-content">
			<div class="alpha-image-text-content-wrap">
				<InnerBlocks template="<?php echo esc_attr( wp_json_encode( $template ) ); ?>" allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks ) ); ?>"/>
			</div>
		</div>
	</div>
</section>
