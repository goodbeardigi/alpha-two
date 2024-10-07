<?php
/**
 * Episodes Block
 *
 * @package Alpha
 */

$block_id = 'alpha-episodes-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-episodes';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}

$episodes = get_field( 'episodes' );

?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<div class="container">
		<h2><?php the_field( 'title' ); ?></h2>

		<div class="alpha-episodes-previews">
			<?php foreach ( $episodes as $key => $episode ) : ?>
				<div class="alpha-episodes-preview" data-id="<?php echo esc_attr( $key ); ?>">
					<div>
						<?php echo alpha_video_player( $episode['video_link'] ); ?>
					</div>
				</div>
			<?php endforeach; ?>
		</div>

		<div class="alpha-episodes-nav">
			<ul>
			<?php foreach ( $episodes as $key => $episode ) : ?>
				<li>
					<a href="#" data-for="<?php echo esc_attr( $key ); ?>" <?php echo $key === 0 ? 'class="current"': ''; ?>>
						<span class="name"><?php echo esc_html( $episode['title'] ); ?></span>
						<span class="duration"><?php echo esc_html( $episode['duration'] ); ?></span>
					</a>
				</li>
			<?php endforeach; ?>
			</ul>
		</div>

	</div>
</section>
