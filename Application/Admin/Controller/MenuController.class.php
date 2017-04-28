<?php
namespace Admin\Controller;
use Think\Controller;
use Org\Util\page;
class MenuController extends Controller {
    /**
     * 菜单列表管理
     * @return [type] [description]
     */
    public function menulist(){ 
      	$model=M('menu');   
     		$count=$model->where($where)->count(); //where 为条件,可作分类分页  
     		$page=new Page($count,8);	//count总页数,limit是显示的行数   
  	    $sPages=$page->show();
  	    $menulist=$model
                ->where($where)
                ->order("sort desc")
                ->limit($page->firstRow.',8' )
                ->select();
  	    $this->assign('sPages',$sPages);// 赋值分页输出  
      	$this->assign("menulist",$menulist);
        $this->display();	
    }
} 