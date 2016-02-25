// JavaScript Document

 /**显示二级菜单**/
$(function(){
	$('#nav li').mouseenter(function() {
//		alert($(this).attr("id"));
		$(".be_active").hide();
		$(this).find('.two_menu').show();
		
	});
	$('#nav li').mouseleave(function() {
		$(this).find('.two_menu').hide();
		$(".be_active").show();
	});
});

function wj_change_menu_css(path){
//	console.log(path.path);
	for (i = 0 ; i<= path.path.length-1;i++) {
//		 console.log(path.path.length);
		$('#menu-item-'+path.path[i]).children('p').children('a').addClass('active');
		show_menu = $('#menu-item-'+path.path[i]).closest('.two_menu');
//		console.log(show_menu);
		$('#menu-item-'+path.path[i]).closest('.two_menu').addClass('be_active');
		show_menu.show();
		
	}
}

//首页 
$(function () {
    (function ($) {
        $.fn.fadeAnimate = function (options) {
            options = $.extend({
                liDomList: $(this).find('li'),
                liDomListLen: $(this).find('li').length,
                disableAutoEle: $('#account-box'),
                curIndex: 0,
                nextIndex: 1,
                curDom: undefined,
                nextDom: undefined,
                curLeft: 0,
                minLeft: -1730,
                fadeLock: false,
                fadeTime: 3000,
                imgWidth: 1730,
                controller: $('#top-main .controller'),
                controllerList: $('#top-main .controller li'),
                timer: undefined,
                accSpeed: 4,
                Cx: 0.02, //阻力系数
                minRes: 1, //最小阻力
                curSpeed: 0
            }, options);

            //移动到
            function changeTo(index) {
                if (true == options.fadeLock) { return; }
                window.clearTimeout(options.timer);
                options.nextIndex = index;
                options.fadeLock = true;

                //初始化
                options.curDom = options.liDomList.eq(options.curIndex);
                options.nextDom = options.liDomList.eq(options.nextIndex);
                options.nextDom.css('opacity', 0);
                options.curLeft = 0;
                options.curSpeed = 0;
                options.nextDom.css('left', options.curLeft + options.imgWidth);
                controlChange(options.nextIndex);

                move();
            }

            //动画
            function move() {
                var nextLeft = getNextLeft();
                var opacity = Math.abs(nextLeft / options.imgWidth);
                var opacityPer = parseInt(opacity * 100);
                options.curDom.css({ 'left': nextLeft, 'opacity': 1 - opacity, 'filter': 'alpha(opacity=' + (100 - opacityPer) + ')' });

                options.nextDom.css({ 'left': nextLeft + options.imgWidth, 'opacity': opacity, 'filter': 'alpha(opacity=' + opacityPer + ')' });
                if (nextLeft <= options.minLeft) {
                    options.curIndex = options.nextIndex;
                    options.fadeLock = false;
                    autoFade();
                } else {
                    window.setTimeout(move, 20);
                }
            }

            //获取下次速度
            function getNextSpeed() {
                var incSpeed = options.accSpeed - options.minRes - options.curSpeed * options.Cx;
                return options.curSpeed += incSpeed;
            }

            //获取下次便宜left
            function getNextLeft() {
                var nextSpeed = getNextSpeed();
                options.curLeft = options.curLeft - nextSpeed < options.minLeft ? options.minLeft : options.curLeft - nextSpeed;
                return options.curLeft;
            }

            //获取下个索引
            function changeNext() {
                var nextIndex = options.curIndex + 1 >= options.liDomListLen ? 0 : options.curIndex + 1;
                changeTo(nextIndex);
            }

            //轮播图按钮点击效果
            options.controller.delegate('li', 'click', function (e) {
                var index = $(e.currentTarget).index();
                changeTo(index);
            });


            //手动控制
            function controlChange(index) {
                options.controllerList.eq(index).addClass('current').animate({ width: '44px' }, 500);
                options.controllerList.eq(index).siblings('.current').removeClass('current').animate({ width: '8px' });

            }

            //自动轮播
            function autoFade() {
                window.clearTimeout(options.timer);
                options.timer = window.setTimeout(changeNext, options.fadeTime);
            }

            autoFade();

            /*
            options.disableAutoEle.focusin(function(){
                window.clearTimeout(options.timer);	
            }).focusout(function(){
                autoFade();
            })
            */

            $(this).mouseenter(function () {
                window.clearTimeout(options.timer);
            }).mouseleave(function () {
                autoFade();
            });

            return $(this);
        }
    })(jQuery);

    $('#top-main .left-banner').fadeAnimate({});
})
$(function () {
    upLoad();
});
function upLoad() {
    $('.vip_list li').hover(function () {
        $('.box', this).stop().animate({
            bottom: '0'
        });
    }, function () {
        $('.box', this).stop().animate({
            bottom: '-270px'
        });
    });
    $('vip_list li').eq(4).css()
}


