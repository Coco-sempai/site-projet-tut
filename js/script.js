$(document).ready(function() {
	$(".button-collapse").sideNav();
	
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

function setActive(id) {
	$('#' + id).addClass('active');
}