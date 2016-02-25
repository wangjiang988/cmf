//日期格式化函数
Date.prototype.format = function (format) {
    var o =
    {
        "M+": this.getMonth() + 1, //month
        "d+": this.getDate(),    //day
        "H+": this.getHours(),   //hour
        "m+": this.getMinutes(), //minute
        "s+": this.getSeconds(), //second
        "q+": Math.floor((this.getMonth() + 3) / 3),  //quarter
        "S": this.getMilliseconds() //millisecond
    }
    if (/(y+)/.test(format))
        format = format.replace(RegExp.$1, (this.getFullYear() + "").substr(4 - RegExp.$1.length));
    for (var k in o)
        if (new RegExp("(" + k + ")").test(format))
            format = format.replace(RegExp.$1, RegExp.$1.length == 1 ? o[k] : ("00" + o[k]).substr(("" + o[k]).length));
    return format;
}

var common = function () { };

//获取URL参数
common.prototype.GetQueryString = function (name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    var r = window.location.search.substr(1).match(reg);
    if (r != null)
        return unescape(r[2]);
    return null;
};

//小数不足几位补齐
common.prototype.toFloat = function (str, num) {
    num = num || 2;
    if (str) {
        var a = parseFloat(str);
        return a.toFixed(num);
    }
}

//2013-08-28T14:47:36+08:00 转换为正常的Data对象
common.prototype.StrToData = function (str) {
    var shortData = str.split("T")[0];
    var shortTime = str.split("T")[1].split("+")[0];
    return new Date(shortData.split("-")[0], Number(shortData.split("-")[1]) - 1, shortData.split("-")[2], shortTime.split(":")[0], shortTime.split(":")[1], shortTime.split(":")[2]);
}

//截断字符串
common.prototype.CutStr = function (length, strInput) {
    var reg = /[\u4E00-\u9FA5\uF900-\uFA2D]/i;
    if (!reg.test(strInput)) {
        if (strInput.length < length)
            return strInput;
        else
            return strInput.substr(0, length);
    }
    else {
        var repReg = /[\u4E00-\u9FA5\uF900-\uFA2D]/i;
        var checkstr = strInput.replace(repReg, "**");
        if (checkstr.length < length)
            return strInput;
        else {
            var strOut = "";
            var strLength = 0;
            for (var i = 0; i < strInput.length; i++) {
                if (strLength >= length)
                    break;
                strOut += strInput.substr(i, 1);
                if (!reg.test(strInput))
                    strLength += 1;
                else
                    strLength += 2;
            }
            return strOut;
        }
    }
}

//写cookies
common.prototype.SetCookie = function (name, value) {
    var Days = 30;
    var exp = new Date();
    exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000);
    document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
}

//读取cookies
common.prototype.GetCookie = function (name) {
    var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");

    if (arr = document.cookie.match(reg))

        return (arr[2]);
    else
        return null;
}

//月份不足2位补齐
common.prototype.monthFormat = function (month) {
    if (!isNaN(month)) {
        if (month < 10) {
            return "0" + month;
        }
        else {
            return month;
        }
    }
} 


