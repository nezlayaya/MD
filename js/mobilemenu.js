jQuery(document).ready(function(){ 
	var $ = jQuery.noConflict();

	var touch 	= $('#touch-menu');
	var menu 	= $('.main-menu > ul');
 
	$(touch).on('click', function(e) {
		e.preventDefault();
		menu.slideToggle();
	});
	
	$(window).resize(function(){
		var w = $(window).width();
		if(w > 800 && menu.is(':hidden')) {
			menu.attr('style', '');
		}
	});
	
});