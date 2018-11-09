<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="IE=Edge" http-equiv="X-UA-Compatible">
    <meta content="app-id=550780860" name="apple-itunes-app">
    <meta content="webkit" name="renderer">
    <meta content="YHD_HOMEPAGE.1" name="tp_page">
    <meta content="format=html5; url=http://m.yhd.com" name="mobile-agent">
    <meta content="no-transform" http-equiv="Cache-Control">
    <meta content="no-siteapp" http-equiv="Cache-Control">
    <title>网上超市1号店，省力省钱省时间</title>
    <meta content="网上超市，网上商城，网络购物，进口食品，美容护理，母婴玩具，厨房清洁用品，家用电器，手机数码，电脑软件办公用品，家居生活，服饰内衣，营养保健，钟表珠宝，饰品箱包，汽车生活，图书音像，礼品卡，药品，医疗器械，隐形眼镜等，1号店。"
        name="Keywords">
    <meta content="1号店网上超市，最经济实惠的网上购物商城，用鼠标逛超市，不用排队，方便实惠送上门，网上购物新生活。" name="Description">


    <link href="/becss/global_site_index_new.css" rel="stylesheet" type="text/css">
    <script src="/bejs/global_event_notify_js_error.js" type="text/javascript"></script>

    <script type="text/javascript">
        try {
            (function () {
                var b = window.HomePage || (window.HomePage = {}); var a = function (f) { var c = document.cookie; var d = c.split("; "); for (var g = 0; g < d.length; g++) { var e = d[g].split("="); if (e[0] == f) { return e[1] } } return null }; b.mobileJump = function () {
                    var d = (typeof indexMobileJumpFlag != "undefined" && indexMobileJumpFlag == "1") ? 1 : 0; var x = (typeof indexMobileJumpRegex != "undefined") ? indexMobileJumpRegex : "Android|iPod|iTouch|iPhone|iPad|BlackBerry|SymbianOS|SymbOS|Windows Phone OS|WAP|Kindle|pad|pod"; var c = (typeof indexDefaultMobileJumpURL != "undefined") ? indexDefaultMobileJumpURL : "http://m.yhd.com"; var r = (typeof indexDefaultMobileJumpTracker != "undefined") ? indexDefaultMobileJumpTracker : "10735511443"; var o = (typeof indexSpecialMobileJumpURL != "undefined") ? indexSpecialMobileJumpURL : {}; var A = (typeof indexSpecialMobileJumpRate != "undefined") ? indexSpecialMobileJumpRate : {};
                    var s = (typeof indexSpecialMobileJumpTracker != "undefined") ? indexSpecialMobileJumpTracker : {}; if (!d) { return } var y = window.navigator.userAgent; var p = new RegExp(x, "i"); if (!p.test(y)) { return } var v = window.localStorage; if (window.location.search != "" && window.location.search.indexOf("from=") > 0) { if (v) { var l = v.getItem("yhd_from_date"); if (!l) { v.setItem("yhd_from_date", new Date().getTime()) } else { v.removeItem("yhd_from_date"); v.setItem("yhd_from_date", new Date().getTime()) } } return } else { if (v) { var l = v.getItem("yhd_from_date"); if (l) { var m = new Date().getTime() - parseInt(l); if (m >= 0 && m < 24 * 3600 * 1000) { return } } } } var n = c; var w = r; var k = o; var f = A; var i = s; var u = "yhd.com"; var z = p.exec(y)[0].toLowerCase(); var h = k[z] || n; var q = f[z] || -1; var g = i[z] || w; if (q != -1) {
                        var e = a("abtest"); if (!e || isNaN(e) || parseInt(e) < 0 || parseInt(e) >= 100) {
                            e = Math.floor(Math.random() * 100);
                            var j = new Date(); j.setTime(new Date().getTime() + 30 * 24 * 60 * 60 * 1000); document.cookie = "abtest=" + e + ";path=/;domain=." + u + ";expires=" + j.toGMTString()
                        } if (e <= q) { window.location.href = h + "?tracker_u=" + g } else { return }
                    } else { window.location.href = h + "?tracker_u=" + g }
                }; b.hideProWin = function () {
                    var d = (typeof indexHideProWinFlag != "undefined" && indexHideProWinFlag == "1") ? 1 : 0; if (!d) { return } var i = location.href; if (i.indexOf("forceId=") > 0) {
                        var j = new RegExp("(\\?|&)forceId=([^&]*)(\\s|&|$)", "i"); if (j.test(i)) {
                            var f = RegExp.$1; var g = RegExp.$2; var e = RegExp.$3 || ""; if (f == "?") { i = i.replace(f + "forceId=" + g + e, "?") } else { i = i.replace(f + "forceId=" + g + e, e) } var h = i.length; if (i.charAt(h - 1) == "?" || i.charAt(h - 1) == "&") { i = i.substring(0, h - 1) } if (history.replaceState) { history.replaceState({}, "", i) } else {
                                var c = a("provinceId"); if (c) {
                                    location.replace(i)
                                }
                            }
                        }
                    }
                }; b.lunboAjaxReplaceAdv = function () {
                    var f = (typeof lunboAjaxReplaceAdvCodes != "undefined") ? lunboAjaxReplaceAdvCodes : ""; var c = (typeof lunboOrientationCodes != "undefined") ? lunboOrientationCodes : ""; var m = false; var d = false; function n(p) { var q = function () { var r = window.global || (window.global = {}); var s = r.vars = (r.vars || {}); r.vars.customInteractTime = r.vars.customInteractTime || new Date().getTime(); p.setAttribute("data-loaded", "1") }; if (document.addEventListener) { p.addEventListener("load", q) } else { if (document.attachEvent) { p.attachEvent("onload", q) } } } function l() {
                        var r = function (D) { var C = D.parentNode; if (C) { C.removeChild(D) } }; var y = document.getElementById("index_menu_carousel"); var w = document.getElementById("lunboNum"); if (y) {
                            if (y.getAttribute("data-adjust") == "1") { return } y.setAttribute("data-adjust", 1); var p = [];
                            var z = y.getElementsByTagName("li"); for (var B = 0; B < z.length; B++) { var x = z[B]; var v = x.getElementsByTagName("a").length > 0 ? x.getElementsByTagName("a")[0] : null; if (v) { if (v.getAttribute("data-nsf") == "1" && (v.getAttribute("data-ajax") == "1" || v.getAttribute("data-ajax") == "2") && v.getAttribute("data-done") != "1") { p.push(x) } } } if (p.length > 0) { for (var q = 0; q < p.length; q++) { var x = p[q]; r(x); var A = w.getElementsByTagName("li"); for (var s = 0; s < A.length; s++) { var u = A[s]; if (u.getAttribute("flag") == x.getAttribute("flag")) { r(u) } } } z = y.getElementsByTagName("li"); if (z.length > 0) { var t = z[0].getElementsByTagName("img").length > 0 ? z[0].getElementsByTagName("img")[0] : null; if (t && t.getAttribute("id") != "lunbo_1") { t.setAttribute("id", "lunbo_1") } } }
                        }
                    } function k(w, p, s, u) {
                        var v = w + "?callback=" + s; var q = []; for (var x in p) {
                            q.push("&" + x + "=" + encodeURIComponent(p[x]))
                        } v += q.join(""); window[s] = function (y) { u(y); if (t) { t.removeChild(r) } }; var t = document.getElementsByTagName("head")[0] || document.documentElement; var r = document.createElement("script"); r.src = v; t.insertBefore(r, t.firstChild)
                    } function e(q) { var p = setInterval(function () { var r = document.getElementById("index_menu_carousel"); if (r) { q(); clearInterval(p) } }, 100) } function o() { var r = a("provinceId"); var p = "http://p4p.yhd.com/advdolphin/external/saleTypeWeightAd"; if (f == "") { m = true; return } var q = { mcSiteId: 1, provinceId: r ? r : 1, codes: f, screenType: screen.width >= 1280 ? "1" : "2" }; k(p, q, "ajaxFindPromAdvHandler", function (s) { m = true; if (s && s.status == 1) { window.ajaxFindPromAdvData = s; if (d) { e(function () { h(); l(); g() }) } } else { if (d) { e(function () { l(); g() }) } } }) } function j() {
                        var t = a("provinceId"); var q = a("guid"); var r = a("yihaodian_uid"); var p = "http://gemini.yhd.com/libraService/exactNormalAdServe";
                        if (c == "") { d = true; return } var s = { mcSiteId: 1, provinceId: t ? t : 1, codes: c, guId: q, userId: r }; if (typeof (flagControlJs) == "undefined") { d = true; if (m) { l(); g() } return } k(p, s, "ajaxFindOrientationHandler", function (u) { d = true; if (u && u.status == 1) { window.ajaxFindOrientationAdvData = u; if (m) { e(function () { h(); l(); g() }) } } else { if (m) { e(function () { l(); g() }) } } })
                    } function h() {
                        var p = function (I, N) { var K = null; var H = I[N]; var J = H != null ? H : []; for (var M = 0; M < J.length; M++) { var L = J[M]; if (L && L.commonScreenImgUrl) { K = L; break } } return K }; var z = function (I, N) {
                            var K = null; if (!I) { return null } var H = I.sourceList; var J = H != null ? H : []; for (var M = 0; M < J.length; M++) {
                                var L = J[M]; if (L && L.advertiseRegionalCode == N) {
                                    K = L; K.regionId = L.advertiseRegionalId; K.adBgColor = L.reserved; K.text = L.displayTitle; K.landingPage = L.linkUrl; K.tc = L.tc; if (screen.width >= 1280) {
                                        K.commonScreenImgUrl = L.imageUrlWide
                                    } else { K.commonScreenImgUrl = L.imageUrl } break
                                }
                            } return K
                        }; var y = window.ajaxFindPromAdvData; var E = window.ajaxFindOrientationAdvData; var w = document.getElementById("index_menu_carousel"); if (w) {
                            var D = w.getElementsByTagName("li"); for (var C = 0; C < D.length; C++) {
                                var A = D[C].getElementsByTagName("a"); for (var r = 0; r < A.length; r++) {
                                    var x = A[r]; var u = x.getElementsByTagName("img")[0]; if (x && u) {
                                        var v = f.split(","); v = v.concat(c.split(",")); for (var t = 0; t < v.length; t++) {
                                            var F = null; if (y && y.status == 1) { F = p(y.value, v[t]) } if (!F && E && E.value) { F = z(E.value, v[t]) } if (F && F.regionId && F.regionId == x.getAttribute("data-advId")) {
                                                if (x.getAttribute("data-done") != "1") {
                                                    x.setAttribute("href", F.landingPage); x.setAttribute("title", F.text); x.setAttribute("data-ref", F.ref); x.setAttribute("data-done", "1"); if (F.adBgColor) {
                                                        D[C].setAttribute("data-bgcolor", F.adBgColor)
                                                    } var q = F.tc; var s = F.tc_ext; if (q) { x.setAttribute("data-tc", q + ".1"); if (s) { x.setAttribute("data-tce", s) } } u.setAttribute("alt", F.text); u.setAttribute("src", F.commonScreenImgUrl); u.setAttribute("data-done", "1"); u.removeAttribute("si"); u.removeAttribute("wi")
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        } var B = document.getElementById("promo_show"); if (B) { B.setAttribute("data-ajax-done", "1") }
                    } function i() { var v = document.getElementById("index_menu_carousel"); var p = screen.width >= 1280 ? "wi" : "si"; if (v) { var s = v.getElementsByTagName("li"); var q = s.length > 0 ? s[0].getElementsByTagName("a") : []; for (var t = 0; t < q.length; t++) { var u = q[t]; var r = u.getElementsByTagName("img")[0]; if (r.getAttribute(p)) { r.setAttribute("src", r.getAttribute(p)); r.removeAttribute("si"); r.removeAttribute("wi") } } } } function g() {
                        var w = document.getElementById("index_menu_carousel"); var x = document.getElementById("lunboNum");
                        var s = screen.width >= 1280 ? "wi" : "si"; if (w) {
                            if (w.getAttribute("data-inited") == "1") { return } w.setAttribute("data-inited", 1); var B = w.getElementsByTagName("li"); var A = x.getElementsByTagName("li"); var u = -1; var r = []; for (var y = 0; y < B.length; y++) { if (u >= 0) { break } var z = B[y].getElementsByTagName("a"); for (var C = 0; C < z.length; C++) { var t = z[C]; var p = t.getElementsByTagName("img")[0]; if (t && p) { if (t.getAttribute("data-tag") == "13") { u = y; break } if (t.getAttribute("data-ajax") == "" || t.getAttribute("data-ajax") == "0" || ((t.getAttribute("data-ajax") == "1" || t.getAttribute("data-ajax") == "2") && t.getAttribute("data-done") != "1")) { r.push(y) } } } } if (u < 0 && r.length > 0) { u = r[Math.floor(Math.random() * r.length)] } if (u >= 0) {
                                var v = B[u]; var t = v.getElementsByTagName("a")[0]; var p = t.getElementsByTagName("img")[0]; if (t && p) {
                                    if (u > 0) {
                                        B[0].style.display = "none"
                                    } v.style.display = ""; if (w.getAttribute("lunboBackgroudFlag") == "1") { v.style.backgroundColor = v.getAttribute("data-bgcolor") } if (p.getAttribute(s)) { p.setAttribute("src", p.getAttribute(s)); p.removeAttribute("si"); p.removeAttribute("wi"); n(p) }
                                } for (var D = 0; D < A.length; D++) { var q = A[D]; if (D == u) { q.className = "cur"; break } } w.setAttribute("data-init", u)
                            }
                        }
                    } if (f != "" || c != "") { o(); j(); setTimeout(function () { e(function () { l(); g() }) }, 1500) } else { e(function () { g() }) }
                }; b.mobileJump(); b.hideProWin(); b.lunboAjaxReplaceAdv()
            })();
        } catch (e) { }
    </script>
    <script type="text/javascript">
        (function () {
            try {
                document.getElementById("headerAllProvince").style.height = "300px"; (function () { var a = $(".headerNavWrap").find("a:contains('1号钱包')"); if (a) { var b = a.next(); if (b) { } } })(); if (window.top !== window.self) { window.top.location = window.location };
            } catch (err) { }
            try {
                window.g_selectionProvince = [];
            } catch (err) { }
        })();
    </script>
    <script type="text/javascript">
        var URLPrefix = { "shop": "http://shop.1mall.com", "busystock": "http://gps.yhd.com", "TipDate": "2012-09-29", "adExtTrackerUrl": "http://adlog.yhd.com/t.gif", "pms": "http://pms.yhd.com", "my_statics": "http://image.yihaodianimg.com/statics", "passportmall": "https://passport.1mall.com", "seoLinkMaxSize": "20", "mallImgDomain": ".yihaodianimg.com", "shoping_pms": "http://pms.yhd.com", "shoping_shop": "http://shop.1mall.com", "search": "list.html?", "sitedomain": ".yhd.com", "tryUrl": "http://try.yhd.com", "shoping_self": "http://www.yhd.com", "tracker": "tracker.yhd.com", "commentZoneMall": "http://e.1mall.com/front-pe", "productDetailHost": "http://www.yhd.com", "central": "http://www.yhd.com", "search_list": "list.html?", "yhmall": "http://mall.yihaodian.com", "footFriendLink": "http://www.yhd.com/friendlink/index.do", "centralShop": "http://shop.yhd.com", "shoping_passport": "https://passport.yhd.com", "shoping_my_statics": "http://image.yihaodianimg.com/statics", "yaowang": "http://www.111.com.cn", "uploadPostUrl": "http://upload.yihaodian.com/upload/UploadAction", "shoping_my": "http://my.yhd.com", "image": "http://image.yihaodian.com", "shoping_search": "http://www.yhd.com/ctg", "shoping_opposite": "http://www.1mall.com", "shoping_central": "http://www.yhd.com", "my": "http://my.yhd.com", "search_keyword": "http://search.yhd.com", "mymall": "http://my.1mall.com", "selfroot": "http://www.yhd.com", "yiwangauth": "http://mall.yiwang.cn", "products_stock": "http://gps.yhd.com/busystock", "sitedomainmall": ".1mall.com", "commentZoneYhd": "http://e.yhd.com/front-pe", "centralImgDomain": ".yihaodianimg.com", "productDetailUrl": "http://www.yhd.com", "passport": "https://passport.yhd.com", "statics": "http://image.yihaodianimg.com/front-homepage", "mobile": "http://m.yhd.com", "mall": "http://www.1mall.com" };
        var headerType = "base";
        var favorite = "1号店，只为更好的生活";
        var hostUrl = "www.yhd.com";
        var httpUrl = "http://www.yhd.com";
        var no3wUrl = "yhd.com";
        var simpleUrl = "yhd";
        var chineseUrl = "1号店";
        var imagePath = "images";
        var currSiteId = 1;
        var currBsSiteId = 1;
        var currSiteType = 1;
        var merchant = 1;
        var isIndex = 1;
        var indexFlag = 1;
        var currVersionNum = 1560110;
        var projectVersionNum = "1.0";
        var currDomain = "http://www.yhd.com";
        var oppositeDomain = "http://www.yhd.com";
        var lazyLoadImageObjArry = lazyLoadImageObjArry || [];
        var multiSearch = "true";
        var currProvinceId = 6;
        var isFixTopNav = true;
        var youFavorateICO = "{1:'http://d7.yihaodianimg.com/N00/M08/41/1F/CgMBmVFZJWSAZFOYAAAFPb8gIj869000.jpg'}";
        var limitBuyCallFlag = 0;
        var globalShowMarketPrice = "0";
        var globalSearchSelectFlag = "1";
        var globalBaifendianFlag = "0";
        var globalSearchHotkeywordsFlag = "1";
        var globalTopPrismFlag = "1";
        var _globalSpmDataModelJson = { "SPM_COM": { "ADD_CART": 1, "ADD_FAV": 2, "DELETE": 6, "TURN_PAGE": 8, "SETTLEMENT": 7 }, "YHD_HOMEPAGE": "1", "SPM_DATA_TYPE": { "ADVANCED_TAG": 33, "MINGPIN_CAT": 32, "COMMENT_TAG": 28, "SEARCH_SCENE_AD": 36, "KEYWORD": 25, "BASICS_TAG": 34, "TRACKER_CODE": 16, "SMARTBOX_ATTR": 23, "CATEGORY": 9, "SEARCH_TURN_PAGE": 20, "LANDING": 6, "SEARCH_BRAND_SHOP": 35, "PROMOTION": 8, "MSG_TYPE": 31, "PRODUCT": 5, "SEARCH_FILTER": 21, "AD": 12, "SHOP": 26, "TUAN": 11, "SMARTBOX_KW": 22, "MINGPIN": 17, "PROVINCE": 14, "SEARCH_WORD": 15, "COUPON": 7, "BRAND": 10, "SEARCH_SORT": 19, "SMARTBOX_CATE": 24 }, "SPM_SYSTEM_TYPE": { "PMS": 4, "EDM": 30, "AD": 13, "CATEGORY": 29, "SEARCH": 3, "MANUAL": 2, "TRY": 27, "STORE": 18, "AUTO": 1 }, "SPM_AREA": { "YHD_HOME_FLOOR_MRHL": 31, "YHD_NHOME_INDEX2_FLOOR9": 802, "YHD_HOME_NEWGIFT": 536, "YHD_GLOBAl_PRISM": 22, "YHD_GLOBAl_HEADER_CATEGORY_0": 156, "YHD_GLOBAl_HEADER_RIGHT_AD": 18, "YHD_GLOBAl_HEADER_CATEGORY_1": 157, "YHD_GLOBAl_HEADER_CATEGORY_2": 158, "YHD_NHOME_INDEX2_FLOOR8": 801, "YHD_HOME_BAMBOO_PROMOT_MEITEHAO_TAB": 47, "YHD_GLOBAl_HEADER_CATEGORY_3": 159, "YHD_NHOME_INDEX2_FLOOR7": 800, "YHD_HOME_BAMBOO_PROMOT_B_LIMIT_BUY": 45, "YHD_HOME_BAMBOO_PROMOT_B_FAVORATE_PRODUCT": 43, "YHD_GLOBAl_HEADER_CATEGORY_4": 160, "YHD_GLOBAl_HEADER_CATEGORY_5": 161, "YHD_GLOBAl_HEADER_ORDER": 155, "YHD_GLOBAl_HEADER_CATEGORY_6": 162, "YHD_GLOBAl_HEADER_CATEGORY_7": 163, "YHD_GLOBAl_HEADER_CATEGORY_8": 164, "YHD_GLOBAl_HEADER_CATEGORY_9": 165, "YHD_INDEX_NOTICE": 1251, "YHD_HOME_FLOOR_JD": 35, "YHD_HOME_BAMBOO_PROMOT_FAVORATE_PRODUCT": 61, "YHD_HOME_FLOOR_LXBH": 30, "YHD_HOME_FLOOR_MPTM": 27, "YHD_HOME_BAMBOO_PROMOT_FAVORATE_PROMOT": 62, "YHD_GLOBAl_TOP_PROVINCE": 153, "YHD_GLOBAl_FOOTER_BROWSE_RELATED": 19, "YHD_NHOME_FOOD": 710, "YHD_GLOBAl_HEADER_CATEGORY": 15, "YHD_GLOBAl_FOOTER": 20, "YHD_GLOBAl_HEADER_LOGO": 11, "YHD_GLOBAl_TOP_UNLOGIN": 150, "YHD_HOME_LOUCENG_BANNER": 38, "YHD_HOME_CHUCHUANG": 708, "YHD_HOME_BAMBOO_PROMOT_TIERTHIRD_TAB": 52, "YHD_NHOME_LBSG": 711, "YHD_HOME_CHUCHUANG_BANNER": 2709, "YHD_GLOBAl_HEADER_CATEGORY_13": 169, "YHD_GLOBAl_HEADER_CATEGORY_12": 168, "YHD_GLOBAl_HEADER_CATEGORY_11": 167, "YHD_GLOBAl_HEADER_CATEGORY_10": 166, "YHD_GLOBAl_HEADER_MOBILE": 14, "YHD_HOME_BAMBOO_RIGHT_TUAN": 39, "YHD_HOMEPAGE_FLOORNAV": 1063, "YHD_GLOBAl_TOP_USER": 7, "YHD_GLOBAl_HEADER_CATEGORY_15": 595, "YHD_HOME_BAMBOO_SLIDER": 36, "YHD_GLOBAl_HEADER_CATEGORY_14": 170, "YHD-NHOME-XHLC": 714, "YHD_GLOBAl_HEADER_CART": 149, "YHD_NHOME_SHAN": 1089, "YHD_HOME_BAMBOO_PROMOT_TIERTHIRD_FAVORATE_PROMOT": 56, "YHD_HOME_BAMBOO_PROMOT_TIERTHIRD_NEW_PRODUCT": 55, "YHD_HOME_BAMBOO_PROMOT_B_TAB": 42, "YHD_GLOBAl_TOP_BANNER": 9, "YHD_HOME_BAMBOO_PROMOT_TIERTHIRD_LIMIT_BUY": 53, "YHD_GLOBAl_LEFT_CNY": 2655, "YHD_GLOBAl_HEADER_HOT_SEARCH": 13, "YHD_HOME_BAMBOO_PROMOT_MEITEHAO_0": 48, "YHD_HOME_BAMBOO_RIGHT_YHZX": 37, "YHD_GLOBAl_HEADER_SEARCH": 12, "YHD_HOME_BAMBOO_PROMOT_MEITEHAO_1": 49, "YHD_GLOBAl_TOP_MENU": 8, "YHD_HOME_BAMBOO_PROMOT_TIERTHIRD_FAVORATE_PRODUCT": 57, "YHD_HOME_BAMBOO_PROMOT_MEITEHAO_2": 50, "YHD_HOME_BAMBOO_PROMOT_MEITEHAO_3": 51, "YHD_HOME_BAMBOO_PROMOT_B_ZERO_AREA": 44, "YHD_HOME_NOTICE": 2641, "YHD_HOME_BAMBOO_RIGHT_NEWS": 41, "YHD_GLOBAl_HEADER_SEARCHSHOP": 2058, "YHD_NHOME_3C": 709, "INDEX2_SELECTION_ACTIVITY": 2646, "YHD_HOME_BAMBOO_RIGHT_HUAFEI": 40, "YHD_GLOBAl_TOP_MSG": 2549, "YHD_NHOME_TUAN": 713, "YHD_GLOBAl_HEADER_MINICART": 17, "YHD_NHOME_SXHG": 712, "YHD_HOME_FLOOR_CHTT": 28, "YHD_HOME_BAMBOO_PROMOT_TIERTHIRD_ZERO_AREA": 54, "YHD_HOME_FLOOR_JJSH": 32, "YHD_GLOBAl_TOP_MESSAGE": 152, "YHD_GLOBAl_HEADER_WELFARE": 154, "YHD_HOME_BAMBOO_PROMOT_LIMIT_BUY": 59, "YHD_HOME_FLOOR_MMBB": 33, "YHD_GLOBAl_HEADER_NAV": 16, "YHD_HOME_FLOOR_JKSP": 29, "YHD_GLOBAl_FOOTER_HELP": 21, "YHD_HOME_BAMBOO_PROMOT_ZERO_AREA": 60, "YHD_GLOBAl_TOP_LOGIN": 151, "YHD_GLOBAl_TOP_CURTAIN": 10, "YHD_HOME_BAMBOO_PROMOT_TAB": 58, "YHD_HOME_BAMBOO_PROMOT_B_FAVORATE_PROMOT": 46, "YHD_HOME_FLOOR_WHSH": 34 } };
        var globalShowProWin = 1;
        var indexJbpPopFlag = "0";
        var indexFreshmanPopFlag = "0";
        var globalTpCheckFlag = "1";
    </script>
    <link rel="stylesheet" type="text/css" href="/becss/global_yhdLib.css">
</head>

<body data-cdndetection="-1" data-param="{" globalPageCode":"YHD_HOME","currPageId":"1","tierthirdProvinceFlag":"0",
    "tryVisibleFlag" :"0"}" id="comParamId" class="w1200">
    <script type="text/javascript">
        var isWidescreen = screen.width >= 1280;
        if (isWidescreen) { document.getElementsByTagName("body")[0].className = "w1200"; }
        function recordCINTT() {
            var global = window["global"] || (window["global"] = {});
            var vars = global.vars = (global.vars || {});
            global.vars.customInteractTime = global.vars.customInteractTime || new Date().getTime();
        }
    </script>
    <div style="display:none;" id="yhd_pop_win" class="pop_win"></div>
    <div class="hd_header_wrap">
        <div id="global_top_bar" class="hd_global_top_bar">
            <div class="wrap clearfix">
                <div class="hd_topbar_left clearfix">
                    <div data-tpa="YHD_GLOBAl_TOP_UNLOGIN" id="global_unlogin" data-addclass="hd_unlogin_hover" class="hd_unlogin_wrap">
                        <div class="hd_login clearfix">
                            <span class="hd_hi">Hi,</span>
                            @if(session('username'))
                                {{ session('username') }}
                                <a rel="nofollow" data-ref="YHD_TOP_register" href="{{ route('logout') }}" class="blue_link">&nbsp;退出</a>
                            @else
                            请<a rel="nofollow" id="global_top_bar_loginLink" data-ref="YHD_TOP_login" href="{{ route('belogin') }}"
                            class="blue_link">&nbsp;登录&nbsp;</a>/
                            <a rel="nofollow" data-ref="YHD_TOP_register" href="{{ route('register') }}" class="blue_link">&nbsp;注册</a>
                            @endif
                        </div>
                        <div class="hd_user_center">
                            <div class="clearfix">
                                <div class="fl">
                                    {{-- <a data-ref="YHD_TOP_userpic_nonlogin" target="_blank" href="member_index.html"
                                        class="hd_avata_box"></a> --}}
                                </div>
                                <div class="hd_growth_box">
                                    <a data-ref="YHD_TOP_vip_nonlogin" target="_blank" href="http://vip.yhd.com" class="hd_vip_earn">会员专享价，V3免费购</a>
                                    <p class="hd_my_yhd"><a data-ref="YHD_TOP_myyihaodian_nonlogin" target="_blank"
                                            href="{{ route('bemember') }}">欢迎进入我的1号店</a></p>
                                </div>
                            </div>
                            <div class="hd_message">
                                <a data-ref="YHD_TOP_userjifen_nonlogin" target="_blank" href="http://jifen.yhd.com/pointshop/pointIndex.do">积分</a>
                                <a data-ref="YHD_TOP_userxunzhang_nonlogin" target="_blank" href="http://vip.yhd.com/badge-shop/index.html">勋章</a>
                            </div>
                        </div>
                        <em class="hd_login_arrow"></em>
                    </div>
                    <div data-tpa="YHD_GLOBAl_TOP_LOGIN" data-mpicon="{" imgUrl":"images/choujiang.gif", "imgLink" :"",
                        "tracker" :"", "altName" :""}" data-type="new" id="global_login" class="hd_login_wrap none">
                    </div>
                    <div data-tpa="YHD_GLOBAl_TOP_MSG" data-cfg="1" id="hdUserMsg" class="hd_notice_wrap none">
                        <a target="_blank" rel="nofollow" data-ref="YHD_TOP_MSG" href="http://edm.yhd.com/pcMsg/myMessage.action"
                            class="hd_notice_tit clearfix"><i></i>我的消息<span></span></a>
                        <div class="hd_notice"></div>
                    </div>
                    <div data-tpa="YHD_GLOBAl_TOP_PROVINCE" id="headerSelectProvince" class="hd_indxProvce fl">
                        <span>送货至</span><a href="javascript:showProvincesV2();" id="currProvince" class="hd_header_province_name">浙江</a>
                        <div data-hot="1:上海,2:北京,20:广东,18:湖北,12:四川,14:福建" id="headerAllProvince" class="hd_provincelist"
                            style="height: 300px;">
                        </div>
                    </div>
                </div>
                <div data-tpa="YHD_GLOBAl_TOP_MENU" class="hd_top_manu clearfix">
                    <ul class="clearfix">
                        <li data-tpc="1" id="glHdMyYhd" data-addclass="hd_menu_hover" class="hd_menu_tit hd_my_order">
                            <a rel="nofollow" href="member_index.html" data-ref="YHD_TOP_myyhd" target="_blank" class="hd_menu"><s></s>我的1号店</a>
                            <div class="hd_menu_list">
                                <ul>
                                    <li><a rel="nofollow" target="_blank" data-ref="YHD_TOP_order" href="member_order.html">我的订单</a></li>
                                    <li><a rel="nofollow" target="_blank" data-ref="YHD_TOP_points" href="member_points.html">我的积分</a></li>
                                    <li><a rel="nofollow" target="_blank" data-ref="YHD_TOP_coupon" href="http://coupon.yhd.com/myCoupon">我的抵用券</a></li>
                                    <li><a rel="nofollow" target="_blank" data-ref="YHD_TOP_mycollection" href="http://my.yhd.com/member/myCollection/myCollectionProduct.do">我的收藏夹</a></li>
                                    <li><a rel="nofollow" target="_blank" data-ref="YHD_TOP_comment" href="http://e.yhd.com/front-pe/pelist/view.do">我的评论</a></li>
                                    <li><a rel="nofollow" target="_blank" data-ref="YHD_TOP_vip" href="http://vip.yhd.com">会员专享</a></li>
                                </ul>
                            </div>
                        </li>
                        <li id="glShouCang" data-addclass="hd_menu_hover" class="hd_menu_tit">
                            <a class="hd_menu" href="javascript:void(0);">
                                <span style="vertical-align:middle;">&nbsp;&nbsp;&nbsp;&nbsp;收藏夹</span></a>
                            <div data-tpc="2" id="glShouCangChild" class="hd_menu_list">
                                <ul>
                                    <li><a rel="nofollow" target="_blank" data-ref="YHD_TOP_mycollection_product" href="http://my.yhd.com/member/myNewCollection/myFavorite.do?operType=0">商品收藏</a></li>
                                    <li><a rel="nofollow" target="_blank" data-ref="YHD_TOP_mycollection_shop" href="http://my.yhd.com/member/myNewCollection/myFavorite.do?operType=1">店铺收藏</a></li>
                                </ul>
                            </div>
                        </li>
                        <li id="glKeHuDuan" data-addclass="hd_menu_hover" class="hd_menu_tit">
                            <a class="hd_menu" href="#"><i class="hd_mobile_icon"></i>掌上1号店</a>
                            <div class="hd_mobile_show">
                                <i></i>
                                <div data-tpc="3" class="hd_mobile_list clearfix">
                                    <div class="hd_mobile_content">
                                        <img alt="" src="/beimages/ChEbu1WRDpOAf6xxAAAz2LgGaek47900_93x93.jpg">
                                    </div>
                                    <dl class="hd_mobile_tab">
                                        <dt><b>掌上1号店</b></dt>
                                        <dd><a data-ref="YHD_TOP_wx_link" target="_blank" href="http://cms.yhd.com/sale/157119"
                                                class="blue_link">手机购物更优惠</a></dd>
                                        <dd>
                                            <a class="hd_iconfont" rel="nofollow" data-ref="YHD_TOP_wx_iphone" target="_blank"
                                                href="https://itunes.apple.com/us/app/1hao-dian/id427457043?mt=8"></a>
                                            <a class="hd_iconfont" rel="nofollow" data-ref="YHD_TOP_wx_ipad" target="_blank"
                                                href="https://itunes.apple.com/cn/app/1hao-dianhd/id550780860?mt=8"></a>
                                            <a class="hd_iconfont" rel="nofollow" data-ref="YHD_TOP_wx_android" target="_blank"
                                                href="http://m.yhd.com/downloads/10600518746/TheStoreApp.apk"></a>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </li>
                        <li data-tpc="4" id="glKeHuFuWu" data-addclass="hd_menu_hover" class="hd_menu_tit">
                            <a class="hd_menu" data-ref="YHD_TOP_help" href="help.html" target="_blank"><s class="khfw"></s>客户服务</a>
                            <div class="hd_menu_list">
                                <ul>
                                    <li><a target="_blank" data-ref="YHD_TOP_help_baoguo" href="member_order.html">包裹跟踪</a></li>
                                    <li><a target="_blank" data-ref="YHD_TOP_help_wenti" href="help.html">常见问题</a></li>
                                    <li><a target="_blank" data-ref="YHD_TOP_help_shouhou" href="http://yas.yhd.com/return/returnApplyList.do">在线退换货</a></li>
                                    <li><a target="_blank" data-ref="YHD_TOP_help_tousu" href="http://help.yhd.com/opinion/opinionList.do">在线投诉</a></li>
                                    <li><a target="_blank" data-ref="YHD_TOP_help_peisongfanwei" href="http://www.yhd.com/marketing/deliveryinfo/deliveryInfo.do">配送范围</a></li>
                                </ul>
                            </div>
                        </li>
                        <li id="glWangZhanDaoHang" data-addclass="hd_menu_hover" class="hd_menu_tit">
                            <a class="hd_menu" href="#">网站导航</a>
                            <div data-tpc="5" class="hd_site_nav">
                                <em></em>
                                <ul class="clearfix">
                                    <li><a target="_blank" data-ref="YHD_TOP_links_mall" href="http://1mall.yhd.com">1号商城</a></li>
                                </ul>
                                <ul class="clearfix">
                                    <li><a title="1号社区" href="http://club.yhd.com/" data-tcd="AD.14509_10535717_2"
                                            data-ref="14509_10535717_2" target="_blank"> 1号社区
                                        </a></li>
                                    <li><a title="0元试用" href="http://try.yhd.com/" data-tcd="AD.14509_10535724_4"
                                            data-ref="14509_10535724_4" target="_blank"> 0元试用
                                        </a></li>
                                    <li><a title="平安金卡" href="http://cms.yhd.com/cmsPage/show.do?pageId=73060" data-tcd="AD.14509_11754949_5"
                                            data-ref="14509_11754949_5" target="_blank"> 平安金卡
                                        </a></li>
                                    <li><a title="分销平台" href="http://fx.yhd.com/pifa/index.action" data-tcd="AD.14509_15636664_6"
                                            data-ref="14509_15636664_6" target="_blank"> 分销平台
                                        </a></li>
                                </ul>
                                <ul class="clearfix">
                                    <li><a target="_blank" data-ref="YHD_TOP_union" href="http://union.yhd.com/">网站联盟</a></li>
                                    <li><a target="_blank" data-ref="YHD_TOP_settled" href="http://zhaoshang.yhd.com">招商通道</a></li>
                                    <li><a target="_blank" data-ref="YHD_TOP_b2b" href="http://b2b.yhd.com/">企业采购</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <span class="hd_follow_us">关注我们：</span>
                    <a title="去关注1号店的新浪微博" class="hd_sina_weibo" href="http://weibo.com/yihaodian" rel="nofollow"
                        onclick="gotracker('2','YHD_TOP_weibo');" id="weibo" target="_blank">关注1号店新浪微博</a>
                    <a target="_blank" href="http://cms.yhd.com/cms/view.do?topicId=24484" title="关注1号店微信" id="glWeiXin"
                        data-addclass="hd_menu_hover" class="hd_weixin hd_menu_tit" data-tpc="6">
                        <div class="hd_weixin_show">
                            <i></i>
                            <p>
                                扫描二维码<br>关注1号店微信
                            </p>
                            <img alt="扫描二维码<br />关注1号店微信" src="/beimages/CgQCtlKW1RSAe6dIAAAcun_R_Wk58300.jpg">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div data-tpa="YHD_GLOBAl_TOP_CURTAIN" class="wrap index_topbanner" style="" id="topCurtain">
            <a title="2.29个护冲锋" href="http://cms.yhd.com/sale/aUXXOXlBBNJ" data-ref="1783_31065961_1" target="_blank"
                class="big_topbanner" style="display: none;">
                <img src="/beimages/ChEi11bScS-AVtczAAFiB5_s0aU62800.jpg" alt="2.29个护冲锋">
            </a>
            <a title="2.29个护冲锋" href="http://cms.yhd.com/sale/aUXXOXlBBNJ" data-ref="1782_31065964_1" target="_blank"
                class="small_topbanner" id="smallTopBanner" style="display: inline-block;">
                <img src="/beimages/ChEi3FbScgWAEhhRAACqyy6e0Es34300.jpg" alt="2.29个护冲锋">
            </a>
            <span class="index_topbanner_fold" title="点击-展开">展开<s></s></span>
        </div>
        <div id="site_header" class="wrap hd_header clearfix hd_unify_logo">
            <div data-tpa="YHD_GLOBAl_HEADER_LOGO" class="hd_logo_area fl" id="logo_areaID">
                <a data-ref="index_1" href="index.html"><img src="/beimages/CgQIz1ZyfEqAaJj8AAAPqOO2cwQ12100.png" alt="1号店"></a>
            </div>
            <div class="hd_head_search">
                <div class="hd_search_form clearfix">
                    <div data-type="1" id="hdSearchTab" class="hd_serach_tab">
                        <a data-type="1" href="javascript:;">商品</a>
                        <a data-type="2" href="javascript:;">店铺</a>
                        <i></i>
                    </div>
                    <div data-tpa="YHD_GLOBAl_HEADER_SEARCH" class="hd_search_wrap clearfix">
                        <label style="display: block; color: rgb(102, 102, 102);" for="keyword">2016宠爱女人节-美容护理满199减100送100！</label>
                        <input type="text" x-webkit-grammar="builtin:translate" onwebkitspeechchange="emptySearchBar();"
                            x-webkit-speech="" data-autofocus="true" autofocus="true" autocomplete="off" maxlength="100"
                            style="color:#333333;" url="http://cms.yhd.com/sale/vdfXODXbBvo" original="2016宠爱女人节-美容护理满199减100送100！"
                            id="keyword" name="keyword" class="hd_input_test">
                        <!--搜索提示 begin-->
                        <div onmouseover="$('#searchSuggest').show()" style="display:none" class="hd_search_tips_result hd_search_history"
                            id="searchSuggest"></div>
                        <button istrkcustom="1" onclick="javascript:addTrackPositionToCookie('1','search');searchMeForClick();"
                            id="hdSearchBtn" class="hd_search_btn" type="button">搜 索</button>
                    </div>
                    <button onclick="javascript:addTrackPositionToCookie('1','search_shop');" style="display:none;" id="hdShopBtn"
                        type="button" class="hd_shop_btn">搜本店</button>
                    <button onclick="javascript:addTrackPositionToCookie('1','search_tuan');" style="display:none;" id="hd_search_tuan"
                        type="button" class="hd_shop_btn">搜团购</button>
                    <button onclick="javascript:addTrackPositionToCookie('1','search_haigou');" style="display:none;"
                        id="hd_search_haigou" type="button" class="hd_hg_btn">搜海购</button>
                </div>
                <p data-specialhotword="{" text":"we are 发沐类","linkUrl":"http://cms.yhd.com/sale/aUXXOXlBBNJ","style":"0","tc":"ad.0.0.14585-31065967","tce":null,"perTracker":"14585_31065967_1"}"
                    data-tpa="YHD_GLOBAl_HEADER_HOT_SEARCH" class="hd_hot_search" id="hotKeywordsShow">
                    <a data-ref="14585_31065967_1" data-tce="" data-tc="ad.0.0.14585-31065967" target="_blank" href="http://cms.yhd.com/sale/aUXXOXlBBNJ"
                        title="we are 发沐类">we are 发沐类</a><a data-tc="SEARCH.0.KEYWORD.shkw_%E5%8E%8B%E5%8A%9B%E9%94%85.1"
                        data-ref="shkw_%E5%8E%8B%E5%8A%9B%E9%94%85" href="http://search.yhd.com/c0-0/k%E5%8E%8B%E5%8A%9B%E9%94%85/6/"
                        target="_blank" title="压力锅">压力锅</a> <a data-tc="SEARCH.0.KEYWORD.shkw_%E9%BE%99%E8%99%BE%E7%89%87.2"
                        data-ref="shkw_%E9%BE%99%E8%99%BE%E7%89%87" href="http://search.yhd.com/c0-0/k%E9%BE%99%E8%99%BE%E7%89%87/6/"
                        target="_blank" title="龙虾片">龙虾片</a> <a data-tc="SEARCH.0.KEYWORD.shkw_%E9%BA%A6%E7%89%87.3"
                        data-ref="shkw_%E9%BA%A6%E7%89%87" href="http://search.yhd.com/c0-0/k%E9%BA%A6%E7%89%87/6/"
                        target="_blank" title="麦片">麦片</a> <a data-tc="SEARCH.0.KEYWORD.shkw_%E5%A5%B3%E5%A3%AB%E5%86%85%E8%A3%A4.4"
                        data-ref="shkw_%E5%A5%B3%E5%A3%AB%E5%86%85%E8%A3%A4" href="http://search.yhd.com/c0-0/k%E5%A5%B3%E5%A3%AB%E5%86%85%E8%A3%A4/6/"
                        target="_blank" title="女士内裤">女士内裤</a> <a data-tc="SEARCH.0.KEYWORD.shkw_%E9%9D%A2%E8%86%9C.5"
                        data-ref="shkw_%E9%9D%A2%E8%86%9C" href="http://search.yhd.com/c0-0/k%E9%9D%A2%E8%86%9C/6/"
                        target="_blank" title="面膜">面膜</a> <a data-tc="SEARCH.0.KEYWORD.shkw_%E8%83%B6%E5%8E%9F%E8%9B%8B%E7%99%BD.6"
                        data-ref="shkw_%E8%83%B6%E5%8E%9F%E8%9B%8B%E7%99%BD" href="http://search.yhd.com/c0-0/k%E8%83%B6%E5%8E%9F%E8%9B%8B%E7%99%BD/6/"
                        target="_blank" title="胶原蛋白">胶原蛋白</a> <a data-tc="SEARCH.0.KEYWORD.shkw_%E6%BD%98%E5%A9%B7.7"
                        data-ref="shkw_%E6%BD%98%E5%A9%B7" href="http://search.yhd.com/c0-0/k%E6%BD%98%E5%A9%B7/6/"
                        target="_blank" title="潘婷">潘婷</a> <a data-tc="SEARCH.0.KEYWORD.shkw_%E8%8B%B9%E6%9E%9C%E9%86%8B.8"
                        data-ref="shkw_%E8%8B%B9%E6%9E%9C%E9%86%8B" href="http://search.yhd.com/c0-0/k%E8%8B%B9%E6%9E%9C%E9%86%8B/6/"
                        target="_blank" title="苹果醋">苹果醋</a> <a data-tc="SEARCH.0.KEYWORD.shkw_%E6%8A%BD%E7%BA%B8.9"
                        data-ref="shkw_%E6%8A%BD%E7%BA%B8" href="http://search.yhd.com/c0-0/k%E6%8A%BD%E7%BA%B8/6/"
                        target="_blank" title="抽纸">抽纸</a> <a data-tc="SEARCH.0.KEYWORD.shkw_%E4%B9%90%E8%80%8C%E9%9B%85.10"
                        data-ref="shkw_%E4%B9%90%E8%80%8C%E9%9B%85" href="http://search.yhd.com/c0-0/k%E4%B9%90%E8%80%8C%E9%9B%85/6/"
                        target="_blank" title="乐而雅">乐而雅</a></p>
            </div>
            <div id="hdPrismWrap" class="hd_prism_wrap">
                <div data-tpa="YHD_GLOBAl_HEADER_WELFARE" id="hdPrismCoupon" class="hd_prism hd_welfare">
                    <u id="hdPrismCouponNum" style="display:none;"></u>
                    <a class="hd_prism_tab" data-ref="top_prism_coupon" target="_blank" href="http://coupon.yhd.com/myCoupon">
                        <em></em>
                        <p>福利</p>
                        <i></i>
                    </a>
                    <div id="hdPrismCouponList" class="hd_prism_show global_loading">
                    </div>
                </div>
                <div data-tpa="YHD_GLOBAl_HEADER_ORDER" id="hdPrismOrder" class="hd_prism hd_order">
                    <u id="hdPrismOrderNum" style="display:none;"></u>
                    <a class="hd_prism_tab" data-ref="top_prism_order" target="_blank" href="member_order.html">
                        <em></em>
                        <p>订单查询</p>
                        <i></i>
                    </a>
                    <div id="hdPrismOrderList" class="hd_prism_show global_loading">
                    </div>
                </div>
            </div>
        </div>
        <div class="hd_header_nav" id="headerNav">
            <div class="hd_fixed_bg"></div>
            <div class="wrap clearfix">
                <div id="allSortOuterbox">
                    <div data-tpa="YHD_GLOBAl_HEADER_CATEGORY_0" class="hd_all_sort_link fl">
                        <a class="fl" href="http://www.yhd.com/marketing/allproduct.html" data-ref="YHD_TOP_index_5">所有商品分类</a>
                    </div>
                    {{-- 商品分类 --}}
                    <div id="allCategoryHeader" class="hd_allsort_out_box_new">
                        <div class="hd_allsort_out">
                            <ul id="j_allsort" class="hd_allsort ">
                                @foreach ($cat as $c)
                                <li data-mrt="1" data-tpa="YHD_GLOBAl_HEADER_CATEGORY_1" data-background="" data-color="hd_sort_color"
                                    class="hd_no_pic">
                                    <h3 class="hd_gray_bg">
                                        <i class="hd_iconfont"></i>
                                        <a href="/begoods/{{$c->id}}" target="_blank" data-tc="0.0.TRACKER_CODE.CatMenu_Search_100000024_137555.1"
                                            data-ref="CatMenu_Search_100000024_137555_104293" title="进口食品">{{ $c->name
                                            }}</a>
                                    </h3>
                                    {{-- 子分类 --}}
                                    <div class="hd_show_sort global_loading" cindex="1" categoryid="137555" style="border: 1px solid #c30;">
                                        <ul style="width: 100%;height: 100%;">
                                            @foreach($c->subCat as $v1)
                                            <li style="width: 98%;margin:0 auto;height: 55px;border-bottom: 1px dotted #ccc;list-style-type: none;margin-left: -40px;">
                                                <a href="#" style="text-decoration:none;font-size:14px;line-height: 40px;color: red;font-weight: bold;display: block;width: 100px;height: 40px;float: left;text-align: right;">{{$v1->name}}</a>
                                                <i style="width:1px;height:14px;margin:0 10px;float: left;background-color: #ccc;margin-top: 13px;"></i>
                                                @foreach($v1->subCat as $v2)
                                                <a href="#" style="text-decoration:none;font-size:14px;line-height: 40px;color: #3c3c3c;float: left;">{{$v2->name}}</a>
                                                <i style="width:1px;height:14px;margin:0 10px;float: left;background-color: #ccc;margin-top: 13px;"></i>
                                                @endforeach
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <div data-tpa="YHD_GLOBAl_HEADER_NAV" id="global_menu" class="headerNavWrap">
                    <ul class="headerNavMain clearfix" id="wideScreenTabShowID">
                        <li style="z-index:799"><a data-tcd="AD.2704_13664428_1" class="light" data-ref="2704_13664428_1"
                                href="index.html">首页</a></li>
                        <li style="z-index:798"><a data-tcd="AD.2704_15986209_2" data-ref="2704_15986209_2" class="light"
                                hl="" target="_blank" href="supermarket.html">自营超市</a></li>
                        <li style="z-index:797"><a data-tcd="AD.2704_13659166_3" data-ref="2704_13659166_3" class="light"
                                hl="疯抢" target="_blank" href="http://t.yhd.com">1号团</a></li>
                        <li style="z-index:796"><a data-tcd="AD.2704_13659165_4" data-ref="2704_13659165_4" hl=""
                                target="_blank" href="http://1mall.yhd.com">1号商城</a></li>
                        <li style="z-index:795"><a data-tcd="AD.2704_13852075_5" data-ref="2704_13852075_5" hl=""
                                target="_blank" href="http://s.yhd.com/">闪购</a></li>
                        <li style="z-index:794"><a data-tcd="AD.2704_15636713_6" data-ref="2704_15636713_6" hl=""
                                target="_blank" href="list.html?/fresh.html">活色生鲜</a></li>
                        <li style="z-index:793"><a data-tcd="AD.2704_15736041_7" data-ref="2704_15736041_7" hl=""
                                target="_blank" href="list.html?/yao.html">医药</a></li>
                        <li style="z-index:792"><a data-tcd="AD.2704_30849546_8" data-ref="2704_30849546_8" hl=""
                                target="_blank" href="list.html?/haigou">1号海购</a><img src="/beimages/ChEbu1bNZxCAPBgrAAAEC3SY2LE31000.png"
                                alt="1号海购" class="newicon"></li>
                        <li style="z-index:791"><a data-tcd="AD.2704_29070249_9" data-ref="2704_29070249_9" hl=""
                                target="_blank" href="http://dangdang.yhd.com">当当书城</a></li>
                    </ul>
                </div>
                <div class="hd_fix_search clearfix">
                    <input type="text" x-webkit-grammar="builtin:translate" onwebkitspeechchange="emptySearchBar('#fix_keyword');"
                        x-webkit-speech="" data-autofocus="auto" autocomplete="off" maxlength="100" style="color: rgb(153, 153, 153);"
                        url="http://cms.yhd.com/sale/vdfXODXbBvo" original="2016宠爱女人节-美容护理满199减100送100！" id="fix_keyword"
                        value="2016宠爱女人节-美容护理满199减100送100！" name="keyword" class="keywordInput">
                    <a class="hd_fix_searchBtn" href="javascript:addTrackPositionToCookie('1','search_float_btn');searchMe(jQuery('#fix_keyword'));">搜
                        索</a>
                    <a style="display:none;" id="hdShopBtnFix" class="hd_fix_searchshop" href="javascript:addTrackPositionToCookie('1','search_shop_float_btn');">搜本店</a>
                    <!--搜索提示 begin-->
                    <div style="display:none;" id="fix_searchSuggest" class="hd_search_tips_result hd_search_history">
                    </div>
                    <!--搜索提示 end-->
                </div>
                <div data-version="1" data-mrt="1" data-tpa="YHD_GLOBAl_HEADER_CART" id="miniCart" class="hd_mini_cart">
                    <i class="hd_c_arrow"></i>
                    <u id="in_cart_num" class="hd_c_num none" style="display: none;"></u>
                    <a data-ref="YHD_TOP_MINICART" href="{{ route('cart') }}" class="hd_prism_cart">
                        <em></em>购物车
                    </a>
                    {{-- 购物车列表 S--}}
                    <div id="showMiniCartDetail" class="hd_cart_show none" style="display: none;">
                            <div id="J_cart_pop" style="position: relative;z-index: 2;width: 100%;background: #fff;" class="cart_pop">
                                <div class="cart_hd" style="height: 25px;padding: 6px 8px;line-height: 25px;">
                                    <h4 class="cart_hd_title">最新加入的商品</h4>
                                </div>
                                <div class="cart_bd J_cart_bd" style="background: #fff;height: auto!important;height: 344px;max-height: 344px; overflow-y: auto;">
                                <ul class="cart_singlelist" style="margin-top: -1px;"></ul>
                                <ul class="cart_giftlist" style="margin-top: -1px;"></ul>
                                <ul class="cart_suitlist" style="margin-top: -1px;"></ul>
                                <ul class="cart_manjianlist" style="margin-top: -1px;"></ul>
                                <ul class="cart_manzenglist">
                                        <li class="cart_item" style="line-height: 17px; vertical-align: bottom;*zoom: 1;background: #fff;">
                                            <div class="cart_item_hd" style="overflow: hidden;padding: 8px 10px;
                                            border-top: 1px dotted #ccc;">
                                                <div class="cart_item_hd_info" style="float: left;">
                                                <span class="cart_tag cart_tag_orange" style="display: inline-block;margin-bottom: 2px;color: #fff;padding: 0 2px;line-height: 16px;
                                                vertical-align: top;float: none;background:#f60;">换购</span>
                                                    已购满1件，您可加价换购商品
                                                </div>

                                                <div class="cart_item_hd_price" style="float: right;margin-left: 10px;">小计：999</div>
                                            </div>
                                            <ul class="cart_item_bd">
                                                    @foreach($cartdata as $v)
                                                    <li class="cart_item"  style="line-height: 17px; vertical-align: bottom;*zoom: 1;background: #fff;">
                                                        <div class="cart_item_inner" style="padding: 8px 10px;border-top: 1px dotted #ccc;overflow: hidden;">
                                                            <div class="cart_img" style="    float: left;width: 50px; height: 50px;border: 1px solid #ddd;
                                                            padding: 0; margin-right: 10px;font-size: 0;overflow: hidden;">
                                                            <a class="cart_img_lk" href="//item.jd.com/8033411.html" target="_blank" style="display: block;">
                                                                <img src="{{ '/upload/'.$v->mid_pic  }}" width="50" height="50" alt="">
                                                            </a>
                                                            </div>
                                                            <div class="cart_name" style="float: left;width: 120px;height: 52px;overflow: hidden;">
                                                                <a style="color: #666;text-decoration: none;" class="cart_name_lk" href="//item.jd.com/8033411.html" title="{{ $v->goods_name.' '.$v->goods_attr_list }}" target="_blank">{{ $v->goods_name.' '.$v->goods_attr_list }}</a>
                                                            </div>
                                                            <div class="cart_info" style="float: right;text-align: right; width: 85px;">
                                                                <div class="cart_price" style="font-weight: 700;">¥{{$v->price>0?$v->price:$v->shprice}}</div>
                                                                <a class="cart_delete J_delete" data-id="8033411|225520926" data-method="RemoveSuit" data-type="13" href="javascript:;"
                                                                style="float: right;clear: both;max-width: 85px; white-space: nowrap; -o-text-overflow: ellipsis; text-overflow: ellipsis;overflow: hidden;">删除</a>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                            </ul>
                                        </li>
                                </ul>
                            </div>
                            <hr>
                            <div class="cart_ft" style="padding: 14px;text-align: right;">
                                    <div class="cart_ft_info" style="float: left;line-height: 29px;">共
                                        <span class="cart_num" style="font-weight: 700;">2</span>件商品 共计
                                        <span class="cart_num" style="font-weight: 700;">¥ 000</span>
                                    </div>
                                    <a class="cart_ft_lk"
                                    style="float: right;height: 29px;padding: 0 10px;background: #e4393c;color: #fff;text-align: center;font-weight: 700;
                                    line-height: 29px;border-radius: 3px;-moz-border-radius: 3px;-webkit-border-radius: 3px;" href="{{ route('cart') }}" title="去购物车">去购物车</a>
                            </div>

                        </div>
                    </div>
                    {{-- 购物车列表 E --}}
                </div>
                <div class="hd_mobile_wrap">
                    {{-- <a data-tpa="YHD_GLOBAl_HEADER_RIGHT_AD" data-ref="17102_28453146_1" target="_blank" href="http://cms.yhd.com/sale/157119"
                        id="globalRightPicsV2">
                        <i><img alt="掌上1号店" src="/beimages/ChEi2lYI4L-AB-YcAAAgFI-WAls08000.gif"></i>
                    </a> --}}
                    {!! $adpo->showad(1) !!}
                </div>
            </div>
        </div>
    </div>
    <div class="layout_main">
        <div id="firstScreen" class="laybox banner_slider clearfix">
            <div data-tpa="YHD_HOME_BAMBOO_SLIDER" class="mod_promo_show" id="promo_show" data-ajax-done="1">
                <div lunbobackgroudflag="1" data-init="0" id="index_menu_carousel" class="promo_wrapper" data-adjust="1"
                    data-inited="1">
                    {{-- 轮播图 --}}
                    <ol class="clearfix" id="slider">
                        {!! $adpo->showad(2) !!}
                    </ol>
                </div>
                <div class="mod_promonum_show">
                    <ol style="" id="lunboNum" class="clearfix">
                        <li href="javascript:void(0);" flag="1" class=""></li>
                        <li href="javascript:void(0);" flag="2" class=""></li>
                        <li href="javascript:void(0);" flag="3" class="cur"></li>
                        <li href="javascript:void(0);" flag="4"></li>
                        <li href="javascript:void(0);" flag="5"></li>
                        <li href="javascript:void(0);" flag="6"></li>
                        <li href="javascript:void(0);" flag="7"></li>
                        <li href="javascript:void(0);" flag="8"></li>
                        <li href="javascript:void(0);" flag="9"></li>
                    </ol>
                </div>
                <a class="show_next" href="javascript:void(0);" style="display: none;"><s></s></a>
                <a class="show_pre" href="javascript:void(0);" style="display: none;"><s></s></a>
            </div>
            <div class="layout_col_b">
                <div data-tpa="YHD_HOME_NOTICE" class="mod_yhd_notice">
                    <dl>
                        <dt>快讯</dt>
                        @foreach ($blogs as $k=>$v )
                            <dd @if($v->id==1) class="first_red" @endif style="display:-webkit-box;-webkit-line-clamp:2;overflow:hidden;-webkit-line-break:auto;-webkit-box-orient:vertical;">
                                <a data-ref="18645_30914963_0" target="_blank" href="{{--route('bloghtml',['id'=>$v->id])--}}/blcontent"
                                    data-tc="ad.0.20.18645-30914963.0" title="{{ $v->title }}">【<b>{{ $v->cat_name }}</b>】 {!!$v->title!!}
                                </a>
                            </dd>
                        @endforeach
                    </dl>
                </div>
                <div data-tpa="YHD_HOME_BAMBOO_RIGHT_HUAFEI" id="yhd_zhuanxiang" class="mod_vip">
                    <div class="mod_vip_list">
                        <p class="vip_tit">1号专享</p>
                        <ul class="clearfix">
                            <li data-index="1">
                                <a target="_blank" data-tc="ad.0.0.18651-26051649.1" href="http://try.yhd.com/10/">
                                    <em class="vip_iconfont"></em>
                                    <p>0元试用</p>
                                </a>
                            </li>
                            <li data-index="2">
                                <a target="_blank" data-tc="ad.0.0.18652-26051654.1" href="http://jifen.yhd.com/pointshop/pointIndex.do">
                                    <em class="vip_iconfont"></em>
                                    <p>积分商城</p>
                                </a>
                            </li>
                            <li data-index="3">
                                <a target="_blank" data-tc="ad.0.0.18653-26051656.1" href="list.html?/lipinka">
                                    <em class="vip_iconfont"></em>
                                    <p>礼品卡</p>
                                </a>
                            </li>
                            <li data-index="4" class="tab_link">
                                <a target="_blank" data-tc="ad.0.0.18654-26051672.1" href="http://life.yhd.com/">
                                    <em class="vip_iconfont"></em>
                                    <p>充值中心</p>
                                </a>
                            </li>
                            <li data-index="5" class="tab_link">
                                <a target="_blank" data-tc="ad.0.0.18655-26051673.1" href="http://yhd.bm724.com/forms/index.html">
                                    <em class="vip_iconfont"></em>
                                    <p>页游点卡</p>
                                </a>
                            </li>
                            <li data-index="6" class="tab_link">
                                <a target="_blank" data-tc="ad.0.0.18656-26051659.1" href="https://8.yhd.com/cfweb/home.action">
                                    <em class="vip_iconfont"></em>
                                    <p>1号钱包</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div id="index_digit" class="mod_iframe_app" style="top: 190px; display: none;">
                        <div class="tabs clearfix">
                            <a target="_blank" data-tc="ad.0.0.18654-26051672.1" href="http://life.yhd.com/">充值中心</a>
                            <a target="_blank" data-tc="ad.0.0.18655-26051673.1" href="http://yhd.bm724.com/forms/index.html">页游点卡</a>
                            <a target="_blank" data-tc="ad.0.0.18656-26051659.1" href="https://8.yhd.com/cfweb/home.action">1号钱包</a>
                        </div>
                        <div class="tabs_content">
                            <div data-url="http://image.yihaodianimg.com/virtual-web_static/pc_iframe_virtual_charge.html"
                                class="content_detail phone_recharge none"></div>
                            <div data-url="http://yhd.bm724.com/forms/yhd_mini_new.html" class="content_detail game_card none"></div>
                            <div class="content_detail yhd_wallet none">
                                <a target="_blank" data-tc="ad.0.0.18657-27801916.1" href="https://8.yhd.com/cfweb/home.action">
                                    <p style="padding-bottom:5px;padding-top:5px">收益日结，收益赚high</p>
                                    <img alt="收益日结，收益赚high" src="/beimages/CgQI01aUv_2AGUr4AABEoRKVHVw56100.jpg">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--关闭按钮-->
                    <a class="colse_btn" href="javascript:;" style="display: none;">×</a>
                </div>
            </div>
        </div>
        <!--精选活动 begin -->
        <div data-tpa="INDEX2_SELECTION_ACTIVITY" class="mod_selection_activity wrap">
            <div class="selection_activity_list">
                <ul id="selectActivity" class="clearfix" style="left: -1200px;">
                    <li class="clearfix"><a data-tce="bhstr-null,bhcat-5134" data-tc="ad.84.0.18660-30915196" target="_blank"
                            data-recordtracker="1" class="clearfix" href="http://cms.yhd.com/sale/UEaOssDBBFJ">
                            <div class="activ_left no_boder_left">
                                <p>洁柔-吸水新星</p><b>柔柔的女王</b><b>满<em>199</em>减<em>80</em></b>
                            </div><img height="150" width="120" alt="柔柔的女王" src="/beimages/ChEbu1bQTJ2AF532AAASCeCHiyI94400.jpg">
                        </a><a data-tce="bhstr-null,bhcat-5117" data-tc="ad.84.0.18660-30816869" target="_blank"
                            data-recordtracker="1" class="clearfix" href="http://cms.yhd.com/sale/FJFOlDllbUJ">
                            <div class="activ_left">
                                <p>母婴童装VIP</p><b>每周嗨购</b><b><em>0</em>元抢不停</b>
                            </div><img height="150" width="120" alt="每周嗨购" src="/beimages/CgQI01bML3WAJAD7AAAb1MAPKEw94000.jpg">
                        </a><a data-tce="bhstr-null,bhcat-21306" data-tc="ad.84.0.18660-30816669" target="_blank"
                            data-recordtracker="1" class="clearfix" href="http://cms.yhd.com/sale/jcjQgcQiICC">
                            <div class="activ_left">
                                <p>小米手机旗舰店</p><b>高性能新品</b><b>红米<em>3</em>现货</b>
                            </div><img height="150" width="120" alt="高性能新品" src="/beimages/ChEi21bLzDWAK_n6AAATGuHrMrc94800.jpg">
                        </a><a data-tce="bhstr-null,bhcat-21306" data-tc="ad.84.0.18660-30816875" target="_blank"
                            data-recordtracker="1" class="clearfix" href="http://cms.yhd.com/sale/gugcrQQIunj">
                            <div class="activ_left">
                                <p>智能设备</p><b>4步提高生活质量</b><b>全场<em>9.9</em>元起购</b>
                            </div><img height="150" width="120" alt="4步提高生活质量" src="/beimages/CgQIz1bMMIuAMvzxAAARwAyGmds25200.jpg">
                        </a></li>
                    <li class="clearfix"><a data-tce="bhstr-null,bhcat-8644" data-tc="ad.84.0.18660-30914745" target="_blank"
                            data-recordtracker="1" class="clearfix" href="http://cms.yhd.com/sale/frvPooaPjto">
                            <div class="activ_left no_boder_left">
                                <p>1号洋气女人节 2.29-3.8</p><b>1号洋气女人节 2.29-3.8</b><b><em>1</em>号洋气女人节<em> 2.29</em>-<em>3.8</em></b>
                            </div><img height="150" width="120" alt="1号洋气女人节  2.29-3.8" src="/beimages/CgQIzlbPtliADPKxAAARhH_ny1M09900.jpg">
                        </a><a data-tce="bhstr-null,bhcat-36144" data-tc="ad.84.0.18660-30816709" target="_blank"
                            data-recordtracker="1" class="clearfix" href="http://cms.yhd.com/sale/jCjCJtmzqjC">
                            <div class="activ_left">
                                <p>茶叶冲饮中心</p><b>健康早餐</b><b><em>1</em>元起</b>
                            </div><img height="150" width="120" alt="健康早餐" src="/beimages/ChEi1lbL-fmAbWM3AAAnfq6Lm9w35500.jpg">
                        </a><a data-tce="bhstr-null,bhcat-5117" data-tc="ad.84.0.18660-30816866" target="_blank"
                            data-recordtracker="1" class="clearfix" href="http://cms.yhd.com/sale/qfAPoPhKvdr">
                            <div class="activ_left">
                                <p>宝贝压岁钱</p><b>年后任性购</b><b>全场<em>1</em>元起</b>
                            </div><img height="150" width="120" alt="年后任性购" src="/beimages/CgQIzlbMLySAT8bmAAAeWLI6k5A77900.jpg">
                        </a><a data-tce="bhstr-null,bhcat-5009" data-tc="ad.84.0.18660-30685993" target="_blank"
                            data-recordtracker="1" class="clearfix" href="http://cms.yhd.com/sale/dtlXWsFWBqo">
                            <div class="activ_left">
                                <p>遇见更好的自己</p><b>正品美护</b><b>狂欢<em>4</em>折起</b>
                            </div><img height="150" width="120" alt="正品美护" src="/beimages/CgQI0lbG-J2AeGNuAAAdUmgkFpU79300.jpg">
                        </a></li>
                    <li class="clearfix"><a data-tce="bhstr-null,bhcat-5134" data-tc="ad.84.0.18660-30915196" target="_blank"
                            data-recordtracker="1" class="clearfix" href="http://cms.yhd.com/sale/UEaOssDBBFJ">
                            <div class="activ_left no_boder_left">
                                <p>洁柔-吸水新星</p><b>柔柔的女王</b><b>满<em>199</em>减<em>80</em></b>
                            </div><img height="150" width="120" alt="柔柔的女王" src="/beimages/ChEbu1bQTJ2AF532AAASCeCHiyI94400.jpg">
                        </a><a data-tce="bhstr-null,bhcat-5117" data-tc="ad.84.0.18660-30816869" target="_blank"
                            data-recordtracker="1" class="clearfix" href="http://cms.yhd.com/sale/FJFOlDllbUJ">
                            <div class="activ_left">
                                <p>母婴童装VIP</p><b>每周嗨购</b><b><em>0</em>元抢不停</b>
                            </div><img height="150" width="120" alt="每周嗨购" src="/beimages/CgQI01bML3WAJAD7AAAb1MAPKEw94000.jpg">
                        </a><a data-tce="bhstr-null,bhcat-21306" data-tc="ad.84.0.18660-30816669" target="_blank"
                            data-recordtracker="1" class="clearfix" href="http://cms.yhd.com/sale/jcjQgcQiICC">
                            <div class="activ_left">
                                <p>小米手机旗舰店</p><b>高性能新品</b><b>红米<em>3</em>现货</b>
                            </div><img height="150" width="120" alt="高性能新品" src="/beimages/ChEi21bLzDWAK_n6AAATGuHrMrc94800.jpg">
                        </a><a data-tce="bhstr-null,bhcat-21306" data-tc="ad.84.0.18660-30816875" target="_blank"
                            data-recordtracker="1" class="clearfix" href="http://cms.yhd.com/sale/gugcrQQIunj">
                            <div class="activ_left">
                                <p>智能设备</p><b>4步提高生活质量</b><b>全场<em>9.9</em>元起购</b>
                            </div><img height="150" width="120" alt="4步提高生活质量" src="/beimages/CgQIz1bMMIuAMvzxAAARwAyGmds25200.jpg">
                        </a></li>
                    <li class="clearfix"><a data-tce="bhstr-null,bhcat-8644" data-tc="ad.84.0.18660-30914745" target="_blank"
                            data-recordtracker="1" class="clearfix" href="http://cms.yhd.com/sale/frvPooaPjto">
                            <div class="activ_left no_boder_left">
                                <p>1号洋气女人节 2.29-3.8</p><b>1号洋气女人节 2.29-3.8</b><b><em>1</em>号洋气女人节<em> 2.29</em>-<em>3.8</em></b>
                            </div><img height="150" width="120" alt="1号洋气女人节  2.29-3.8" src="/beimages/CgQIzlbPtliADPKxAAARhH_ny1M09900.jpg">
                        </a><a data-tce="bhstr-null,bhcat-36144" data-tc="ad.84.0.18660-30816709" target="_blank"
                            data-recordtracker="1" class="clearfix" href="http://cms.yhd.com/sale/jCjCJtmzqjC">
                            <div class="activ_left">
                                <p>茶叶冲饮中心</p><b>健康早餐</b><b><em>1</em>元起</b>
                            </div><img height="150" width="120" alt="健康早餐" src="/beimages/ChEi1lbL-fmAbWM3AAAnfq6Lm9w35500.jpg">
                        </a><a data-tce="bhstr-null,bhcat-5117" data-tc="ad.84.0.18660-30816866" target="_blank"
                            data-recordtracker="1" class="clearfix" href="http://cms.yhd.com/sale/qfAPoPhKvdr">
                            <div class="activ_left">
                                <p>宝贝压岁钱</p><b>年后任性购</b><b>全场<em>1</em>元起</b>
                            </div><img height="150" width="120" alt="年后任性购" src="/beimages/CgQIzlbMLySAT8bmAAAeWLI6k5A77900.jpg">
                        </a><a data-tce="bhstr-null,bhcat-5009" data-tc="ad.84.0.18660-30685993" target="_blank"
                            data-recordtracker="1" class="clearfix" href="http://cms.yhd.com/sale/dtlXWsFWBqo">
                            <div class="activ_left">
                                <p>遇见更好的自己</p><b>正品美护</b><b>狂欢<em>4</em>折起</b>
                            </div><img height="150" width="120" alt="正品美护" src="/beimages/CgQI0lbG-J2AeGNuAAAdUmgkFpU79300.jpg">
                        </a></li>
                </ul>
            </div>
            <a style="display: none;" class="prev_btn" href="javascript:;"></a>
            <a style="display: none;" class="next_btn" href="javascript:;"></a>
        </div>
        <div data-tpa="YHD_HOME_CHUCHUANG_BANNER" data-singlemodule="1" id="chuchuang_banner_top" class="index_column_ad">
            <a data-nsf="" data-ajax="0" data-advid="17101" data-ref="17101_30914826_1" data-exttrackurl="" data-tc="ad.0.0.17101-30914826.1"
                data-recordtracker="1" target="_blank" href="http://shop.yhd.com/cms-bm-21-2551329.html">
                <img data-ajax="0" data-advid="17101" wideimg="/beimages/CgQIzlbP6V6AdUCjAADVQQz1S6M27200.jpg" shortimg="http://d8.yihaodianimg.com/N09/M05/E0/0A/ChEi11bP6VeAb9_7AADog-8Yx9Y85100.jpg"
                    src="/beimages/CgQIzlbP6V6AdUCjAADVQQz1S6M27200.jpg" alt="宝洁品牌日">
            </a>
        </div>
        <div data-tpa="YHD_HOME_CHUCHUANG" id="index_chuchuang" class="wrap floor_ad_wrap mod_index_ad_floor global_loading">
            <div class="big_pic">
                <a data-nsf="" data-ajax="0" data-advid="15114" data-ref="15114_30914866_1" data-exttrackurl="" data-tc="ad.0.0.15114-30914866.1"
                    data-recordtracker="1" target="_blank" href="http://cms.yhd.com/sale/aUXXOXlBBNJ">
                    <img data-ajax="0" data-advid="15114" src="/beimages/CgQI0lbP-kmACathAACKZ-vVbvg75100.jpg" alt="2.29个护冲锋">
                </a>
            </div>
            <div class="small_pic border_right">
                <div class="up">
                    <a data-nsf="" data-ajax="0" data-advid="15115" data-ref="15115_31066109_1" data-exttrackurl=""
                        data-tc="ad.0.0.15115-31066109.1" data-recordtracker="1" target="_blank" href="http://jk.yhd.com/?tab=3&subTab=3">
                        <strong>进口 • 海购</strong>
                        <em>COSME大赏</em>
                        <img data-ajax="0" data-advid="15115" src="/beimages/ChEi1FbTGSeANH3HAABLV9Z7Kwk26200.jpg" alt="COSME大赏"
                            style="margin-left: 0px;" class="ad_floor_item_img">
                    </a>
                </div>
                <div class="down">
                    <a data-nsf="" data-ajax="0" data-advid="15116" data-ref="15116_31066086_1" data-exttrackurl=""
                        data-tc="ad.0.0.15116-31066086.1" data-recordtracker="1" target="_blank" href="http://cms.yhd.com/sale/ldtPohvhjdo">
                        <strong>特产中国·美丽食谱</strong>
                        <em>义乌红糖39元/罐</em>
                        <img data-ajax="0" data-advid="15116" src="/beimages/CgQI01bTADqAfQf5AABNsHKHkOU25700.jpg" alt="特产中国三八丽人节"
                            style="margin-left: 0px;" class="ad_floor_item_img">
                    </a>
                </div>
            </div>
            <div class="small_pic">
                <div class="up">
                    <a data-nsf="" data-ajax="0" data-advid="15117" data-ref="15117_23859921_1" data-exttrackurl=""
                        data-tc="ad.0.0.15117-23859921.1" data-recordtracker="1" target="_blank" href="http://cms.yhd.com/sale/OZZTpwYYnBO">
                        <strong>低价天天抢</strong>
                        <em>新人首单更有多重好礼</em>
                        <img data-ajax="0" data-advid="15117" src="/beimages/CgQIzVa1WgKASgWzAAAkeq__Hnk20500.jpg" alt="新人首单更有多重好礼"
                            style="margin-left: 0px;" class="ad_floor_item_img">
                    </a>
                </div>
                <div class="down">
                    <a data-nsf="" data-ajax="0" data-advid="15118" data-ref="15118_30914775_1" data-exttrackurl=""
                        data-tc="ad.0.0.15118-30914775.1" data-recordtracker="1" target="_blank" href="http://xinpin.yhd.com/">
                        <strong>新品上市 0元试用</strong>
                        <em>多芬 千份0元抢</em>
                        <img data-ajax="0" data-advid="15118" src="/beimages/ChEi2FbP0X6ADc00AAAOpoKnoa025500.jpg" alt="多芬 千份0元抢"
                            style="margin-left: 0px;" class="ad_floor_item_img">
                    </a>
                </div>
            </div>
            <div class="big_pic">
                <a data-nsf="" data-ajax="0" data-advid="15119" data-ref="15119_30915035_1" data-exttrackurl="" data-tc="ad.0.0.15119-30915035.1"
                    data-recordtracker="1" target="_blank" href="http://s.yhd.com/list/32682">
                    <img data-ajax="0" data-advid="15119" src="/beimages/ChEi11bQNdaAXzUgAABulHmB8hA09700.jpg" alt="笛莎公主出游季"
                        style="margin-left: 0px;" class="ad_floor_item_img">
                </a>
            </div>
            <div class="small_pic">
                <div class="up">
                    <a data-nsf="" data-ajax="0" data-advid="15120" data-ref="15120_28995377_1" data-exttrackurl=""
                        data-tc="ad.0.0.15120-28995377.1" data-recordtracker="1" target="_blank" href="http://3c.yhd.com/">
                        <strong>手机家电城</strong>
                        <em>iPhone6s64G玫瑰金</em>
                        <img data-ajax="0" data-advid="15120" src="/beimages/CgQI0lbOckKAJ-mXAAAeNF9P2Ok62900.jpg" alt="iPhone6s64G玫瑰金"
                            style="margin-left: 0px;" class="ad_floor_item_img">
                    </a>
                </div>
                <div class="down">
                    <a data-nsf="" data-ajax="0" data-advid="15121" data-ref="15121_30783817_1" data-exttrackurl=""
                        data-tc="ad.0.0.15121-30783817.1" data-recordtracker="1" target="_blank" href="http://shop.yhd.com/m-201949.html">
                        <strong>山姆会员商店</strong>
                        <em>会员优品 薏米1kg</em>
                        <img data-ajax="0" data-advid="15121" src="/beimages/ChEbvFbKw1GAFFQGAAA13vn7T5U10900.jpg" alt="山姆会员商店"
                            style="margin-left: 0px;" class="ad_floor_item_img">
                    </a>
                </div>
            </div>
        </div>
        <div data-singlemodule="1" data-tracktype="initShow" data-tpa="YHD_HOME_LOUCENG_BANNER" id="loucengBanner"
            class="index_column_ad">
            <a data-nsf="1" data-ajax="1" data-advid="16149" data-ref="ad.16149_298_11377_42246_0_0_6_1058236_1_0_6_4_0_0"
                title="38节美护主会场" target="_blank" href="http://tracker.yhd.com/ad-dolphin-go/go?v=WpRBFdXXNcAA8kFMvC-niIl-tjd5WsQIILl2hE6K3SYHXHrroKLaFC8i_pMeqvIGdgn3PIeLao4I16rjSz5qBq0sc1Qie2Pyr29mCedlK3ELzywxdNq17RzqKJife9pq0V1RUMZg4CFIT6mXl2VPZQyZB515fssYQfG3PENI-3nDrLiqONMOpqF8tUH0Ku8VnGBzKukJ5H7trgqaC1VuSXWpZQoOZP0pBwt_1pnlkzLEoQQ6YxxiVBer6k6BJTeOoHx8ge4cOrfrJJUKh2w1Cw.."
                data-recordtracker="1" data-tc="ad.0.6.11377-42246.1" data-tce="ri-16149,pi-298,ai-11377,aii-42246,ci-0,pi2-0,pi3-6,mi-1058236,si-1,pii-0,bt-6,mt-4,kwid-0,smi-0"
                data-done="1">
                <img wideimg="/beimages/ChEbvFbPzbWAXiLnAAFfaNUn7KU20400.jpg" shortimg="images/ChEbvFbPzbWAXiLnAAFfaNUn7KU20400.jpg"
                    data-ajax="1" data-advid="16149" src="/beimages/ChEbvFbPzbWAXiLnAAFfaNUn7KU20400.jpg" alt="38节美护主会场"
                    data-done="1">
            </a>
        </div>
        {{-- 楼层显示 S --}}
        <div id="needLazyLoad">
            @foreach($floor as $v)
            <div style="height:414px" lazyload_textarea="textareaFloorSx" data-tpa="YHD_NHOME_SXHG" id="floorSx" class="wrap mod_index_floor clearfix">
                <textarea id="textareaFloorSx" autocomplete="off" style="display:none;">
                    <div class="mod_floor_title shengxian" >
                        <div data-tpc="1">
                            <a title="{{ $v->flo_name }}" class="bt" target="_blank" href="list.html?/jinkou" data-tc="ad.0.0.16072-14649577.1" data-ref="16072_14649577_1">{{ $v->flo_name }}</a>
                            <em class="dian"> • </em>
                            <a title="{{ $v->subtitle1 }}" class="bt" target="_blank" href="list.html?/haigou" data-tc="ad.0.0.16072-25206008.2" data-ref="16072_25206008_2">{{ $v->subtitle1 }}</a>
                            <a title="" class="floor_subtitle_wrap" target="_blank" href="list.html?/themeBuy.do?themeId=1039" data-tc="ad.0.0.18661-27870002.1" data-ref="18661_27870002_1">
                            <em></em>
                            <div class="floor_subtitle">
                                    {!! $adpo->showad(6) !!}
                            <i></i>
                            <span>{!! $adpo->showad(6) !!}</span>
                            </div>
                            </a>
                        </div>
                        <div class="keyword" data-tpc="2">
                            <a title="进口酒" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f0da-m1-rt0-pid-mid0-k%E8%BF%9B%E5%8F%A3%E9%85%92/" data-tc="ad.0.0.16074-25508396.1" data-ref="16074_25508396_1">进口酒</a>|
                            <a title="进口冲饮" target="_blank" href="list.html?/c22841-0-81174/b/a-s1-v4-p1-price-d0-f0d-m1-rt0-pid-mid0-k/" data-tc="ad.0.0.16074-25508400.2" data-ref="16074_25508400_2">进口冲饮</a>|
                            <a title="进口直采" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-k1%E5%8F%B7%E7%9B%B4%E9%87%87/?ti=YYXM" data-tc="ad.0.0.16074-25508402.3" data-ref="16074_25508402_3">进口直采</a>|
                            <a title="海购箱包" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v0-p1-price-d0-f0c-m1-rt0-pid-mid0-k海购箱包/" data-tc="ad.0.0.16074-25508417.4" data-ref="16074_25508417_4">海购箱包</a>|
                            <a title="海购电器" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v0-p1-price-d0-f0c-m1-rt0-pid-mid0-k%E6%B5%B7%E8%B4%AD%E7%94%B5%E5%99%A8" data-tc="ad.0.0.16074-25508403.5" data-ref="16074_25508403_5">海购电器</a>|
                            <a title="海购母婴" target="_blank" href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f0dc-m1-rt0-pid-mid0-k%E6%AF%8D%E5%A9%B4" data-tc="ad.0.0.16074-25508419.6" data-ref="16074_25508419_6">海购母婴</a>
                        </div>
                    </div>
                    <div class="a_con">
                        <ul class="tag clearfix" data-tpc="3">
                            {{-- @foreach($v->CatData as $v1)
                                {!! $v1 !!}
                            @endforeach --}}
                            <a title="{{ $v->subtitle1 }}" target="_blank" href="list.html?/c22881-0-81279/" data-tc="ad.0.0.16073-20517543.1" data-ref="16073_20517543_1">{{ $v->subtitle1 }}</a>
                            <a title="{{ $v->subtitle2 }}" target="_blank" href="list.html?/c22887-0-81291/" data-tc="ad.0.0.16073-20518226.2" data-ref="16073_20518226_2">{{ $v->subtitle2 }}</a>
                            <a title="{{ $v->subtitle3 }}" target="_blank" href="list.html?/c33827-0-81091/b/a-s1-v0-p1-price-d0-f0-m1-rt0-pid-mid0-k/" data-tc="ad.0.0.16073-20518816.3" data-ref="16073_20518816_3">{{ $v->subtitle3 }}</a>
                            <a title="{{ $v->subtitle4 }}" target="_blank" href="list.html?/c33797-0-81144/b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-k/" data-tc="ad.0.0.16073-20519107.4" data-ref="16073_20519107_4">{{ $v->subtitle4 }}</a>
                            <a title="{{ $v->subtitle5 }}" target="_blank" href="list.html?/c22846-0-81182/b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-k/" data-tc="ad.0.0.16073-20519283.5" data-ref="16073_20519283_5">{{ $v->subtitle5 }}</a>
                        </ul>
                        <a title="进口粮油品类中心" data-tpc="4" data-advId="17622" data-ajax="1" class="pic" target="_blank" href="http://cms.yhd.com/sale/eFbQiuEEuXJ" data-recordTracker="1" data-tc="ad.0.0.17622-30685985.1" data-ref="17622_30685985_1" data-nsf="">
                            <h3 class="shengxian_font">{{ $v->goods_id1 }}</h3>
                            <h4>{{ $v->goods_id1 }}</h4>
                            <img width="190" height="160" original="" data-advId="17622" data-ajax="1" src="{{$v->ad_img }}" alt="{{ $v->goods_id1 }}">
                        </a>
                    </div>
                    <div class="b_con">
                        <div class="slider_index_ad" id="sxSliderIndexAd">
                            <ul class="img_box clearfix" data-tpc="5">
                                <a title="{{ $v->goods_id2 }}" data-advId="16076" data-ajax="0" data-ctpa="INDEX2_FLOORSX_LUNBO_PIC1" target="_blank" href="http://cms.yhd.com/sale/frvPooaPjto" data-recordTracker="1" data-tc="ad.0.0.16076-30914813.1" data-ref="16076_30914813_1" data-nsf="">
                                    <img width="330" height="360" data-advId="16076" data-ajax="0" src="{!! $adpo->showad(2) !!}" original="" alt="1号洋气女人节 2.29-3.8" >
                                </a>
                                <a title="{{ $v->goods_id3 }}" data-advId="16077" data-ajax="1" data-ctpa="INDEX2_FLOORSX_LUNBO_PIC2" target="_blank" href="http://cms.yhd.com/sale/rtoovvAUjtr" data-recordTracker="1" data-tc="ad.0.0.16077-29138476.1" data-ref="16077_29138476_1" data-nsf="">
                                    <img width="330" height="360" data-advId="16077" data-ajax="1" src="{{$v->ad_img }}" original="" alt="1号酒会所" >
                                </a>
                                <a title="{{ $v->goods_id4 }}" data-advId="16078" data-ajax="0" data-ctpa="INDEX2_FLOORSX_LUNBO_PIC3" target="_blank" href="http://cms.yhd.com/sale/WsgBsBFbuj" data-recordTracker="1" data-tc="ad.0.0.16078-23537060.1" data-ref="16078_23537060_1" data-nsf="">
                                    <img width="330" height="360" data-advId="16078" data-ajax="0" src="{!!$adpo->showad(2) !!}" original="" alt="进口牛奶品类中心" >
                                </a>
                            </ul>
                            <ul class="trig_box">
                                <li class="clearfix">
                                    <a class="cur"><span></span></a>
                                    <a ><span></span></a>
                                    <a ><span></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="c_con" data-tpc="6">
                        <a class="pic" title="美味零嘴3折起" target="_blank" href="http://cms.yhd.com/sale/gWnyEHiInj" data-recordTracker="1" data-tc="ad.0.0.17623-30433166.1" data-ref="17623_30433166_1">
                            <h3>进口休闲零食中心</h3>
                            <h4>美味零嘴3折起</h4>
                            <img width="190" height="110" original="http://d9.yihaodianimg.com/N07/M05/EA/BD/ChEbvFbNvfSAHdcoAAAcVF0mmso01300.jpg" src="/beimages/blank.gif" alt="进口休闲零食中心">
                        </a>
                        <a class="pic" title="进口休闲零嘴" target="_blank" href="http://search.yhd.com/c0-0/k%25E8%2587%25AA%25E8%2590%25A5%25E6%25B8%2585%25E4%25BB%2593%25E7%2589%25B9%25E5%258D%2596/1/" data-recordTracker="1" data-tc="ad.0.0.17624-30783780.1" data-ref="17624_30783780_1">
                            <h3>买1送1</h3>
                            <h4>进口休闲零嘴</h4>
                            <img width="190" height="110" original="http://d8.yihaodianimg.com/N10/M06/E0/45/ChEi3FbNvquAP6uxAAAOkLMG6z013800.jpg" src="/beimages/blank.gif" alt="买1送1">
                        </a>
                    </div>
                    <div class="d_con" data-tpc="7">
                        <a class="pic" title="范爷同款 78元两支" target="_blank" href="http://cms.yhd.com/sale/wLZXODdWByO" data-recordTracker="1" data-tc="ad.0.0.17625-30914892.1" data-ref="17625_30914892_1">
                            <h3>COSME大赏 美护TOP榜</h3>
                            <h4>范爷同款 78元两支</h4>
                            <img width="190" height="290" original="http://d9.yihaodianimg.com/N08/M01/E3/FA/ChEi1lbTGzmAePe6AABH24jvTVk37900.jpg" src="/beimages/blank.gif" alt="COSME大赏 美护TOP榜">
                        </a>
                    </div>
                    <div class="e_con" data-tpc="8">
                        <a class="pic" title="爆款来袭 1元秒杀" target="_blank" href="http://t.yhd.com/detailBrand/27164" data-recordTracker="1" data-tc="ad.0.0.17626-30365506.1" data-ref="17626_30365506_1">
                            <h3>自营美护英雄团</h3>
                            <h4>爆款来袭 1元秒杀</h4>
                            <img width="190" height="110" original="http://d6.yihaodianimg.com/N08/M01/CF/32/ChEi1FbAIimAAK6bAAA1jkhD5tM49800.jpg" src="/beimages/blank.gif" alt="自营美护英雄团">
                        </a>
                        <a class="pic" title="春季亮眼 Kipling来袭" target="_blank" href="http://s.yhd.com/channel/2" data-recordTracker="1" data-tc="ad.0.0.17627-30882129.1" data-ref="17627_30882129_1">
                            <h3>全球闪购</h3>
                            <h4>春季亮眼 Kipling来袭</h4>
                            <img width="190" height="110" original="http://d6.yihaodianimg.com/N07/M02/60/98/CgQI0FbOz4qAK-cZAAA1irTWQVU54400.jpg" src="/beimages/blank.gif" alt="全球闪购">
                        </a>
                    </div>
            </textarea>
            </div>
            @endforeach
            {{-- <div style="height:594px" lazyload_textarea="textareaFloor3c" data-tpa="YHD_NHOME_3C" id="floor3c" class="wrap mod_index_floor clearfix">
                <textarea id="textareaFloor3c" autocomplete="off" style="display:none;">
                    <div class="mod_floor_title shuma">
                        <div data-tpc="1">
                            <a class="bt" href="http://3c.yhd.com/1/" data-tc="ad.0.0.16123-15111329.1" data-ref="16123_15111329_1" title="手机家电" target="_blank">手机家电</a>
                            <a title="游戏战场靠装备" class="floor_subtitle_wrap" target="_blank" href="list.html?/themeBuy.do?themeId=900" data-tc="ad.0.0.18665-27870014.1" data-ref="18665_27870014_1">
                                <em></em>
                                <div class="floor_subtitle">
                                游戏战场靠装备
                                <i></i>
                                <span>游戏战场靠装备</span>
                                </div>
                            </a>
                        </div>
                        <div class="keyword" data-tpc="2">
                            <a href="http://cms.yhd.com/sale/maeOBbXWbFm" data-tc="ad.0.0.16125-25508468.2" data-ref="16125_25508468_2" title="iPad" target="_blank">iPad</a>
                            |
                            <a href="list.html?/c21266-0-83899/b/a-s1-v4-p1-price-d0-f0d6b-m1-rt0-pid-mid0-k/?ti=UVG5" data-tc="ad.0.0.16125-28384310.3" data-ref="16125_28384310_3" title="家电直降特惠" target="_blank">家电直降特惠</a>
                            |
                            <a href="list.html?/c21394-0-84187/" data-tc="ad.0.0.16125-25508469.5" data-ref="16125_25508469_5" title="电脑配件" target="_blank">电脑配件</a>
                            |
                            <a href="http://search.yhd.com/c21347-%E5%8D%95%E5%8F%8D%E7%9B%B8%E6%9C%BA/b/a-s1-v0-p1-price-d0-f0-m1-rt0-pid-k%E5%8D%95%E5%8F%8D/1/" data-tc="ad.0.0.16125-20474744.6" data-ref="16125_20474744_6" title="单反" target="_blank">单反</a>
                        </div>
                    </div>
                    <div class="a_con">
                        <ul class="tag clearfix" data-tpc="3">
                            <a href="list.html?/c23586-0-81436/" data-tc="ad.0.0.16124-25508471.1" data-ref="16124_25508471_1" title="手机" target="_blank">手机</a> <a href="http://search.yhd.com/c0-0-0/b/a-s1-v4-p1-price-d0-f0d6-m1-rt0-pid-mid0-k%E6%89%8B%E6%9C%BA%E9%85%8D%E4%BB%B6/" data-tc="ad.0.0.16124-26051455.2" data-ref="16124_26051455_2" title="手机配件" target="_blank">手机配件</a> <a href="list.html?/c21991-0-91553/" data-tc="ad.0.0.16124-25508473.3" data-ref="16124_25508473_3" title="平板电脑" target="_blank">平板电脑</a> <a href="list.html?/c21266-0-83899/b/a-s1-v4-p1-price-d0-f0db-m1-rt0-pid-mid0-k/?ti=C4M4" data-tc="ad.0.0.16124-28254476.4" data-ref="16124_28254476_4" title="家电" target="_blank">家电</a> <a href="list.html?/c0-0-85877" data-tc="ad.0.0.16124-25508474.5" data-ref="16124_25508474_5" title="数码配件" target="_blank">数码配件</a> <a href="http://search.yhd.com/c-/k%25E5%258F%2596%25E6%259A%2596%25E5%2599%25A8/1/" data-tc="ad.0.0.16124-25508475.6" data-ref="16124_25508475_6" title="取暖器" target="_blank">取暖器</a>
                        </ul>
                        <a class="pic" href="http://cms.yhd.com/sale/EJboaahavaJ" data-tpc="4" data-advId="17594" data-ajax="1" data-recordTracker="1" data-tc="ad.0.0.17594-30849465.1" data-ref="17594_30849465_1" title="笔记本导购--选本攻略" target="_blank" data-nsf="">
                            <h3 class="shuma_font">笔记本导购--选本攻略</h3>
                            <h4>笔记本导购--选本攻略</h4>
                            <img width="190" height="180" alt="笔记本导购--选本攻略" data-advId="17594" data-ajax="1" src="/beimages/blank.gif" original="http://d6.yihaodianimg.com/N06/M00/AA/01/CgQIzVbP52qAd-viAAAZeuVheAc02800.jpg"/>
                        </a>
                    </div>
                    <div class="b_con">
                        <div class="slider_index_ad" id="dqSliderIndexAd">
                            <ul class="img_box clearfix" data-tpc="4">
                                <a href="http://cms.yhd.com/sale/YpTqCfCmqpM" data-advId="16128" data-ajax="0" data-ctpa="INDEX2_FLOOR3C_LUNBO_PIC1" data-recordTracker="1" data-tc="ad.0.0.16128-31066093.1" data-ref="16128_31066093_1" title="最美女人“机”" target="_blank" data-nsf="">
                                    <img width="330" height="360" data-advId="16128" data-ajax="0" alt="最美女人“机”" src="/beimages/blank.gif" original="http://d9.yihaodianimg.com/N09/M02/E3/63/ChEi2VbTBxyAcq2-AACXuT7UrYo37500.jpg"/>
                                </a>
                                <a href="http://cms.yhd.com/sale/hTYXODOdbIS" data-advId="16129" data-ajax="1" data-ctpa="INDEX2_FLOOR3C_LUNBO_PIC2" data-recordTracker="1" data-tc="ad.0.0.16129-30915001.1" data-ref="16129_30915001_1" title="我是女主角 赢取价值378元永生花 自营数码专场" target="_blank" data-nsf="">
                                    <img width="330" height="360" data-advId="16129" data-ajax="1" alt="我是女主角 赢取价值378元永生花 自营数码专场" src="/beimages/blank.gif" original="http://d6.yihaodianimg.com/N08/M05/E1/6F/ChEi1lbQG5SAJVj1AABtnhpCmPk41500.jpg"/>
                                </a>
                                <a href="http://cms.yhd.com/sale/JaaTeReeTXJ" data-advId="16130" data-ajax="0" data-ctpa="INDEX2_FLOOR3C_LUNBO_PIC3" data-recordTracker="1" data-tc="ad.0.0.16130-30915234.1" data-ref="16130_30915234_1" title="小米PK华为" target="_blank" data-nsf="">
                                    <img width="330" height="360" data-advId="16130" data-ajax="0" alt="小米PK华为" src="/beimages/blank.gif" original="http://d6.yihaodianimg.com/N09/M01/E1/45/ChEi2VbQYmuAcD-nAABQcX3aiJg70000.jpg"/>
                                </a>
                            </ul>
                            <ul class="trig_box">
                                <li class="clearfix">
                                    <a class="cur"><span></span></a>
                                    <a ><span></span></a>
                                    <a ><span></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="j_con" data-tpc="5">
                        <a class="pic" href="http://cms.yhd.com/sale/qotcQcHuutr" data-recordTracker="1" data-tc="ad.0.0.17595-30751299.1" title="猴年直降惠客" data-ref="17595_30751299_1" target="_blank">
                            <h3>1号店 自营家电</h3>
                            <h4>猴年直降惠客</h4>
                            <img width="190" height="290" alt="1号店 自营家电" src="/beimages/blank.gif" original="http://d8.yihaodianimg.com/N09/M01/D7/61/ChEi2FbJzCeAKY_uAAAiC5H0zeo20800.jpg"/>
                        </a>
                    </div>
                    <div class="c_con i_con pro_con" data-tpc="6">
                        <a href="http://search.yhd.com/c0-0/k%25E4%25B8%2589%25E6%2598%259F%25E6%2589%258B%25E6%259C%25BA/1/" data-tc="ad.0.0.16134-27801922.1" data-ref="16134_27801922_1" title="三星 Galaxy Note5 就比京东低" target="_blank">
                            <img width="120" height="120" alt="三星 Galaxy Note5 就比京东低" src="/beimages/blank.gif" original="http://d8.yihaodianimg.com/N05/M00/39/CE/ChEbulYIrmaAciGPAATvIYWcPcg53501_120x120.jpg"/>
                            <p class="p1">三星 Galaxy Note5 就比京东低</p>
                            <p class="p2" productId="46769374">¥ 4288.0</p>
                        </a>
                        <a href="http://search.yhd.com/c0-0/k%25E9%25A3%259E%25E7%25A7%2591%25E5%2589%2583%25E9%25A1%25BB%25E5%2588%2580/1/" data-tc="ad.0.0.16134-30849633.2" data-ref="16134_30849633_2" title="Flyco 飞科 男士三刀头电动剃须刀" target="_blank">
                            <img width="120" height="120" alt="Flyco 飞科 男士三刀头电动剃须刀" src="/beimages/blank.gif" original="http://d6.yihaodianimg.com/V00/M08/F2/52/CgQDsFR8NCSATD7NAAVAKspfnio76101_120x120.jpg"/>
                            <p class="p1">Flyco 飞科 男士三刀头电动剃须刀</p>
                            <p class="p2" productId="27166906">¥ 89.0</p>
                        </a>
                    </div>
                    <div class="e_con pro_con" data-tpc="7">
                        <a href="http://search.yhd.com/c0-0/kiphone%25206s/1/" data-tc="ad.0.0.16135-27801923.1" data-ref="16135_27801923_1" title="iPhone6s就比京东低" target="_blank">
                            <img width="120" height="120" alt="iPhone6s就比京东低" src="/beimages/blank.gif" original="http://d6.yihaodianimg.com/N05/M05/D2/53/CgQI0lYDntiACt0ZAACMbiZcATs22001_120x120.jpg"/>
                            <p class="p1">iPhone6s就比京东低</p>
                            <p class="p2" productId="46329212">¥ 4838.0</p>
                        </a>
                        <a href="list.html?/c21304-0-83960/?ti=AXP3" data-tc="ad.0.0.16135-29552189.2" data-ref="16135_29552189_2" title="松下 电吹风 1200w" target="_blank">
                            <img width="120" height="120" alt="松下 电吹风 1200w" src="/beimages/blank.gif" original="http://d6.yihaodianimg.com/N01/M09/D7/34/CgQCrVJblvWASNWIAAEfdwK2K_Y47301_120x120.jpg"/>
                            <p class="p1">松下 电吹风 1200w</p>
                            <p class="p2" productId="1055488">¥ 99.0</p>
                        </a>
                    </div>
                    <div class="f_con clearfix" data-tpc="8">
                        <div class="f1">
                            <p class="eq_tit">1号店电器独家权益</p>
                            <div class="ad_pic clearfix">
                                <a href="http://cms.yhd.com/cmsPage/show.do?pageId=135423" data-recordTracker="1" data-tc="ad.0.0.16127-28254471.1" title="CE就比京东低综合页面" data-ref="16127_28254471_1" target="_blank">
                                <img width="100" height="140" alt="CE就比京东低综合页面" src="/beimages/blank.gif" original="http://d9.yihaodianimg.com/N05/M04/12/75/CgQI01S0fqSAPEJaAAAUc_MNtWA13600.jpg"/>
                                </a>
                                <a href="http://my.yhd.com/oldfornew/oldfornewIndex.do" data-recordTracker="1" data-tc="ad.0.0.16127-14042175.2" title="以旧换新" data-ref="16127_14042175_2" target="_blank">
                                <img width="100" height="140" alt="以旧换新" src="/beimages/blank.gif" original="http://d7.yihaodianimg.com/N06/M03/B0/65/CgQIzVS0frqAOF2PAAAY6qDXZbc84000.jpg"/>
                                </a>
                            </div>
                        </div>
                        <div class="f2">
                            <a class="pic2 clearfix" href="http://cms.yhd.com/sale/JaaTeReeTXJ" title="小米PK华为" data-tc="ad.0.0.17596-30915239.1" data-ref="17596_30915239_1" target="_blank">
                                <div class="fl">
                                    <h3>小米PK华为</h3>
                                    <h4>手机电脑拼速</h4>
                                    <em class="sale_txt">荣耀5X1099元</em>
                                </div>
                                <img width="130" height="166" alt="小米PK华为" src="/beimages/blank.gif" original="http://d7.yihaodianimg.com/N05/M05/0D/DE/CgQI01bQZPuAbtRiAAAYtGpxhFY92700.jpg"/>
                            </a>
                        </div>
                        <div class="f3 pro_con">
                            <a href="http://cms.yhd.com/sale/maeOBbXWbFm?ti=QXTT" data-tc="ad.0.0.16133-25508480.1" data-ref="16133_25508480_1" title="Apple 苹果 iPad特惠" target="_blank">
                                <img width="120" height="120" alt="Apple 苹果 iPad特惠" src="/beimages/blank.gif" original="http://d6.yihaodianimg.com/N00/M07/E7/FD/CgMBmFJuF8WAI7VZAABVr5IDrZA58201_120x120.jpg"/>
                                <p class="p1">Apple 苹果 iPad特惠</p>
                                <p class="p2" productId="14964792">¥ 2238.0</p>
                            </a>
                        </div>
                        <div class="f4 pro_con">
                            <a href="http://search.yhd.com/c0-0/kthinkpad/1/" data-tc="ad.0.0.16133-30816824.2" data-ref="16133_30816824_2" title="联想 ThinkPad X250" target="_blank">
                                <img width="120" height="120" alt="联想 ThinkPad X250" src="/beimages/blank.gif" original="http://d6.yihaodianimg.com/N05/M05/D0/AA/ChEbulXTATyARv-tAAPUQ2nVmSk99001_120x120.jpg"/>
                                <p class="p1">联想 ThinkPad X250</p>
                                <p class="p2" productId="45431806">¥ 4688.0</p>
                            </a>
                        </div>
                        <div class="f6 pro_con">
                            <a href="http://search.yhd.com/c0-0/k%25E5%2584%25BF%25E7%25AB%25A5%25E6%2599%25BA%25E8%2583%25BD%25E6%2589%258B%25E7%258E%25AF/18/" data-tc="ad.0.0.16133-29552265.3" data-ref="16133_29552265_3" title="儿童智能手表安全放心" target="_blank">
                                <img width="120" height="120" alt="儿童智能手表安全放心" src="/beimages/blank.gif" original="http://d8.yihaodianimg.com/N05/M05/0E/5C/CgQI0lYdyeSAINPNAAET6KbH0gA20401_120x120.jpg"/>
                                <p class="p1">儿童智能手表安全放心</p>
                                <p class="p2" productId="48231517">¥ 399.0</p>
                            </a>
                        </div>
                    </div>
                    </textarea>
            </div> --}}
            <div style="height:414px" lazyload_textarea="textareaFloorGroup" data-tpa="YHD_NHOME_TUAN" id="floorGroup"
                class="wrap mod_index_floor mod_tuangou_floor clearfix">
                <textarea id="textareaFloorGroup" autocomplete="off" style="display:none;"><div class="mod_floor_title tuangou">
                    <div data-tpc="1">
                    <a class="bt" href="http://t.yhd.com" title="1号团" data-tc="ad.0.0.16136-25508426.1" data-ref="16136_25508426_1" target="_blank">1号团</a>
                    </div>
                    <div class="keyword" data-tpc="2">
                    <a href="http://t.yhd.com/100-0-2035-1-1.html" title="大牌纸尿裤" data-tc="ad.0.0.16138-30498790.1" data-ref="16138_30498790_1" target="_blank">大牌纸尿裤</a>
                    |
                    <a href="http://t.yhd.com/100-0-2046-1-1.html" title="新鲜水果" data-tc="ad.0.0.16138-30498791.2" data-ref="16138_30498791_2" target="_blank">新鲜水果</a>
                    |
                    <a href="http://t.yhd.com/100-0-2003-1-1.html" title="进口牛奶" data-tc="ad.0.0.16138-30498792.3" data-ref="16138_30498792_3" target="_blank">进口牛奶</a>
                    |
                    <a href="http://t.yhd.com/100-0-2012-1-1.html" title="iPhone疯抢" data-tc="ad.0.0.16138-30498808.4" data-ref="16138_30498808_4" target="_blank">iPhone疯抢</a>
                    |
                    <a href="http://t.yhd.com/100-0-2008-1-1.html" title="个人护理" data-tc="ad.0.0.16138-30498815.5" data-ref="16138_30498815_5" target="_blank">个人护理</a>
                    |
                    <a href="http://t.yhd.com/100-0-2013-1-1.html" title="生活电器" data-tc="ad.0.0.16138-30498816.6" data-ref="16138_30498816_6" target="_blank">生活电器</a>
                    </div>
                    </div>
                    <div class="a_con">
                    <ul class="tag clearfix" data-tpc="3">
                    <a href="http://t.yhd.com/100-0-2003-1-1.html" data-tc="ad.0.0.16137-30498500.1" data-ref="16137_30498500_1" title="进口食品" target="_blank">进口食品</a> <a href="http://t.yhd.com/100-0-2002-1-1.html" data-tc="ad.0.0.16137-30498502.2" data-ref="16137_30498502_2" title="美食保健" target="_blank">美食保健</a> <a href="http://t.yhd.com/100-0-2033-1-1.html" data-tc="ad.0.0.16137-30498549.3" data-ref="16137_30498549_3" title="家居日用" target="_blank">家居日用</a> <a href="http://t.yhd.com/100-0-2048-1-1.html" data-tc="ad.0.0.16137-30498556.4" data-ref="16137_30498556_4" title="美妆护肤" target="_blank">美妆护肤</a> <a href="http://t.yhd.com/100-0-2005-1-1.html" data-tc="ad.0.0.16137-30498559.5" data-ref="16137_30498559_5" title="精品女装" target="_blank">精品女装</a> <a href="http://t.yhd.com/100-0-2012-1-1.html" data-tc="ad.0.0.16137-30498561.6" data-ref="16137_30498561_6" title="手机数码" target="_blank">手机数码</a>
                    </ul>
                    <a class="pic" title="2.29个护冲锋预热" data-tpc="4" data-advId="17597" data-ajax="1" class="pic" target="_blank" href="http://cms.yhd.com/sale/aUXXOXlBBNJ" data-recordTracker="1" data-tc="ad.0.0.17597-30914870.1" data-ref="17597_30914870_1" data-nsf="">
                    <h3 class="tuangou_font">洗护冲锋日抢免单</h3>
                    <h4>满199减100送100！</h4>
                    <img width="190" height="180" original="http://d6.yihaodianimg.com/N06/M07/57/66/ChEbu1bP-xWABPCpAABHxmwFrrQ67900.jpg" data-advId="17597" data-ajax="1" src="/beimages/blank.gif" alt="洗护冲锋日抢免单">
                    </a>
                    </div>
                    <div class="k_con" data-tpc="5">
                    <a href="http://t.yhd.com/100-0-2005-1-1.html" data-grouponBrandId="27072" title="雅可希春上新" data-tc="ad.0.0.16140-30882072.1" data-ref="16140_30882072_1" target="_blank">
                    <img width="330" height="180" alt="雅可希春上新" src="/beimages/blank.gif" original="http://d7.yihaodianimg.com/N09/M0A/DD/BD/ChEi2VbOm4OADZO-AABsMoPk79007100.jpg"/>
                    </a>
                    <a href="http://t.yhd.com/100-0-2002-1-1.html" data-grouponBrandId="27301" title="百草味品牌团" data-tc="ad.0.0.16140-30882071.2" data-ref="16140_30882071_2" target="_blank">
                    <img width="330" height="180" alt="百草味品牌团" src="/beimages/blank.gif" original="http://d8.yihaodianimg.com/N05/M08/0E/92/CgQI0lbOqQuAVIADAAB0pgyIvXc57500.jpg"/>
                    </a>
                    </div>
                    <div class="c_con pro_con" data-tpc="6">
                    <a href="http://t.yhd.com/100-0-2048-1-1.html" title="薇诺娜WINONA 清痘控油消印套装（洁面泡沫50ml+爽肤水30ml+清颜霜15g+清痘精华12g）" data-tc="ad.0.0.16325-30882096.1" data-ref="16325_30882096_1" target="_blank">
                    <img alt="薇诺娜WINONA 清痘控油消印套装（洁面泡沫50ml+爽肤水30ml+清颜霜15g+清痘精华12g）" src="/beimages/blank.gif" original="http://d6.yihaodianimg.com/N05/M03/0E/D8/CgQI0lbOt0mALKQmAAFPXJvQCho56200_120x120.jpg"/>
                    <p class="p1">薇诺娜WINONA 清痘控油消印套装（洁面泡沫50ml+爽肤水30ml+清颜霜15g+清痘精华12g）</p>
                    <p class="p_box clearfix" data-grouponId="2732315">¥ 149.0</p>
                    </a>
                    <a href="http://t.yhd.com/100-0-2033-1-1.html" title="Midea 美的炒锅CL28J1 28cm 不粘锅家用煎锅炒锅无油烟电磁炉通用" data-tc="ad.0.0.16325-30882138.2" data-ref="16325_30882138_2" target="_blank">
                    <img alt="Midea 美的炒锅CL28J1 28cm 不粘锅家用煎锅炒锅无油烟电磁炉通用" src="/beimages/blank.gif" original="http://d9.yihaodianimg.com/N10/M01/E1/D5/ChEi21bOxGGAKm_TAADofF0QtzQ02500_120x120.jpg"/>
                    <p class="p1">Midea 美的炒锅CL28J1 28cm 不粘锅家用煎锅炒锅无油烟电磁炉通用</p>
                    <p class="p_box clearfix" data-grouponId="2717407">¥ 169.0</p>
                    </a>
                    </div>
                    <div class="c_con i_con pro_con" data-tpc="7">
                    <a href="http://t.yhd.com/100-0-2051-1-1.html" title="P.kuone/皮客优一 男士胸包休闲斜跨男包多功能帆布户外腰包P750583" data-tc="ad.0.0.16325-30882060.3" data-ref="16325_30882060_3" target="_blank">
                    <img alt="P.kuone/皮客优一 男士胸包休闲斜跨男包多功能帆布户外腰包P750583" src="/beimages/blank.gif" original="http://d7.yihaodianimg.com/N10/M06/E0/90/ChEi3FbOZWmAYL71AAFfXGblJc821800_120x120.jpg"/>
                    <p class="p1">P.kuone/皮客优一 男士胸包休闲斜跨男包多功能帆布户外腰包P750583</p>
                    <p class="p_box clearfix" data-grouponId="2696616">¥ 89.0</p>
                    </a>
                    <a href="detail.html?53938012" title="Apple 苹果 iPhone 6s (A1700) 64G 玫瑰金色 移动联通电信4G 全网通手机" data-tc="ad.0.0.16325-31117740.4" data-ref="16325_31117740_4" target="_blank">
                    <img alt="Apple 苹果 iPhone 6s (A1700) 64G 玫瑰金色 移动联通电信4G 全网通手机" src="/beimages/blank.gif" original="http://d9.yihaodianimg.com/N09/M02/A1/05/ChEi11YDoDKAL5laAACMbiZcATs39901_120x120.jpg"/>
                    <p class="p1">Apple 苹果 iPhone 6s (A1700) 64G 玫瑰金色 移动联通电信4G 全网通手机</p>
                    <p class="p2" productId="46329217">¥ 5588.0</p>
                    </a>
                    </div>
                    <div class="e_con pro_con" data-tpc="8">
                    <a href="detail.html?56683234" title="新新人 【新品买一送一】酵素 果蔬酵素 台湾进口酵素粉 6g*20袋" data-tc="ad.0.0.16325-31117750.5" data-ref="16325_31117750_5" target="_blank">
                    <img alt="新新人 【新品买一送一】酵素 果蔬酵素 台湾进口酵素粉 6g*20袋" src="/beimages/blank.gif" original="http://d9.yihaodianimg.com/N08/M00/50/F4/ChEi1FZVf0yAb0kMAAKMWDmm9sE55400_120x120.jpg"/>
                    <p class="p1">新新人 【新品买一送一】酵素 果蔬酵素 台湾进口酵素粉 6g*20袋</p>
                    <p class="p2" productId="48784110">¥ 138.0</p>
                    </a>
                    <a href="http://t.yhd.com/100-0-2035-1-1.html" title="雀巢 Nestle 能恩幼儿配方奶粉900g 3段（1-3岁） 详情为新老包装 新包装发货" data-tc="ad.0.0.16325-30882074.6" data-ref="16325_30882074_6" target="_blank">
                    <img alt="雀巢 Nestle 能恩幼儿配方奶粉900g 3段（1-3岁） 详情为新老包装 新包装发货" src="/beimages/blank.gif" original="http://d7.yihaodianimg.com/N10/M08/D0/F5/ChEi21YYt6-AMMrrAAM4Zk75Uss45500_120x120.jpg"/>
                    <p class="p1">雀巢 Nestle 能恩幼儿配方奶粉900g 3段（1-3岁） 详情为新老包装 新包装发货</p>
                    <p class="p_box clearfix" data-grouponId="2699720">¥ 136.0</p>
                    </a>
                    </div>
                    </textarea>
            </div>
            <div style="height:414px" lazyload_textarea="textareaFloorShan" data-tpa="YHD_NHOME_SHAN" id="floorShan"
                class="wrap mod_index_floor clearfix">
                <textarea id="textareaFloorShan" autocomplete="off" style="display:none;"><div class="mod_floor_title shangou clearfix">
                        <a class="bt" href="http://s.yhd.com/" title="闪购" data-tc="ad.0.0.16326-27599620.1" data-ref="16326_27599620_1" target="_blank">闪购</a>
                        <div class="update_time">
                        <a href="http://s.yhd.com" title="品牌点亮生活，每天十点上新" data-tc="ad.0.0.16328-15061153.1" data-ref="16328_15061153_1" target="_blank">品牌点亮生活，每天十点上新</a>
                        </div>
                        </div>
                        <!--tab begin -->
                        <div class="sgwrap">
                        <div class="sg_tab">
                        <em class="tab_arrow"></em>
                        <ul class="clearfix">
                        <li class="cur"><a href="http://s.yhd.com" target="_blank">大牌推荐</a></li>
                        <li ><a href="http://s.yhd.com/new" target="_blank">销售排行</a></li>
                        <li ><a href="http://s.yhd.com" target="_blank">最后疯抢</a></li>
                        </ul>
                        </div>
                        <div class="sg_tabwrap">
                        <div class="sg_tabcontent clearfix">
                        <div class="sg_banner sg_big">
                        <a href="http://cms.yhd.com/sale/IhTwTRenTiM" title="宠爱女人节 珠宝配饰专场2折起" data-recordTracker="1" data-tc="ad.0.0.16329-30915009.1" data-ref="16329_30915009_1" target="_blank">
                        <img alt="宠爱女人节 珠宝配饰专场2折起" src="/beimages/blank.gif" original="http://d8.yihaodianimg.com/N07/M0B/62/DE/CgQI0FbQHIiAARXxAADeBL1FTm893700.jpg"/>
                        </a>
                        <p class="count_down"></p>
                        </div>
                        <div class="sg_banner sg_small">
                        <a href="http://s.yhd.com/list/32268" data-shanActivityId="32268" title="瑞士军刀开学季" data-tc="ad.0.0.16330-30816799.1" data-ref="16330_30816799_1" target="_blank">
                        <img alt="瑞士军刀开学季" src="/beimages/blank.gif" original="http://d6.yihaodianimg.com/N09/M02/DF/DD/ChEi2FbP6ReAAdlhAAB-5K0GEoY84400.jpg"/>
                        </a>
                        <p class="count_down"></p>
                        </div>
                        <div class="sg_banner sg_small">
                        <a href="http://s.yhd.com/list/32682" data-shanActivityId="32682" title="笛莎公主出游季" data-tc="ad.0.0.16330-30915047.2" data-ref="16330_30915047_2" target="_blank">
                        <img alt="笛莎公主出游季" src="/beimages/blank.gif" original="http://d6.yihaodianimg.com/N09/M01/E0/CC/ChEi2FbQIVmAfGtjAADFgctVZDI65700.jpg"/>
                        </a>
                        <p class="count_down"></p>
                        </div>
                        <div class="sg_banner sg_small">
                        <a href="http://cms.yhd.com/sale/ldtqCfLffdr" title="宠爱她，呵护她 大牌美护9.9元起" data-tc="ad.0.0.16330-30915151.3" data-ref="16330_30915151_3" target="_blank">
                        <img alt="宠爱她，呵护她 大牌美护9.9元起" src="/beimages/blank.gif" original="http://d9.yihaodianimg.com/N09/M02/E0/EE/ChEi2FbQM4-Aez3eAAC6PPuS_7M06900.jpg"/>
                        </a>
                        <p class="count_down"></p>
                        </div>
                        <div class="sg_banner sg_small">
                        <a href="http://s.yhd.com/list/32662" data-shanActivityId="32662" title="新百伦 春季焕新季" data-tc="ad.0.0.16330-30915114.4" data-ref="16330_30915114_4" target="_blank">
                        <img alt="新百伦 春季焕新季" src="/beimages/blank.gif" original="http://d7.yihaodianimg.com/N09/M07/E1/14/ChEi2VbQLMWAEdd5AABJrwDFuJw54700.jpg"/>
                        </a>
                        <p class="count_down"></p>
                        </div>
                        </div>
                        <div class="sg_tabcontent clearfix">
                        <div class="sg_banner sg_big">
                        <a href="http://s.yhd.com/list/32452" data-shanActivityId="32452" title="进口爱茉莉旗下品牌专场" data-recordTracker="1" data-tc="ad.0.0.16331-30915187.1" data-ref="16331_30915187_1" target="_blank">
                        <img alt="进口爱茉莉旗下品牌专场" src="/beimages/blank.gif" original="http://d8.yihaodianimg.com/N08/M0A/E1/B4/ChEi1lbQR1-AJMQaAADJN_PvMC097300.jpg"/>
                        </a>
                        <p class="count_down"></p>
                        </div>
                        <div class="sg_banner sg_small">
                        <a href="http://s.yhd.com/list/32592" data-shanActivityId="32592" title="ONEBUYE春上新" data-tc="ad.0.0.16332-30915118.1" data-ref="16332_30915118_1" target="_blank">
                        <img alt="ONEBUYE春上新" src="/beimages/blank.gif" original="http://d6.yihaodianimg.com/N06/M03/AC/09/CgQIzlbQLcyAAF1gAABfHdbKAv879300.jpg"/>
                        </a>
                        <p class="count_down"></p>
                        </div>
                        <div class="sg_banner sg_small">
                        <a href="http://s.yhd.com/list/32811" data-shanActivityId="32811" title="阿迪达斯 新品领跑春天" data-tc="ad.0.0.16332-30915123.2" data-ref="16332_30915123_2" target="_blank">
                        <img alt="阿迪达斯 新品领跑春天" src="/beimages/blank.gif" original="http://d6.yihaodianimg.com/N06/M00/AC/0A/CgQIzlbQLlCABrbVAACC03ujlIE33400.jpg"/>
                        </a>
                        <p class="count_down"></p>
                        </div>
                        <div class="sg_banner sg_small">
                        <a href="http://s.yhd.com/list/32736" data-shanActivityId="32736" title="女人节提前购" data-tc="ad.0.0.16332-30915120.3" data-ref="16332_30915120_3" target="_blank">
                        <img alt="女人节提前购" src="/beimages/blank.gif" original="http://d9.yihaodianimg.com/N09/M04/E0/E5/ChEi2FbQLgqAejYUAACUXbfg-u803700.jpg"/>
                        </a>
                        <p class="count_down"></p>
                        </div>
                        <div class="sg_banner sg_small">
                        <a href="http://s.yhd.com/list/32824" data-shanActivityId="32824" title="巴布豆开学季特卖" data-tc="ad.0.0.16332-30915111.4" data-ref="16332_30915111_4" target="_blank">
                        <img alt="巴布豆开学季特卖" src="/beimages/blank.gif" original="http://d6.yihaodianimg.com/N06/M04/AB/0D/CgQIzVbQLFaAXufxAABvF3qrFWU73500.jpg"/>
                        </a>
                        <p class="count_down"></p>
                        </div>
                        </div>
                        <div class="sg_tabcontent clearfix">
                        <div class="sg_banner sg_big">
                        <a href="http://s.yhd.com/list/32704" data-shanActivityId="32704" title="百丽新风尚 钜惠来袭" data-recordTracker="1" data-tc="ad.0.0.16333-30882142.1" data-ref="16333_30882142_1" target="_blank">
                        <img alt="百丽新风尚 钜惠来袭" src="/beimages/blank.gif" original="http://d8.yihaodianimg.com/N07/M06/EC/A5/ChEbvFbO0xeALcavAACv5rxI1Kg80700.jpg"/>
                        </a>
                        <p class="count_down"></p>
                        </div>
                        <div class="sg_banner sg_small">
                        <a href="http://s.yhd.com/list/32590" data-shanActivityId="32590" title="大牌香水专场" data-tc="ad.0.0.16334-30915189.1" data-ref="16334_30915189_1" target="_blank">
                        <img alt="大牌香水专场" src="/beimages/blank.gif" original="http://d8.yihaodianimg.com/N05/M08/11/B2/CgQI0lbQSMmAaXSRAAC6PPuS_7M27400.jpg"/>
                        </a>
                        <p class="count_down"></p>
                        </div>
                        <div class="sg_banner sg_small">
                        <a href="http://s.yhd.com/list/32680" data-shanActivityId="32680" title="浪莎内衣女人节" data-tc="ad.0.0.16334-30915112.2" data-ref="16334_30915112_2" target="_blank">
                        <img alt="浪莎内衣女人节" src="/beimages/blank.gif" original="http://d9.yihaodianimg.com/N08/M02/E1/72/ChEi1VbQLImAXZQbAAC6-aUJRe475800.jpg"/>
                        </a>
                        <p class="count_down"></p>
                        </div>
                        <div class="sg_banner sg_small">
                        <a href="http://s.yhd.com/list/32466" data-shanActivityId="32466" title="杜嘉班纳女人节专场" data-tc="ad.0.0.16334-30915124.3" data-ref="16334_30915124_3" target="_blank">
                        <img alt="杜嘉班纳女人节专场" src="/beimages/blank.gif" original="http://d8.yihaodianimg.com/N05/M05/6D/81/ChEbulbQLrCAYpkqAAA6Ka_WARA62600.jpg"/>
                        </a>
                        <p class="count_down"></p>
                        </div>
                        <div class="sg_banner sg_small">
                        <a href="http://s.yhd.com/list/32566" data-shanActivityId="32566" title="大牌护肤品牌专场" data-tc="ad.0.0.16334-30915183.4" data-ref="16334_30915183_4" target="_blank">
                        <img alt="大牌护肤品牌专场" src="/beimages/blank.gif" original="http://d7.yihaodianimg.com/N10/M02/E4/86/ChEi21bQRpOAUdYmAACwS_MQaQE54100.jpg"/>
                        </a>
                        <p class="count_down"></p>
                        </div>
                        </div>
                        </div>
                        </div>
                        <!--tab end -->
                        </textarea>
            </div>
        </div>
        {{-- 楼层显示 E --}}
    </div>
    <div id="provinceboxDiv"></div>
    <div class="ft_wrap">
        <div id="footerIcon" class="wrap ft_footer_service clearfix">
            <a target="_blank" data-ref="17536_18431204_1" data-tc="ad.0.0.17536-18431204" title="" href="http://cms.yhd.com/cms/view.do?topicId=24123">
                <img src="/beimages/CgQI0lWskgmADBnsAAAPZvcSh3E68900.jpg" alt="">
                <b>正品保障</b>
                <span>正品行货 放心选购</span>
            </a>
            <a target="_blank" data-ref="17539_18431238_1" data-tc="ad.0.0.17539-18431238" title="" href="http://www.yhd.com/marketing/deliveryinfo/deliveryInfo.do">
                <img src="/beimages/ChEbulWsk4iADa_aAAAM544hHN818600.jpg" alt="">
                <b>满68包邮</b>
                <span>满68元 免运费</span>
            </a>
            <a target="_blank" data-ref="17542_18431289_1" data-tc="ad.0.0.17542-18431289" title="" href="http://cms.yhd.com/cms/view.do?topicId=24071">
                <img src="/beimages/CgQIz1WslI-Adao3AAAN5b_ut2I80100.jpg" alt="">
                <b>售后无忧</b>
                <span>7天无理由退货</span>
            </a>
            <a target="_blank" data-ref="17545_18434559_1" data-tc="ad.0.0.17545-18434559" title="" href="http://cms.yhd.com/cms/view.do?topicId=24111">
                <img src="/beimages/ChEi11WsyiyALBbiAAAN9lEEK5M33200.jpg" alt="">
                <b>准时送达</b>
                <span>收货时间由你做主</span>
            </a>
        </div>
        <div class="wrap ft_service_link clearfix">
            <div data-tpa="YHD_GLOBAl_FOOTER_HELP" class="ft_help_list clearfix" id="bottomHelpLinkId">
                <dl>
                    <dt>新手入门</dt>
                    <dd><a target="_blank" data-tcd="AD.9075_4918049_1" data-ref="9075_4918049_1" href="http://cms.yhd.com/cms/view.do?topicId=24091">购物流程</a></dd>
                    <dd><a target="_blank" data-tcd="AD.9075_4918070_2" data-ref="9075_4918070_2" href="http://cms.yhd.com/cms/view.do?topicId=24223">会员制度</a></dd>
                    <dd><a target="_blank" data-tcd="AD.9075_4918532_3" data-ref="9075_4918532_3" href="http://cms.yhd.com/cms/view.do?topicId=24095">订单查询</a></dd>
                    <dd><a target="_blank" data-tcd="AD.9075_4918536_4" data-ref="9075_4918536_4" href="http://cms.yhd.com/cms/view.do?topicId=24102">发票制度</a></dd>
                    <dd><a target="_blank" data-tcd="AD.9075_4918577_5" data-ref="9075_4918577_5" href="http://cms.yhd.com/cms/view.do?topicId=24099">常见问题</a></dd>
                </dl>
                <dl>
                    <dt>支付方式</dt>
                    <dd><a target="_blank" data-tcd="AD.9077_18431408_1" data-ref="9077_18431408_1" href="http://cms.yhd.com/cms/view.do?topicId=24107">货到付款</a></dd>
                    <dd><a target="_blank" data-tcd="AD.9077_18431423_2" data-ref="9077_18431423_2" href="http://cms.yhd.com/cms/view.do?topicId=24126">网上支付</a></dd>
                    <dd><a target="_blank" data-tcd="AD.9077_18431424_3" data-ref="9077_18431424_3" href="http://cms.yhd.com/cms/view.do?topicId=24128">银行转账</a></dd>
                    <dd><a target="_blank" data-tcd="AD.9077_18431439_4" data-ref="9077_18431439_4" href="http://cms.yhd.com/cms/view.do?topicId=24114">礼品卡支付</a></dd>
                    <dd><a target="_blank" data-tcd="AD.9077_18431457_5" data-ref="9077_18431457_5" href="http://cms.yhd.com/cms/view.do?topicId=24104">其他支付</a></dd>
                </dl>
                <dl>
                    <dt>配送服务</dt>
                    <dd><a target="_blank" data-tcd="AD.9079_18431491_2" data-ref="9079_18431491_2" href="http://www.yhd.com/marketing/deliveryinfo/deliveryInfo.do?tp=2091.0.0.0.0.KueGJlQ-11-CZDOe">配送范围及运费</a></dd>
                    <dd><a target="_blank" data-tcd="AD.9079_18432687_3" data-ref="9079_18432687_3" href="http://cms.yhd.com/cms/view.do?topicId=24113">配送进度查询</a></dd>
                    <dd><a target="_blank" data-tcd="AD.9079_18432688_4" data-ref="9079_18432688_4" href="http://cms.yhd.com/cms/view.do?topicId=24483">自提服务</a></dd>
                    <dd><a target="_blank" data-tcd="AD.9079_18432689_5" data-ref="9079_18432689_5" href="http://cms.yhd.com/cms/view.do?topicId=24090">商品验货与签收</a></dd>
                </dl>
                <dl>
                    <dt>售后保障</dt>
                    <dd><a target="_blank" data-tcd="AD.9081_4919277_1" data-ref="9081_4919277_1" href="http://cms.yhd.com/cms/view.do?topicId=24071">退换货政策</a></dd>
                    <dd><a target="_blank" data-tcd="AD.9081_4919280_2" data-ref="9081_4919280_2" href="http://cms.yhd.com/cms/view.do?topicId=24366">退换货流程</a></dd>
                    <dd><a target="_blank" data-tcd="AD.9081_4919302_3" data-ref="9081_4919302_3" href="http://cms.yhd.com/cms/view.do?topicId=24127">退款说明</a></dd>
                    <dd><a target="_blank" data-tcd="AD.9081_13586489_4" data-ref="9081_13586489_4" href="http://cms.yhd.com/cmsPage/show.do?pageId=73523">购买延保服务</a></dd>
                    <dd><a target="_blank" data-tcd="AD.9081_18432701_5" data-ref="9081_18432701_5" href="http://cms.yhd.com/cms/view.do?topicId=24088">联系客服</a></dd>
                </dl>
                <dl>
                    <dt>商家合作</dt>
                    <dd><a target="_blank" data-tcd="AD.9083_18432703_1" data-ref="9083_18432703_1" href="http://cms.yhd.com/cmsPage/show.do?pageId=94952">商家入驻</a></dd>
                    <dd><a target="_blank" data-tcd="AD.9083_18432706_2" data-ref="9083_18432706_2" href="http://cms.yhd.com/cms/view.do?topicId=24063">商必赢</a></dd>
                    <dd><a target="_blank" data-tcd="AD.9083_18432707_3" data-ref="9083_18432707_3" href="http://xue.yhd.com/showlist/rulenew/rule.html">平台规则</a></dd>
                    <dd><a target="_blank" data-tcd="AD.9083_18432708_4" data-ref="9083_18432708_4" href="http://b2b.yhd.com/index.do">企业采购</a></dd>
                </dl>
            </div>
            <!--footer 二维码 begin -->
            <div id="footerQRcode" data-tpa="YHD_GLOBAl_HEADER_MOBILE" class="ft_code_wrap clearfix">
                <div class="ft_mobile_code clearfix">
                    <p>1号店客户端</p>
                    <img alt="1号店客户端二维码" src="/beimages/CgQCr1KW1juAFH9YAAAatCrcuRI48200.png">
                </div>
                <div class="ft_mobile_code clearfix">
                    <p>1号店微信</p>
                    <img alt="1号店官方微信二维码" src="/beimages/CgQCtlKW1RSAe6dIAAAcun_R_Wk58300.jpg">
                </div>
            </div>
        </div>
        <!--footer 二维码 end-->
        <div data-tpa="YHD_GLOBAl_FOOTER" id="footer">
            <p class="ft_footer_link">
                <a target="_blank" data-ref="YHD_FOOTER_NAV_about" href="http://cms.yhd.com/cms/view.do?topicId=24183">关于1号店</a>|<a
                    target="_blank" data-ref="YHD_FOOTER_NAV_team" href="http://www.yhd.com/cms/view.do?topicId=8121">我们的团队</a>|<a
                    target="_blank" data-ref="YHD_FOOTER_NAV_union" href="http://union.yhd.com/passport/login_input.do">网站联盟</a>|<a
                    target="_blank" data-ref="YHD_FOOTER_NAV_hotProduct" href="http://www.yhd.com/hotq/">热门搜索</a>|<a
                    target="_blank" data-ref="YHD_FOOTER_NAV_friendlink" href="http://www.yhd.com/marketing/friendlink.html">友情链接</a>|<a
                    target="_blank" data-ref="YHD_FOOTER_NAV_popwords" href="http://club.yhd.com">1号店社区</a>|<a target="_blank"
                    data-ref="YHD_FOOTER_NAV_hr" href="http://zhaopin.yhd.com">诚征英才</a>|<a rel="nofollow" target="_blank"
                    data-ref="YHD_FOOTER_NAV_apply" href="http://shangjia.yhd.com">商家登录</a>|<a rel="nofollow" target="_blank"
                    data-ref="YHD_FOOTER_NAV_suppliers" href="http://supplier.yhd.com">供应商登录</a>|<a rel="nofollow"
                    target="_blank" data-ref="YHD_FOOTER_NAV_zx110" href="http://www.zx110.org/cxs/">放心搜</a>|<a target="_blank"
                    data-ref="YHD_FOOTER_NAV_eat" href="http://item.yhd.com/">1号店新品</a>|<a target="_blank" data-ref="YHD_FOOTER_NAV_open"
                    href="http://fuwu.yhd.com">开放平台</a>|<a rel="nofollow" target="_blank" href="http://www.wal-martchina.com">沃尔玛</a>
            </p>
            <p class="ft_footer_link">
                <a rel="nofollow" target="_blank" href="http://www.miibeian.gov.cn/">沪ICP备13044278号</a>|<a>合字B1.B2-20130004</a>|<a
                    rel="nofollow" target="_blank" data-ref="YHD_Footer_Licence" href="http://d7.yihaodianimg.com/N06/M00/CC/B5/CgQIzlYwjGmAbQ-9AAHXHGHiMkU51700.jpg">营业执照</a>|<a
                    rel="nofollow" target="_blank" href="http://d8.yihaodianimg.com/N07/M06/45/9B/CgQI0FQRFB2ABIWaAARgpiKdkvg12600.jpg">互联网药品信息服务资格证</a>|<a
                    rel="nofollow" target="_blank" href="http://d6.yihaodianimg.com/N05/M0A/A9/D6/CgQI0lQRE_OATEfzAAO0AcF4zkQ56000.jpg">互联网药品交易服务资格证</a>
            </p>
            <p>Copyright&copy; 1号店网上超市 2007-2016，All Rights Reserved</p>
            <small class="ft_pic_link" id="footerbanner2LazyLoad">
                <a rel="nofollow" target="_blank" href="https://online.unionpay.com/">
                    <img alt="" src="/beimages/CgMBmVDzwyaAaIMBAAAJZgSEr6I65200.jpg">
                </a>
                |
                <a rel="nofollow">
                    <img alt="" src="/beimages/CgQCr1Dzwj2AVUL0AAA-ic2BxNw39500.jpg">
                </a>
                |
                <a rel="nofollow" target="_blank" href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&entyId=20131129184754956">
                    <img alt="" src="/beimages/CgQCrlDzwnKAUkfSAAAIPrrML6M92400.jpg">
                </a>
                |
                <a rel="nofollow" target="_blank" href="http://www.zx110.org/">
                    <img alt="" src="/beimages/CgQCsVDzw0GABUElAADHlvRfNUk94600.jpg">
                </a>
                |
                <a rel="nofollow" target="_blank" href="http://www.shodr.org/">
                    <img alt="" src="/beimages/CgMBmVLfYZGALWNHAAAOxFbda9472600.gif">
                </a>
                |
                <a rel="nofollow" target="_blank" href="http://net.china.com.cn/index.htm">
                    <img alt="" src="/beimages/CgQCr1PQy1CAF7vaAABDexsiEYM24800.jpg">
                </a>
                |
                <a rel="nofollow" target="_blank" href="https://ss.knet.cn/verifyseal.dll?sn=e13050631010040492h5mq000000&ct=df&a=1&pa=500267">
                    <img alt="" src="/beimages/CgQCrlPYTqCASlHXAAAd82JE0eA31000.png">
                </a>
                |
                <a rel="nofollow" target="_blank" href="https://search.szfw.org/cert/l/CX20150608010268010812">
                    <img alt="" src="/beimages/ChEi1FYXHcOAVk_WAAAL2r2-yfo10200.jpg">
                </a>
                |
                <a rel="nofollow" target="_blank" href="http://club.yhd.com/guide/922?tzm=shanghaigongshangju">
                    <img alt="" src="/beimages/CgQI0lXmj5iAPoZJAAAMUQgIYEc49100.jpg">
                </a>
                |
            </small>
        </div>
    </div>
    <!--楼层电梯 begin -->
    <div data-tpa="YHD_HOMEPAGE_FLOORNAV" class="floor_left_box">
        <a data-tpc="1" href="javascript:void(0)">
            <i class="left_iconfont"></i>
            <em class="two_line">进口海购</em>
        </a>
        <a data-tpc="8" href="javascript:void(0)">
            <i class="left_iconfont"></i>
            <em class="two_line">手机家电</em>
        </a>
        <a data-tpc="9" href="javascript:void(0)">
            <i class="left_iconfont"></i>
            <em>团购</em>
        </a>
        <a data-tpc="10" href="javascript:void(0)">
            <i class="left_iconfont"></i>
            <em>闪购</em>
        </a>
        <a class="leftfloor_red toTop" href="javaScript:void(0);">
            <i class="left_iconfont"></i>
            <em class="two_line">返回顶部</em>
        </a>
    </div>
    <script src="/bejs/global_index_top_new.js"></script>
    <script src="/bejs/index.js"></script>
    <script src="/bejs/global_event_listen.js"></script>
    <div>
        <span style="color: #FFFFFF">
            14!$
            4%&
            4#@
            10!$
            ,
        </span>
        <span style="color: #FFFFFF">1560110</span>
    </div>
    <script>
        (function ($) {
            try {
                document.getElementById("headerAllProvince").style.height = "300px"; (function () { var a = $(".headerNavWrap").find("a:contains('1号钱包')"); if (a) { var b = a.next(); if (b) { } } })();
            } catch (err) { }
            try {
                window.webPercent = 60;
            } catch (err) { }
            try {
                function sendGtags() { var a = $.cookie("guid"); var c = $.cookie("provinceId"); if ($.trim(a) != "" && $.trim(c) != "") { var b = new Image(); b.src = "http://cms.gtags.net/p?a=13&xid=" + a + "&yhd_cityid=" + c } } $(function () { setTimeout(sendGtags, 30 * 1000) });
            } catch (err) { }
            try {
                function sendpingyou() { var a = $.cookie("guid"); if ($.trim(a) != "") { var b = "timg" + new Date().getTime(); window[b] = new Image(1, 1); window[b].src = "http://cm.ipinyou.com/yhd/cms.gif?sid=" + a } } $(function () { setTimeout(sendpingyou, 30 * 1000) });
            } catch (err) { }
            try {
                function sendGdt() { var a = $.cookie("guid"); if ($.trim(a) != "") { var b = "timg" + new Date().getTime(); window[b] = new Image(1, 1); window[b].src = "http://cm.e.qq.com/cm.fcg?a=1639782535&j=" + a + "&time=" + new Date().getTime() } } $(function () { setTimeout(sendGdt, 30 * 1000) });
            } catch (err) { }
            try {
                (function () { function a() { var b = $.cookie("guid"); if ($.trim(b) != "") { var c = "timg" + new Date().getTime(); window[c] = new Image(1, 1); window[c].src = "http://cm.pos.baidu.com/dmpcm?userid=10644715&local_cookie=" + b + "&timestamp=" + new Date().getTime() } } setTimeout(a, 30 * 1000) })();
            } catch (err) { }
            try {
                (function () { function a() { var b = $.cookie("guid"); if ($.trim(b) != "") { var c = "timg" + new Date().getTime(); window[c] = new Image(1, 1); window[c].src = "http://dsp.brand.sogou.com/sl?userid=1379438&local_cookie=" + b + "&timestamp=" + new Date().getTime() } } setTimeout(a, 30 * 1000) })();
            } catch (err) { }
            try {
                (function () { var a = $("#loucengBanner"); a.attr("id", "loucengBanner_update"); jQuery(function () { setTimeout(function () { var b = $("#loucengBanner_update"); b.attr("id", "loucengBanner"); YHD.HomePage.delBlankAjaxAD() }, 3000) }) })();
            } catch (err) { }
        })(jQuery)
    </script>
    <textarea style="display:none" id="ajaxReplaceAdvCodesData">INDEX2_FLOORTG_ZLXF_MR,INDEX2_FLOOR7_LUNBO_PIC2,INDEX2_FLOORXH_LUNBO_PIC2,INDEX2_FLOOR3C_LUNBO_PIC2,INDEX2_FLOORLB_LUNBO_PIC2,INDEX2_FLOOR9_LUNBO_PIC2,INDEX2_FLOOR8_LUNBO_PIC2,INDEX2_FLOORFOOD_ZLXF_MR,INDEX2_FLOORSX_ZLXF_MR,INDEX2_FLOORFOOD_LUNBO_PIC2,INDEX2_FLOORXH_ZLSF_MR,INDEX2_FLOOR9_ZLXF_MR,INDEX2_FLOORLB_ZLXF_MR,INDEX2_FLOORSX_LUNBO_PIC2,INDEX2_FLOOR7_ZLXF_MR,INDEX2_SALEAD_LOUCENGSHANGFANG_DEFAULT,INDEX2_FLOOR3C_ZLSF_MR,INDEX2_FLOORXH_ZLXF_MR,INDEX2_FLOOR3C_ZUOLANXIAFANGPIC_DEFAULT,INDEX2_FLOOR8_ZLXF_MR</textarea>
    <textarea style="display:none" id="ajaxReplaceOrientationsData">INDEX2_FLOORFOOD_YL_ZXGG,INDEX2_FLOORFOOD_YL_ZSGG,INDEX2_FLOORFOOD_YL_YSGG,INDEX2_FLOORFOOD_YL_YXGG</textarea>

</body>

</html>
