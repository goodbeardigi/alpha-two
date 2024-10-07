( function ( $ ) {
	const $nav = $( ".alpha-tabs-nav" );
	const $navLeft = $nav.offset().left;
	const $navIndicator = $( ".alpha-tabs-nav .indicator" );
	const $navLinks = $( ".alpha-tabs-nav a" );
	const $navTabs = $( ".alpha-tabs-single" );

	$navLinks
		.on( "click", function ( event ) {
			event.preventDefault();
			$navLinks.not( this ).removeClass( "selected" );
			$( this ).addClass( "selected" );
			const image = $( this ).find( "img" );
			const imageLeft = image.offset().left - $navLeft;
			$navIndicator.css( "left", imageLeft );
			const id = $( this ).data( "id" );
			console.log( id );
			const $newTab = $navTabs.filter( '[data-id="' + id + '"]' );
			console.log( $newTab );
			$navTabs.hide();
			$newTab.show();
		} )
		.eq( 0 )
		.trigger( "click" );
} )( jQuery );
