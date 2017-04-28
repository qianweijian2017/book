<?php
namespace Admin\Controller;
use Think\Controller;
use Org\Util\page;
class NavController extends Controller {
    /**
     * 顶部导航管理
     * @return [type] [description]
     */
    public function navlist(){
     
      	$model=M('nav');                       //实例化模型
     		$count=$model->where($where)->count(); //where 为条件,可作分类分页 
     		$page=new Page($count,8);	//count总页数,limit是显示的行数   
  	    $sPages=$page->show();
  	    $navlist=$model->where($where)->order("sort desc")->limit($page->firstRow.',8' )->select();
  	    $this->assign('sPages',$sPages);// 赋值分页输出  
      	$this->assign("navlist",$navlist);
        $this->display();	
    }
} 