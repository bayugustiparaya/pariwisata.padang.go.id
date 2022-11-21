(function ($) {
	"use strict";

	var fullHeight = function () {
		$(".js-fullheight").css("height", $(window).height());
		$(window).resize(function () {
			$(".js-fullheight").css("height", $(window).height());
		});
	};
	fullHeight();

	var carousel = function () {
		$(".featured-carousel").owlCarousel({
			loop: true,
			autoplay: true,
			margin: 30,
			animateOut: "fadeOut",
			animateIn: "fadeIn",
			nav: true,
			dots: false,
			autoplayHoverPause: true,
			navText: [
				'<svg width="32" height="32" viewBox="0 0 24 24"><path d="M16.67 0l2.83 2.829-9.339 9.175 9.339 9.167-2.83 2.829-12.17-11.996z"/></svg>',
				'<svg width="32" height="32" viewBox="0 0 24 24"><path d="M5 3l3.057-3 11.943 12-11.943 12-3.057-3 9-9z"/></svg>',
			],
			responsive: {
				0: {
					items: 1,
				},
				600: {
					items: 1,
				},
				1000: {
					items: 1,
				},
			},
		});
	};
	carousel();
})(jQuery);
