<?php
/**
 * Blog template
 *
 * @package Alpha
 */

get_header();
?>

	<main id="primary" class="site-main blog-archive <?php echo ! is_paged() ? 'index' : ''; ?>">
		<?php if ( have_posts() ) : ?>

			<?php
			if ( is_home() && ! is_front_page() && ! is_paged() ) :
				the_post();

				$background_id = false;

				if ( get_field( 'default_blog_image', 'option' ) ) {
					$background_id = get_field( 'default_blog_image', 'option' );
				} elseif ( has_post_thumbnail() ) {
					$background_id = get_post_thumbnail_id();
				}

				if ( false !== $background_id ) {
					$background_url        = wp_get_attachment_image_url( $background_id, 'full' );
					$background_url_mobile = wp_get_attachment_image_url( $background_id, 'large' );

					?>
					<style>
						#alpha-blog-hero .background {
							background-image: url( <?php echo esc_url( $background_url ); ?> );
						}
						@media (max-width: 480px) {
							#alpha-blog-hero .background {
								background-image: url( <?php echo esc_url( $background_url_mobile ); ?> );
							}
						}
					</style>
					<?php

				}
				?>
				<section id="alpha-blog-hero" class="alpha-hero alpha-hero-blog alpha-hero-full-page">
					<div class="background"></div>
					<div class="alpha-hero-content alpha-hero-blog-card">
						<h3><?php _e( 'Blog', 'alpha' ); ?></h3>
						<div class="alpha-hero-blog-summary">
							<div class="date"><?php the_time( 'M j, Y' ); ?></div>
							<h2><?php the_title(); ?></h2>
						</div>
						<p><a href="<?php the_permalink(); ?>"><?php _e( 'Read Article', 'alpha' ); ?></a></p>
					</div>
				</section>

			<?php endif; ?>

			<div class="all-posts-header">
				<h2><?php _e( 'All Posts', 'alpha' ); ?></h2>
			</div>
			
			<?php get_template_part( 'template-parts/list-posts' ); ?>

			<?php get_sidebar(); ?>
		<?php endif; ?>
	</main><!-- #main -->

<?php
get_footer();
