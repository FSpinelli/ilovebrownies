$(document).ready(function(){
	$(window).on('resize, load', function(){
		$('#home').css({'height':$(window).height()});
	});

	$(window).on('load scroll', function(){
		if($('body').scrollTop() > 1){
		}
	});

	$.stellar({
	    horizontalScrolling: false,
	    responsive: true
	});
});