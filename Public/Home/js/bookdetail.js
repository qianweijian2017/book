;(function () {
	$("#btn_incart").click(function () {
		var id=$(this).data("id");
		$.post(IncartUrl,{"controllerName":controllerName,"id":id},function (data) {
			
		})
	});
}())