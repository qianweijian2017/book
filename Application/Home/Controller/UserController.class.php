<?php
namespace Home\Controller;
use Think\Controller; 
use Think\Verify;
/**
* 用户类
*/
class UserController extends Controller
{ 
	public function myorder()
	{
		$user=session("auth");
		if($user){
			$model=M('buyed');
			$buyed=$model->alias("a")
					 ->join("__USER__ u on u.id=a.user_id")
					 ->join("__BOOK__ b on b.id=a.book_id")
					 ->where("a.user_id={$user['id']}") 
					 ->select();
			$this->assign("orderlist",$buyed);
			 
		}else{
			$this->error("请先点击右上角登陆");
		}

		$this->display();
	} 
	  
}