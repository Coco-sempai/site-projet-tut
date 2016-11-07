$(document).ready(function() {
	setTimeout(function(){ 
		$('.main-title').typist({
	        speed: 12,
	        text: 'Le business lucratif des \n failles informatiques'
	    });
	}, 1500);

	setTimeout(function(){ 
		$('svg').addClass('animatedDraw');
	}, 7000);
});