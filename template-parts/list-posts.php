<div class="posts">
	<?php
	while ( have_posts() ) :
		the_post();
		?>
		
		<div class="post">
			<?php get_template_part( 'template-parts/content-post-summary' ); ?>
		</div>

	<?php endwhile; ?>

	<div class="pagination">
		<?php
		echo paginate_links(
			array(
				'prev_text' => '<span class="aicon-arrow-left"></span>',
				'next_text' => '<span class="aicon-arrow-right"></span>',
			)
		);
		?>
	</div>
</div>