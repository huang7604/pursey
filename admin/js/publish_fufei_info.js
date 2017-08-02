$(document).ready(function(){
    var tags=$("div.fufei_form form").find("input");
	$("div.fufei_form form").submit(function(){
         for(var i=0;i<tags.length;i++){
         	if(tags[i].value==""){
               tags[i].focus();
               tags[i].select();
               $(tags[i]).css("background","yellow");
               return false;
         	}else{
         	  $(tags[i]).css("background","#ffffff");
           	  if(tags[i].name=="tel"){
           	      var value=tags[i].value;
           	      if(!value.match("[0-9]+")){
           	      	tags[i].focus();
           	        tags[i].select();
           	        $(tags[i]).css("background","yellow");
           	        tags[i].value="只能是数字！"
           	      	return false;
           	      }else{
           	      	$(tags[i]).css("background","#ffffff");
           	      }
         	   }else if(tags[i].name=="day"){
           	      	var value=tags[i].value;
           	        if(!value.match("[0-9]+")){
           	      	    tags[i].focus();
           	            tags[i].select();
           	            $(tags[i]).css("background","yellow");
           	            tags[i].value="只能是数字！"
           	      	    return false;
           	         }else{
           	      	   $(tags[i]).css("background","#ffffff");
           	         }
                } 
            }      
        }

		if($("textarea").val()==""){
            $("textarea").focus();
            $("textarea").select();
            $("textarea").css("background","yellow");
            return false;
		}else{
			$("textarea").css("background","#ffffff");
		}
         
	});
});