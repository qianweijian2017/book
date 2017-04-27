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
 var obg = document.getElementsByClassName("zhedangceng")[0];  
 fn = function close() {  
 $('.load').animate({  
 opacity:0,  
 top:"-500px"  
 });  
 obg.style.display = "none";  
 };  
 //显示登录框  
 load_fn =function load() {  
 $('.load').show().animate({  
 opacity:1,  
 top:"185px"  
 });  
 obg.style.display = "block";  
 };  
 //隐藏注册框  
 fn_reg = function close() {  
 $('.reg').animate({  
 opacity:0,  
 top:"-500px"  
 });  
 obg.style.display = "none";  
 };  
 //显示注册框  
 reg_fn =function load() {  
 $('.reg').show().animate({  
 opacity:1,  
 top:"185px"  
 });  
 obg.style.display = "block";  
 }  