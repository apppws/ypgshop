/* SVN.committedRevision=1559019 */
var deadLine = 60; var commonSymbol = "[\\,\\`\\~\\!\\@\\#\\$\\%\\\\^\\&\\*\\(\\)\\-\\_\\=\\+\\[\\{\\]\\}\\\\|\\;\\:\\‘\\’\\“\\”\\<\\>\\/?]+"; function changePassStrong() {
    var b = jQuery("#verifyMobile"); if (check_pwd1() == 0) { jQuery("#verifyMobileAgain").removeAttr("readonly") } else { jQuery("#verifyMobileAgain").attr("readonly", "readonly") } if (b.val().length == 0) { jQuery("#pswdLevel").hide(); hideOtherTips("password"); return } else { jQuery("#password_tip").hide(); jQuery("#password_error").hide() } var a = getPassPoint(b); jQuery("#pswdLevel").attr("class", "").addClass("pswdLevelA").attr("style", "display:block"); if (a >= 80) { jQuery("#pswdLevel").attr("class", "").addClass("pswdLevelC").attr("style", "display:block"); return } if (a >= 50) {
        jQuery("#pswdLevel").attr("class", "").addClass("pswdLevelB").attr("style", "display:block");
        return
    }
} function showoff(a) { jQuery("#" + a + "").hide() } function checkPassWordContent() { jQuery("#verifyMobile").removeClass("iptRedBodr"); var a = jQuery("#verifyMobile").val(); if (a.length > 0) { changePassStrong() } else { hideOtherTips("password") } } function hideOtherTips(a) { jQuery("#password_tip2").hide(); jQuery("#password_tip").hide(); jQuery("#" + a + "_error").hide(); jQuery("#" + a + "_tip").show() } function showBorder(a) { jQuery("#" + a + "").removeClass("iptRedBodr"); jQuery("#" + a + "").addClass("iptBodr") } function isSameWord(d) { var b; if (d != null && d != "") { b = d.charAt(0) } var a = "[" + b + "]{" + d.length + "}"; var c = new RegExp(a); return c.test(d) } function getPassPoint() {
    var b = jQuery("#password").val(); var a = checkPassLength(b); a = a + checkPassSymbol(b); a = a + checkPassNumAndWord(b); a = a + (checkPassAll(b)); a = a + checkPassAlpha(b); a = a + checkPassNum(b);
    return a
} function check_pwd1() { var b = $("#verifyMobile").val(); if (b == "") { return 1 } if (b.length > 20) { return 2 } if (b.length < 6) { return 3 } var e = /\s+/; if (e.test(b)) { return 4 } var g = /^[0-9]+$/; if (g.test(b)) { return 7 } var c = /^[A-Za-z]+$/; if (c.test(b)) { return 8 } var d = "d*" + commonSymbol + ""; var a = "\\\d+[A-Za-z]|[A-Za-z]+[0-9]+|[A-Za-z]+" + commonSymbol + "[0-9]+|[A-Za-z]+[0-9]+" + commonSymbol + "|" + d + ""; var f = new RegExp(a); if (!f.test(b)) { return 5 } if (isSameWord(b)) { return 6 } return 0 } function getValidationCodeCheck() {
    var b = jQuery("#getCodeBottom").attr("class"); if (b.indexOf("disable") != -1) { return } jQuery("#errorInfoId").html(""); var a = "/member/bind/needBind.do?callback=?"; jQuery.getJSON(a, function (c) {
        if (c.result == "notLogin") { yhdLogin(); return false } if (c && c.result) {
            if (c.result == "alreadyvalidate") {
                getValidationCodeDoing();
                deadLine = 60; jQuery("#getCodeBottom").addClass("disable"); timeToDeadLine()
            } else { if (c.result == "needvalidate") { YHD.alert("修改密码前必须先绑定手机"); jQuery("#pop_win_ok_btn").click(function () { window.location.href = "/member/bind/bind.do" }); return } } return
        } else { YHD.alert("修改密码前必须先绑定手机"); jQuery("#pop_win_ok_btn").click(function () { window.location.href = "/member/bind/bind.do" }); return }
    })
} function timeToDeadLine() { if (jQuery("#timeToDeadLine").length >= 1) { if (deadLine != 0) { jQuery("#timeToDeadLine").html("(" + deadLine + "秒后)重新获取短信"); deadLine--; setTimeout("timeToDeadLine()", 1000) } else { jQuery("#timeToDeadLine").html(""); jQuery("#getCodeBottom").removeClass("disable") } } } function getValidationCodeDoing() {
    var a = "/member/userinfo/getValidationCode.do?callback=?"; jQuery.getJSON(a, function (b) {
        if (b && b.result) {
            if (b.result == 1) {
                YHD.alert("短信已经成功发送");
                return
            } else { if (b.result == 0) { YHD.alert("请先绑定手机"); jQuery("#pop_win_ok_btn").click(function () { window.location.href = "/member/bind/bind.do" }); return } else { if (b.result == 2) { YHD.alert("当天发送短信次数超过三次，请24小时后再试"); return } else { if (b.result == 3) { YHD.alert("您点击的太频繁，请1分钟后再试"); return } else { if (b.result == 4) { YHD.alert("系统繁忙，请稍后再试"); return } else { YHD.alert("系统繁忙，请稍后再试"); return } } } } }
        }
    })
} function checkCodeNext() {
    var b = jQuery("#verifyCode").val(); var a = "/member/userinfo/checkVailidationCode.do?verifyCode=" + b + "&callback=?"; jQuery.getJSON(a, function (c) {
        if (c && c.result) {
            if (c.result == 1) { window.location = "/member/userinfo/toChangePasswordPage.do"; return } else {
                if (c.result == 0) { YHD.alert("请先绑定手机"); jQuery("#pop_win_ok_btn").click(function () { window.location.href = "/member/bind/bind.do" }); return } else {
                    if (c.result == 2) {
                        jQuery("#errorInfoId").html("验证码已经过期，请重新获取")
                    } else { if (c.result == 3) { jQuery("#errorInfoId").html("验证码不正确") } else { if (c.result == 4) { jQuery("#errorInfoId").html("验证码错误，请重新获取") } else { if (c.result == 9) { jQuery("#errorInfoId").html("系统异常，请稍后再试") } else { jQuery("#errorInfoId").html("系统繁忙，请稍后再试") } } } }
                }
            }
        }
    })
} function showPassError(a) { jQuery("#verifyMobile").addClass("iptRedBodr"); jQuery("#password_tip").hide(); jQuery("#pswdLevel").hide(); jQuery("#password_error").html("" + a + "").show() } function checkPasswordOnBlur() {
    var a = check_pwd1(); if (a == 1) { showPassError("密码不能为空"); jQuery("#verifyMobileAgain").attr("readonly", "readonly") } else {
        if (a == 2) { showPassError("密码为6-20位字符"); jQuery("#verifyMobileAgain").attr("readonly", "readonly") } else {
            if (a == 3) { showPassError("密码为6-20位字符"); jQuery("#verifyMobileAgain").attr("readonly", "readonly") } else {
                if (a == 4) {
                    showPassError("密码中不允许有空格");
                    jQuery("#verifyMobileAgain").attr("readonly", "readonly")
                } else { if (a == 7) { showPassError("密码不能全为数字"); jQuery("#verifyMobileAgain").attr("readonly", "readonly") } else { if (a == 8) { showPassError("密码不能全为字母"); jQuery("#verifyMobileAgain").attr("readonly", "readonly") } else { if (a == 6) { showPassError("密码不能为相同字符"); jQuery("#verifyMobileAgain").attr("readonly", "readonly") } else { if (a == 5) { showPassError("请输入正确格式的密码"); jQuery("#verifyMobileAgain").attr("readonly", "readonly") } else { jQuery("#pswdLevel").hide(); $("#password_desc").addClass("rightinfo").show(); $("#password_desc").text(""); hideOtherTips("none"); jQuery("#verifyMobile").removeClass("iptRedBodr"); jQuery("#verifyMobileAgain").removeAttr("readonly"); return true } } } } }
            }
        }
    }
} function changepw() {
    var b = jQuery("#verifyMobile").val(); var c = jQuery("#verifyMobileAgain").val(); if (checkPasswordOnBlur() != true) {
        return false
    } if (checkPassword2OnBlur() != true) { return false } var a = "/member/userinfo/updatepw.do"; var d = { newPass: b.toString(), passAgain: c.toString() }; jQuery.ajax({ type: "post", url: a, data: d, success: function (e) { if (e && e.result) { if (e.result == 1) { YHD.alert("修改密码成功"); jQuery("#pop_win_ok_btn").click(function () { window.location.href = "/member/my.do" }); return } else { if (e.result == 2) { jQuery("#errorInfo1").html("6-20位字符，由大小写英文、数字及“_”、“-”组成"); return } else { if (e.result == 2) { window.location.href = "/member/userinfo/changepw.do" } else { YHD.alert("系统繁忙，请稍后再试") } } } } } })
} function call_back(a) {
    if (a == 1) { YHD.alert("修改密码成功"); jQuery("#pop_win_ok_btn").click(function () { window.location.href = "/member/my.do?" }); return } else {
        if (a == 2) { YHD.alert("密码格式不正确"); window.location.href = "/member/userinfo/changepw.do"; return } else {
            YHD.alert("系统繁忙，请稍后再试"); window.location.href = "/member/userinfo/changepw.do";
            return
        }
    }
} function showPass2Error(a) { jQuery("#password2_tip").hide(); jQuery("#password2_error").html("" + a + "").show(); jQuery("#verifyMobileAgain").addClass("iptRedBodr") } function check_pwd2() { var a = $("#verifyMobile").val(); var b = $("#verifyMobileAgain").val(); if (b == "") { return 1 } if (a != b) { return 2 } return 0 } function checkPassword2OnBlur() { var a = check_pwd2(); if (a == 1) { showPass2Error("确认密码不能为空 ") } else { if (a == 2) { showPass2Error("密码不一致") } else { hideOtherTips("none"); jQuery("#password2_tip").hide(); $("#password2_desc").addClass("rightinfo").show(); return true } } } function checkVerifyMobile() {
    var a = jQuery("#verifyMobile").val(); jQuery("#errorInfo2").html(""); if (jQuery.trim(a) == "" || !validatePw(a)) { jQuery("#errorInfo1").html("6-20位字符，由大小写英文、数字及“_”、“-”组成") } else { jQuery("#errorInfo1").html("") } var b = validatePwLevel(a);
    if (b == 1) { jQuery("#color1").attr("class", "password_red"); jQuery("#color2").attr("class", "password_grey"); jQuery("#color3").attr("class", "password_grey") } else { if (b == 2) { jQuery("#color1").attr("class", "password_grey"); jQuery("#color2").attr("class", "password_yellow"); jQuery("#color3").attr("class", "password_grey") } else { if (b >= 3) { jQuery("#color1").attr("class", "password_grey"); jQuery("#color2").attr("class", "password_grey"); jQuery("#color3").attr("class", "password_green") } else { jQuery("#color1").attr("class", "password_grey"); jQuery("#color2").attr("class", "password_grey"); jQuery("#color3").attr("class", "password_grey") } } }
} function checkVerifyMobileAgain() {
    var a = jQuery("#verifyMobile").val(); var b = jQuery("#verifyMobileAgain").val(); if (jQuery.trim(b) == "" || jQuery.trim(a) != jQuery.trim(b)) {
        jQuery("#errorInfo2").html("2次密码不一致");
        return
    } else { jQuery("#errorInfo2").html("") }
} function validatePwLevel(e) { var f = 0; var d = /\d/; if (d.exec(e)) { f = f + 1 } var c = /[a-z]/; if (c.exec(e)) { f = f + 1 } var b = /[A-Z]/; if (b.exec(e)) { f = f + 1 } var a = /[\-,_]/; if (a.exec(e)) { f = f + 1 } return f } function checkPassLength(a) { if (a.length > 6 && a.length < 8) { return 10 } if (a.length >= 9) { return 25 } return 0 } function checkPassSymbol(a) { if (getSymbolPattern(2).test(a)) { return 25 } else { if (getSymbolPattern(1).test(a)) { return 10 } } return 0 } function getSymbolPattern(c) { var a = "" + commonSymbol.substr(0, commonSymbol.length - 1) + "{" + c + ",}"; var b = new RegExp(a); return b } var patternNumAlpha = /^(?=.*\d.*)(?=.*[a-zA-Z].*)./; function checkPassNumAndWord(a) { if (patternNumAlpha.test(a)) { return 5 } return 0 } function isDigit(b) { var a = /(?=.*[0-9])/; return getCompareResult(a, b) } function isBigWord(b) {
    var a = /(?=.*[A-Z])/;
    return getCompareResult(a, b)
} function isSymbol(c) { var b = "(?=.*" + commonSymbol.substr(0, commonSymbol.length - 1) + ")"; var a = new RegExp(b); return getCompareResult(a, c) } function isSmallWord(b) { var a = /(?=.*[a-z])/; return getCompareResult(a, b) } function getCompareResult(a, b) { if (a.test(b)) { return true } return false } function checkPassAll(a) { if (isDigit(a) && isBigWord(a) && isSmallWord(a) && isSymbol(a)) { return 5 } if (patternNumAlpha.test(a)) { if (isSymbol(a)) { return 3 } else { return 2 } } return 0 } function checkPassAlpha(b) { var e = 0; var f = 0; var g = 0; var d = b.length; var c = /^[a-z]+$|^[A-Z]+$/; if (c.test(b)) { return 10 } var a = /.*?[A-Z]+?.*?[a-z]+?.*?|.*?[a-z]+?.*[A-Z]+?.*?/; if (a.test(b)) { return 25 } return 0 } function checkPassNum(a) { if (getNumPattern(3).test(a)) { return 20 } if (getNumPattern(1).test(a)) { return 10 } return 0 } function getNumPattern(c) {
    var a = "[0-9]{" + c + ",}";
    var b = new RegExp(a); return b
} function validatePw(b) { var a = /^[a-z,A-Z,0-9,\-,_]{6,20}$/; if (a.exec(b)) { return true } else { return false } } function getPassPoint() { var b = jQuery("#verifyMobile").val(); var a = checkPassLength(b); a = a + checkPassSymbol(b); a = a + checkPassNumAndWord(b); a = a + (checkPassAll(b)); a = a + checkPassAlpha(b); a = a + checkPassNum(b); return a } jQuery(document).ready(function () { _loadMyYihaodianLeftMenu.loadLeftDiv() }); function yhdLogin() { yhdPublicLogin.showLoginDivNone(URLPrefix.passport, false, false, function () { location.reload() }) };
