<?php
namespace Admin\Controller;
use Think\Controller;
class UserController extends Controller {
    public  function userlist()
    {
    	 $ip=new \Org\Net\IpLocation('qqwry.dat');
    	 $iip=get_client_ip();
    	 
    	 
    	 $user=M("user");
    	 $userlist=$user->select();
    	 $this->assign("userlist",$userlist);
    	 $this->display();
    }
}