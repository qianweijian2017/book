<?php
namespace Admin\Controller;
use Admin\Common\Controller\AuthController;
use Org\Util\page;
class BookController extends AuthController {
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

    /**
     * 显示所有的
     * @return [type] [description]
     */
     public function bookall(){ 
        $model=M('book');   
        $count=$model->field($model->getPk())->count();  
        $page=new Page($count,8); //count总页数,limit是显示的行数   
        $sPages=$page->show();
        $booklist=$model
                  ->order("book_up_time desc")
                  ->limit($page->firstRow.',8' )
                  ->select(); 
        $this->assign('sPages',$sPages);// 赋值分页输出  
        $this->assign("booklist",$booklist);
        $this->display(); 
    } 

 
    /**
     * 显示添加商品页面
     * @return [type] [description]
     */
    public function bookadd()
    { 
        $model = M('menu');
        $menulist = $model -> select();
        if(I('get.bookid')){
          $book = M('book');
          $bookitem = $book -> find(I('get.bookid'));
          $this -> assign("bookitem",$bookitem);
        } 

        $this -> assign("menulist",$menulist); 
        $this -> display();
    }
    /**
     * 添加商品,写入数据库 
     * @return [type] [description]
     */
    public function add()
    { 
        if(IS_POST){
          $model=D('book'); //实例化自定义对象

          foreach ($_POST as $key => $value) { 
              $post[$key]=trim($value);
          }  
          if($model->saveData($post,$_FILES['file'])){   
                $this->success('成功');
                
          }else{
              $this->error('失败');
          } 
        }   
    }
}