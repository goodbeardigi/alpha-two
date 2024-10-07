<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Alpha
 */

get_header();
?>

	<main id="primary" class="site-main blog-archive">

		<?php if ( have_posts() ) : ?>

			<div class="all-posts-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</div>

			<?php get_template_part( 'template-parts/list-posts' ); ?>

			<?php get_sidebar(); ?>
			<?php

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_footer();
