<?php if (!defined('THINK_PATH')) exit();?> 
  <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>图书管理系统</title><link rel="stylesheet" type="text/css" href="/tushuguanli/Public/Lib/font-awesome-4.7.0/css/font-awesome.min.css">
 	<link rel="stylesheet" type="text/css" href="/tushuguanli/Public/Lib/bootsrapv3.3.7/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="/tushuguanli/Public/Admin/css/reset.css">
 	<link rel="stylesheet" type="text/css" href="/tushuguanli/Public/Admin/css/common.css">
 	<link rel="stylesheet" type="text/css" href="/tushuguanli/Public/Admin/css/main.css">
 	<!-- 获取控制器名,全局变量 --> 
	 <script type="text/javascript">
	 	var controllerName="<?php echo (CONTROLLER_NAME); ?>";
	 	var postUrl="<?php echo U('Ajax/delete');?>"; 
	 </script>
 </head>
 <body> 
  <!-- 公共头部 -->
<header id="header" class="header"> 
	<div class="header-logo">
		<a href="">
			趣书购物 
		</a>
	</div>
	<div class="header-title">
		趣书网购书后台管理系统
	</div>
	<div class="header-userbar">
		<ul>   
			<li>
				<a href="">
					<i class="fa fa-sign-out"></i>
				</a>
			</li>
			<li>
				<a href="">头像</a>
			</li>
			<li>
				<a href="">
					<i class="fa fa-cog"></i>
				</a>
			</li>
			<li>
				<a href="">
					<i class="fa fa-search"></i>
				</a>
			</li>
		</ul>
	</div>
</header>
<nav id="nav" class="left-nav">
	<div class="header-left-nav">
		  <!-- 第一个一级菜单开始 -->
		  <dl class="pbottom_10">
		 	 <!-- 标题 -->
		 	<dt>
		 		<a href="">
					<i class="fa fa-th"></i>
		 			<span>前台管理</span>
		 		</a>
		 	</dt>  
		 	 <!-- 标题end -->
		 	 <!-- 选项 -->
		 	<dd>
		 		<a href="">
					<p><i class="fa  fa-bookmark"></i></p>
		 			<span>首页菜单</span>
		 		</a>
		 	</dd>
		 	<dd>
		 		<a href="">
					<p><i class="fa fa-cart-plus"></i></p>
		 			<span>首页商品</span>
		 		</a>
		 	</dd>
		 	<!-- 选项end -->
		 </dl>
		  <!-- 第一个一级菜单end -->
		 <!-- 第二个一级菜单开始 -->
		 <dl class="pbottom_50">
			<!-- 标题 -->
		 	<dt>
		 		<a href="javascript:;">
		 			<i class="fa fa-book"></i>
		 			<span>后台管理</span>
		 		</a>
		 	</dt>  
		 	<!-- 标题end -->
		 	<!-- 选项 -->
		 	<dd>
		 		<a href="<?php echo U('User/userlist');?>">
		 			<p><i class="fa fa-user-o"></i></p>
		 			<span>用户列表</span>
		 		</a>
		 	</dd>
		 	<dd>
		 		<a href="">
					<p><i class="fa fa-building-o"></i></p>
		 			<span>图书及详情</span>
		 		</a>
		 	</dd>
		 	<dd>
		 		<a href="">
					<p><i class="fa fa-heart-o"></i></p>
		 			<span>用户收藏列表</span>
		 		</a>
		 	</dd>
		 	<dd>
		 		<a href="">
					<p><i class="fa fa-cart-arrow-down"></i></p>
		 			<span>已下单</span>
		 		</a>
		 	</dd>
		 	<dd>
		 		<a href="">
					<p><i class="fa fa-rmb"></i></p>
		 			<span>己售出</span>
		 		</a>
		 	</dd>
		 	<dd>
		 		<a href="">
					<p><i class="fa fa-line-chart"></i></p>
		 			<span>统计图表</span>
		 		</a>
		 	</dd>
		 	<!-- 选项 end-->
		 </dl>
		 <!-- 第二个一级菜单end -->
	</div>
