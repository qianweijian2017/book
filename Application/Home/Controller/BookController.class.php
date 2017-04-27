<?php
namespace Home\Controller;
use Think\Controller;
use \Org\Util\page;
/**
* 书分类 
*/
class BookController extends Controller
{
	public function booklist()
	{
		 $book=M("book"); 
		 $menu=M("menu");
		 $menulist= $menu->field("type_name,id")->select(); 
		 if (I('type')) {
		 	$where='book_type='.I('type');
		 }
     	 $count=$book->where($where)->count(); //where 为条件,可作分类分页  
     	 $page=new Page($count,8);	//count总页数,limit是显示的行数   
  	     $sPages=$page->show();  
		 $booklist=$book->alias("b")
					->field("book_name,type_name,book_author,book_detail,book_collect,book_prince,img_path,c.id")
					->where($where)	
					->join("__MENU__ c on b.book_type=c.id") 
					->limit($page->firstRow.',8')
					->select(); 
 		 $this->assign('sPages',$sPages);// 赋值分页输出  
		 $this->assign("booklist", $booklist);
  		 $this->assign("menulist",$menulist);	 
		 $this->display();
	}
	 
	 
		 
		
	 
}