<?php
/**
 * AYS LINK TILES
 *
 * @package Alpha
 */

$block_id = 'alpha-ays-tiles-' . $block['id'];


// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'alpha-ays-tiles';

if ( get_field( 'tiles' ) ) {
	$tiles = get_field( 'tiles' );
}

$i = 0;

?>

<section id="<?php echo esc_attr( $block_id ); ?>" class="<?php echo esc_attr( $class_name ); ?>">
	<div class="container-full">
		
		<?php foreach($tiles as $tile){ ?>
			<a href="<?php if($tile['country_selector'] == 'on'){ echo 'javascript:void(0)'; } else { echo $tile['link']['url']; } ?>" class="ays-link-tile ays-link-tile-<?php echo $i; ?> <?php if($tile['country_selector'] == 'on'){ echo 'ays-link-tile-country-selector'; } ?>">

				<img src="<?php echo $tile['image']['url']; ?>" alt="<?php echo $tile['image']['alt']; ?>" />

				<div class="ays-tile-overlay"></div>

				<div class="ays-link-button-container">
					<div class="ays-link-button">
						<div><?php echo $tile['link']['title']; ?></div>
						<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M39.707 27.207C40.9277 25.9863 40.9277 24.0039 39.707 22.7832L20.957 4.0332C19.7363 2.8125 17.7539 2.8125 16.5332 4.0332C15.3125 5.25391 15.3125 7.23633 16.5332 8.45704L33.0762 25L16.543 41.543C15.3223 42.7637 15.3223 44.7461 16.543 45.9668C17.7637 47.1875 19.7461 47.1875 20.9668 45.9668L39.7168 27.2168L39.707 27.207Z"/>
						</svg>
					</div>
				</div>

			</a>

			<?php if($tile['country_selector'] == 'on'){ ?>

				<div class="ays-country-selector">

					<a href="javascript:void(0)" class="ays-country-selector-close">
						<svg width="50" height="50" viewBox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
							<rect width="50" height="50" rx="25" fill="black"/>
							<path d="M34.8832 18.0832C35.7035 17.2629 35.7035 15.9307 34.8832 15.1104C34.0629 14.29 32.7307 14.29 31.9104 15.1104L25 22.0273L18.0831 15.1169C17.2627 14.2966 15.9306 14.2966 15.1102 15.1169C14.2899 15.9372 14.2899 17.2694 15.1102 18.0898L22.0272 25.0001L15.1168 31.917C14.2965 32.7374 14.2965 34.0696 15.1168 34.8899C15.9371 35.7102 17.2693 35.7102 18.0896 34.8899L25 27.9729L31.9169 34.8833C32.7372 35.7036 34.0694 35.7036 34.8898 34.8833C35.7101 34.063 35.7101 32.7308 34.8898 31.9105L27.9728 25.0001L34.8832 18.0832Z" fill="white"/>
						</svg>
					</a>


					<div class="container">

						<div class="ays-country-selector-title"><?php echo $tile['country_selector_title']; ?></div>
						<?php foreach($tile['region'] as $region){ ?>
							<div class="ays-country-selector-region">
								<a href="javascript:void(0)" class="ays-country-selector-region-name">
									<h4><?php echo $region['region_name']; ?></h4>
									<svg width="31" height="18" viewBox="0 0 31 18" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M13.8333 16.9367C14.6915 17.795 16.0853 17.795 16.9436 16.9367L30.1263 3.75399C30.9846 2.89574 30.9846 1.50194 30.1263 0.643688C29.2681 -0.214563 27.8743 -0.214563 27.016 0.643688L15.385 12.2747L3.75399 0.650553C2.89574 -0.207697 1.50194 -0.207697 0.643688 0.650553C-0.214563 1.5088 -0.214563 2.9026 0.643688 3.76085L13.8264 16.9436L13.8333 16.9367Z" fill="black"/>
									</svg>

								</a>

								<div class="ays-country-selector-list">
									<?php foreach($region['country'] as $country){ ?>

										<a class="ays-country-selector-link" target="<?php echo $country['link']['target']; ?>" href="<?php echo $country['link']['url']; ?>">
											<svg width="20" height="27" viewBox="0 0 20 27" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_1_202)">
												<path d="M11.2344 25.7932C13.9062 22.5071 20 14.5426 20 10.069C20 4.64339 15.5208 0.241455 10 0.241455C4.47917 0.241455 0 4.64339 0 10.069C0 14.5426 6.09375 22.5071 8.76562 25.7932C9.40625 26.5763 10.5938 26.5763 11.2344 25.7932ZM10 6.79318C10.8841 6.79318 11.7319 7.13831 12.357 7.75266C12.9821 8.367 13.3333 9.20023 13.3333 10.069C13.3333 10.9379 12.9821 11.7711 12.357 12.3854C11.7319 12.9998 10.8841 13.3449 10 13.3449C9.11594 13.3449 8.2681 12.9998 7.64298 12.3854C7.01786 11.7711 6.66667 10.9379 6.66667 10.069C6.66667 9.20023 7.01786 8.367 7.64298 7.75266C8.2681 7.13831 9.11594 6.79318 10 6.79318Z"/>
												</g>
												<defs>
												<clipPath id="clip0_1_202">
												<rect width="20" height="26.2069" fill="white" transform="translate(0 0.241455)"/>
												</clipPath>
												</defs>
											</svg>

											<?php echo $country['link']['title']; ?>		
										</a>

									<?php } ?>
								</div>

							</div>

						<?php } ?>

					</div>

				</div>

			<?php } ?>
			<?php $i++; ?>
		<?php } ?>

		
	</div>
</section>

