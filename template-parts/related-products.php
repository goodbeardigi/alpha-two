<?php
/**
 * Related Products
 *
 * @package Alpha
 */

$post_id = get_the_ID();

$q = new WP_Query(
	array(
		'post_type'      => 'product',
		'post_status'    => 'publish',
		'posts_per_page' => 4,
		'post__not_in'   => array( $post_id ),
	)
);

if ( $q->have_posts() ) : ?>

<div class="alpha-related-posts">
	<div class="container">
		<h3><?php _e( 'More Series', 'alpha' ); ?></h3>

		<div class="columns has-4-columns">
			<?php
			while ( $q->have_posts() ) :
				$q->the_post();
				?>
				
				<div class="column">
					<?php get_template_part( 'template-parts/content-post-summary' ); ?>
				</div>

				<?php
			endwhile;

			wp_reset_postdata();
			?>
		</div>
	</div>
</div>

	<?php
endif;
