<?php

namespace Admin\Controller;
use Admin\Common\Controller\AuthController;
class IndexController extends AuthController {
	/**
	 * 首页
	 * @return [type] [description]
	 */
    public function index(){
    	  
        $this->display('./index');
    }
    
}