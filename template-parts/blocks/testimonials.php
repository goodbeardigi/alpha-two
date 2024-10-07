<?php
/**
 * Stats Block
 *
 * @package Alpha
 */

$block_id = 'alpha-testimonials-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-testimonials';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}

?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<div class="container">
		<?php if ( have_rows( 'testimonials' ) ) : ?>
			<div class="alpha-testimonials-slider alpha-slider">
				<?php
				while ( have_rows( 'testimonials' ) ) :
					the_row();
					?>
					<div>
						<div class="alpha-testimonial">
							<div class="alpha-testimonial-quote"></div>
							<div class="alpha-testimonial-content">
								<?php if ( get_sub_field( 'text' ) ) : ?>
									<div class="alpha-testimonial-text">
										<?php the_sub_field( 'text' ); ?>
									</div>
								<?php endif; ?>
								<?php if ( get_sub_field( 'name' ) ) : ?>
									<div class="alpha-testimonial-name">
										<?php
										the_sub_field( 'name' );

										if ( get_sub_field( 'position' ) ) {
											echo ',';
										}
										?>

										<?php if ( get_sub_field( 'position' ) ) : ?>
											<div class="alpha-testimonial-position">
												<?php the_sub_field( 'position' ); ?>
											</div>
										<?php endif; ?>
									</div>
								<?php endif; ?>
							</div>
							<?php if ( get_sub_field( 'image' ) ) : ?>
								<div class="alpha-testimonial-image">
									<?php echo wp_get_attachment_image( get_sub_field( 'image' ), 'large' ); ?>
								</div>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
			</div>				
		<?php endif; ?>
	</div>
</section>
