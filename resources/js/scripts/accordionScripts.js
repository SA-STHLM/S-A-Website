$(function() {
	'use strict';
	var accoriodSelector = document.getElementsByClassName('accordion');
	$(accoriodSelector).accordion({
      heightStyle: "content",
			active: false,
			collapsible: true
  });
});