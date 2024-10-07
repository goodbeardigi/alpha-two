<?php
/**
 * Product Meta Block
 *
 * @package Alpha
 */

$block_id = 'alpha-product-meta-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-product-meta';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}

?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<?php if ( have_rows( 'product_meta', $post_id ) ) : ?>
	<ul>
		<?php
		while ( have_rows( 'product_meta', $post_id ) ) :
			the_row();
			?>
			<li>
				<i class="aicon-<?php echo the_sub_field( 'icon' ); ?>"></i>
				<?php the_sub_field( 'text' ); ?>
			</li>
		<?php endwhile; ?>
	</ul>
	<?php endif; ?>
</section>
