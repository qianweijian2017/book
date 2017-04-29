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
			$this->ajaxReturn(
					array("info" =>"请先登陆" , )
				);
			exit;
		}
		 $user=session("auth");
		 if(IS_POST){
		 	$controller=I("post.controllerName");
		 	$id=I('post.id'); 
		 	$cart=D('cart'); //实例化购物车模型 
		 	$count=$cart->where("user_id={$user['id']} and book_id=$id")->find();
		 	if($count){    
		 		$data["amount"]=strval($count["amount"])+1;
	 			$cart->where("user_id={$user['id']} and book_id=$id")->save($data);
 		 		$this->ajaxReturn(
	 		 		array(
	 		 			"info"=>"加入购物车成功"
	 		 			)
 		 		);
 		 		exit; 
		 	}else{
		 		$cart->user_id=$user['id'];
		 		$cart->book_id=$id;
		 		$cart->amount=1;
		 		if($cart->add()){
	 		 		$this->ajaxReturn(
		 		 		array(
		 		 			"info"=>"加入购物车成功"
		 		 			)
	 		 		);
	 		 		exit;
	 			}
		 	} 

		 }
	}
}