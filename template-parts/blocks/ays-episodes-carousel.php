<?php
/**
 * Episodes Carousel
 *
 * @package Alpha
 */

$block_id = 'alpha-ays-episode-carousel-' . $block['id'];


// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-ays-episode-carousel';

if ( get_field( 'episodes' ) ) {
	$episodes = get_field( 'episodes' );
}

if ( get_field( 'colour_one' ) ) {
	$colour_one = get_field( 'colour_one' );
}

if ( get_field( 'colour_two' ) ) {
	$colour_two = get_field( 'colour_two' );
}

if ( get_field( 'card_size' ) ) {
	$card_size = get_field( 'card_size' );
}

if ( get_field( 'format' ) ) {
	$format = get_field( 'format' );
}

if ( get_field( 'play_button_colour' ) ) {
	$play_button_colour = get_field( 'play_button_colour' );
}

if ( get_field( 'format' ) ) {
	$format = get_field( 'format' );
}

if ( get_field( 'video_source' ) ) {
	$video_source = get_field( 'video_source' );
}

$count = 0;

?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<div class="container ays-episode-carousel-container ays-episode-container-<?php echo $format; ?>">
		<h2><?php the_field( 'title' ); ?></h2>
		<div class="swiper swiper-<?php echo $card_size; ?> ays-episode-carousel-swiper <?php if($format != 'video'){ ?> ays-episode-carousel-colour-one-<?php echo $colour_one; ?> ays-episode-carousel-colour-two-<?php echo $colour_two; ?> <?php } ?>">
			<div class="swiper-wrapper">
				<?php foreach($episodes as $episode){ ?>
					<?php $count++; ?>
					<div class="swiper-slide ays-episode <?php if($format != 'video'){ ?> <?php echo ($count % 2 == 1) ? "ays-episode-bg-".$colour_one : "ays-episode-bg-".$colour_two; ?> <?php } ?>">
						<?php if($format == 'video'){ ?>
							<div class="ays-custom-thumb">

								<div class="video-container" style="padding-top:56.25%">

									<?php if($video_source == 'vimeo'){ ?>

										<a href="javascript:void(0)" class="ays-vimeo-custom-thumb-cover" data-vimeo-video-padding="0" data-vimeo-video-id="<?php echo $episode['vimeo_id']; ?>">

											 <img src="<?php echo $episode['thumbnail']['url']; ?>" />

											 <svg <?php if(isset($play_button_colour)){?>class="svg-fill-<?php echo $play_button_colour; ?>"<?php } ?> width="160" height="160" viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_24_707)">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M60.16 105.6V54.4C60.16 50.56 64 48 67.2 49.92L111.36 75.52C114.56 77.44 114.56 81.92 111.36 83.84L67.2 109.44C64 111.36 60.16 108.8 60.16 104.96V105.6Z" fill="white"/>
												<path d="M80 0C124.16 0 160 35.84 160 80C160 124.16 124.16 160 80 160C35.84 160 0 124.16 0 80C0 35.84 35.84 0 80 0ZM80 14.08C43.52 14.08 14.08 43.52 14.08 80C14.08 116.48 43.52 145.92 80 145.92C116.48 145.92 145.92 117.12 145.92 80C145.92 42.88 116.48 14.08 80 14.08Z" fill="white"/>
												</g>
												<defs>
												<clipPath id="clip0_24_707">
												<rect width="160" height="160" fill="white"/>
												</clipPath>
												</defs>
												</svg>

										</a>

									<?php } elseif($video_source == 'brightcove'){ ?>

										<a href="javascript:void(0)" class="ays-vimeo-custom-thumb-cover" data-vimeo-video-padding="0" data-brightcove-video-id="<?php echo $episode['vimeo_id']; ?>">

											 <img src="<?php echo $episode['thumbnail']['url']; ?>" />

											 <svg <?php if(isset($play_button_colour)){?>class="svg-fill-<?php echo $play_button_colour; ?>"<?php } ?> width="160" height="160" viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_24_707)">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M60.16 105.6V54.4C60.16 50.56 64 48 67.2 49.92L111.36 75.52C114.56 77.44 114.56 81.92 111.36 83.84L67.2 109.44C64 111.36 60.16 108.8 60.16 104.96V105.6Z" fill="white"/>
												<path d="M80 0C124.16 0 160 35.84 160 80C160 124.16 124.16 160 80 160C35.84 160 0 124.16 0 80C0 35.84 35.84 0 80 0ZM80 14.08C43.52 14.08 14.08 43.52 14.08 80C14.08 116.48 43.52 145.92 80 145.92C116.48 145.92 145.92 117.12 145.92 80C145.92 42.88 116.48 14.08 80 14.08Z" fill="white"/>
												</g>
												<defs>
												<clipPath id="clip0_24_707">
												<rect width="160" height="160" fill="white"/>
												</clipPath>
												</defs>
												</svg>

										</a>

									<?php } ?>

								</div>

							</div>
						<?php } else { ?>
							<div class="ays-episode-inner">
								<div class="ays-episode-number">
									<?php echo $episode['episode_number']; ?>
								</div>
								<div class="ays-episode-title">
									<?php echo $episode['episode_title']; ?>
								</div>
							</div>
						<?php } ?>
					</div>
				<?php } ?>
			</div>
			<!-- If we need pagination -->

			  <!-- If we need navigation buttons -->
			  <div class="swiper-button-prev"></div>
			  <div class="swiper-button-next"></div>

			  <!-- If we need scrollbar -->
			  <div class="swiper-scrollbar swiper-scrollbar-<?php echo $colour_one; ?>"></div>
		</div>
	</div>
</section>
