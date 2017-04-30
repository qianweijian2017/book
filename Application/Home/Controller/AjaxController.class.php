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
	/**
	 * 加入购物车
	 * @return [type] [description]
	 */
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
		 	// 查看用户是否加入过购物车
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

		 	}else{	//如果没有加入过,创建一个
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
	/**
	 * 加入收藏
	 * @return [type] [description]
	 */
	public function incollect()
	{
		//如果用户没有登陆提交先登陆
		if(!session("auth")){
			$this->ajaxReturn(
					array("info" =>"请先登陆" )
				);
			exit;
		}
		 $user=session("auth");
		 //如果传来的是post请求
		 if(IS_POST){
		 	$controller=I("post.controllerName");
		 	$id=I('post.id'); 
		 	$cart=D('collect'); //实例化购物车模型 
		 	//查询用户是否已经收藏过此商品
		 	$count=$cart->where("user_id={$user['id']} and book_id=$id")->find();
		 	if(!$count){    
		 		$cart->user_id=$user['id'];
		 		$cart->book_id=$id;
		 		$cart->amount=1;
		 		if($cart->add()){
	 		 		$this->ajaxReturn(
		 		 		array(
		 		 			"info"=>"加入收藏成功"
		 		 			)
	 		 		);
	 		 		exit;
	 			}
		 	}else{ 
		 		//收藏过就不用再收藏了
 		 		$this->ajaxReturn(
	 		 		array(
	 		 			"info"=>"您已经收藏过了"
	 		 			)
 		 		);
 		 		exit;
	 			 
		 	}

		 } 
	}
	/**
	 * 猜你喜欢
	 * @return [type] [description]
	 */
	public function guessLike()
	{  
		$model=M('book');
		$rand=rand(1,$model->where("img_path is not null")->count());
		$book=$model->where("img_path is not null")->select()[$rand]; //随机获取一个物品
		$bookid=$book['id'];
    	$html='<div class="g-title">
                <span>
                    猜你喜欢
               </span>
                <div class="change-icon" id="refresh_new"  style="cursor: pointer">
                    <img src="'.__ROOT__.'/Public/Home/imgs/dchange.png" height="22px" width="22px"/>
                </div>
            </div>

            <div class="g-pic">
                <a href="'.__ROOT__.'/Home/book/bookdetail/type/'.$bookid.'">
                <img  style="cursor: pointer" src="'.__ROOT__.$book['img_path'].'" height="240" width="180"/>111
                </a>
            </div>
            <span class="g-name mesg">
            <a href="'.__ROOT__.'/Home/book/bookdetail/type/'.$bookid.'">
             	 '.$book['book_name'].'
            </a>
            </span>
            <span class="g-wri mesg"> 格雷厄姆·格林 著 柯</span>
            <span class="g-short mesg">
              一场绝密级的试验爆炸让萧铭来到一个类似古代的平行世界。在这个满是恶意的地方，他身为最不受宠的皇
            </span>';

         $this->ajaxReturn(
         		array(
         			"html"=>$html
         			)
         	);
         exit;
	}
}