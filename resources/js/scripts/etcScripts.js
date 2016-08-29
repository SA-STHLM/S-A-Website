$(function() {
	'use strict';
	$(".typed").typed ({
		strings: ["Hello", "Hola", "Salut", "Ciao", "Aloha", "Moi"],
		typeSpeed: 130,
		loop: true  
	});
});

function onScrollInit( items, trigger ) {
	'use strict';
  items.each( function() {
    var osElement = $(this),
        osAnimationClass = osElement.attr('data-os-animation'),
        osAnimationDelay = osElement.attr('data-os-animation-delay');
 
    osElement.css({
        '-webkit-animation-delay':  osAnimationDelay,
        '-moz-animation-delay':     osAnimationDelay,
        'animation-delay':          osAnimationDelay
    });
 
    var osTrigger = ( trigger ) ? trigger : osElement;
 
    osTrigger.waypoint(function() {
        osElement.addClass('animated').addClass(osAnimationClass);
    },{
        triggerOnce: true,
        offset: '90%'
    });
  });
}

onScrollInit( $('.os-animation') );
onScrollInit( $('.staggered-animation'), $('.staggered-animation-container') );

$(function() {
	'use strict';
	
	$(document).on('mousemove', 'textarea', function(e) {
	var a = $(this).offset().top + $(this).outerHeight() - 16,	
			b = $(this).offset().left + $(this).outerWidth() - 16;	
	
	$(this).css({
			cursor: e.pageY > a && e.pageX > b ? 'nw-resize' : ''
	});
	})
    
  .on('keyup', 'textarea', function(e) {
		while($(this).outerHeight() < this.scrollHeight + parseFloat($(this).css("borderTopWidth")) + 
		parseFloat($(this).css("borderBottomWidth"))) {
    	$(this).height($(this).height()+1);
    }
  });
});