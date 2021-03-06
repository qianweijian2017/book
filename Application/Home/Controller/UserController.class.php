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
	{    //      -----------------------------------------------------------------
        $user=session("auth");
        if ($user){
            $model=M('cart');
            $resultCarNum = $model->where("user_id = {$user['id']}")->count();
            $this->assign("resultCarNum",$resultCarNum);
        }

        //      -------------------------------------------------------------------
		$user=session("auth");
		if($user){
			$model=M('buyed');
			$buyed=$model->alias("a")
					 ->join("__USER__ u on u.id=a.user_id")
					 ->join("__BOOK__ b on b.id=a.book_id")
					 ->where("a.user_id={$user['id']}") 
					 ->select();
			 
			$this->assign("orderlist",$buyed);
			$this->display();
		}else{
			$this->error("请先点击右上角登陆");
		}

		
	} 
	public function myCar()
	{
		$user=session("auth");
		$model=M('cart');

		if(!$user){
			$this->error('请先登陆');exit;
		}
		$cartlist=$model->alias("c") 
						->join("__BOOK__ b on b.id=c.book_id")
						->field("c.*,b.*,b.id as book_id,c.id as cart_id")
						->where("c.user_id = {$user['id']}")
						->select();
						// dump($cartlist);exit;
        $resultCarNum = $model->where("user_id={$user['id']}")->count();
        $this->assign("resultCarNum",$resultCarNum);
		$this->assign("cartlist",$cartlist);
		$this->display();
	}

}