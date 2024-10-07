<?php
/**
 * Stories Block
 *
 * @package Alpha
 */

$block_id = 'alpha-sstories-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-stories';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$class_name .= ' align' . $block['align'];
}

$args = array(
	'post_type'      => 'story',
	'post_status'    => 'publish',
	'posts_per_page' => get_field( 'per_page_display' ),
);

if ( get_query_var( 'paged' ) ) {
	$args['paged'] = get_query_var( 'paged' );
}

$display_stories = get_field( 'display_stories' );
switch ( $display_stories ) {
	case 'type':
		$args['tax_query'] = array(
			array(
				'taxonomy' => 'story_type',
				'terms'    => get_field( 'story_type' ),
			)
		);
		break;

	case 'pick':
		$args['post__in'] = get_field( 'pick_stories' );
		$args['orderby']  = 'post__in';
		break;

	case 'all':
	default:
		break;
}

$q = new WP_Query( $args );

?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<?php
	if ( $q->have_posts() ) :
		while ( $q->have_posts() ) :
			$q->the_post();
			?>
			<div class="alpha-stories-single">
				<div class="alpha-story">
					<a href="<?php the_field( 'video_url', get_the_ID() ); ?>">
						<div class="alpha-story-details">
							<figure>
								<?php the_post_thumbnail('large'); ?>
							</figure>
							<div class="alpha-story-description">
								<?php the_content(); ?>
							</div>
						</div>
						<div class="alpha-story-summary">
							<h5><?php the_title(); ?></h5>
							<span class="alpha-story-watch">
								<?php _e( 'Watch', 'alpha' ); ?>
								<span class="aicon-chevron-right"></span>
							</span>
						</div>
					</a>
				</div>
			</div>
			<?php
		endwhile;
	endif;
	?>
</section>

<div class="pagination">
	<?php
	echo paginate_links(
		array(
			'prev_text' => '<span class="aicon-arrow-left"></span>',
			'next_text' => '<span class="aicon-arrow-right"></span>',
			'current' => max( 1, get_query_var('paged') ),
			'total' => $q->max_num_pages,
			'mid_size' => 1,
		)
	);
	?>
</div>
