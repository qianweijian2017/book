 ;(function () { 
 	  
 	//js删除 
 	$("#deleteItem").on("click",function () {
 		var $sCheck=$("table :checkbox:not(0):checked");
 		var aIds=[];
 		for(var i = 0 ; i < $sCheck.length ; i++ ){
 			aIds.push($sCheck[i].value);
 		} 
 		 
 		$.post(postUrl,{"controllerName":controllerName,"aIds":aIds},function (data) {
 			 alert(data.info);
 			 location.reload();
 		})
 	})
 	//全选 
 	 
 	$(".select label").click(function () {
 		var $iCheck=$(this).children("i.fa");
 		if($iCheck.hasClass("fa-square-o")){
 			$(this).children("i.fa").removeClass("fa-square-o").addClass("fa-check-square-o");
 		}else{
 			$(this).children("i.fa").removeClass("fa-check-square-o").addClass("fa-square-o");
 		}

 		$("table .sub_check").prop("checked",$("#check_all").prop("checked"));
 		
 	})

 }())