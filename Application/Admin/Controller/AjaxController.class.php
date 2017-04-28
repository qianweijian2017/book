<?php
namespace Admin\Controller;
use Think\Controller;
class AjaxController extends Controller {
    /**
     * 处理基本的CURD操作  
     * @return [type] [description]
     */
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
    /**
     * 编辑
     * @return [type] [description]
     */
    public function edit()
    {

        if(IS_POST){    //判断是否有post请求
            
              if(I('controllerName')){
                    // 获取传过来的参数
                    $controllerName=I('controllerName'); 
                    $id=I('post.id');
                    $key=I('post.key');
                    $value=I('post.value'); 
                    //路由名称用于实例化模型
                    $model=D($controllerName); 
                    $result=$model->where("id=$id")->setField($key, $value);//修改值 

                    if($result){    //执行成功后返回修改成功  1 true  0 false
                        $this->ajaxReturn(
                                array(
                                    "status"=>1,
                                    "info"=>"修改成功"   
                                    ) 
                            );
                    }else{
                         $this->ajaxReturn(
                                array(
                                    "status"=>0,
                                    "info"=>"修改失败"
                                    )
                            );
                    }
                    exit;
                }
           
         }
    }
	
}