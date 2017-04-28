;(function(){
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
 }
 if ($getHeight<400||$getHeight>2200){  
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
function reg_fn () {  
     $('.reg').show().animate({  
         opacity:1,  
         top:"185px"  
     });  
     $(".zhedangceng").css("display", "block");  
  } 
 
}())