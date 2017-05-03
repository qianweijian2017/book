<?php

namespace Admin\Controller;
use Admin\Common\Controller\AuthController;
class CollectController extends AuthController {

	public function collectlist($value='')
	{ 
		//获取收藏列表
		$collect=M('collect'); 
		$collectlist = $collect 
					 -> alias("a")
					 -> join("__USER__ u on u.id=a.user_id") //关联用户表
					 -> join("__BOOK__ b on b.id=a.book_id") //关联图书表
					 -> field("u.*,b.*,a.*,u.id as user_id,b.id as book_id,a.amount as collect_count")
					 -> select();
		$this->assign("collectlist",$collectlist);
		//获取分页
		$count=$collect->field($collect->getPk())->count();  
		if(!$count){
			$page=new \Org\Util\page($count,8); //count总页数,limit是显示的行数   
	        $sPages=$page->show();
	        $this->assign("sPages",$sPages);
		}
       
        //显示模板
		$this->display();
	}
 	

}