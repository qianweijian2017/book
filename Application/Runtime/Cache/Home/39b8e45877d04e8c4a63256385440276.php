<?php if (!defined('THINK_PATH')) exit();?>﻿<?php echo '<?'; ?>
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="/tushuguanli/Public/Home/css/main.css">
    <link rel="stylesheet" href="/tushuguanli/Public/Home/css/reset.css"> 
    <link rel="stylesheet" href="/tushuguanli/Public/Home/css/book_reset.css"> 
    <link rel="stylesheet" href="/tushuguanli/Public/Home/css/show.css">
    <link rel="stylesheet" href="/tushuguanli/Public/Home/css/common.css">
    <link rel="stylesheet" href="/tushuguanli/Public/Lib/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
<body>
<!--//导航nav开始-->
<div class="container nav-box">
    <div class="nav">
        <div class="nav-left">
            <div class="nav-left" style="display: none">
                <a href="#" id="position">送至:<span class="nav-position">北京</span> <span class="pic"></span></a> 
                <ul class="position" id="showPosition">
                    <li class="position-item"><a href="">北京</a></li>
                    <li class="position-item"><a href="">上海</a></li>
                    <li class="position-item"><a href="">杭州</a></li>
                    <li class="position-item"><a href="">武汉</a></li>
                    <li class="position-item"><a href="">深圳</a></li>
                    <li class="position-item"><a href="">广州</a></li>
                    <li class="position-item"><a href="">梅州</a></li>
                    <li class="position-item"><a href="">汕头</a></li>
                    <li class="position-item"><a href="">汕尾</a></li>
                    <li class="position-item"><a href="">北京</a></li>
                    <li class="position-item"><a href="">上海</a></li>
                    <li class="position-item"><a href="">杭州</a></li>
                    <li class="position-item"><a href="">武汉</a></li>
                    <li class="position-item"><a href="">深圳</a></li>
                    <li class="position-item"><a href="">广州</a></li>
                    <li class="position-item"><a href="">梅州</a></li>
                    <li class="position-item"><a href="">汕头</a></li>
                    <li class="position-item"><a href="">汕尾</a></li>
                </ul>
            </div>
            <div class="logo">
                <a href="" style="text-align: center;line-height: 20px;text-decoration: none">
                    <!--<img src="book.png" height="20px" style="padding-top: 7px;"/>-->
                    <div class="name" style="float: right;padding-top: 7px;padding-left: 5px;color: #d81e06"></div>
                </a>

            </div>

        </div>
        <div class="nav-right">
            <ul class="nav-list">
                <li class=" login" style="float: left">
                  <div class="nav-login">欢迎光临趣书网，请<a href="javascript:;" onclick="reg_fn();return false;" class="reg_btn" style="color: #e63735;">注册</a>或<a href="javascript:; " onclick="load_fn();return false;"style="color: #e63735">登录</a>成为会员</div> 
                </li>
                <li class="nav-item"><a class="nav-item-bo">购物车<b class="car-num">0</b></a></li>
                <li class="nav-item"><a class="nav-item-bo">我的订单</a></li>
                <li class="nav-item"><a class="nav-item-bo">原创征文</a></li>
                <li class="nav-item"><a class="nav-item-bo">我的趣书</a></li>
            </ul>
        </div>
    </div>
</div>
<!--//导航nav结束-->

<!--//头部开始-->
<div class="container header">
    <div class="header-main">
        <div class="h-left">
            <div class="logo-h">
                <img src="/tushuguanli/Public/Home/imgs/book.png" height="40px" style="position: absolute;top: 19px;left:3px;"/>
                <img src="/tushuguanli/Public/Home/imgs/logomain.png" alt="">
            </div>
        </div>
        <div class="h-main">
            <div class="search-box">
                <div class="search">
                <form>
                    <div class="search-text">
                        <input type="text" style="outline: medium;border: none" placeholder="书名/作者">
                    </div> 
                    <div class="search-select" id="sort">
                        <button type="submit" class="text">
                            搜索书籍
                        </button>  
                    </div>
                </form>

                    <div class="search-icon">
                        <div class="search-icon-right">
                            <a href="">我的订单</a>
                        </div>
                        <div class="search-icon-left">

                            <a href="">购物车 0</a>
                        </div>
                    </div>
                </div>
                <div class="search-right">
                    <div class="search-right-buy"></div>
                    <div class="search-right-my"></div>
                </div>

            </div>

            <div class="h-right"></div>
        </div>
    </div>
