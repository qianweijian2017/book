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
                    <div class="nav-login">欢迎光临趣书网，请<a href="" class="reg" style="color: #e63735;">注册</a>或<a href="#" style="color: #e63735">登录</a>成为会员</div>
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



<div class="book-detail">

    <div class="book_info">
        <div class="share-box">
            <img src="/tushuguanli/Public/Home/imgs/dsend.png" height="70px" width="70px"/>
        </div>
        <div class="b_pic">

            <img src="/tushuguanli/Public/Home/imgs/dpro.jpg" height="240" width="180"/></div>
        <div class="b_info">
            <div class="b_name">
                <h2>超级浮空城</h2>
            </div>
            <div class="b_wri">
                作者： <a href="">格雷厄姆·格林 著 柯</a>
            </div>
            <span class="pub">出版社 : <c>江苏文艺出版社</c></span>
            <span class="b_date">出版时间 : <c>2017年04月 </c></span>
            <span class="b_page">页数 : <c>1024</c></span>
            <span class="b_price">价格 : <c>¥41.80</c></span>
            <span class="b_isbn">ISBN : <c>756341455x</c></span>
            <span class="b_count">版 次 : <c>1</c></span>

            <span style="background:#d81e06;width: 200px" class="b_btn">加入购物车</span>
            <span style="background:#3f89ec;width: 200px;" class="b_btn">加入收藏</span>

        </div>

    </div>
    <div class="book_detail">
        <div class="detail-main">
            <div class="main-title">
                <span class="title cur">作品信息</span>
                <span class="title">内容简介</span>
            </div>
            <div class="main-content">
                <div class="info-content">
                    <p class="text">
                        　
                        　森罗万象，皆为灰烬，流刃若火！
                        <br>　　穿越到海贼世界，大海贼时代十一年的罗亚，得到了一个能够无限强化，抽取各种技能的剑魂系统。
                        <br>　　流刃若火，镜花水月，月牙天冲，千本樱……
                        <br>　　“我这一刀下去，你可能会被烧死。”罗亚看着眼前的赤犬，很认真的说道。
                        <br>　　………………………………
                        <br>　　风盟2群：580391329
                        <br>　　实际上这个剑气叠加只是修炼方式而已，真正战斗的时候可没有时间去进行剑气叠加。</br>
                        <br>　　我的设定是，假设挥一剑，剑气是一米，那么进行了剑气叠加的修炼之后，如果主角能做到两剑叠加了，那么再挥一剑时，剑气就是两米。</br>
                        <br>　　两者是对等关系，剑气叠加只是修炼方式，并不是实战，一旦练成之后就等于是一个增强剑气威力的被动技能，释放剑气的时候，是不需要再刻意去叠加的。</br>
                        <br>　　这个是第一点，另外第二点，关于本书的等级制度。</br>
                        <br>　　海贼王世界没有很明确的分级，不像火影，所以等级制度是比较混乱的。</br>
                        <br>　　海军本部上校实力，本部少将实力，支部中将实力，本部中将实力，顶尖中将实力，准大将实力（多弗朗明哥、四将星、三灾、不死鸟马尔科），海军大将，四皇……</br>
                        <br>　　上校之下不划分实力，因为太凌乱无法划分，所以起点就是海军上校。</br>
                        <br>　　桃兔、茶豚等预备大将，因为原著没有放出来，所以暂时不进行什么设定。</br>
                    </p>
                </div>
                <div class="relation-content n-b">
                    <p class="text">
                        <br>　　实际上这个剑气叠加只是修炼方式而已，真正战斗的时候可没有时间去进行剑气叠加。</br>
                        <br>　　我的设定是，假设挥一剑，剑气是一米，那么进行了剑气叠加的修炼之后，如果主角能做到两剑叠加了，那么再挥一剑时，剑气就是两米。</br>
                        <br>　　两者是对等关系，剑气叠加只是修炼方式，并不是实战，一旦练成之后就等于是一个增强剑气威力的被动技能，释放剑气的时候，是不需要再刻意去叠加的。</br>
                        <br>　　这个是第一点，另外第二点，关于本书的等级制度。</br>
                        <br>　　海贼王世界没有很明确的分级，不像火影，所以等级制度是比较混乱的。</br>
                        <br>　　海军本部上校实力，本部少将实力，支部中将实力，本部中将实力，顶尖中将实力，准大将实力（多弗朗明哥、四将星、三灾、不死鸟马尔科），海军大将，四皇……</br>
                        <br>　　上校之下不划分实力，因为太凌乱无法划分，所以起点就是海军上校。</br>
                        <br>　　桃兔、茶豚等预备大将，因为原著没有放出来，所以暂时不进行什么设定。</br>
                        <br>　　其中准大将往上的等级，都是争议非常大的，但是小风觉得这些人的实力应该差不多近似，就算有差距也不会特别大，所以都放到一个等级里面去。</br>
                        <br>　　另外海军大将和四皇之间，除了巅峰时期白胡子之外，其他四皇应该没有碾压海军大将的实力，打起来多半是五五开到七三开之间，四皇赢面比较大。</br>
                </div>


            </div>
            <div class="b-right">
                <div class="guess-like ">
                    <div class="g-title">
                        <span>
                            猜你喜欢
                       </span>
                        <div class="change-icon"  style="cursor: pointer">
                            <img src="/tushuguanli/Public/Home/imgs/dchange.png" height="22px" width="22px"/>
                        </div>
                    </div>

                    <div class="g-pic">
                        <img  style="cursor: pointer" src="/tushuguanli/Public/Home/imgs/dpro.jpg" height="240" width="180"/>
                    </div>
                    <span class="g-name mesg"><a>《</a> 超级浮空城<a> 》</a></span>
                    <span class="g-wri mesg"> 格雷厄姆·格林 著 柯</span>
                    <span class="g-short mesg">
                      一场绝密级的试验爆炸让萧铭来到一个类似古代的平行世界。在这个满是恶意的地方，他身为最不受宠的皇
                    </span>

                </div>
                <div class="relate-book ">
                    <div class="g-title">
                        <span>
                            广告推荐
                        </span>
                    </div>
                    <div class="adv-pic">
                        <img src="http://qidian.qpic.cn/qidian_common/349573/a5d10fa6544395b606f98d1f3c228eb1/0"
                             alt="">
                        <img src="http://qidian.qpic.cn/qidian_common/349573/e27b352c596709a812a776358437496a/0"
                             alt="">
                    </div>

                    <div class="more-icon">
                        <img src="/tushuguanli/Public/Home/imgs/dmore.png" height="20px" width="20px"/></div>
                </div>
            </div>
        </div>

    </div>

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

                    <img src="/tushuguanli/Public/Home/imgs/安全.png" height="50" width="50"/></a>
                <span class="f-text">安全保障</span>
            </li>
            <li class="icon">
                <a href=""><img src="/tushuguanli/Public/Home/imgs/正品.png" height="50" width="50"/>

                   </a>
                <span class="f-text">正品保障</span>
            </li>
            <li class="icon">
                <a href="">
                    <img src="/tushuguanli/Public/Home/imgs/认证.png" height="50" width="50"/></a>
                <span class="f-text">专业认证</span>
            </li>
        </ul>
    </div>
    <div class="f-under" >
            <div class="descript">
                <ul >
                    <li><a href="">公司简介</a></li>
                    <li><a href="">Investor Relations</a></li>
                    <li><a href="">诚聘英才</a></li>
                    <li><a href="">网站联盟</a></li>
                    <li><a href="">趣书招商</a></li>
                    <li><a href="">机构销售</a></li>
                    <li><a href="">手机趣书</a></li>
                    <li><a href="">官方 Blog</a></li>
                    <li><a href="" style="border-right: none">热词搜索</a></li>
                </ul>
            </div>
        <p style="margin-top: 50px;display: block;float: left">
            Copyright (C) 趣书网 2004-2017, All Rights Reserved
            <img src="/tushuguanli/Public/Home/imgs/icon-放心购.png" height="30" width="30"/>
            京ICP证041189号出版物经营许可证 新出发京批字第直0673号
            </p>
    </div>
