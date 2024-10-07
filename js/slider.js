( function ( $ ) {

	var isRtl = $("html").prop("dir") === "rtl";

	$( ".alpha-slider" ).slick( {
		rtl: isRtl,
		prevArrow: '<span class="aicon-arrow-left prev"></span>',
		nextArrow: '<span class="aicon-arrow-right next"></span>',
		dots: true,
	} );

	const $episodes = $( ".alpha-episodes-previews");
	$episodes.slick({
		rtl: isRtl,
		slidesToShow: 1,
		slidesToScroll: 1,
		prevArrow: '<span class="aicon-arrow-left prev"></span>',
		nextArrow: '<span class="aicon-arrow-right next"></span>',
		responsive: [
			{
				breakpoint: 480,
				settings: {
					arrows: false,
					dots: false,
				}
			}
		],
	}).on( 'beforeChange', function( event, slick, currentSlide, nextSlide ) {
		$('.alpha-episodes-nav a').removeClass('current');
		$('.alpha-episodes-nav a[data-for="'+nextSlide+'"]').addClass('current');
	} );

	$('.alpha-episodes-nav a').on( 'click', function( event ) {
		event.preventDefault();
		const slide = $(this).data('for');
		$episodes.slick('slickGoTo', slide);
	} );

} )( jQuery );