</div>
<!--//头部结束-->
<!--//body开始-->
<div class="container main">


 
<link rel="stylesheet" type="text/css" href="/tushuguanli/Public/Home/css/booklist.css">
 
<div id="booklist" class="book_list">
<!-- 左侧开始 -->
	<aside class="sidebar"> 
		<dl>
			<dt> 	
				 <a href="javascript:;">分类</a>
			</dt>
			<!-- 第一行 -->
			<dd>
				<a href="<?php echo U('Book/booklist',array('sort'=>'2'));?>">
					全部
				</a>
			</dd>
			 <?php if(is_array($menulist)): $i = 0; $__LIST__ = $menulist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menuitem): $mod = ($i % 2 );++$i;?><dd>
				 
					<a href="<?php echo U('Book/booklist',array('type'=>$menuitem['id'],'sort'=>'2'));?>">	
						<?php echo ($menuitem['type_name']); ?>
					</a>
				</dd><?php endforeach; endif; else: echo "" ;endif; ?>
		</dl> 
	</aside>
	<!-- 左侧end-->
 	<!-- 右侧显示列表开始 -->
 	<section id="listshow" class="listshow">
 		<div class="list-sort-tilte clearfix">
 			<ul class="clearfix">
 				<li class="<?php title_active(I('sort'),'2'); ?>" >
	 				<a href="<?php echo U('Book/booklist',array('sort'=>'2'));?>" >
	 					人气排序
	 					<?php select_active(I('sort'),"2"); ?>
	 				</a>
 				</li>
 				<li   class="<?php title_active(I('sort'),'collect'); ?>">
	 				<a href="<?php echo U('Book/booklist',array('sort'=>'collect'));?>">
	 					总收藏
	 					<?php select_active(I('sort'),"collect"); ?>
	 				</a>
 				</li>
 				<li  class="<?php title_active(I('sort'),'up_time'); ?>">
	 				<a href="<?php echo U('Book/booklist',array('sort'=>'up_time'));?>">
	 					上传时间
	 					<?php select_active(I('sort'),"up_time"); ?>
	 				</a>

 				</li> 
 			</ul>
 		</div>
		<div class="listshow-list">  
	 		<?php if(is_array($booklist)): $i = 0; $__LIST__ = $booklist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bookitem): $mod = ($i % 2 );++$i;?><!-- 单个选项开始 -->
				<div class="listshow-item">
					<div class="prince">
						<span>
							￥<?php echo (trim($bookitem["book_prince"])); ?>
						</span>
						<i class="fa fa-bookmark fa-5x">
							
						</i> 
					</div>
				 	<div class="list-item-img">
				 		<a href="">
				 			<img src="/tushuguanli<?php echo ($bookitem["img_path"]); ?>">
				 		</a>
				 	</div>
				 	 <dl>
				 	 	<dt class="list-item-title">
				 	 		<a href="javascript:;"><?php echo ($bookitem["book_name"]); ?></a>
				 	 	</dt>
				 	 	<dd>
				 	 		<span>
				 	 			作者:
				 	 		</span>  
				 	 		<span>
					 	 		<a href="">
					 	 			<?php echo ($bookitem["book_author"]); ?>
					 	 		</a>
				 	 		</span>
							<span>
								<a href="">
									<?php echo ($bookitem["type_name"]); ?>
								</a> 
							</span>
				 	 	</dd>
				 	 	<dd>
				 	 		 <p>
				 	 			 <?php echo ($bookitem["book_detail"]); ?>
				 	 		 </p>
				 	 	</dd>
				 	 	<dd>
				 	 		<span>
				 	 			收藏人数:<?php echo ($bookitem["book_collect"]); ?>
				 	 		</span>
				 	 	</dd>
				 	 </dl>
				 </div>
				 <!-- 单个选项end --><?php endforeach; endif; else: echo "" ;endif; ?> 
		</div>
		 <!-- 分页 -->
		 <div class="b-page"> 
			<?php echo ($sPages); ?> 
		 </div>
		<!-- 分页 end-->
 	</section>
 	<!-- 右侧显示列表end -->
</div>

