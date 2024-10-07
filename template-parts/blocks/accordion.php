<?php
/**
 * Accordion Block
 *
 * @package Alpha
 */

$block_id = 'alpha-accordion-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-accordion';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}

$c = 0;

if ( have_rows( 'tabs' ) ) : ?>
<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<?php
	while ( have_rows( 'tabs' ) ) :
		the_row();
		$c++;
		$tab_id = sanitize_title( get_sub_field( 'title' ) );
		?>
		<div class="alpha-accordion-tab" id="<?php echo esc_attr( $tab_id ); ?>">
			<?php if ( get_sub_field('icon') ) : ?>
				<span class="alpha-accordion-icon aicon-<?php echo esc_attr( get_sub_field('icon') ); ?>"></span>
			<?php endif; ?>
			<h5 class="alpha-accordion-title"><a href="#<?php echo esc_attr( $tab_id ); ?>"><?php the_sub_field( 'title' ); ?></a></h5>
			<div class="alpha-accordion-content"><?php the_sub_field( 'content' ); ?></div>
		</div>
	<?php endwhile; ?>
</section>
<?php endif; ?>
