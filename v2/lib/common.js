
$(window).load(function(){
	$("#header").sticky({ topSpacing: 0 });
});
$(document).ready(function() {
	$(".newsletter").attr('data-content','+');
	$( "#slideOpen" ).click(function() {
		if ( $(this).height() != 16){
			$( this ).animate({ height: 16 }, 1000 );
			$(".newsletter").attr('data-content','+');
		}
		else{
			$( this ).animate({ height: 200 }, 1000 );
			$(".newsletter").attr('data-content','-');
		}
	});
});