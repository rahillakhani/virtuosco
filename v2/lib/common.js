
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


	$(".show-drop-nav").bind("mouseenter mouseleave",function(){
		
		$(this).find(".drop-nav").toggle(
			/*function(){
				$(".drop-nav a").bind("mouseenter",
					function(){
						console.log("state");
						$(".show-drop-nav > a").css({
							"background":"#088CC0",
							"color":"#ffffff"
						});
					}).bind("mouseleave",
					function(){
						console.log("state");
						$(".show-drop-nav > a").css({
							"background":"#fff",
							"color":"#088CC0"
						});
					});
				}*/);		
	});
});