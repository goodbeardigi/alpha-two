<?php
if ( get_field( 'features_colour' ) ) {
	$features_colour = get_field( 'features_colour' );
}
if ( get_field( 'feature' ) ) {
	$feature = get_field( 'feature' );
}
?>

<div class="ays-whats-new-animation-container">
	<div class="ays-whats-new-container">
		<?php foreach($feature as $item){ ?>
			<div class="ays-whats-new-item ays-whats-new-item--<?php echo $features_colour; ?>">
				<img  src="<?php echo $item['number_image']['url']; ?>" />
				<?php echo $item['content']; ?>
			</div>
		<?php } ?>
	</div>

	<img class="whats-new-animation-globe" src="/wp-content/uploads/2024/09/AYS-Animation-6.gif" />
	<img class="whats-new-animation-buttons" src="/wp-content/uploads/2024/09/AYS-Animation-7.gif" />
	<img class="whats-new-animation-controller" src="/wp-content/uploads/2024/09/AYS-Animation-8.gif" />
	<img class="whats-new-animation-pencil" src="/wp-content/uploads/2024/09/AYS-Animation-9.gif" />
	<img class="whats-new-question-mark" src="/wp-content/uploads/2024/09/question-mark.png" />
	<img class="whats-new-green-ribbon" src="/wp-content/uploads/2024/09/green-ribbon-2.png" />
	<img class="whats-new-music" src="/wp-content/uploads/2024/09/music.png" />
	<img class="whats-new-star-circles" src="/wp-content/uploads/2024/09/star-circles.png" />
	<img class="whats-new-red-ribbon" src="/wp-content/uploads/2024/09/Red-Ribbon.png" />
	<img class="whats-new-green-stars" src="/wp-content/uploads/2024/09/Green-Stars.png" />

</div>