</nav>
<!-- 公共头部end -->


<!-- 主要内容开始  -->
<div id="main" class="main">
	<div class="main-title">
		 
	</div>
	
 
<!-- 编辑box -->
	<section id="user_box" class="hide_box">
	 	
	</section>
	<!-- 编辑box end -->
 
 <div class="ManagerBar"> 
			<div class="btn-group oper_bar">
				<button class="btn btn-danger btn-md" id="deleteItem">
					<i class="fa fa-trash-o fa-fw"></i>
					<span>删除</span>
				</button>
			</div> 
			<div class="btn-group oper_bar"> 
				<a href="javascript:;" class="btn btn-success btn-md" >
					<i class="fa fa-pencil"></i>
					<span>编辑</span>
				</a> 
				<a href="javascript:;" class="btn btn-primary btn-md" >
					<i class="fa fa-pencil"></i>
					<span>添加</span>
				</a> 
				<a href="<?php echo (ACTION_NAME); ?>" class="btn  btn-warning btn-md" class="btn_refresh">
					<i class="fa fa-refresh"></i>
					<span>显示全部</span>
				</a> 
			</div>
			 <!-- 默认是用户页面的搜索 -->
		<div class="search_box pull-right">
			<form method="get" action=""> 
				<button type="submit" class="btn btn-info btn-md pull-right" id="search_news">
					<i class="fa fa-search"></i>
                    <span>搜索</span>
				</button>
				<label class="form-group pull-right"> 
					<input type="search" name="search_keyword" class="form-control" placeholder="请输入搜索内容" />
				</label> 
				<select class="pull-right search_select" name="search_col"> 
					<option value="0" >
						 用户ID
					</option>
					 <option value="0" >
						 禁止登陆
					</option>
				</select>
			</form>
		</div>	  
	</div>  
 <!-- 用户页面的搜索end -->
<!-- 用户列表显示开始 -->
<table class="table table-hover common_table">
		<tr>
			 <th class="select">
			 	<input type="checkbox" class="check_all hidden" id="check_all">
				<label for="check_all" class="btn btn-success btn-md">
					<i class="fa fa-square-o"></i>
					<span>全选/反选</span>
				</label> 
			 </th>
			 <th>
			 	用户id
			 </th>
			 <th>
			 	用户名
			 </th>
			  <th>
			 	用户密码
			 </th> 
			 <th>
			 	禁止登陆状态
			 </th> 
			 <th>
			 	注册时间
			 </th> 
		 </tr>
		 <?php if(is_array($userlist)): $i = 0; $__LIST__ = $userlist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$useritem): $mod = ($i % 2 );++$i;?><tr>
			 	<td>
			 		<input type="checkbox" class="sub_check" name="sub_check" value="<?php echo ($useritem["id"]); ?>">
			 	</td>
			 	<td>
			 		<?php echo ($useritem["id"]); ?>
			 	</td>
			 	<td>
			 		<?php echo ($useritem["user_name"]); ?>
			 	</td>
			 	<td>
			 		<?php echo ($useritem["user_pwd"]); ?>
			 	</td>
			 	<td class="user_ban">
			 		<?php echo ($useritem["user_ban"]); ?>
			 	</td>
				<td>
			 		<?php echo (date("Y-m-d H:i:s",$useritem["crete_time"])); ?>
			 	</td>
			 </tr><?php endforeach; endif; else: echo "" ;endif; ?>
	</table>
	
</div>
 

<!-- 用户列表显示开始end -->


 
 	</div>
</div>
<script src="/tushuguanli/Public/Lib/jquery-1.9.1.min.js"></script>
<script src="/tushuguanli/Public/Lib/bootsrapv3.3.7/js/bootstrap.min.js"></script>
<script src="/tushuguanli/Public/Admin/js/common.js"></script>
<!-- 主要内容end  -->
  </body>
 </html>