<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Alpha
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'alpha' ); ?></a>

	<nav id="topline-nav" class="topline-nav">
		<?php
		wp_nav_menu(
			array(
				'theme_location' => 'topline',
				'menu_id'        => 'topline-menu',
			)
		);
		?>
	</nav>

	<?php

	$site_header_class = 'site-header';
	if ( is_page() && has_block( 'acf/hero' ) || is_page() && has_block( 'acf/hero-video' ) ) {
		$site_header_class .= ' overlay';
	} else {
		$site_header_class .= ' solid';
	}

	?>


	<header id="masthead" class="<?php echo esc_attr( $site_header_class ); ?>">

		<div class="branding" id="branding">

			<a id="header-menu-logo" title="<?php bloginfo( 'name' ); ?>" rel="home" class="aicon-logo" href="<?php echo esc_url( home_url() ); ?>"></a>

			<a href="#" class="menu-toggle" id="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><i class="aicon-hamburger"></i></a>

			<nav id="site-navigation" class="main-navigation">
				<a href="#" id="menu-close" class="menu-close"><i class="aicon-close"></i></a>

				<?php
				wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'menu_id'         => 'primary-menu',
						'container_class' => 'primary-menu-container',
						'walker'          => new Alpha_Menu_Walker(),
					)
				);
				wp_nav_menu(
					array(
						'theme_location'  => 'primary-right',
						'menu_id'         => 'primary-right-menu',
						'container_class' => 'primary-right-menu-container',
						'walker'          => new Alpha_Menu_Walker(),
					)
				);
				?>
			</nav><!-- #site-navigation -->

		</div><!-- .branding -->

	</header><!-- #masthead -->
