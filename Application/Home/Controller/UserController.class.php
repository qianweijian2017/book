<?php
namespace Home\Controller;
use Think\Controller; 
use Think\Verify;
/**
* 用户类
*/
class UserController extends Controller
{ 
	/**
	 * 我的订单
	 * @return [type] [description]
	 */
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
	public function myCar()
	{
		$auth=session("auth");
		$model=M('cart');
		if(!$auth){
			$this->error('请先登陆');exit;
		}
		$cartlist=$model->alias("c")
						// ->join("__USER__ u on u.id=c.user_id")
						->join("__BOOK__ b on b.id=c.book_id")
						->field("c.*,b.*,b.id as book_id,c.id as cart_id")
						->where("c.user_id = {$auth['user_id']}")
						->select();
						// dump($cartlist);exit;
		$this->assign("cartlist",$cartlist);
		$this->display();
	}
	  
}