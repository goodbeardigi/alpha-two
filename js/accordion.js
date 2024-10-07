( function ( $ ) {
	if ( ! $( ".alpha-accordion" ).length ) {
		return;
	}

	$.fn.alphaAccordion = function () {
		$( this ).each( function ( _, acc ) {
			const tabs = $( acc ).find( ".alpha-accordion-tab" );

			tabs.map( function ( _, el ) {
				const link = $( el ).find( ".alpha-accordion-title a" );

				link.on( "click", function ( event ) {
					const tab = $( el );
					event.preventDefault();
					tabs.not( tab ).removeClass( "on" );
					tab.toggleClass( "on" );
				} );

				return el;
			} );

			$( acc )
				.find( ".alpha-accordion-title a" )
				.eq( 0 )
				.trigger( "click" );
		} );

		return this;
	};

	$( ".alpha-accordion" ).alphaAccordion();
} )( jQuery );
