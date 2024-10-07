( function ( $ ) {
	
	// var waypoint = new Waypoint({
	//   element: $('.alpha-hero-video'),
	//   handler: function(direction) {
	//     alert('You have scrolled to a thing')
	//   }
	// });

	$( document ).ready(function() {
		// Add a class to indicate we can use parallax styles, because JS and jQuery is safe to use
		$('.ays-styles').addClass('ays-parallax');
		$(this).scrollTop(0);
	    $('.alpha-hero-video').addClass('loaded');
	});

	var position = $(window).scrollTop(); 
	var video_position = 150;
	var video_scale = 1.5;
	var stay_connected_right_position = 0;
	var hosts_image_position = 0;
	var whats_new_text = 0;
	var card_0_position = 120;
	var card_1_position = 60;
	var card_2_position = 180;
	var card_0_img_position = 140;
	var card_1_img_position = 80;
	var card_2_img_position = 180;
	var tiles_position_y = 80;
	var tiles_position_left_x = -200;
	var tiles_position_right_x = 200;
	var episode_carousel_position = 120;

	$(window).on( "scroll", function() {
		var scroll = $(window).scrollTop();

	    function elementFromTop(elem){
	    	var docViewTop = $(window).scrollTop();
		    var docViewBottom = docViewTop + $(window).height();
		    var elemTop = $(elem).offset().top;
	    	return elemTop - docViewBottom;
	    }

	    function elementfromBottom(elem){
	    	var docViewTop = $(window).scrollTop();
		    var docViewBottom = docViewTop + $(window).height();
		    var elemTop = $(elem).offset().top;
		    return elemTop - docViewTop;
	    }
	    
	    function elementScrolled(elem){
		    // var docViewTop = $(window).scrollTop();
		    // var docViewBottom = docViewTop + $(window).height();
		    // var elemTop = $(elem).offset().top;
		    // console.log(elemTop - docViewTop);
		    // return ((elemTop <= docViewBottom) && (elemTop >= docViewTop));
		    if((elementFromTop(elem) <= 0) && (elementfromBottom(elem) >= -300)){
		    	return elem;
		    } else {
		    	return false;
		    }
		    // return ((elementFromTop(elem) <= 0) && (elementfromBottom(elem) >= 0));

		}

		 // This is where we use the function to detect if ".box2" is scrolled into view, and when it is add the class ".animated" to the <p> child element
		
		if ( $( ".ays-vimeo-custom-thumb" ).length ) {
			if(elementScrolled('.ays-vimeo-custom-thumb')) {
				if(scroll > position) {

					$('.ays-vimeo-custom-thumb').addClass('move-in');

					// if(video_position > 0){
			        // 	// if(video_position > 120){
			        // 	// 	video_scale = 1.4;
			        // 	// } else if(video_position > 90){
			        // 	// 	video_scale = 1.3;
			        // 	// } else if(video_position > 60){
			        // 	// 	video_scale = 1.2;
			        // 	// } else if(video_position > 30){
			        // 	// 	video_scale = 1.1;
			        // 	// } else {
			        // 	// 	video_scale = 1;
			        // 	// }

			        // 	video_scale = video_position / 30;

			        // 	video_position--;
					// }
			    } else {
			    	if(elementFromTop('.ays-vimeo-custom-thumb') > -300){
				    	
			    		$('.ays-vimeo-custom-thumb').removeClass('move-in');

				    	// if(video_position < 300){

				        // 	// if(video_position < 30){
				        // 	// 	video_scale = 1.1;
				        // 	// } else if(video_position < 60){
				        // 	// 	video_scale = 1.2;
				        // 	// } else if(video_position < 90){
				        // 	// 	video_scale = 1.3;
				        // 	// } else if(video_position < 120){
				        // 	// 	video_scale = 1.4;
				        // 	// } else {
				        // 	// 	video_scale = 1.5;
				        // 	// }

				        // 	video_scale = video_position * 30;
				        // 	if(video_scale > 6){
				        // 		video_scale = 6;
				        // 	}

				        // 	video_position++;
				        // }
				    }
			    }
			// console.log(video_position);
		  	// $('.ays-vimeo-custom-thumb').css({'transform' : 'translate3d(0px, ' + video_position + 'px, 0px)'});
			}
		}

		// MOUSE PARALLAX - BUGGY
		// if(elementScrolled('.alpha-ays-cards')) {
		// 	if(scroll > position) {
		// 		if(card_0_position > 0){
		//         	card_0_position--;
		// 		}
		// 		if(card_1_position > 0){
		//         	card_1_position--;
		// 		}
		// 		if(card_2_position > 0){
		//         	card_2_position--;
		// 		}
		// 		if(card_0_img_position > 0){
		//         	card_0_img_position--;
		// 		}
		// 		if(card_1_img_position > 0){
		//         	card_1_img_position--;
		// 		}
		// 		if(card_2_img_position > 0){
		//         	card_2_img_position--;
		// 		}
		//     } else {
		//     	if(elementFromTop('.alpha-ays-cards') > -150){
		// 	    	if(card_0_position < 60){
		// 	        	card_0_position++;
		// 	        }
		// 	        if(card_1_position < 120){
		// 	        	card_1_position++;
		// 	        }
		// 	        if(card_2_position < 180){
		// 	        	card_2_position++;
		// 	        }
		// 	        if(card_0_img_position < 140){
		// 	        	card_0_img_position++;
		// 	        }
		// 	        if(card_1_img_position < 80){
		// 	        	card_1_img_position++;
		// 	        }
		// 	        if(card_2_img_position < 180){
		// 	        	card_2_img_position++;
		// 	        }
		// 	    }
		//     }
		//   	$('.ays-card-0').css({'transform' : 'translate3d(0px, ' + card_0_position + 'px, 0px)'});
		//   	$('.ays-card-1').css({'transform' : 'translate3d(0px, ' + card_1_position + 'px, 0px)'});
		//   	$('.ays-card-2').css({'transform' : 'translate3d(0px, ' + card_2_position + 'px, 0px)'});
		//   	$('.ays-card-0 img').css({'transform' : 'translate3d(0px, ' + card_0_img_position + 'px, 0px)'});
		//   	$('.ays-card-1 img').css({'transform' : 'translate3d(0px, ' + card_2_img_position + 'px, 0px)'});
		//   	$('.ays-card-2 img').css({'transform' : 'translate3d(0px, ' + card_1_img_position + 'px, 0px)'});
		// }

		if ( $( ".ays-title-animation-title-block" ).length ) {
			if(elementScrolled('.ays-title-animation-title-block')) {
				if(scroll > position) {
					$('.ays-title-animation-title-block').addClass('move-in');
			    } else {
			    	if(elementFromTop('.ays-title-animation-title-block') > -150){
				    	$('.ays-title-animation-title-block').removeClass('move-in');
				    }
			    }
			}
		}
		if ( $( ".ays-card-0" ).length ) {
			if(elementScrolled('.ays-card-0')) {
				if(scroll > position) {
					$('.ays-card-0').addClass('move-in');
			    } else {
			    	if(elementFromTop('.alpha-ays-cards') > -150){
				    	$('.ays-card-0').removeClass('move-in');
				    }
			    }
			}
		}
		if ( $( ".ays-card-1" ).length ) {
			if(elementScrolled('.ays-card-1')) {
				if(scroll > position) {
					$('.ays-card-1').addClass('move-in');
			    } else {
			    	if(elementFromTop('.alpha-ays-cards') > -150){
				    	$('.ays-card-1').removeClass('move-in');
				    }
			    }
			}
		}
		if ( $( ".ays-card-2" ).length ) {
			if(elementScrolled('.ays-card-2')) {
				if(scroll > position) {
					$('.ays-card-2').addClass('move-in');
			    } else {
			    	if(elementFromTop('.alpha-ays-cards') > -150){
				    	$('.ays-card-2').removeClass('move-in');
				    }
			    }
			}
		}
		if ( $( ".ays-link-tile-0" ).length ) {
			if(elementScrolled('.ays-link-tile-0')) {
				// console.log(elementFromTop('.ays-link-tile-0'));
				if(scroll > position) {
					// console.log(scroll - position);
					// if(tiles_position_y > 0){
			        // 	tiles_position_y--;
					// }
					// if(tiles_position_left_x < 0){
			        // 	tiles_position_left_x = tiles_position_left_x + 5;
					// }
					// if(tiles_position_right_x > 0){
			        // 	tiles_position_right_x--;
			        // 	tiles_position_right_x = tiles_position_right_x - 5;
			        // 	if(tiles_position_right_x < 0){
			        // 		tiles_position_right_x = 0;
			        // 	}
					// }
					// console.log(elementFromTop('.ays-link-tile-0'));
					$('.ays-link-tile-0').addClass('move-in');
					
			    } else {
			    	if(elementFromTop('.ays-link-tile-0') > -100){
				    	 // if(tiles_position_y < -100){
				         // 	tiles_position_y++;
				         // }
						 // if(tiles_position_left_x > -200){
				         // 	tiles_position_left_x = tiles_position_left_x - 5;
				         // }
				         // if(tiles_position_right_x < 200){
				         // 	tiles_position_right_x = tiles_position_right_x + 5;
				         // }

			    		$('.ays-link-tile-0').removeClass('move-in');
				     }
			    }
			}
		}

		if ( $( ".ays-link-tile-1" ).length ) {
			if(elementScrolled('.ays-link-tile-1')) {
				// console.log(elementFromTop('.ays-link-tile-1'));
				if(scroll > position) {
					
					$('.ays-link-tile-1').addClass('move-in');
					
			    } else {
			    	if(elementFromTop('.ays-link-tile-1') > -100){
				    	 
			    		$('.ays-link-tile-1').removeClass('move-in');
				     }
			    }
			}
		}

		if ( $( ".ays-call-to-action" ).length ) {
			if(elementScrolled('.ays-call-to-action')) {
				// console.log(elementFromTop('.ays-call-to-action'));
				if(scroll > position) {
					
					$('.ays-call-to-action').addClass('move-in');
					
			    } else {
			    	if(elementFromTop('.ays-call-to-action') > -100){
				    	 
			    		$('.ays-call-to-action').removeClass('move-in');
				     }
			    }
			}
		}

		if ($(window).width() > 1024) {
   	
   			if ( $( ".ays-stay-connected-right" ).length ) {
				if(elementScrolled('.ays-stay-connected-right')) {

					if(scroll > position) {
						if(stay_connected_right_position > -130){
				        	stay_connected_right_position--;
						}
						// $('.ays-stay-connected-right').addClass('move-in');
				    } else {
				         stay_connected_right_position = stay_connected_right_position + 1;
				    	// if(elementFromTop('.ays-stay-connected-right') > -200){
					    // 	$('.ays-stay-connected-right').removeClass('move-in');
						// }
				    }
				  	$('.ays-stay-connected-right').css({'transform' : 'translate3d(0px, ' + stay_connected_right_position + 'px, 0px)'});
				}
			}

			if ( $( ".ays-styles .parallax-scroll" ).length ) {
				if(elementScrolled('.ays-styles .parallax-scroll')) {
					if(scroll > position) {
						if(hosts_image_position > -600){
				        	hosts_image_position--;
						}
						// $('.ays-stay-connected-right').addClass('move-in');
				    } else {
				         hosts_image_position = hosts_image_position + 1;
				    	// if(elementFromTop('.ays-stay-connected-right') > -200){
					    // 	$('.ays-stay-connected-right').removeClass('move-in');
						// }
				    }
				    if(hosts_image_position > -315){
					  	$('.ays-styles .parallax-scroll').css({'transform' : 'translate3d(0px, ' + hosts_image_position + 'px, 0px)'});
					}
				}
			}

		}

		if ( $( ".ays-episode-carousel-swiper" ).length ) {
			if(elementScrolled('.ays-episode-carousel-swiper')) {
				if(scroll > position) {
					// if(episode_carousel_position > 0){
			        // 	episode_carousel_position--;
					// }
					$('.ays-episode-carousel-swiper').addClass('move-in');
			    } else {
			    	 if(elementFromTop('.ays-episode-carousel-swiper') > -300){
			    	 	// if(episode_carousel_position < 120){
				        //  	episode_carousel_position++;
						// }
						$('.ays-episode-carousel-swiper').removeClass('move-in');
			         }
			    }
			  	// $('.ays-episode-carousel-swiper').css({'transform' : 'translate3d(0px, ' + episode_carousel_position + 'px, 0px)'});
			}
		}

		if ( $( ".ays-fade-up" ).length ) {

			$( ".ays-fade-up" ).each(function( index ) {

			  if(elementScrolled($( this ))) {

				if(scroll > position) {
					// if(episode_carousel_position > 0){
			        // 	episode_carousel_position--;
					// }
					$($( this )).addClass('move-in');
			    } else {
			    	 if(elementFromTop($( this )) > -300){
			    	 	// if(episode_carousel_position < 120){
				        //  	episode_carousel_position++;
						// }
						$($( this )).removeClass('move-in');
			         }
			    }
			  }
			});

			// if(elementScrolled('.parallax .wp-block-column.col-text')) {

			// 	if(scroll > position) {
			// 		// if(episode_carousel_position > 0){
			//         // 	episode_carousel_position--;
			// 		// }
			// 		$('.parallax .wp-block-column.col-text').addClass('move-in');
			//     } else {
			//     	 if(elementFromTop('.parallax .wp-block-column.col-text') > -300){
			//     	 	// if(episode_carousel_position < 120){
			// 	        //  	episode_carousel_position++;
			// 			// }
			// 			$('.parallax .wp-block-column.col-text').removeClass('move-in');
			//          }
			//     }
			//   	// $('.ays-episode-carousel-swiper').css({'transform' : 'translate3d(0px, ' + episode_carousel_position + 'px, 0px)'});
			// }
		}



		position = scroll;


		  // Your function here
	} );


} )( jQuery );


