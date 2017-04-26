 ;(function () { 
 	  //全选 /反选 
 	 
 	$("#check_all").on("click",function(){  
		$("table input.sub_check[type='checkbox']").prop("checked",$(this).prop("checked"));
 		var $iCheck=$(this).siblings("label").children("i.fa");
 		if($iCheck.hasClass("fa-square-o")){
 			$iCheck.removeClass("fa-square-o").addClass("fa-check-square-o");
 		}else{
 			$iCheck.removeClass("fa-check-square-o").addClass("fa-square-o");
 		} 
 		
 	})
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

 	


 }())