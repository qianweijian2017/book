<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){  
    	$nav=M("nav");		//获取导航选项
        $navlist=$nav->limit("8")->select();  
        $menu=M("menu");   //获取左侧菜单选项
        $menulist=$menu->select(); 
        $book_model=M("book"); //书模型
        $hotlist=$book_model->order("book_up_time desc")->limit("10")->select();//获取商品热卖列表 
        $newlist=$book_model->order("book_publish_time desc")->limit("10")->select();
        //获取新品列表
        $pulllist=$book_model->order("book_publish_time desc")->limit("1,10")->select();
 		$this->assign("navlist",$navlist);
        $this->assign("menulist",$menulist); 
        $this->assign("hotlist",$hotlist); 
 		$this->assign("newlist",$newlist); 
 		$this->assign("pulllist",$pulllist);
        $this->display('./index');
    }
}