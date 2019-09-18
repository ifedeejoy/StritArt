$('.slider-single').slick({
 	slidesToShow: 1,
 	slidesToScroll: 1,
 	autoplay: true,
	autoplaySpleed: 4000,
	arrows: false,
	mobileFirst: true,
 	fade: false,
 	adaptiveHeight: true,
 	infinite: false,
	useTransform: true,
 	speed: 400,
 	cssEase: 'cubic-bezier(0.77, 0, 0.18, 1)',
 });

 $('.slider-nav')
 	.on('init', function(event, slick) {
 		$('.slider-nav .slick-slide.slick-current').addClass('is-active');
 	})
 	.slick({
 		slidesToShow: 5,
 		slidesToScroll: 5,
 		dots: false,
 		arrows: true,
 		mobileFirst: true,
 		focusOnSelect: false,
 		infinite: false,
 		swipeToSlide: true,
 		prevArrow: '<button  type="button" class="slick-next slide-btn slide-left">&#8249;</button>',
 		nextArrow: '<button  type="button" class="slick-next slide-btn slide-right">&#8250;</button>',
 		responsive: [{
 			breakpoint: 1024,
 			settings: {
 				slidesToShow: 5,
 				slidesToScroll: 5,
 			}
 		}, {
 			breakpoint: 640,
 			settings: {
 				slidesToShow: 5,
 				slidesToScroll: 5,
			}
 		}, {
 			breakpoint: 420,
 			settings: {
 				slidesToShow: 5,
 				slidesToScroll: 5,
		}
 		}]
 	});

 $('.slider-single').on('afterChange', function(event, slick, currentSlide) {
 	$('.slider-nav').slick('slickGoTo', currentSlide);
 	var currrentNavSlideElem = '.slider-nav .slick-slide[data-slick-index="' + currentSlide + '"]';
 	$('.slider-nav .slick-slide.is-active').removeClass('is-active');
 	$(currrentNavSlideElem).addClass('is-active');
 });

 $('.slider-nav').on('click', '.slick-slide', function(event) {
 	event.preventDefault();
 	var goToSingleSlide = $(this).data('slick-index');

 	$('.slider-single').slick('slickGoTo', goToSingleSlide);
 });

 $(document).ready(function(){
  $('.slide-image')
    .wrap('<span style="display:inline-block"></span>')
    .css('display', 'block')
    .parent()
    .zoom();
});