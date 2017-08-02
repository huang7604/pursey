$(document).ready(function(){

	$("div.menu_two").find("a").mouseenter(function(){
		$(this).css("color","#FF4500");
	});

	$("#main_menu a").mouseenter(function(){
		$(this).css("color","#000000");
	});

	$("div.menu_two a").mouseleave(function(){
        $(this).css("color","#000000")
	});
});