</div> 
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
       
        console.log($getHeight);
        if ($getHeight>1){
            $('.body-right').stop().show().animate({
                opacity:1

            })
        }if ($getHeight<400||$getHeight>2496){
            $('.body-right').stop().hide().animate({
                opacity:0
            })
        }
    });
    $('.body-right ul li').on('mouseover',function () {

        $(this).find('a').stop().show().animate({
          paddingLeft:"10px"

        });


    });
    $('.body-right ul li').on('mouseout',function () {

        $(this).find('a').stop().animate({
            paddingLeft:"35px"
        });


    });
    $('.roket').on('click',function () {
        var interval=setInterval(function () {
            if($(window).scrollTop()<10){
                clearInterval(interval);
            }else{
                 var sTop=$(window).scrollTop()/1.3; 
                 $(window).scrollTop(sTop); 
            }
            

        },15);
    })

</script>
</body>
</html>


<script>
    $('.main-title').children().on('click', function () {
        $(this).addClass('cur').siblings().removeClass('cur');
        $('.main-content').children().eq($(this).index()).addClass('b-n').removeClass('n-b').siblings().addClass('n-b').removeClass('b-n')
    })
</script>
<style>
    .b-n {
        display: block;
    } 
    .n-b {
        display: none;
    }

    a {
        text-decoration: none;
    }

    .book-detail {
        background: #ffffff;
        width: 80%;
        margin: 20px auto;

    }

    .book-detail .book_info {
        border-top: 1px solid #cccccc;
        box-shadow: 5px 5px 20px -2px;
        width: 100%;
        margin: auto;
        padding: 10px;
        height: 270px;
    }

    .book-detail .book_info .b_pic {

        padding-bottom: 5px;
        float: left;
        width: 180px;
        height: 240px;
        overflow: hidden;
        background: #000;
    }

    .book-detail .book_info .b_pic img {
        cursor: pointer;
        width: 180px;
        height: 240px;
    }

    .book-detail .book_info .b_name {
        padding: 0px 15px;
        float: left;
    }

    .book-detail .book_info span {
        padding: 10px 15px;
        float: left;
        width: 30%;
        font-size: 15px;
    }

    .book-detail .book_info .b_wri a {
        color: #8c8c8c;
    }

    .book-detail .book_info .b_wri {
       padding: 7px 10px 51px 10px;
        width: 50%;
        float: left;
    }

    .b_btn {
        cursor: pointer;
        border: 1px solid #cccccc;
        text-align: center;
        color: #f0f0f0;
        width: 100px;
        margin-right: 20px;
        margin-left: 10px;
    }

    .end_line {
        float: left;
        width: 100%;
        height: 1px;
        background: #cccccc;
        box-shadow: 0px 4px 15px 0px;
        margin-bottom: 10px;
    }

    .cur {
        color: #d81e06;
        border-bottom: 2px solid #d81e06;
    }

    .main-title {
        margin-top: 10px;
        padding:0 10px;
        width: 100%;
        float: left;
        border-bottom: 1px solid #cccccc;
        margin-bottom: 10px;
    }

    .main-title .title {
        text-align: center;
        float: left;
        padding: 15px;
        display: block;
        font-weight: 700;
        letter-spacing: 2px;
        overflow: hidden;
        cursor: pointer;
    }

    .detail-main{
        height: 800px;
    }
    .detail-main .main-content {
        width: 70%;
        float: left;
        position: relative;

    }

    .detail-main .main-content .info-content,
    .detail-main .main-content .relation-content {

        position: absolute;
        top: 0;
        width: 90%;
        left: 20px;
    }

    .text {
        font: 14px/28px PingFangSC-Regular, '-apple-system', Simsun;
        overflow: hidden;
        word-wrap: break-word;
        word-break: break-all;
        text-align: justify;
    }

    .guess-like {
        margin-bottom: 10px;
        width: 100%;
        height: 400px;
        border: 1px solid #cccccc;
        float: right;
    }
    .book_info{
        position: relative;
    }
    .g-title { 
        position: relative;
        width: 100%;
        text-align: center;

    }

    .g-title span {
        text-align: center;
        display: inline-flex;
        padding: 10px 30px;
        font-weight: 500;
        font-size: 14px;    
    }

    .relate-book {
        position: relative;
        overflow: hidden;
        width: 100%;
        height: 290px;
        border: 1px solid #cccccc;
        float: right;
    }

    .b-right {
        width: 20%;
        float: right;
    }

    .g-pic {
        margin: auto;
        width: 180px;
        height: 240px;
        overflow: hidden;
    }
   
    .mesg {
        margin:1px auto;
        text-align: center;
        width: 100%;
        display: inline-block;
        font-size: 16px;    
    }
   
    .g-wri {
        padding: 1px;
        color: #8a8a8a;
        font-size: 14px;

    }
    .g-short{
        font: 14px/28px PingFangSC-Regular, '-apple-system', Simsun;
        overflow: hidden;
        word-wrap: break-word;
        word-break: break-all;
        text-align: justify;
        font-size: 12px;
        line-height: 16px;
        width: 180px;
        display: inherit;
    }
    .change-icon{
        position: absolute;
        right:15px;
        top:10px;

    }
    .adv-pic{
        height: 80%;
        overflow: hidden;
        width: 90%;
        margin: auto;
    }
    .adv-pic img{
        cursor: pointer;
        margin: auto;
        width: 100%;
    }
    .more-icon img{

        cursor: pointer;
    }
    .more-icon{

        position: absolute;
        text-align: center;
        margin: auto;
        width: 100%;
        top:267px;
    }
    .share-box{
        position: absolute;
        right:10px;
    }
</style>