//window.onload = function (){
//	var oBox = document.getElementById("box");
//	var oLi = oBox.getElementsByTagName("li");
//	for(var i=0; i<oLi.length; i++){
//		if(i%5==0){
//			oLi[i].style.marginLeft="0";
//			};
//		};
//	}

/**发展历程**/
$(document).ready(function () { $(window).scroll(function () { var top = $(document).scrollTop(); var menu = $("#menu"); var items = $("#content").find(".item"); var curId = ""; items.each(function () { var m = $(this); var itemsTop = m.offset().top; if (top > itemsTop - 100) { curId = "#" + m.attr("id"); } else { return false; } }); var curLink = menu.find(".cur"); if (curId && curLink.attr("href") != curId) { curLink.removeClass("cur"); menu.find("[href=" + curId + "]").addClass("cur"); } }); });

/**回到顶部**/
$(document).ready(function () {
    $("#back-to-top").hide();

    $(function () {
        $(window).scroll(function () {
            if ($(window).scrollTop() > 100) {
                $("#back-to-top").fadeIn(1500);
            } else {
                $("#back-to-top").fadeOut(1500);
            }
        });
        //当点击跳转链接后，回到页面顶部位置
        $("#back-to-top").click(function () {
            $('body,html').animate({
                scrollTop: 0
            },
            1000);
            return false;
        });

    });

});

 $(function () {
     $(".dis_ve a").click(function () {
         $("#show_video").attr("src", "");
         $(".dis_ve").hide();
     });
     $(".sp_yy").click(function () {

         $(".dis_ve").show();
         var vd = $(this).children().attr("video");
         $("#show_video").attr("src", vd);

     });
     $(".sp_yyy").click(function () {

         $(".dis_ve").show();
         var vd = $(this).attr("video");
         $("#show_video").attr("src", vd);

     });
 })
	
/**首页导航**/
$(function () {
    $("#slide").hide();
    var oHeight = $(".head").outerHeight();
    $(function () {
        $(window).scroll(function () {
            if ($(window).scrollTop() > oHeight) {
                $("#slide").show();
            } else {
                $("#slide").hide();
            }
        });
    })
});

/**实时快讯**/
 $(function () {
     var oHeight = $(".banner_hy").outerHeight();
     var oHit = $(".cont-tit").outerHeight();
     var oCurrent = oHeight + oHit;
     $(function () {
         $(window).scroll(function () {
             if ($(window).scrollTop() > oCurrent) {
                 $(".time_right").css("position", "fixed");
             } else {
                 $(".time_right").css("position", "absolute");
             }
         });
     })
     $(".er_two").mouseenter(function () {
         $(".dis_img").animate({ width: '116px', height: '117px' }, 500);
     });
     $(".wd_m").mouseleave(function () {
         $(".dis_img").stop(true, true).animate({ width: '0', height: '0' });
     });
 });


/**选项卡**/	 
 $(function () {
     $(".two_nav li").hide(), $(".two_nav li:eq(0)").show(), $(".nav li p").each(function (i) {
         $(this).mouseover(function () {
             $(".nav li p").removeClass(), $(this).addClass("current"), $(".two_nav li:visible").hide(), $(".two_nav li:eq(" + i + ")").show();
         });
     });
 });
 

 	 