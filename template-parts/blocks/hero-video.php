<?php
/**
 * Hero Video Block
 *
 * @package Alpha
 */

$block_id = 'alpha-hero-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$block_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-hero-video';
if ( ! empty( $block['className'] ) ) {
	$class_name .= ' ' . $block['className'];
}



if ( get_field( 'video_file_mp4' ) ) {
	$video_file_mp4 = get_field( 'video_file_mp4' );
}
if ( get_field( 'video_file_webm' ) ) {
	$video_file_webm = get_field( 'video_file_webm' );
}
if ( get_field( 'video_file_ogg' ) ) {
	$video_file_ogg = get_field( 'video_file_ogg' );
}
if ( get_field( 'fallback_image' ) ) {
	$fallback_image = get_field( 'fallback_image' );
}
if ( get_field( 'video_button_text' ) ) {
	$video_button_text = get_field( 'video_button_text' );
}
if ( get_field( 'vimeo_id' ) ) {
	$vimeo_id = get_field( 'vimeo_id' );
}


?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	
	<div class="alpha-hero-video-container">
		<video <?php if(isset($fallback_image)){ echo 'poster="'. $fallback_image["url"] . '"'; }; ?> autoplay="true" loop muted playsinline>
			<?php if(isset($video_file_mp4)){ ?>
		  		<source src="<?php echo $video_file_mp4['url']; ?>" type="video/mp4">
		  	<?php } ?>
		  	<?php if(isset($video_file_mp4)){ ?>
			  <source src="<?php echo $video_file_ogg['url']; ?>" type="video/ogg">
			<?php } ?>
			<?php if(isset($video_file_mp4)){ ?>
		  		<source src="<?php echo $video_file_webm['url']; ?>" type="video/webm">
		  	<?php } ?>
		Your browser does not support the video tag.
		</video>
	</div>

<!-- 	<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
		<g clip-path="url(#clip0_111_103)">
		<path d="M24.9923 49.9999C23.9304 49.9999 23.0686 49.1381 23.0686 48.0763C23.0686 47.5684 23.2687 47.076 23.6303 46.7143L46.7144 23.6303C47.4761 22.8916 48.6919 22.907 49.4383 23.6688C50.1616 24.4151 50.1616 25.6078 49.4383 26.3542L26.3543 49.4382C25.9926 49.7999 25.5078 49.9999 24.9923 49.9999Z" fill="white"/>
		<path d="M24.9923 49.9999C24.4845 49.9999 23.992 49.7998 23.6303 49.4382L0.546322 26.3465C-0.192366 25.5847 -0.176977 24.3689 0.584796 23.6226C1.33118 22.8993 2.52385 22.8993 3.27024 23.6226L26.3543 46.7066C27.1083 47.4607 27.1083 48.6764 26.3543 49.4305C25.9926 49.7921 25.5078 49.9922 24.9923 49.9922V49.9999Z" fill="white"/>
		<path d="M24.9923 26.916C23.9304 26.916 23.0686 26.0541 23.0686 24.9923C23.0686 24.4844 23.2687 23.992 23.6303 23.6303L46.7144 0.546303C47.4761 -0.192386 48.6919 -0.176996 49.4383 0.584777C50.1616 1.33116 50.1616 2.52383 49.4383 3.27022L26.3543 26.3542C25.9926 26.7159 25.5078 26.916 24.9923 26.916Z" fill="white"/>
		<path d="M24.9923 26.9159C24.4845 26.9159 23.992 26.7159 23.6303 26.3542L0.546322 3.2625C-0.192366 2.50073 -0.176977 1.28497 0.584796 0.538587C1.33118 -0.184713 2.51616 -0.184713 3.26254 0.546282L26.3466 23.6303C27.1006 24.3844 27.1006 25.6001 26.3466 26.3542C25.9849 26.7159 25.5002 26.9159 24.9846 26.9159H24.9923Z" fill="white"/>
		</g>
		<defs>
		<clipPath id="clip0_111_103">
		<rect width="49.9769" height="50" fill="white"/>
		</clipPath>
		</defs>
	</svg> -->

	<?php if(isset($vimeo_id)){ ?>
		<!-- <div class="container" style="text-align:right"> -->
			<div class="alpha-hero-video-button">
				<a href="https://vimeo.com/<?php echo $vimeo_id; ?>" data-loop="true" class="trailer-link ays-button"><?php echo $video_button_text; ?></a>
			</div>
		<!-- </div> -->
	<?php } ?>

</section>
