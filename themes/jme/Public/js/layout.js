$(".head").mouseleave(function () {
    var menus = $(this).find(".two_menu");
    $(menus).each(function (i, item) {
        if ($(this).find("a.cur").length == 0) {
            $(this).hide();
            $(".two_menu a.cur").parent().show();
        }
    });
})
//显示一个级别菜单
$(".hid dl dd #nav li").mouseover(function () {
    var fd = $(this).index();
    if (fd != 0&&fd!=4&&fd!=8) {
        $(".two_menu").hide();
        $(".two_menu").eq(fd).show();
    }
    else {
        $(".two_menu").hide()
    }
})
//一级菜单显示
$("#nav li p a").removeClass();
$("#nav li:eq(" + act + ") p a").addClass("cur");
//二级菜单显示
$(".two_menu a").removeClass();
$(".two_menu a[href='" + window.location.pathname.replace(/\/[\d]+/g,"") + "']").addClass("cur").parent(".two_menu").show();
$(".cent a[href='" + window.location.pathname.replace(/\/[\d]+/g, "") + "']").addClass("cur");

