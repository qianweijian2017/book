<?php
namespace Admin\Controller;
use Think\Controller;
use Org\Util\page;
class BookController extends Controller {
    /**
     * 图书管理
     * @return [type] [description]
     */
    public function booklist(){ 
      	$model=M('book');   
     		$count=$model->alias("a")->join("__MENU__ c on c.id=a.id")->count();  
     		$page=new Page($count,8);	//count总页数,limit是显示的行数   
  	    $sPages=$page->show();
  	    $booklist=$model->alias("a") 
                  ->join("__MENU__ c on c.id=a.id") 
                  ->order("book_up_time desc")
                  ->limit($page->firstRow.',8' )
                  ->select(); 
  	    $this->assign('sPages',$sPages);// 赋值分页输出  
      	$this->assign("booklist",$booklist);
        $this->display();	
    }
}