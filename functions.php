<?php
/**
 * Alpha functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Alpha
 */

if ( ! defined( 'ALPHA_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'ALPHA_VERSION', '1.0.0-build.1' );
}

require_once get_template_directory() . '/inc/acf-load.php';
require_once get_template_directory() . '/inc/wp-cli-acf-tools.php';
require_once get_template_directory() . '/inc/alpha-menu.php';
require_once get_template_directory() . '/inc/widgets.php';
require_once get_template_directory() . '/inc/story-post-type.php';
require_once get_template_directory() . '/inc/product-post-type.php';

if ( ! function_exists( 'alpha_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function alpha_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Alpha, use a find and replace
		 * to change 'alpha' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'alpha', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary'       => esc_html__( 'Primary', 'alpha' ),
				'primary-right' => esc_html__( 'Primary Right', 'alpha' ),
				'topline'       => esc_html__( 'Topline', 'alpha' ),
				'splash'        => esc_html__( 'Splash', 'alpha' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Set up the WordPress core custom background feature.
		add_theme_support(
			'custom-background',
			apply_filters(
				'alpha_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
	}
endif;
add_action( 'after_setup_theme', 'alpha_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function alpha_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'alpha_content_width', 640 );
}
add_action( 'after_setup_theme', 'alpha_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function alpha_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'alpha' ),
			'id'            => 'sidebar',
			'description'   => esc_html__( 'Add sidebar widgets.', 'alpha' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h6 class="widget-title">',
			'after_title'   => '</h6>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer', 'alpha' ),
			'id'            => 'footer',
			'description'   => esc_html__( 'Add footer widgets.', 'alpha' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

	register_sidebar(
		array(
			'name'          => esc_html__( 'Splash Footer', 'alpha' ),
			'id'            => 'footer-splash',
			'description'   => esc_html__( 'Add footer widgets.', 'alpha' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'alpha_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function alpha_scripts() {

	$version = ALPHA_VERSION;
	$version = date( 'YmdHis' );

	wp_enqueue_style( 'alpha-style', get_stylesheet_uri(), array(), $version );
	wp_style_add_data( 'alpha-style', 'rtl', 'replace' );

	wp_enqueue_script( 'alpha-navigation', get_template_directory_uri() . '/js/navigation.js', array(), $version, true );
	wp_enqueue_script( 'alpha-buttons', get_template_directory_uri() . '/js/buttons.js', array(), $version, true );
	wp_enqueue_script( 'alpha-video-popup', get_template_directory_uri() . '/js/video-popup.js', array( 'jquery' ), 0, true );

	// Work Sans for AYS
	wp_enqueue_style( 'work-sans-google-fonts', 'https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100..900;1,100..900', false ); 
  
	if(get_page_template_slug() == 'template-ays.php'){
		wp_enqueue_script( 'alpha-ays-parallax', get_template_directory_uri() . '/js/ays-parallax.js', array( 'jquery' ), $version, true );
	}

	if ( has_block( 'acf/testimonials' ) || has_reusable_block( 'acf/testimonials' ) || has_block( 'acf/episodes' ) || has_reusable_block( 'acf/episodes' ) ) {
		wp_enqueue_script( 'slick', get_template_directory_uri() . '/js/vendor/slick/slick/slick.js', array( 'jquery' ), $version, true );
		wp_enqueue_style( 'slick', get_template_directory_uri() . '/js/vendor/slick/slick/slick.css', array(), $version );
		wp_enqueue_script( 'alpha-slider', get_template_directory_uri() . '/js/slider.js', array( 'jquery', 'slick' ), $version, true );
	}

	if ( has_block( 'acf/accordion' ) || has_reusable_block( 'acf/accordion' ) ) {
		wp_enqueue_script( 'alpha-accordion', get_template_directory_uri() . '/js/accordion.js', array( 'jquery' ), $version, true );
	}

	if ( has_block( 'acf/offices' ) || has_reusable_block( 'acf/offices' ) ) {
		wp_enqueue_script( 'alpha-tabs', get_template_directory_uri() . '/js/tabs.js', array( 'jquery' ), $version, true );
	}

	if ( has_block( 'acf/ays-episode-carousel' ) || has_reusable_block( 'acf/ays-episode-carousel' ) ) {
		wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/vendor/swiper/swiper-bundle.min.js', array(), $version, true );
		wp_enqueue_style( 'swiper', get_template_directory_uri() . '/js/vendor/swiper/swiper-bundle.min.css', array(), $version );
		wp_enqueue_script( 'alpha-ays-episodes-carousel', get_template_directory_uri() . '/js/ays-episodes-carousel.js', array( 'jquery', 'swiper' ), $version, true );
	}

	if ( has_block( 'acf/ays-hosts' ) || has_reusable_block( 'acf/ays-episode-carousel' ) ) {
		wp_enqueue_script( 'swiper', get_template_directory_uri() . '/js/vendor/swiper/swiper-bundle.min.js', array(), $version, true );
		wp_enqueue_style( 'swiper', get_template_directory_uri() . '/js/vendor/swiper/swiper-bundle.min.css', array(), $version );
		wp_enqueue_script( 'alpha-ays-hosts', get_template_directory_uri() . '/js/ays-hosts.js', array( 'jquery', 'swiper' ), $version, true );
	}

	if ( has_block( 'acf/ays-vimeo-custom-thumb' ) || has_reusable_block( 'acf/ays-vimeo-custom-thumb' ) ) {
		wp_enqueue_script( 'vimeo', 'https://player.vimeo.com/api/player.js', array(), $version, true );
		wp_enqueue_script( 'vimeo-player', get_template_directory_uri() . '/js/vimeo-player.js', array(), array( 'jquery' ), $version, true );

	}

	if ( has_block( 'acf/ays-link-tile' ) || has_reusable_block( 'acf/ays-link-tile' ) ) {
		wp_enqueue_script( 'alpha-ays-country-selector', get_template_directory_uri() . '/js/ays-country-selector.js', array(), array( 'jquery' ), $version, true );

	}

	if ( has_block( 'acf/ays-title-animation' ) || has_reusable_block( 'acf/ays-title-animation' ) ) {
		wp_enqueue_style( 'swear-typekit', 'https://use.typekit.net/zxc6udl.css', false ); 

	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'alpha_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

/**
 * Enqueue block editor style for Gutenberg Blocks
 */
function alpha_block_editor_styles() {

	$version = ALPHA_VERSION;
	$version = date( 'YmdHis' );

	wp_enqueue_style( 'alpha-blocks-editor-style', get_theme_file_uri( '/block-editor-style.css' ), false, $version, 'all' );
}
add_action( 'enqueue_block_editor_assets', 'alpha_block_editor_styles' );

/**
 * Add custom fonts and icons to the backend
 */
function alpha_add_editor_fonts() {
	$version = ALPHA_VERSION;
	$version = date( 'YmdHis' );

	wp_enqueue_style( 'alpha-editor-fonts', get_theme_file_uri( '/editor-fonts.css' ), false, $version, 'all' );
}
add_action( 'admin_enqueue_scripts', 'alpha_add_editor_fonts' );

function alpha_add_custom_gutenberg_color_palette() {
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => esc_html__( 'Black', 'alpha' ),
				'slug'  => 'black',
				'color' => '#000000',
			),
			array(
				'name'  => esc_html__( 'White', 'alpha' ),
				'slug'  => 'white',
				'color' => '#ffffff',
			),
			array(
				'name'  => esc_html__( 'Dark Gray', 'alpha' ),
				'slug'  => 'dark-gray',
				'color' => '#414141',
			),
			array(
				'name'  => esc_html__( 'Dark Blue', 'alpha' ),
				'slug'  => 'dark-blue',
				'color' => '#1e2433',
			),
			array(
				'name'  => esc_html__( 'Red', 'alpha' ),
				'slug'  => 'red',
				'color' => '#e42312',
			),
			array(
				'name'  => esc_html__( 'Light Gray', 'alpha' ),
				'slug'  => 'light-gray',
				'color' => '#f3f4f5',
			),
			array(
				'name'  => esc_html__( 'Purple', 'alpha' ),
				'slug'  => 'purple',
				'color' => '#4D4DA5',
			),
			array(
				'name'  => esc_html__( 'AYS Blue', 'alpha' ),
				'slug'  => 'ays-blue',
				'color' => '#4F38E1',
			),
			array(
				'name'  => esc_html__( 'AYS Light Blue', 'alpha' ),
				'slug'  => 'ays-light-blue',
				'color' => '#0042FF',
			),
			array(
				'name'  => esc_html__( 'AYS Green', 'alpha' ),
				'slug'  => 'ays-green',
				'color' => '#C2FF00',
			),
			array(
				'name'  => esc_html__( 'AYS Grey', 'alpha' ),
				'slug'  => 'ays-grey',
				'color' => '#E0DBD7',
			),
		)
	);
}
add_action( 'after_setup_theme', 'alpha_add_custom_gutenberg_color_palette' );

/**
 * Converts video link to iframe player link
 *
 * @param string $video_link Link to the video
 * @return string
 */
function alpha_video_player_link( $video_link ) {
	$video_players = array(
		'vimeo' => array(
			'search'  => '/https:\/\/vimeo\.com\/(\d+)/',
			'replace' => 'https://player.vimeo.com/video/$1',
		),
		'youtube' => array(
			'search'  => '/https:\/\/www\.youtube\.com\/watch\?v=(.*?)/',
			'replace' => 'https://www.youtube.com/embed/$1',
		),
		'youtube_short' => array(
			'search'  => '/https:\/\/youtu\.be\/(.*?)/',
			'replace' => 'https://www.youtube.com/embed/$1',
		),
	);

	foreach ( $video_players as $player ) {
		if ( preg_match( $player['search'], $video_link ) ) {
			return preg_replace( $player['search'], $player['replace'], $video_link );
		}
	}

	return false;
}

/**
 * Converts video link to iframe player
 *
 * @param string $video_link Link to the video
 * @return string
 */
function alpha_video_player( $video_link ) {
	$player = alpha_video_player_link( $video_link );

	if ( false !== $player ) {
		return "<iframe src=\"{$player}\" frameborder=\"0\" tabindex=\"-1\"></iframe>";
	} else {
		return '';
	}
}

/**
 * Prints out image tag for the flag
 *
 * @param string $country_code Country code.
 * @return void
 */
function alpha_flag_image( $country_code ) {
	$flags = alpha_get_flags();

	$flag_key = strtoupper( $country_code );

	$flag_image = get_template_directory_uri() . '/country-flags/alpha.png';
	$flag_image_html = '<img src="' . esc_url( $flag_image ) . '" alt="" />';

	if ( isset( $flags[ $flag_key ] ) ) {
		$flag_image = get_template_directory_uri() . '/country-flags/png100px/' . $country_code . '.png';
		$flag_image_html = '<img class="country-flag" src="' . esc_url( $flag_image ) . '" alt="" />';
	}

	echo $flag_image_html;
}

function alpha_get_flags() {
	$flags = wp_cache_get( 'flags', 'alpha' );

	if ( ! $flags ) {
		$flags = (array) json_decode( file_get_contents( get_template_directory() . '/country-flags/countries.json' ) );

		wp_cache_set( 'flags', 'alpha' );
	}

	return $flags;
}
