$ = jQuery.noConflict();


$(document).ready(function() {
	var tl = new TimelineMax();
    	tl
        	.fromTo($("#menu-main"), 1, { opacity : 0 , scale : 0.1} , {opacity : 1 , scale: 1})
        	.fromTo($(".logo"), 1, { opacity : 0 , scale : 0.1} , {opacity : 1 , scale: 1});
        tl.play();
});