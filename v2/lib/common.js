
$(window).load(function(){
	$("#header").sticky({ topSpacing: 0 });
});
$(document).ready(function() {
	if($( "#slideOpen .signUp" )){
		$(".newsletter").attr('data-content','+');
		$( "#slideOpen .signUp" ).hide();
	}
	
	$( "#slideOpen .heading" ).click(function() {
		$( "#slideOpen .signUp" ).toggle("fast");
		$(".newsletter").toggleClass("expanded");		
	});

	$(".show-drop-nav").find(".drop-nav",function(){
		if($(".drop-nav")){
			$(".drop-nav").hide();
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