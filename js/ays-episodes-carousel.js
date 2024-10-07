( function ( $ ) {

	// var isRtl = $("html").prop("dir") === "rtl";

	// // $( ".ays-episode-carousel-slick" ).slick( {
	// // 	rtl: isRtl,
	// // 	prevArrow: '<span class="aicon-arrow-left prev"></span>',
	// // 	nextArrow: '<span class="aicon-arrow-right next"></span>',
	// // 	dots: true,
	// // } );

	// const $episodes = $( ".ays-episode-carousel-slick");
	// $episodes.slick({
	// 	rtl: isRtl,
	// 	slidesToShow: 2,
	// 	slidesToScroll: 1,
	// 	infinite: false,
	// 	dots: true,
	// 	prevArrow: '<span class="aicon-arrow-left prev"></span>',
	// 	nextArrow: '<span class="aicon-arrow-right next"></span>',
	// 	responsive: [
	// 		{
	// 			breakpoint: 480,
	// 			settings: {
	// 				arrows: false,
	// 				dots: false,
	// 			}
	// 		}
	// 	],
	// }).on( 'beforeChange', function( event, slick, currentSlide, nextSlide ) {
	// 	$('.alpha-episodes-nav a').removeClass('current');
	// 	$('.alpha-episodes-nav a[data-for="'+nextSlide+'"]').addClass('current');
	// } );

	// $('.alpha-episodes-nav a').on( 'click', function( event ) {
	// 	event.preventDefault();
	// 	const slide = $(this).data('for');
	// 	$episodes.slick('slickGoTo', slide);
	// } );

	$( document ).ready(function() {
		if ( $( ".swiper-small" ).length ) {
			const swiper = new Swiper('.swiper-small', {
			  grabCursor: true,
			  spaceBetween: 20,
			  slidesPerView: 1.1,
			  loop: false,
			  centeredSlides: false,
			  breakpoints: {
			    640: {
			      centeredSlides: false,
			      slidesPerView: 1.2,
			    },
			    821: {
			      centeredSlides: false,
			      slidesPerView: 1.7,
			    },
			  },

			  // Navigation arrows
			  navigation: {
			    nextEl: '.swiper-button-next',
			    prevEl: '.swiper-button-prev',
			  },

			  // And if we need scrollbar
			  scrollbar: {
			    el: '.swiper-scrollbar',
			  },
			});
		}

		if ( $( ".swiper-large" ).length ) {
			const swiper = new Swiper('.swiper-large', {
			  grabCursor: true,
			  spaceBetween: 20,
			  slidesPerView: 1.1,
			  loop: false,
			  centeredSlides: false,
			  breakpoints: {
			    640: {
			      centeredSlides: false,
			      slidesPerView: 1.2,
			    },
			    821: {
			      centeredSlides: false,
			      slidesPerView: 1,
			    },
			  },

			  // Navigation arrows
			  navigation: {
			    nextEl: '.swiper-button-next',
			    prevEl: '.swiper-button-prev',
			  },

			  // And if we need scrollbar
			  scrollbar: {
			    el: '.swiper-scrollbar',
			  },
			});
		}
	});

	// equalheight = function(container){

	// var currentTallest = 0,
	//      currentRowStart = 0,
	//      rowDivs = new Array(),
	//      $el,
	//      topPosition = 0;
	//  $(container).each(function() {

	//    $el = $(this);
	//    $($el).height('auto')
	//    topPostion = $el.position().top;

	//    if (currentRowStart != topPostion) {
	//      for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
	//        rowDivs[currentDiv].height(currentTallest);
	//      }
	//      rowDivs.length = 0; // empty the array
	//      currentRowStart = topPostion;
	//      currentTallest = $el.height();
	//      rowDivs.push($el);
	//    } else {
	//      rowDivs.push($el);
	//      currentTallest = (currentTallest < $el.height()) ? ($el.height()) : (currentTallest);
	//   }
	//    for (currentDiv = 0 ; currentDiv < rowDivs.length ; currentDiv++) {
	//      rowDivs[currentDiv].height(currentTallest);
	//    }
	//  });
	// }

	// $(window).load(function() {
	//   equalheight('.ays-episode-inner');
	// });


	// $(window).resize(function(){
	//   equalheight('.ays-episode-inner');
	// });


} )( jQuery );
