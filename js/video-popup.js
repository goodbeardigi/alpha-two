( function ( $ ) {
	function getPlayerLink( href ) {
		const videoPlayers = {
			vimeo: {
				search: /https?:\/\/vimeo\.com\/(\d+)/,
				replace: "https://player.vimeo.com/video/$1?autoplay=1",
			},
			youtube: {
				search: /https?:\/\/www\.youtube\.com\/watch\?v=(.*?)/,
				replace: "https://www.youtube.com/embed/$1",
			},
			youtube_short: {
				search: /https?:\/\/youtu\.be\/(.*?)/,
				replace: "https://www.youtube.com/embed/$1",
			},
		};

		for ( const [ _, player ] of Object.entries( videoPlayers ) ) {
			if ( href.match( player.search ) ) {
				const playerLink = href.replace(
					player.search,
					player.replace
				);
				return playerLink;
			}
		}

		return false;
	}

	function maybeAddPopup( link ) {
		const $link = $( link );
		const href = $link.prop( "href" );
		let playerLink = getPlayerLink( href );
		const loop = $link.data("loop");

		if(loop == true){
			playerLink = playerLink + "&loop=1";
		}

		if ( false !== playerLink ) {
			$link.data( "vimeo-player-url", playerLink );
			link.addEventListener( "click", handleVideoPopup );

			// Add icon to link if it does not have an icon
			const $icon = $link.find( '[class^="aicon-"]' );
			if ( 0 === $icon.length ) {
				$link.prepend( '<span class="aicon-play"></span>' );
			}
		}
	}

	function handleVideoPopup( event ) {
		const link = event.currentTarget;
		const $link = $( link );
		event.preventDefault();
		const playerLink = $link.data( "vimeo-player-url" );
		const $popup = $(
			`<div class="alpha-modal-container"><div class="alpha-modal"><div class="alpha-modal-player"><a href="#" class="aicon-close close"></a><iframe src="${ playerLink }" frameborder="0" allowfullscreen allow="autoplay" tabindex="-1"></div></div></div>`
		);
		$popup.appendTo( $( "body" ) );
	}

	$( document ).on( "click", ".alpha-modal .close", function ( event ) {
		event.preventDefault();
		$( this ).closest( ".alpha-modal-container" ).remove();
	} );

	const links = document.querySelectorAll( "a" );

	for ( const link of links ) {
		maybeAddPopup( link );
	}
} )( jQuery );
