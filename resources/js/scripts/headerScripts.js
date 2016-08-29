$(function() {
	'use strict';
	var header = document.getElementsByTagName('header');

	$(window).scroll(function() {
		if ($(document).scrollTop() > 5) {
			$(header).addClass('scroll__trigger');
		} else {
			$(header).removeClass('scroll__trigger');
		}
	});
});

function triggerNav() {
	'use strict';
	var button = document.querySelector('.menu-icon');
	var logo = document.getElementsByClassName('header__brand');
	var menu = document.getElementsByClassName('js-trigger');
	var headerWrapper = document.getElementsByClassName('header__wrapper');
	var header = document.getElementsByTagName('header');
	
	$(button).click(function() {
		$(button).toggleClass('icon__open');
		$(logo).toggleClass('open__logo');
		$(menu).toggleClass('js-trigger-reveal');
		$(headerWrapper).toggleClass('header__open');
		$(header).toggleClass('header__open_prevent');
	});
}

triggerNav();

$(function() {
	'use strict';
	var scrollUp = document.getElementsByClassName('scroll__up');

	
	$(window).scroll(function() {
		if ($(document).scrollTop() > 100) {
			$(scrollUp).fadeIn(500);
		} else {
			$(scrollUp).fadeOut(500);
		}
	});
	
	$(scrollUp).click(function() {
  	$("html, body").animate({ scrollTop: 0 }, {duration: 1300, easing: "easeInOutQuint"});
  	return false;
	});
});
