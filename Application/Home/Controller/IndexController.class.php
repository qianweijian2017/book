<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    /**
     * 首页数据显示
     * @return [type] [description]
     */
    public function index(){  
    	$nav=M("nav");		//获取导航模型
        $navlist=$nav->limit("8")->order("sort desc")->select();  //根据降序排列
        $menu=M("menu");   //获取左侧菜单模型
        $menulist=$menu->order("sort desc")->limit("18")->select(); 
        $book_model=M("book"); //书模型
        $hotlist=$book_model->order("book_up_time desc")->limit("10")->select();//获取商品热卖列表 
        $newlist=$book_model->order("book_publish_time desc")->limit("10")->select();
        //获取新品列表
        $pulllist=$book_model->order("book_publish_time desc")->limit("1,10")->select();
//        -----------------------------------------
        $user=session("auth");
        if ($user){
            $model=M('cart');
            $resultCarNum = $model->where("user_id = {$user['id']}")->count();
            $this->assign("resultCarNum",$resultCarNum);
        }
//        -----------------------------------------
//        $this->error($resultCarNum);exit;
        // 以下为赋值
 		$this->assign("navlist",$navlist);
        $this->assign("menulist",$menulist); 
        $this->assign("hotlist",$hotlist); 
 		$this->assign("newlist",$newlist); 
 		$this->assign("pulllist",$pulllist);
         
        $this->display('./index');
    } 
}