﻿
 <div class="footer" id="footer">

     <div class="f-main">
         <ul class="icon-ul">
             <li class="icon" >
                 <a href="" >
                     <img src="/tushuguanli/Public/Home/imgs/icon-放心购.png" height="50" width="50"/> 
                 </a>
                 <span class="f-text">放心购</span>
             </li>
             <li class="icon">
                 <a href="">

                     <img src="/tushuguanli/Public/Home/imgs/安全.png" height="50" width="50"/> 
                 </a>
                 <span class="f-text">安全保障</span>
             </li>
             <li class="icon">
                 <a href="">
                     <img src="/tushuguanli/Public/Home/imgs/正品.png" height="50" width="50"/> 

                 </a>
                 <span class="f-text">正品保障</span>
             </li>
             <li class="icon">
                 <a href="">
                     <img src="/tushuguanli/Public/Home/imgs/认证.png" height="50" width="50"/> 
                 </a>
                 <span class="f-text">专业认证</span>
             </li>
         </ul>
     </div>
     <div class="f-under" >
         <div class="descript">
             <ul >
                 <li>
                     <a href="">公司简介</a>
                 </li>
                 <li>
                     <a href="">Investor Relations</a>
                 </li>
                 <li>
                     <a href="">诚聘英才</a>
                 </li>
                 <li>
                     <a href="">网站联盟</a>
                 </li>
                 <li>
                     <a href="">趣书招商</a>
                 </li>
                 <li>
                     <a href="">机构销售</a>
                 </li>
                 <li>
                     <a href="">手机趣书</a>
                 </li>
                 <li>
                     <a href="">官方 Blog</a>
                 </li>
                 <li>
                     <a href="" style="border-right: none">热词搜索</a>
                 </li>
             </ul>
         </div>
         <p style="margin-top: 50px;display: block;float: left">
             Copyright (C) 趣书网 2004-2017, All Rights Reserved
             <img src="/tushuguanli/Public/Home/imgs/icon-放心购.png" height="30" width="30"/> 
             京ICP证041189号出版物经营许可证 新出发京批字第直0673号
         </p>
     </div>
 </div>





 <div class="load">
    <h3 class="login-title">快速登录</h3>
    <h2 class="x"><a href="#" onclick="fn();return false;">×</a></h2>
    <form action="" method="post">
        <div class="inp">
            <div class="inp_box">
                <label for="" class="_label"></label> <input type="text" value="" class="input inp_user" placeholder="账号/手机号">
                <p class="tips"></p>
            </div>
            <div class="inp_box">
                <label for="" class="_label"></label> <input type="password" value="" class="input inp_pwd" placeholder="密码">
                <p class="tips"></p>
            </div>
        </div>
        <div class="inp-icon user">
            <img src="/tushuguanli/Public/Home/imgs/user.png" />
        </div>
        <div class="inp-icon pwd">
            <img src="/tushuguanli/Public/Home/imgs/pwd.png" />
        </div>
        <input type="submit" value="登录" class="btn">

        <input type="button" value="注册" class="btn reg_" onclick="fn(),reg_fn()">
    </form>


</div>

<!--reg_box-->
<div class="reg">
    <h3 class="reg-title">快速注册</h3>
    <h2 class="x"><a href="#" onclick="fn_reg();return false;">×</a></h2>
    <form action="" method="post">
        <div class="inp">
            <div class="inp_box">
                <label for="" class="_label"> </label><input type="text" value="" class="input inp_user" placeholder="账号/手机号">
                <p class="tips"></p>
            </div>
            <div class="inp_box">
                <label for="" class="_label"></label><input type="password" value="" class="input inp_pwd" placeholder="密码">
                <p class="tips"></p>
            </div>
        </div>
        <div class="inp-icon user">
            <img src="/tushuguanli/Public/Home/imgs/user.png" />
        </div>
        <div class="inp-icon pwd">
            <img src="/tushuguanli/Public/Home/imgs/pwd.png" />
        </div>

        <input type="button" value="确认注册" class="btn">
    </form>


</div>
<div class="zhedangceng">

</div>

