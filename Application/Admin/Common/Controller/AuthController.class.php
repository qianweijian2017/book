<?php 
namespace Admin\Common\Controller;
	
use Think\Controller;
use Think\Auth;
class AuthController extends Controller {

	public function _initialize(){
		$admin=session("admin");
		if(!$admin){
			$this->error("请先登陆!",U('user/login'));
		}
 	}

}

