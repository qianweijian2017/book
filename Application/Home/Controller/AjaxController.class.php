<?php
namespace Home\Controller;
use Think\Controller; 
/**
* 书分类 
*/
class AjaxController extends Controller
{
	public  function doLogin()
	{
		if(IS_POST){  
		 	$user_name=I("user_name");
		 	$user_pwd=I('user_pwd');
		 	$user=M('user');
		 	$result=$user->where("user_name='$user_name' and user_pwd='$user_pwd'")->find(); 
		 	if($result){
		 		session("auth",$result);
		 		$this->ajaxReturn(
		 				array(
		 					'success'=>1,
		 					'info'=>'登陆成功'
		 				)
		 		);
		 		exit;
		 	}else{
		 		$this->ajaxReturn(
		 				array( 
		 					'info'=>'用户名或密码错误!'
		 				)
		 		);
		 		exit;
		 	}
	 	}
		  
	}
	public function doReg()
	{
		if(IS_POST){  
		 	$user_name=I("user_name");
		 	$user_pwd=I('user_pwd');
		 	$user=M('user');   
		 	$user->user_name=$user_name;
		 	$user->user_pwd=$user_pwd;
		 	$user->create_time=time();
		 	if($id=$user->add()){
		 		$result=$user->find($id);
		 		session("auth",$result); 
		 		$this->ajaxReturn(
		 				array(
		 					'success'=>1,
		 					'info'=>'注册成功'
		 				)
		 		);
		 		exit;
		 	}else{
		 		
		 		$this->ajaxReturn(
		 				array( 
		 					'info'=>'注册失败'
		 				)
		 		);
		 		exit;
		 	}
	 	}
	}
	public function doExit(){ 
		 session("auth",null);
		 $this->ajaxReturn(
		 		array("success"=>1)
		 	);
		 exit;
	}
	public function incart()
	{
		if(!session("auth")){
			$this->ajaxReturn("请先登陆");
			exit;
		}
		 if(IS_POST){
		 	$controller=I("post.controllerName");
		 	$id=I('post.id');
		 	$model=D($controller);//实例化书模型
		 	$cart=D('cart'); //实例化购物车模型
		 	if($book=$model->find($id)){
		 		
		 	}

		 }
	}
}