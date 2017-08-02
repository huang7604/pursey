$(document).ready(function(){
	$("div.advertising_form form").submit(function(){
		if($("input").val()==""){
            $("input").focus();
            $("input").select();
            $("input[name='title']").css("background","yellow");
            return false;
		}else if($("textarea").val()==""){
            $("textarea").focus();
            $("textarea").select();
            $("textarea").css("background","yellow");
            return false;
		}
	});
});