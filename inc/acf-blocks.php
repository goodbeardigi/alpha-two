<?php
/**
 * Place all ACF powered blocks definitions here.
 *
 * @package Alpha
 */

/**
 * Registers ACF blocks.
 */
function alpha_register_acf_block_types() {

	acf_register_block_type(
		array(
			'name'            => 'hero',
			'title'           => __( 'Hero', 'alpha' ),
			'description'     => __( 'Hero', 'alpha' ),
			'render_template' => 'template-parts/blocks/hero.php',
			'category'        => 'alpha',
			'keywords'        => array( 'hero', 'alpha' ),
			'mode'            => 'auto',
			'icon'            => 'images-alt2',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'stats',
			'title'           => __( 'Stats', 'alpha' ),
			'description'     => __( 'Stats', 'alpha' ),
			'render_template' => 'template-parts/blocks/stats.php',
			'category'        => 'alpha',
			'keywords'        => array( 'stats', 'alpha' ),
			'mode'            => 'auto',
			'icon'            => 'images-alt2',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'testimonials',
			'title'           => __( 'Testimonials', 'alpha' ),
			'description'     => __( 'Testimonials', 'alpha' ),
			'render_template' => 'template-parts/blocks/testimonials.php',
			'category'        => 'alpha',
			'keywords'        => array( 'testimonials', 'alpha' ),
			'mode'            => 'auto',
			'icon'            => 'images-alt2',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'card',
			'title'           => __( 'Card', 'alpha' ),
			'description'     => __( 'Card', 'alpha' ),
			'render_template' => 'template-parts/blocks/card.php',
			'category'        => 'alpha',
			'keywords'        => array( 'card', 'alpha' ),
			'mode'            => 'preview',
			'icon'            => 'images-alt2',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'accordion',
			'title'           => __( 'Accordion', 'alpha' ),
			'description'     => __( 'Accordion', 'alpha' ),
			'render_template' => 'template-parts/blocks/accordion.php',
			'category'        => 'alpha',
			'keywords'        => array( 'accordion', 'alpha' ),
			'mode'            => 'auto',
			'icon'            => 'images-alt2',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'image-text',
			'title'           => __( 'Image with text', 'alpha' ),
			'description'     => __( 'Image with text', 'alpha' ),
			'render_template' => 'template-parts/blocks/image-text.php',
			'category'        => 'alpha',
			'keywords'        => array( 'image', 'text', 'alpha' ),
			'mode'            => 'preview',
			'icon'            => 'images-alt2',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'offices',
			'title'           => __( 'National Offices', 'alpha' ),
			'description'     => __( 'National Offices', 'alpha' ),
			'render_template' => 'template-parts/blocks/offices.php',
			'category'        => 'alpha',
			'keywords'        => array( 'offices', 'alpha' ),
			'mode'            => 'preview',
			'icon'            => 'images-alt2',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'stories',
			'title'           => __( 'Stories', 'alpha' ),
			'description'     => __( 'Stories', 'alpha' ),
			'render_template' => 'template-parts/blocks/stories.php',
			'category'        => 'alpha',
			'keywords'        => array( 'offices', 'alpha' ),
			'mode'            => 'preview',
			'icon'            => 'images-alt2',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'product-meta',
			'title'           => __( 'Product Meta', 'alpha' ),
			'description'     => __( 'Product Meta', 'alpha' ),
			'render_template' => 'template-parts/blocks/product-meta.php',
			'category'        => 'alpha',
			'keywords'        => array( 'product', 'meta', 'alpha' ),
			'mode'            => 'preview',
			'icon'            => 'images-alt2',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'episodes',
			'title'           => __( 'Episodes', 'alpha' ),
			'description'     => __( 'Episodes', 'alpha' ),
			'render_template' => 'template-parts/blocks/episodes.php',
			'category'        => 'alpha',
			'keywords'        => array( 'episodes', 'alpha' ),
			'mode'            => 'auto',
			'icon'            => 'images-alt2',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'contributor',
			'title'           => __( 'Contributor', 'alpha' ),
			'description'     => __( 'Contributor', 'alpha' ),
			'render_template' => 'template-parts/blocks/contributor.php',
			'category'        => 'alpha',
			'keywords'        => array( 'episodes', 'alpha' ),
			'mode'            => 'preview',
			'icon'            => 'images-alt2',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'products',
			'title'           => __( 'Products', 'alpha' ),
			'description'     => __( 'Products', 'alpha' ),
			'render_template' => 'template-parts/blocks/products.php',
			'category'        => 'alpha',
			'keywords'        => array( 'products', 'alpha' ),
			'mode'            => 'preview',
			'icon'            => 'images-alt2',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

	/*
	acf_register_block_type(
		array(
			'name'            => 'hero-slider',
			'title'           => __( 'Hero Slider' ),
			'description'     => __( 'Hero Slider' ),
			'render_template' => 'template-parts/blocks/hero-slider.php',
			'category'        => 'alpha',
			'keywords'        => array( 'slider', 'hero' ),
			'mode'            => 'preview',
			'icon'            => 'images-alt2',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);
	*/

	acf_register_block_type(
		array(
			'name'            => 'hero-video',
			'title'           => __( 'Hero Video', 'alpha' ),
			'description'     => __( 'Hero Video', 'alpha' ),
			'render_template' => 'template-parts/blocks/hero-video.php',
			'category'        => 'alpha',
			'keywords'        => array( 'hero-video', 'alpha' ),
			'mode'            => 'auto',
			'icon'            => 'format-video',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'ays-cards',
			'title'           => __( 'AYS Cards', 'alpha' ),
			'description'     => __( 'AYS Cards', 'alpha' ),
			'render_template' => 'template-parts/blocks/ays-cards.php',
			'category'        => 'alpha',
			'keywords'        => array( 'ays-cards', 'alpha' ),
			'mode'            => 'auto',
			'icon'            => 'text-page',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'ays-link-tile',
			'title'           => __( 'AYS Link Tiles', 'alpha' ),
			'description'     => __( 'AYS Link Tiles', 'alpha' ),
			'render_template' => 'template-parts/blocks/ays-link-tiles.php',
			'category'        => 'alpha',
			'keywords'        => array( 'ays-link-tile', 'alpha' ),
			'mode'            => 'auto',
			'icon'            => 'text-page',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'ays-episode-carousel',
			'title'           => __( 'AYS Episodes Carousel', 'alpha' ),
			'description'     => __( 'AYS Episodes Carousel', 'alpha' ),
			'render_template' => 'template-parts/blocks/ays-episodes-carousel.php',
			'category'        => 'alpha',
			'keywords'        => array( 'ays-episodes-carousel', 'alpha' ),
			'mode'            => 'auto',
			'icon'            => 'images-alt',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'ays-vimeo-custom-thumb',
			'title'           => __( 'Vimeo embed with custom thumbnail', 'alpha' ),
			'description'     => __( 'Vimeo embed with custom thumbnail', 'alpha' ),
			'render_template' => 'template-parts/blocks/ays-vimeo-custom-thumb.php',
			'category'        => 'alpha',
			'keywords'        => array( 'vimeo', 'custom-thumbnail', 'alpha' ),
			'mode'            => 'auto',
			'icon'            => 'format-video',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'ays-stay-connected',
			'title'           => __( 'AYS Stay Connected', 'alpha' ),
			'description'     => __( 'AYS Stay Connected', 'alpha' ),
			'render_template' => 'template-parts/blocks/ays-stay-connected.php',
			'category'        => 'alpha',
			'keywords'        => array( 'stay-connected', 'alpha' ),
			'mode'            => 'auto',
			'icon'            => 'share',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'ays-call-to-action',
			'title'           => __( 'AYS Call To Action', 'alpha' ),
			'description'     => __( 'AYS Call To Action', 'alpha' ),
			'render_template' => 'template-parts/blocks/ays-call-to-action.php',
			'category'        => 'alpha',
			'keywords'        => array( 'call to action', 'alpha' ),
			'mode'            => 'auto',
			'icon'            => 'megaphone',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'ays-hosts',
			'title'           => __( 'AYS Hosts', 'alpha' ),
			'description'     => __( 'AYS Hosts', 'alpha' ),
			'render_template' => 'template-parts/blocks/ays-hosts.php',
			'category'        => 'alpha',
			'keywords'        => array( 'hosts', 'alpha' ),
			'mode'            => 'auto',
			'icon'            => 'groups',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'ays-title-animation',
			'title'           => __( 'AYS Title Animations', 'alpha' ),
			'render_template' => 'template-parts/blocks/ays-title-animations.php',
			'category'        => 'alpha',
			'keywords'        => array( 'title', 'alpha' ),
			'mode'            => 'auto',
			'icon'            => 'groups',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'ays-ticker-tape',
			'title'           => __( 'AYS Ticker Tape', 'alpha' ),
			'render_template' => 'template-parts/blocks/ays-ticker-tape.php',
			'category'        => 'alpha',
			'keywords'        => array( 'ticker', 'alpha' ),
			'mode'            => 'auto',
			'icon'            => 'groups',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

	acf_register_block_type(
		array(
			'name'            => 'ays-whats-new',
			'title'           => __( 'AYS What\'s New', 'alpha' ),
			'render_template' => 'template-parts/blocks/ays-whats-new.php',
			'category'        => 'alpha',
			'keywords'        => array( 'new', 'alpha' ),
			'mode'            => 'auto',
			'icon'            => 'groups',
			'supports'        => array(
				'mode'            => false,
				'align'           => false,
				'anchor'          => true,
				'customClassName' => true,
				'jsx'             => true,
			),
		)
	);

}

// Check if function exists and hook into setup.
if ( function_exists( 'acf_register_block_type' ) ) {
	add_action( 'acf/init', 'alpha_register_acf_block_types' );
}
