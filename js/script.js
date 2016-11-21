$(document).ready(function() {
	$(".button-collapse").sideNav();
	 $('.slider').slider();
	
	setTimeout(function(){ 
		$('.main-title').typist({
	        speed: 12,
	        text: 'Le business lucratif des \n failles informatiques',
	        cursor: false
	    }).on('end_type.typist', function() {
        	$('svg').addClass('animatedDraw');
    	});;
	}, 1500);
});

function setActive(id) {
	$('#' + id).addClass('active');
}