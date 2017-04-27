<?php
namespace Admin\Controller;
use Think\Controller;
class AjaxController extends Controller {
    public function delete(){
        if(IS_POST){
        	$controller=I("post.controllerName");
        	$ids=I("post.aIds");
        	$ids=implode(",",$ids);
        	$model=D($controller);   
         	if($model->delete($ids)){  
         		 $this->ajaxReturn(
     		 			array(
     		 				"info"=>"删除成功", 
     		 			)
         		 	);
        	}else{
        		  $this->ajaxReturn(
     		 			array(
     		 				"info"=>$model->getError(),  
     		 			)
         		 	);
        	}
        	exit;
   		 }

	}
	
}