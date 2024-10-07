<?php
/**
 * Contributor Block
 *
 * @package Alpha
 */

$block_id = 'alpha-contributor-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-contributor';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}

$allowed_blocks = array( 'core/heading', 'core/paragraph' );

$template = array(
	array(
		'core/heading',
		array(
			'level'   => 5,
			'content' => 'Contributor Name',
		),
	),
	array(
		'core/paragraph',
		array(
			'content' => 'Description',
		),
	),
);

?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<figure>
		<?php
		if ( get_field( 'photo' ) ) {
			echo wp_get_attachment_image( get_field( 'photo' ) );
		}
		?>
	</figure>
	<div class="alpha-contributor-content">
		<InnerBlocks template="<?php echo esc_attr( wp_json_encode( $template ) ); ?>" allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks ) ); ?>"/>
	</div>
</section>
