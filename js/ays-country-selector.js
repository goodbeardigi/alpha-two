( function ( $ ) {

		$('.ays-link-tile-country-selector').on( 'click', function( event ) {
			event.stopPropagation();
			$('.ays-country-selector').addClass('show');
		} );

		$('.ays-country-selector-close').on( 'click', function( event ) {
			$('.ays-country-selector').removeClass('show');
		} );

		$('.ays-country-selector-region-name').on( 'click', function( event ) {
			$('.ays-country-selector-list').not($(this).parent().find('.ays-country-selector-list')).slideUp();
			$(this).parent().find('.ays-country-selector-list').slideToggle();

			$('.ays-country-selector-region-name').not($(this)).removeClass('open');
			$(this).toggleClass('open');
		} );

} )( jQuery );
