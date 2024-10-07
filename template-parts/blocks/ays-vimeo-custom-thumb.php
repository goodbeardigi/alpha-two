<?php
/**
 * Vimeo embed with custom thumbnail
 *
 * @package Alpha
 */

$block_id = 'alpha-ays-vimeo-custom-thumb-' . $block['id'];


// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'ays-vimeo-custom-thumb';

if ( get_field( 'vimeo_video_id' ) ) {
	$vimeo_id = get_field( 'vimeo_video_id' );
}

if ( get_field( 'thumbnail' ) ) {
	$thumbnail = get_field( 'thumbnail' );
}

if ( get_field( 'video_position' ) ) {
	$video_position = get_field( 'video_position' );
}

if ( get_field( 'width' ) ) {
	$width = get_field( 'width' );
}

if ( get_field( 'div_id' ) ) {
	$div_id = get_field( 'div_id' );
}

?>
<div id="<?php echo $div_id; ?>" class="wp-block-group has-background has-white-background-color" style="padding-top: 0; padding-bottom: 0;">
	<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php if(isset($width)){ echo esc_attr( $class_name ) . "-" . $width; } ?> <?php echo esc_attr( $class_name ); ?> <?php if($video_position == 'overlap-top'){ echo 'ays-vimeo-custom-thumb-overlap-top'; } elseif($video_position == 'overlap-bottom'){ echo 'ays-vimeo-custom-thumb-overlap-bottom'; } ?>">
		
		<div class="container video-container <?php if(isset($width) && $width == 'full'){ echo 'container-full'; } ?>" style="padding-top:56.25%">
			
			<a href="javascript:void(0)" class="ays-vimeo-custom-thumb-cover" data-vimeo-video-id="<?php echo $vimeo_id; ?>">

				 <img src="<?php echo $thumbnail['url']; ?>" />

				 <svg width="160" height="160" viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
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
		</div>
	</section>
</div>