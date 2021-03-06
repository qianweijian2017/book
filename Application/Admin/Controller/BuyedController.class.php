<?php
namespace Admin\Controller;
use Admin\Common\Controller\AuthController;
use Org\Util\page;
class BuyedController extends AuthController {

	public function buyedlist()
	{
		//获取收藏列表
		$buyed=M('buyed'); 
		$buyedlist = $buyed 
					 -> alias("a")
					 -> join("__USER__ u on u.id = a.user_id") 
					 -> join("__BOOK__ b on b.id=a.book_id") //关联图书表
					 -> field("b.*,a.*,u.*,b.id as book_id")
					 -> select();
		$this->assign("buyedlist",$buyedlist);
		 
		//获取分页
		$count=$buyed->field($buyed->getPk())->count();  
        $page=new \Org\Util\page($count,8); //count总页数,limit是显示的行数   
        $sPages=$page->show();
        $this->assign("sPages",$sPages);
        //显示模板
		$this->display();
	}

}