( function ( $ ) {

		$('.ays-vimeo-custom-thumb-cover').on( 'click', function( event ) {
			
			if($(this).data('vimeo-video-id')){
				var vimeo_id = $(this).data('vimeo-video-id');
				$(this).closest('.video-container').prepend('<iframe class="" style="position:absolute;top:0;left:0;width:100%;height:100%;" src="https://player.vimeo.com/video/'+vimeo_id+'?autoplay=1&loop=1" width="100%" height="auto" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay"> </iframe>');
			}else if($(this).data('brightcove-video-id')){
				var brightcove_id = $(this).data('brightcove-video-id');
				$(this).closest('.video-container').prepend('<iframe class="" style="position:absolute;top:0;left:0;width:100%;height:100%;" src="https://players.brightcove.net/6415869056001/qRAa9DVAzG_default/index.html?videoId='+brightcove_id+'&autoplay=1" width="100%" height="auto" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay"> </iframe>');

			}
			$(this).fadeOut();
		} );


		function smoothScroll(target) {
		  const element = document.getElementById(target);
		  if (element) {
		    window.scrollTo({
		      top: element.offsetTop-80,
		      behavior: 'smooth'
		    });
		  }
		}

		document.addEventListener('DOMContentLoaded', function() {
		  const anchors = document.querySelectorAll('a[href^="#"]');
		  anchors.forEach(function(anchor) {
		    anchor.addEventListener('click', function(event) {
		      event.preventDefault();
		      console.log('17');
		      const target = anchor.getAttribute('href').substring(1);

		      if(target == 'watch-trailer'){
		      	console.log('31');
		      	var vimeo_id = $("#watch-trailer .ays-vimeo-custom-thumb-cover").data('vimeo-video-id');
				$("#watch-trailer .ays-vimeo-custom-thumb-cover").closest('.video-container').prepend('<iframe class="" style="position:absolute;top:0;left:0;width:100%;height:100%;" src="https://player.vimeo.com/video/'+vimeo_id+'?autoplay=1" width="100%" height="auto" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen allow="autoplay"> </iframe>');
				$("#watch-trailer .ays-vimeo-custom-thumb-cover").fadeOut();
		      }

		      // smoothScroll(target);
		    });
		  });
		});

} )( jQuery );
