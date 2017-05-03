$(function () {
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
            key = 3;
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
})