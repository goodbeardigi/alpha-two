( function ( $ ) {

	$( document ).ready(function() {
		const swiper = new Swiper('.ays-hosts-swiper', {
		  grabCursor: true,
		  spaceBetween: 20,
		  slidesPerView: 1,
		  loop: true,
		  centeredSlides: false,
		  effect: "fade",
		  slidesOffsetAfter: 100,
		  breakpoints: {
		    640: {
		      centeredSlides: false,
		      slidesPerView: 1,
		    },
		  },

		  // Navigation arrows
		  navigation: {
		    nextEl: '.swiper-button-next-hosts',
		    prevEl: '.swiper-button-prev-hosts',
		  },
		  pagination: {
	        el: ".swiper-pagination-hosts",
	        clickable: true,
	      },

		  // And if we need scrollbar
		  // scrollbar: {
		  //   el: '.swiper-scrollbar',
		  // },
		});
	});

} )( jQuery );
