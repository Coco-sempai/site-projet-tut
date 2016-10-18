$(document).ready(function() {
	setTimeout(function(){ 
		$('.main-title').typist({
	        speed: 12,
	        text: 'Projet tuteuré \n Le business lucratif des \n failles informatiques'
	    });
	}, 1500);

	setTimeout(function(){ 
		$('svg').addClass('animated');
	}, 7000);
});