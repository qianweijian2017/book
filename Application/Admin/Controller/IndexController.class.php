<?php
namespace Admin\Controller;
use Think\Controller;
class IndexController extends Controller {
	/**
	 * 首页
	 * @return [type] [description]
	 */
    public function index(){
    	  
        $this->display('./index');
    }
    
}