<!--//body结束-->
 <script type="text/javascript" src="/tushuguanli/Public/Lib/jquery-1.9.1.min.js"></script>

 <script type="text/javascript">

    var key = 0;
    var obox = $(".runpic");
    var oUl = document.getElementById("oUl");
    var oLi = oUl.children;
    var num = document.getElementById("num");
    var numLi = num.children;
    var timer = null, speed = 1600;
    var lBtn = $(".left-btn");
    var rBtn = $(".right-btn");
    var position = document.getElementById("position");
    var mydd = document.getElementById("mydd");
    var maddul = document.getElementById("maddul");
    var buy = document.getElementById("buy");
    var buyul = document.getElementById("buyul");
    var sort = document.getElementById("sort");
    var sortul = document.getElementById("sortul");
    var leftul = document.getElementById("home-1-left-ul"); 
    var footer = document.getElementById("footer"); 
    obox.mouseenter(function () {
        lBtn.stop().animate({
            left: 0, opacity: 0.3
        });
        rBtn.stop().animate({
            right: 0, opacity: 0.3
        });

        obox.stop().hover().stop()
    }).mouseleave(function () {

        lBtn.stop().animate({
            left: -33
        });
        rBtn.stop().animate({
            right: -33
        })
    });
    lBtn.hover(function () {
        $(this).css({
            opacity: 0.6
        })
    }).mouseleave(function () {
        $(this).css({
            opacity: 0.3
        })
    });
    rBtn.hover(function () {
        $(this).css({
            opacity: 0.6
        })
    }).mouseleave(function () {
        $(this).css({
            opacity: 0.3
        })
    });
    oLi[0].className = "cur";
    for (var k = 0; k < oLi.length; k++) {
        oLi[k].style.zIndex = 10 - k;
    }

    //点击ol轮播图片
    $(".num ul li").mouseenter(function () {

        key = $(".runpic ul li").eq($(this).index()).index();  //设定key值
        $(".num ul li").eq($(this).index()).addClass("cur").siblings().removeClass('cur');
        $(".runpic ul li").eq($(this).index()).stop().animate({
            opacity: 1,
            zIndex: 10
        }).siblings().stop().animate({
            opacity: 0,
            zIndex: 9
        });
    });


    //点击事件,上一张
    lBtn.click(function () {
        key = key - 1;
        if (key < 0) {
            key = 3
        }
        $(".num ul li").eq(key).addClass("cur").siblings().removeClass('cur');
        $(".runpic ul li").eq(key).stop().animate({
            opacity: 1,
            zIndex: 3
        }).siblings().stop().animate({
            opacity: 0,
            zIndex: 2
        });

    });

    //点击事件,下一张
    rBtn.click(function () {
        key = key + 1;
        if (key > 3) {
            key = 0
        }
        $(".num ul li").eq(key).addClass("cur").siblings().removeClass('cur');
        $(".runpic ul li").eq(key).stop().animate({
            opacity: 1,
            zIndex: 3
        }).siblings().stop().animate({
            opacity: 0,
            zIndex: 2
        });
    });

    $('.gundong-title ul li').mouseenter(function () {

        $('.gundong-title ul li').eq($(this).index()).stop().animate({
            opacity: .5

        }).siblings().stop().animate({
            opacity: 1,
            zIndex: 2
        });


    });
    $('.gundong-title ul li').eq(0).mouseenter(function () {

        $('.c-1').stop().animate({
            marginTop:"0px"
        });
    });
    $('.gundong-title ul li').eq(1).mouseenter(function () {
        $('.c-1').stop().animate({
            marginTop:"-300px"
        });
    });
   //监听滚动条显示导航  
 $(document).scroll(function(){  
 $getHeight=$(document).scrollTop();  
 if ($getHeight>1){  
 $('.body-right').stop().show().animate({  
   right:"65px",  
 opacity:.9  
   })  
 }if ($getHeight<400||$getHeight>2200){  
 $('.body-right').stop().animate({  
 right:"-180px"  
 })  
 }  
 });  
 //右侧导航显示  
 $('.body-right ul li').on('mouseover',function () {  
   $(this).find('a').stop().show().animate({  
         paddingLeft:"10px"  
   });  
     });  
 //右侧导航隐藏  
 $('.body-right ul li').on('mouseout',function () {  
        $(this).find('a').stop().animate({  
        paddingLeft:"35px"  
 });  
});     
 //点击火箭返回顶部  
 $('.roket').on('click',function () {  
     var speed=1.2;  
     timer=setInterval(function () {  
     $height= $(document).scrollTop();  
     $(document).scrollTop($height/speed);  
     if($height==0){  
         clearInterval(timer);  
         }  
         },30);  
 });  
   //取消登陆  
 
function  fn() {  
 $('.load').animate({  
     opacity:0,  
     top:"-500px"  
 });  
 $(".zhedangceng").css("display", "none");  
 };  
 //显示登录框  
function load_fn() {  
 $('.load').show().animate({  
     opacity:1,  
     top:"185px"  
 });   
  $(".zhedangceng").css("display", "block");  
 };  
 //隐藏注册框  
function  fn_reg() {  
 $('.reg').animate({  
     opacity:0,  
     top:"-500px"  
 });  
 $(".zhedangceng").css("display", "none");   
 };  
 //显示注册框  
function  reg_fn () {  
 $('.reg').show().animate({  
     opacity:1,  
     top:"185px"  
 });  
 $(".zhedangceng").css("display", "block");  
 }  

</script>
 </body>
 </html>