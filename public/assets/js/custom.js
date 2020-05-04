$(window).on('load', function () {
	$('#preloader').fadeOut('slow');
});

if ($(window).width() > 768) {
	$(function() {
		//    console.log('initiated');
			ParallaxScroll.init();
		});
 }
 
$(document).ready(function () {
	$('.owl-carousel.home-hero-slider').owlCarousel({
		loop: true,
		margin: 0,
		nav: true,
		items: 1,
		nav: false,
		// autoplay: true,
		// autoplayTimeout: 5000
	});

	$('.owl-carousel.detail-hero-slider').owlCarousel({
		loop: true,
		margin: 0,
		nav: true,
		items: 1,
		navText: ["<i class='fal fa-chevron-left'></i>", "<i class='fal fa-chevron-right'></i>"],
		// autoplay: true,
		// autoplayTimeout: 5000
	});


	$('.owl-carousel.discvover-carousel').owlCarousel({
		loop: false,
		margin: 0,
		nav: false,
		autoWidth: true,
		stagePadding: 0,
		dots: false,
		mouseDrag: false,
	});

	var owldiscover = $('.owl-carousel.discvover-carousel');
	// Go to the next item
	$('.ds-next').click(function () {
		owldiscover.trigger('next.owl.carousel');
	});
	// Go to the previous item
	$('.ds-prev').click(function () {
		// With optional speed parameter
		owldiscover.trigger('prev.owl.carousel');
	});

	$('.owl-carousel.discvover-carousel').on('changed.owl.carousel', function (event) {
		if (event.item.index == 0) jQuery(".ds-prev").addClass('disabled');
		else jQuery(".ds-prev").removeClass('disabled');
		if (event.item.index == 9) jQuery(".ds-next").addClass('disabled');
		else jQuery(".ds-next").removeClass('disabled');
	});

	$('.search-list-slider.owl-carousel').owlCarousel({
		loop: false,
		margin: 0,
		navText: ["<i class='fal fa-chevron-left'></i>", "<i class='fal fa-chevron-right'></i>"],
		nav: true,
		items: 1
	});

	if ($('#detail-date-picker').length != 0) {
		var picker = new Lightpick({
			field: document.getElementById('detail-date-picker'),
			numberOfMonths: 2,
			format: 'DD/MM/YYYY',
			inline: true,
			singleDate: false,
			disabledDatesInRange: true,
			disableDates: [moment().startOf('month'), ['24/03/2020', '27/03/2020']],
			dropdowns: {
				years: false,
				months: false,
			},
			locale: {
				buttons: {
					prev: '',
					next: '',
					close: '×',
				}
			},

		});
	}

	if ($('#dates').length != 0) {
		var picker = new Lightpick({
			field: document.getElementById('search-date'),
			numberOfMonths: 2,
			format: 'DD/MM/YYYY',
			singleDate: false,
			disabledDatesInRange: true,
			disableDates: [moment().startOf('month'), ['24/03/2020', '27/03/2020']],
			dropdowns: {
				years: false,
				months: false,
			},
			locale: {
				buttons: {
					prev: '',
					next: '',
					close: '×',
				}
			},

		});
	}

	$('#country').amsifySelect();
	$('#guests').amsifySelect();

	function inputNumber(el) {


		var min = el.attr('min') || false;
		var max = el.attr('max') || false;

		var els = {};

		els.dec = el.prev();
		els.inc = el.next();

		el.each(function () {
			init($(this));
		});

		function init(el) {

			els.dec.on('click', decrement);
			els.inc.on('click', increment);

			function decrement() {
				var value = el[0].value;
				value--;
				if (!min || value >= min) {
					el[0].value = value;
				}
			}

			function increment() {
				var value = el[0].value;
				value++;
				if (!max || value <= max) {
					el[0].value = value++;
				}
			}
		}
	}

	inputNumber($('.input-number'));

});