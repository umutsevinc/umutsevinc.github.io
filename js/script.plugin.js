'use strict';
$(function (){


	/* - - - - - - - - - - - - - - - - - **
	*
	*	gallery magnific popup
	*
	/* - - - - - - - - - - - - - - - - - */

	if( $('.portfolio_container').length ) {

		$('.portfolio_container').magnificPopup({
			delegate: 'a',
			type: 'image',
			closeOnContentClick: false,
			closeBtnInside: false,
			mainClass: 'mfp-with-zoom mfp-img-mobile',
			image: {
				verticalFit: true
			},
			gallery: {
				enabled: true
			},
			zoom: {
				enabled: true,
				duration: 300,
				opener: function(element) {
					return element.find('img');
				}
			}
			
		});
	}

	/* - - - - - - - - - - - - - - - - - **
	*
	*	form styler
	*
	/* - - - - - - - - - - - - - - - - - */


	$('input, select').styler();


	/* - - - - - - - - - - - - - - - - - **
	*
	*	slider-slick
	*
	/* - - - - - - - - - - - - - - - - - */

	if( $('.top_slider').length ) {

		$('.top_slider').slick({
			
		});
	}

	if( $('.blog_slider_list').length ) {

		$('.blog_slider_list').slick({

			dots: true,
			autoplay: true
		});
	}

	if( $('.blog_post_slider_list').length ) {

		$('.blog_post_slider_list').slick({

			 dots: true,
			infinite: false,
			speed: 300,
			slidesToShow: 3,
			slidesToScroll: 3,
			responsive: [
				{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 3,
					infinite: true,
					dots: true
				}
				},
				{
				breakpoint: 750,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 2
				}
				},
				{
				breakpoint: 480,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				}
				}
				
			]

		});
	}



	/* - - - - - - - - - - - - - - - - - **
	*
	*	parallax
	*
	/* - - - - - - - - - - - - - - - - - */



$(window).bind('load scroll', function() {

	if( $(window).width() >= '560' && $('.top_parallax').length) {

		$('.top_parallax').parallax( '50%', 0.7 );
	}

	if( $(window).scrollTop() <= 0 ) {

		$('.nav_item').not(':first-child').removeClass('active-menu-underline-item');
		$('.nav_item:first-child').addClass('active-menu-underline-item');
	}
})



	/* - - - - - - - - - - - - - - - - - **
	*
	*	form
	*
	/* - - - - - - - - - - - - - - - - - */

	$('input, select').styler();




});