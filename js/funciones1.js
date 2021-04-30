$(document).ready(function() {

		//$("#for").addClass('animated bounceInUp');
		$("#ima").addClass('animated bounceIn');

		$("#ima").mouseenter(function(event){
			$('#ima').addClass('animated pulse ');	
	  	});
	
		$('#ima').mouseleave(function(event) {	
			$('#ima').removeClass('animted pulse');	
		});

		$('#entrar').hover(function() {
		/* Stuff to do when the mouse enters the element */
		$(this).animate( { opacity: 0.3 }, 400);
		}, function() {
		/* Stuff to do when the mouse leaves the element */
		$(this).animate( { opacity: 1.0 }, 400);
		});

		$("input").focus(function(){
	    $(this).css("background-color","#E8E8E8");
	 	 });
		$("input").blur(function(){
	    $(this).css("background-color","#ffffff");
	  	});
});