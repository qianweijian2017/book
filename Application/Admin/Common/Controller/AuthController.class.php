<?php 
namespace Admin\Common\Controller;
	
use Think\Controller;
use Think\Auth;
class AuthController extends Controller {

	public function _initialize(){
		$auth=session("auth");
		if(!$auth){
			$this->error("请先登陆!",U('user/login'));
		}
 	}

}

