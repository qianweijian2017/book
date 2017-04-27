<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public  function userlist()
    {
    	 
    	 $user=M("user");
    	 $userlist=$user->select();
    	 $this->assign("userlist",$userlist);
    	 $this->display();
    }
}