<?php
/**
 * Stats Block
 *
 * @package Alpha
 */

$block_id = 'alpha-stats-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-stats';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}
if ( get_field( 'image_position' ) ) {
	$class_name .= ' image-' . get_field( 'image_position' );
}

?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<div class="container">
		<?php if ( get_field( 'image' ) ) : ?>
			<div class="alpha-stats-image">
				<figure>
					<?php echo wp_get_attachment_image( get_field( 'image' ), 'full' ); ?>
				</figure>
				<?php if ( get_field('overlay_image') ) : ?>
				<figure class="alpha-stats-overlay">
					<?php echo wp_get_attachment_image( get_field( 'overlay_image' ), 'medium' ); ?>
				</figure>
				<?php endif; ?>
			</div>
		<?php endif; ?>
		<div class="alpha-stats-content">
			<?php if ( get_field( 'time' ) ) : ?>
				<div class="alpha-stats-time"><?php the_field( 'time' ); ?></div>	
			<?php endif; ?>
			<?php if ( get_field( 'heading' ) ) : ?>
				<h2 class="alpha-stats-heading"><?php the_field( 'heading' ); ?></h2>
			<?php endif; ?>
		</div>
	</div>
</section>
