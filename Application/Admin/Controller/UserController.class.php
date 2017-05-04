<?php

namespace Admin\Controller;
use Think\Controller;
use Org\Util\page;
class UserController extends Controller {
  /**
   * 登陆操作
   * @return [type] [description]
   */
    public function doLogin()
    {
      if(IS_POST){
        $model=M('user');
        $user_name=I('post.user_name');
        $user_pwd=I('post.user_pwd');
        $user=$model -> where("user_name = '{$user_name}' and user_pwd = '{$user_pwd}'")
                     -> find();
        if($user['role_id']==2){
          session("admin",$user);
          $this->success("登陆成功",U('index/index'),3);
        }else{
          $this->error("登陆错误!");
        }
      }
    }
    /**
     * 用户列表管理
     * @return [type] [description]
     */
    public  function userlist()
    {   
      	$model=M('user');   
     		$count=$model->where($where)->count(); //where 为条件,可作分类分页 

     		$page=new Page($count,8);	//count总页数,limit是显示的行数   
  	    $sPages=$page->show();
  	    $userlist=$model->where($where)->limit($page->firstRow.',8' )->select();
  	    $this->assign('sPages',$sPages);// 赋值分页输出  
      	$this->assign("userlist",$userlist);
        $this->display();	
    }
}