/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
( function () {
	const html = document.documentElement;
	const siteHeader = document.getElementById( "masthead" );
	const toplineNav = document.getElementById( "topline-nav" );
	const siteNavigation = document.getElementById( "site-navigation" );
	const page = document.getElementById( "page" );
	const splashPage = document.getElementById("splash-menu");
	const menuToggle = document.getElementById( "menu-toggle" );
	const menuClose = document.getElementById( "menu-close" );
	var isDesktop = true;
	const initialScroll = window.scrollY;
	const adminBar = document.getElementById( "wpadminbar" );
	const adminBarHeight = adminBar
		? adminBar.getBoundingClientRect().height
		: 0;
	const siteHeaderInitialTop =
		siteHeader.getBoundingClientRect().top + initialScroll;

	const branding = document.getElementById( "branding" );
	const menuBackground = document.createElement( "div" );
	
	menuBackground.classList.add( "menu-background" );

	const handleFixedHeader = function () {
		const currentScroll = window.scrollY;
		if ( currentScroll + adminBarHeight > siteHeaderInitialTop ) {
			siteHeader.classList.add( "fixed" );
		} else {
			siteHeader.classList.remove( "fixed" );
		}
	};

	if ( ! siteHeader.classList.contains( "splash" ) ) {
		window.addEventListener( "scroll", handleFixedHeader );
		handleFixedHeader();
	}

	const handleWindowResize = function () {
		const threshold = 1024;

		if ( window.innerWidth < threshold ) {
			if ( isDesktop === true && !splashPage) { //Added check for splash page since toplineNav menu does not exist on the splash page
				siteNavigation.append( toplineNav );
				isDesktop = false;
			}
		} else {
			if ( isDesktop === false && !splashPage ) {
				page.insertBefore( toplineNav , siteHeader );
				isDesktop = true;
			}
		}
	};

	window.addEventListener( "resize", handleWindowResize );
	handleWindowResize();

	menuToggle.addEventListener( "click", function ( e ) {
		e.preventDefault();
		siteNavigation.classList.add( "on" );
		html.classList.add( "nav-opened" );
		branding.insertBefore( menuBackground, siteNavigation );
	} );

	menuClose.addEventListener( "click", function ( e ) {
		e.preventDefault();
		siteNavigation.classList.remove( "on" );
		html.classList.remove( "nav-opened" );
		menuBackground.remove();
	} );
} )();
