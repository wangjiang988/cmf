var helper = new common();
var fontSizeStr = { "16": "大", "14": "中", "12": "小" };
function chgfont(name, size) {
    helper.SetCookie("fontSize", size);
    helper.SetCookie("name", name);
    $("#" + name).css("fontSize", size + 'px');
    $("#" + name).find(".wz_jj").css("fontSize", size + 'px');
    $("#" + name).find(".wz_text p").css("fontSize", size + 'px');
    //ChangeBtnColor(size);
}
function ChangeBtnColor(fontSize) {
    $(".wz_text .fontsize a").each(function (i, a) {
        if ($(a).html() == fontSizeStr[fontSize.toString()]) {
            $(a).addClass("big");
        }
        else {
            $(a).removeClass("big");
        }
    });
}
$(function () {
    var fontSize = helper.GetCookie("fontSize");
    var name = helper.GetCookie("name");
    if (fontSize != null && fontSize != "" && name != null && name != "") {
        $("#" + name).css("fontSize", fontSize + 'px');
        //ChangeBtnColor(fontSize);
    }
});