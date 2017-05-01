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
    /**
     * 显示添加商品页面
     * @return [type] [description]
     */
    public function bookadd()
    {
        $model=M('menu');
        $menulist=$model->select();
        $this->assign("menulist",$menulist);
        $this->display();
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
              $this->success('添加成功');
              
        }else{
            $this->error('添加失败');
        } 
      } 



    }
}