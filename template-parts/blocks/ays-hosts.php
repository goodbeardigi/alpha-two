<?php
/**
 * AYS Hosts
 *
 * @package Alpha
 */

$block_id = 'alpha-ays-hosts-' . $block['id'];


// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-ays-hosts';

if ( get_field( 'hosts' ) ) {
	$hosts = get_field( 'hosts' );
}
$count = 0;

?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<div class="container ays-hosts">
		<h2><?php the_field( 'title' ); ?></h2>
		<div class="swiper-hosts ays-hosts-swiper ays-fade-up">
			<div class="swiper-wrapper">
				<?php foreach($hosts as $host){ ?>
					<?php $count++; ?>
					<div class="swiper-slide ays-host">
						<div class="ays-host-inner">
							<div class="ays-host-content">
								<div>
									<div class="ays-host-image-mobile">
										<?php if(isset($host['vimeo_id']) && $host['vimeo_id'] != '' ){ ?>
											<div class="ays-custom-thumb" style="position: relative;">

												<div class="video-container" style="padding-top:177.92%">

													<a href="javascript:void(0)" class="ays-vimeo-custom-thumb-cover" data-vimeo-video-padding="0" data-vimeo-video-id="<?php echo $host['vimeo_id']; ?>">

														 <img src="<?php echo $host['image']['url']; ?>" />

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

											</div>
										<?php } elseif(isset($host['image']['url'])) { ?>
											<img src="<?php echo $host['image']['url']; ?>"alt="<?php echo $host['image']['alt']; ?>" />
										<?php } ?>
									</div>
									<div class="ays-host-contain">
										<div class="ays-host-name"><?php echo $host['name']; ?></div>
										<div class="ays-host-bio"><?php echo $host['bio']; ?></div>
									</div>

									<!-- <div class="swiper-pagination-<?php echo $count; ?>"></div> -->

									<div class="ays-host-nav-buttons">
										<div class="swiper-button-prev swiper-button-prev-hosts"></div>
					  					<div class="swiper-button-next swiper-button-next-hosts"></div>
									</div>
								</div>
							</div>
							<div class="ays-host-image ays-host-image-desktop">
								<?php if(isset($host['vimeo_id'])  && $host['vimeo_id'] != '' ){ ?>
									<div class="ays-custom-thumb">

										<div class="video-container" style="padding-top:177.92%">

											<a href="javascript:void(0)" class="ays-vimeo-custom-thumb-cover" data-vimeo-video-padding="0" data-vimeo-video-id="<?php echo $host['vimeo_id']; ?>">

												 <img src="<?php echo $host['image']['url']; ?>" />

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

									</div>

								<?php } elseif(isset($host['image']['url'])) { ?>
									<img src="<?php echo $host['image']['url']; ?>"alt="<?php echo $host['image']['alt']; ?>" />
								<?php } ?>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
			<!-- If we need pagination -->
			<div class="swiper-pagination-container">
				<div class="swiper-pagination swiper-pagination-hosts"></div>
			</div>

			  <!-- If we need navigation buttons -->
			  <!-- <div class="swiper-button-prev"></div>
			  <div class="swiper-button-next"></div> -->

			  <!-- If we need scrollbar -->
			  <!-- <div class="swiper-scrollbar"></div> -->
		</div>
	</div>
</section>
