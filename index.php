<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006-2014 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

// 应用入口文件

// 检测PHP环境,要大于5.3.0
if(version_compare(PHP_VERSION,'5.3.0','<'))  die('require PHP > 5.3.0 !');

// 开启调试模式 建议开发阶段开启 部署阶段注释或者设为false
define('APP_DEBUG',true); //有缓存机制
// define('APP_DEBUG',false); //无缓存机制

// // 自动生成目录
// define('BIND_MODULE','Admin');

define("WORKING_PATH",str_replace("\\","/",__DIR__));//工作目录

define("UPLOAD_PATH","/Public/Upload/");//文件目录 

 

// 定义应用目录
define('APP_PATH','./Application/');
 
define('RUNTIME','./Application/Runtime/');
// 引入ThinkPHP入口文件
require './ThinkPHP/ThinkPHP.php';

// 亲^_^ 后面不需要任何代码了 就是如此简单