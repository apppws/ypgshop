<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="IE=Edge" http-equiv="X-UA-Compatible">
    <meta content="webkit" name="renderer">
    <meta content="no-transform" http-equiv="Cache-Control">
    <meta content="no-siteapp" http-equiv="Cache-Control">
    <meta content="yhd://detail/?body={" pmId":73725,"provinceId":6}" name="ios">
    <meta content="yhd://detail/?body={" pmId":73725,"provinceId":6}" name="android">
    <meta content="yhd://detail/?body={" pmId":73725,"provinceId":6}" name="ipad">
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/jquery.pin.js"></script>
<script src="/js/jqzoom-core.js"></script>
<script src="/js/jqmove.js"></script>
    <meta content="http://item.m.yhd.com/item/73725" name="h5">
    <script type="text/javascript">
        (function () {
            var ua = window.navigator.userAgent;
            var re = /Android|iPod|iTouch|iPhone|iPad|BlackBerry|SymbianOS|SymbOS|Windows Phone OS|WAP|Kindle|pad|pod/i;
            var iosRe = /iPod|iTouch|iPhone/i;
            var ipadRe = /iPad/i;
            var androidRe = /Android/i;
            if (re.test(ua)) { // 当前设备为移动设备
                var meta = document.getElementsByTagName('meta');
                var iosLink, andriodLink, ipadLink, h5Link;
                for (var i = 0; i < meta.length; i++) {
                    if (meta[i].getAttribute('name') == 'ios') {
                        iosLink = meta[i].getAttribute('content');
                    } else if (meta[i].getAttribute('name') == 'android') {
                        andriodLink = meta[i].getAttribute('content');
                    } else if (meta[i].getAttribute('name') == 'ipad') {
                        ipadLink = meta[i].getAttribute('content');
                    } else if (meta[i].getAttribute('name') == 'h5') {
                        h5Link = meta[i].getAttribute('content');
                    }
                }
                var url = window.location.href; // 当前请求
                var param = window.location.search;// 请求？后的参数
                if (h5Link && h5Link != "") {
                    if (param && param != "") {
                        if (h5Link.indexOf("?") > 0) {
                            h5Link = h5Link + "&" + param.substring(1) + "&cpType=1";
                        } else {
                            h5Link = h5Link + param + "&cpType=1";// 获取原链接中的trackeru
                        }
                    } else {
                        if (h5Link.indexOf("?") > 0) { // 原有链接中含有?
                            h5Link = h5Link + "&cpType=1";
                        } else {
                            h5Link = h5Link + "?cpType=1";
                        }
                    }
                }
                if (url.indexOf('openapp') < 0) { //当前请求不包含 openapp
                    if (h5Link && h5Link != "" && !ipadRe.test(ua)) { //且不是 ipad
                        window.location = h5Link;
                    }
                } else {
                    // ios 设备
                    if (iosRe.test(ua)) {
                        if (iosLink && iosLink != "") {
                            window.location = iosLink;
                        }
                        if (h5Link && h5Link != "") {
                            setTimeout("window.location = '" + h5Link + "';", 2000);
                        }
                    } else if (ipadRe.test(ua)) { // ipad
                        if (ipadLink && ipadLink != "") {
                            window.location = ipadLink;
                        }
                    } else if (androidRe.test(ua)) { // android
                        if (andriodLink && andriodLink != "") {
                            document.writeln("<Iframe src='" + andriodLink + "' width='100%' height='2300' scrolling='no' frameborder='0'></Iframe>");
                        }
                        if (h5Link && h5Link != "") {
                            setTimeout("window.location = '" + h5Link + "';", 2000);
                        }
                    } else {
                        if (h5Link && h5Link != "") {
                            window.location = h5Link;
                        }
                    }
                }
            }
        })();
    </script>
    <meta content="YHD_DETAIL.73725" name="tp_page">
    <title>商品详情</title>
    <meta content="玉棠 白砂糖 500g/袋" name="Keywords">
    <meta content="1号店网上超市在线销售玉棠 白砂糖 500g/袋产品，本频道提供玉棠 白砂糖 500g/袋的最新品牌、产地、促销、价格、评论、正品、图片等相关信息" name="Description">
    <meta content="format=html5; url=http://item.m.yhd.com/item/73725" name="mobile-agent">
    <link href="detail.html?73725" rel="canonical">
    <!--css start-->
    <link type="text/css" rel="stylesheet" href="/becss/global_site_base.css">
    <link type="text/css" rel="stylesheet" href="/becss/product_detail_c_page.css">
    <!--css end-->
    <!--js start-->
    <script type="text/javascript">
        var URLPrefix = { "busystockDomain": "http://gps.yhd.com", "shop": "http://shop.yhd.com", "busystock": "http://gps.yhd.com", "TipDate": "2012-09-29", "prodDescDomain": "http://item-home.yhd.com", "mallImgDomain": ".yihaodianimg.com", "BjMobileUrl": "https://service.bj.10086.cn/api/oauth", "search": "list.html?", "contractPhoneBuyUrl": "http://cart.yhd.com/cart/opt/fastBuyPhone.do", "detailDomain": "http://item-home.yhd.com", "annualPromotionUrl": "http://cms.yhd.com/cmsPage/getCmsMould.do?pageId=85676&mouldId=1133420&provinceId=", "commentZoneMall": "http://e.1mall.com/front-pe", "productDetailHost": "http://www.yhd.com", "central": "http://www.yhd.com", "yhmall": "http://mall.yihaodian.com", "cartDomain": "http://cart.yhd.com", "centralShop": "http://shop.yhd.com", "couponDomain": "http://coupon.yhd.com", "yaowang": "http://www.111.com.cn", "cmsdomain": "http://cms.yhd.com", "image": "http://image.yihaodian.com", "search_keyword": "http://search.yhd.com", "sitedomainmall": ".1mall.com", "products_stock": "http://gps.yhd.com", "commentZoneYhd": "http://e.yhd.com/front-pe", "centralImgDomain": ".yihaodianimg.com", "statics": "http://image.yihaodianimg.com/front-detail", "chongzhiURL": "http://life.yhd.com", "weiboDomain": "http://weibo.yihaodian.com", "pms": "http://pms.yhd.com", "my_statics": "http://image.yihaodianimg.com/statics", "passportmall": "https://passport.1mall.com", "seoLinkMaxSize": "20", "grouponDomain": "http://t.yhd.com", "idcDetailDomain": "http://item.yhd.com", "sitedomain": ".yhd.com", "search_other": "http://search-databus02.int.yihaodian.com:8080", "tryUrl": "http://try.yhd.com", "yhdProductCheapURL": "http://cms.yhd.com/cmsPage/show.do?pageId=50983&provinceId=", "tracker": "tracker.yhd.com", "yhdFreshFoodURL": "http://e.yhd.com/front-pe/getPEByPm.do", "h5InterfaceUrl": "http://interface.m.yhd.com", "footFriendLink": "http://www.yihaodian.com/friendlink/index.do", "serverRoom": "shanghai", "detailPMD50URL": "http://cms.yhd.com/cmsPage/show.do?pageId=52106", "h5DetailUrl": "http://item.m.yhd.com", "uploadPostUrl": "http://upload.yihaodian.com/upload/UploadAction", "my": "http://my.yhd.com", "mymall": "http://my.1mall.com", "selfroot": "http://www.yhd.com", "yiwangauth": "http://mall.yiwang.cn", "productDetailUrl": "http://www.yhd.com", "jiajuchanneldomain": "list.html?", "passport": "https://passport.yhd.com", "shanURL": "http://s.yhd.com", "mall": "http://www.1mall.com" };
        var headerType = "detail";
        var favorite = "1号店，只为更好的生活";
        var hostUrl = "www.yhd.com";
        var httpUrl = "http://www.yhd.com";
        var no3wUrl = "yhd.com";
        var simpleUrl = "yhd";
        var chineseUrl = "1号店";
        var imagePath = "http://image.yihaodianimg.com/front-detail/global/images";
        var currSiteId = 1;
        var currBsSiteId = 1;
        var currSiteType = 1;
        var siteStyle = 1;
        var siteFlag = 1;
        var currDomain = "http://www.yhd.com";
        var oppositeDomain = "http://www.yhd.com";
        var busystock = "http://gps.yhd.com";
        var multiSearch = "true";
        var globalShowMarketPrice = "0";
        var isIndex = 0;
        var currVersionNum = 1554974;
        var projectVersionNum = "0";
        var currProvinceId = 6;
        var lazyLoadImageObjArry = lazyLoadImageObjArry || [];
        var isFixTopNav = false;
        var globalSearchSelectFlag = "1";
        var globalSearchHotkeywordsFlag = "1";
        var globalTopPrismFlag = "1";
        var globalTpCheckFlag = "1";
        var _globalSpmDataModelJson = { "SPM_COM": { "ADD_CART": 1, "ADD_FAV": 2, "DELETE": 6, "TURN_PAGE": 8, "SETTLEMENT": 7 }, "YHD_DETAIL": "15", "SPM_DATA_TYPE": { "ADVANCED_TAG": 33, "MINGPIN_CAT": 32, "COMMENT_TAG": 28, "SEARCH_SCENE_AD": 36, "KEYWORD": 25, "BASICS_TAG": 34, "TRACKER_CODE": 16, "SMARTBOX_ATTR": 23, "CATEGORY": 9, "SEARCH_TURN_PAGE": 20, "LANDING": 6, "SEARCH_BRAND_SHOP": 35, "PROMOTION": 8, "MSG_TYPE": 31, "PRODUCT": 5, "SEARCH_FILTER": 21, "AD": 12, "SHOP": 26, "TUAN": 11, "SMARTBOX_KW": 22, "MINGPIN": 17, "PROVINCE": 14, "SEARCH_WORD": 15, "COUPON": 7, "BRAND": 10, "SEARCH_SORT": 19, "SMARTBOX_CATE": 24 }, "SPM_SYSTEM_TYPE": { "PMS": 4, "EDM": 30, "AD": 13, "CATEGORY": 29, "SEARCH": 3, "MANUAL": 2, "TRY": 27, "STORE": 18, "AUTO": 1 }, "SPM_AREA": { "PC_REVIEWDETAIL_SHOW": 1684, "DETAIL_SKU_VIEW_VIEW": 580, "DATAIL_LEFT_CHEAPADPM": 584, "PC_DETAIL_DESC_VIDEO": 2552, "PC_REVIEWDETAIL_ATTRIBUTE": 1681, "DETAIL_BTM_VIEW_RECOMMEND": 2623, "YHD_GLOBAl_PRISM": 22, "DETAIL_SKU_CARTBTN_0": 574, "YHD_GLOBAl_HEADER_RIGHT_AD": 18, "YHD_GLOBAl_HEADER_CATEGORY_0": 156, "STORE_DETAIL_LEFT_COLUMN": 2713, "STORE_DETAIL_RIGHT_UP_COLUMN": 2714, "DETAIL_SKU_PROMOTION_0": 568, "YHD_GLOBAl_HEADER_CATEGORY_1": 157, "YHD_GLOBAl_HEADER_CATEGORY_2": 158, "YHD_GLOBAl_HEADER_CATEGORY_3": 159, "DETAIL_SKU_NOTSALEBTN": 576, "YHD_GLOBAl_HEADER_CATEGORY_4": 160, "DETAIL_LEFT_REL_PRODUCTS": 588, "YHD_GLOBAl_HEADER_CATEGORY_5": 161, "YHD_GLOBAl_HEADER_CATEGORY_6": 162, "YHD_GLOBAl_HEADER_ORDER": 155, "DETAIL_CRUMBBOX": 561, "YHD_GLOBAl_HEADER_CATEGORY_7": 163, "YHD_GLOBAl_HEADER_CATEGORY_8": 164, "YHD_GLOBAl_HEADER_CATEGORY_9": 165, "DETAIL_PROD_DES_FIX_LAYER": 594, "DETAIL_LEFT_HOTSALE_LIST": 587, "DATAIL_LEFT_REL_BRAND": 583, "DETAIL_SKU_PAY_WAYS": 582, "DETAIL_SKU_PRICETAG": 565, "DETAIL_MAIN_PIC_SWITCH": 564, "DETAIL_SKU_CHOICE": 570, "YHD_GLOBAl_TOP_PROVINCE": 153, "PC_REVIEWDETAIL_REVIEWCOUNT_TAB": 1683, "STORE_DETAIL_SIGN_AND_NAV": 2712, "DETAIL_SHOP_HEADER": 559, "YHD_GLOBAl_FOOTER_BROWSE_RELATED": 19, "DETAIL_BTM_BUY_RECOMMEND": 2622, "YHD_GLOBAl_HEADER_CATEGORY": 15, "DATAIL_LEFT_VIEW_BUY": 585, "analysis-tab": 2583, "YHD_GLOBAl_HEADER_LOGO": 11, "YHD_GLOBAl_FOOTER": 20, "DETAIL_RECOMM_COMBO": 590, "DETAIL_RELATED_CAT_WRAP": 2621, "DETAIL_SKU_CARTBTN": 575, "YHD_GLOBAl_TOP_UNLOGIN": 150, "DETAIL_PROD_DES_TAB": 593, "STORE_DETAIL_RIGHT_DOWN_COLUMN": 2715, "DETAIL_SKU_3AREAS_0": 577, "DETAIL_SKU_3AREAS": 578, "PC_DETAIL_PMS_CONTENT": 2627, "YHD_GLOBAl_HEADER_CATEGORY_13": 169, "YHD_GLOBAl_HEADER_CATEGORY_12": 168, "YHD_GLOBAl_HEADER_CATEGORY_11": 167, "YHD_GLOBAl_HEADER_MOBILE": 14, "YHD_GLOBAl_HEADER_CATEGORY_10": 166, "DETAIL_MAIN_PIC_SWITCH_0": 563, "DETAIL_SKU_PROMOTION": 569, "YHD_GLOBAl_TOP_USER": 7, "YHD_GLOBAl_HEADER_CATEGORY_15": 595, "YHD_GLOBAl_HEADER_CATEGORY_14": 170, "DETAIL_SKU_LIST": 571, "YHD_GLOBAl_HEADER_CART": 149, "DETAIL_HOT10_RECOMM": 2619, "DETAIL_SKU_HOTTAG_0": 566, "DETAIL_SKU_COMBO": 572, "YHD_GLOBAl_TOP_BANNER": 9, "YHD_GLOBAl_HEADER_HOT_SEARCH": 13, "YHD_GLOBAl_LEFT_CNY": 2655, "YHD_GLOBAl_HEADER_SEARCH": 12, "YHD_GLOBAl_TOP_MENU": 8, "DETAIL_LEFT_BUY_BUY": 586, "DETAIL_VIEW_VIEW": 592, "YHD_GLOBAl_HEADER_SEARCHSHOP": 2058, "PC_REVIEWDETAIL_POINTRULE": 1682, "DETAIL_SKU_HOTTAG": 567, "DETAIL_SKU_RIGHT": 579, "DETAIL_SKU_1TON_WAREHOUSE": 581, "DETAIL_SAVING_COMBO": 591, "DETAIL_RECOMM_COMBO_JP": 2640, "DETAIL_SKU_WARRANTY": 573, "YHD_GLOBAl_TOP_MSG": 2549, "YHD_GLOBAl_HEADER_MINICART": 17, "YHD_GLOBAl_TOP_MESSAGE": 152, "YHD_GLOBAl_HEADER_WELFARE": 154, "YHD_GLOBAl_HEADER_NAV": 16, "YHD_GLOBAl_FOOTER_HELP": 21, "YHD_GLOBAl_TOP_LOGIN": 151, "analysis-spread": 2584, "DETAIL_CRUMBBOX_0": 560, "DATAIL_NO_GOODS_RECOMMAND": 2620, "YHD_GLOBAl_TOP_CURTAIN": 10, "DETAIL_MAINPIC_PROD_INFO": 562, "DETAIL_LEFT_SHOP_DSR": 589 } };
    </script>
    <!--js end-->
    <link rel="stylesheet" type="text/css" href="/becss/global_yhdLib.css">
    <link type="text/css" rel="stylesheet" href="/becss/cAnalysis.css">
    <link rel="stylesheet" href="/css/base.css" type="text/css">
	<link rel="stylesheet" href="/css/global.css" type="text/css">
	<link rel="stylesheet" href="/css/goods.css" type="text/css">
	<link rel="stylesheet" href="/css/common.css" type="text/css">
	<link rel="stylesheet" href="/css/bottomnav.css" type="text/css">

	<!--引入jqzoom css -->
	<link rel="stylesheet" href="/css/jqzoom.css" type="text/css">

	<script type="text/javascript" src="/js/jquery-1.8.3.min.js"></script>
	<script type="text/javascript" src="/js/goods.js"></script>
	<script type="text/javascript" src="/js/jqzoom-core.js"></script>


</head>

<body data-param="{" globalPageCode":"YHD_ITEM","currPageId":"0"}" id="comParamId" class="w1200">
    <div style="display:none;" id="yhd_pop_win" class="pop_win"></div>
    <div class="hd_header_wrap">
        <div style="display:none" id="global_error_log"></div>
        <script>
            (function (w) {
                // 定义一个数组存储页面error log。
                var errorLogs = [],
                    ERROR = 'error',
                    URL = 'url',
                    LINE = 'line',
                    flag = 0;
                var _this = {
                    globalErrorWrap: function (sMsg, sUrl, sLine) {
                        var log = {
                            MSG: sMsg,
                            URL: sUrl,
                            LINE: sLine
                        };
                        errorLogs.push(log);
                        if (flag == 1) {
                            _this.globalNodifyErrorLog();
                        }
                        return false;
                    },
                    //处理error log集合
                    globalNodifyErrorLog: function () {
                        flag = 1;
                        if (errorLogs != null && errorLogs.length > 0) {
                            for (var i = 0; error = errorLogs[i]; i++) {
                                appendErrorLog(error)
                            }
                            errorLogs = [];
                        }
                    }
                };
                //处理单个error
                function appendErrorLog(log) {
                    var error = [];
                    for (var i in log) {
                        error.push(i + ":" + log[i] + "<br>");
                    }
                    var errorLogDiv = document.getElementById("global_error_log");
                    var div = document.createElement("div");
                    div.innerHTML = error.join("");
                    errorLogDiv.appendChild(div);
                }
                w["globalErrorLog"] = _this;
            })(window);
            window.onerror = globalErrorLog.globalErrorWrap;
        </script>
        <div id="global_top_bar" class="hd_global_top_bar">
            <div class="wrap clearfix">
                <div class="hd_topbar_left clearfix">
                    <div data-tpa="YHD_GLOBAl_TOP_UNLOGIN" id="global_unlogin" data-addclass="hd_unlogin_hover" class="hd_unlogin_wrap">
                        <div class="hd_login clearfix">
                            <span class="hd_hi">Hi,</span>
                            请<a rel="nofollow" id="global_top_bar_loginLink" data-ref="YHD_TOP_login" href="login.html"
                                class="blue_link">&nbsp;登录&nbsp;</a>/<a rel="nofollow" data-ref="YHD_TOP_register" href="reg.html"
                                class="blue_link">&nbsp;注册</a>
                        </div>
                        <div class="hd_user_center">
                            <div class="clearfix">
                                <div class="fl">
                                    <a data-ref="YHD_TOP_userpic_nonlogin" target="_blank" href="member_index.html"
                                        class="hd_avata_box"></a>
                                </div>
                                <div class="hd_growth_box">
                                    <a data-ref="YHD_TOP_vip_nonlogin" target="_blank" href="http://vip.yhd.com" class="hd_vip_earn">会员专享价，V3免费购</a>
                                    <p class="hd_my_yhd"><a data-ref="YHD_TOP_myyihaodian_nonlogin" target="_blank"
                                            href="member_index.html">欢迎进入我的1号店</a></p>
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
                    <div data-tpa="YHD_GLOBAl_TOP_PROVINCE" id="headerSelectProvince" class="hd_indxProvce fl" style="display: none;">
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
                            <img original="http://d7.yihaodianimg.com/N00/M04/0E/56/CgQCtlKW1RSAe6dIAAAcun_R_Wk58300.jpg"
                                alt="扫描二维码<br />关注1号店微信" src="/beimages/blank.gif">
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <div class="warp_box">
            <div id="site_header" class="wrap hd_header hd_detail_header clearfix">
                <div data-tpa="DETAILl_LOGO" class="hd_logo_area fl fab_header clearfix" id="logo_areaID">
                    <a data-ref="0" class="fl" href="index.html">
                        <img src="/beimages/CgQDsVTLOkWAF--gAAAK5UNpfUI26600.png">
                    </a>
                    <div class="logo_area_right fl">
                        <a data-ref="0" href="supermarket.html">
                            <img src="/beimages/CgQI01TLOQKACSTTAAAHWzwQK6A23600.jpg">
                        </a>
                    </div>
                </div>
                <div data-tpa="DETAIL_THREE_ICON" class="hd_service clearfix">
                </div>
                <div class="hd_head_search">
                    <div class="hd_search_form clearfix">
                        <div data-type="1" id="hdSearchTab" class="hd_serach_tab">
                            <a data-type="1" href="javascript:;">商品</a>
                            <a data-type="2" href="javascript:;">店铺</a>
                            <i></i>
                        </div>
                        <div data-tpa="YHD_GLOBAl_HEADER_SEARCH" class="hd_search_wrap clearfix">
                            <input type="text" x-webkit-grammar="builtin:translate" onwebkitspeechchange="emptySearchBar();"
                                x-webkit-speech="" data-autofocus="true" autocomplete="off" maxlength="100" style="color: rgb(153, 153, 153);"
                                url="http://cms.yhd.com/sale/vdfXODXbBvo" original="2016宠爱女人节-美容护理满199减100送100！" id="keyword"
                                value="2016宠爱女人节-美容护理满199减100送100！" name="keyword" class="hd_input_test">
                            <!--搜索提示 begin-->
                            <div onmouseover="$('#searchSuggest').show()" style="display:none" class="hd_search_tips_result hd_search_history"
                                id="searchSuggest"></div>
                            <button istrkcustom="1" onclick="javascript:addTrackPositionToCookie('1','search');searchMeForClick();"
                                id="hdSearchBtn" class="hd_search_btn" type="button">搜 索</button>
                        </div>
                        <button onclick="javascript:addTrackPositionToCookie('1','search_shop');" style="display:none;"
                            id="hdShopBtn" type="button" class="hd_shop_btn">搜本店</button>
                        <button onclick="javascript:addTrackPositionToCookie('1','search_tuan');" style="display:none;"
                            id="hd_search_tuan" type="button" class="hd_shop_btn">搜团购</button>
                        <button onclick="javascript:addTrackPositionToCookie('1','search_haigou');" style="display:none;"
                            id="hd_search_haigou" type="button" class="hd_hg_btn">搜海购</button>
                    </div>
                    <p data-specialhotword="{" text":"we are 发沐类","linkUrl":"http://cms.yhd.com/sale/aUXXOXlBBNJ","style":"0","tc":"ad.0.0.14585-31065967","tce":null,"perTracker":"14585_31065967_1"}"
                        data-tpa="YHD_GLOBAl_HEADER_HOT_SEARCH" class="hd_hot_search" id="hotKeywordsShow">
                        <a data-tc="SEARCH.0.KEYWORD.shkw_%E5%A7%9C%E6%B1%81%E7%BA%A2%E7%B3%96.1" data-ref="shkw_%E5%A7%9C%E6%B1%81%E7%BA%A2%E7%B3%96"
                            href="http://search.yhd.com/c0-0/k%E5%A7%9C%E6%B1%81%E7%BA%A2%E7%B3%96/6/" target="_blank"
                            title="姜汁红糖">姜汁红糖</a> <a data-tc="SEARCH.0.KEYWORD.shkw_%E5%85%83%E8%B4%9E%E7%B3%96.2"
                            data-ref="shkw_%E5%85%83%E8%B4%9E%E7%B3%96" href="http://search.yhd.com/c0-0/k%E5%85%83%E8%B4%9E%E7%B3%96/6/"
                            target="_blank" title="元贞糖">元贞糖</a> <a data-tc="SEARCH.0.KEYWORD.shkw_%E7%BB%86%E7%A0%82%E7%B3%96.3"
                            data-ref="shkw_%E7%BB%86%E7%A0%82%E7%B3%96" href="http://search.yhd.com/c0-0/k%E7%BB%86%E7%A0%82%E7%B3%96/6/"
                            target="_blank" title="细砂糖">细砂糖</a> <a data-tc="SEARCH.0.KEYWORD.shkw_%E7%8E%89%E6%A3%A0%E7%99%BD%E7%A0%82%E7%B3%96.4"
                            data-ref="shkw_%E7%8E%89%E6%A3%A0%E7%99%BD%E7%A0%82%E7%B3%96" href="http://search.yhd.com/c0-0/k%E7%8E%89%E6%A3%A0%E7%99%BD%E7%A0%82%E7%B3%96/6/"
                            target="_blank" title="玉棠白砂糖">玉棠白砂糖</a> <a data-tc="SEARCH.0.KEYWORD.shkw_%E7%99%BD%E7%B3%96%E7%99%BD%E7%A0%82%E7%B3%96.5"
                            data-ref="shkw_%E7%99%BD%E7%B3%96%E7%99%BD%E7%A0%82%E7%B3%96" href="http://search.yhd.com/c0-0/k%E7%99%BD%E7%B3%96%E7%99%BD%E7%A0%82%E7%B3%96/6/"
                            target="_blank" title="白糖白砂糖">白糖白砂糖</a> <a data-tc="SEARCH.0.KEYWORD.shkw_%E5%8F%A4%E6%96%B9%E7%BA%A2%E7%B3%96.6"
                            data-ref="shkw_%E5%8F%A4%E6%96%B9%E7%BA%A2%E7%B3%96" href="http://search.yhd.com/c0-0/k%E5%8F%A4%E6%96%B9%E7%BA%A2%E7%B3%96/6/"
                            target="_blank" title="古方红糖">古方红糖</a> <a data-tc="SEARCH.0.KEYWORD.shkw_%E7%99%BD%E6%B2%99%E7%B3%96.7"
                            data-ref="shkw_%E7%99%BD%E6%B2%99%E7%B3%96" href="http://search.yhd.com/c0-0/k%E7%99%BD%E6%B2%99%E7%B3%96/6/"
                            target="_blank" title="白沙糖">白沙糖</a> <a data-tc="SEARCH.0.KEYWORD.shkw_%E8%80%81%E5%86%B0%E7%B3%96.8"
                            data-ref="shkw_%E8%80%81%E5%86%B0%E7%B3%96" href="http://search.yhd.com/c0-0/k%E8%80%81%E5%86%B0%E7%B3%96/6/"
                            target="_blank" title="老冰糖">老冰糖</a> <a data-tc="SEARCH.0.KEYWORD.shkw_%E7%BB%B5%E7%99%BD%E7%B3%96.9"
                            data-ref="shkw_%E7%BB%B5%E7%99%BD%E7%B3%96" href="http://search.yhd.com/c0-0/k%E7%BB%B5%E7%99%BD%E7%B3%96/6/"
                            target="_blank" title="绵白糖">绵白糖</a> <a data-tc="SEARCH.0.KEYWORD.shkw_%E9%BB%84%E5%86%B0%E7%B3%96.10"
                            data-ref="shkw_%E9%BB%84%E5%86%B0%E7%B3%96" href="http://search.yhd.com/c0-0/k%E9%BB%84%E5%86%B0%E7%B3%96/6/"
                            target="_blank" title="黄冰糖">黄冰糖</a></p>
                </div>
                <div id="hdPrismWrap" class="hd_prism_wrap">
                    <div data-tpa="YHD_GLOBAl_HEADER_WELFARE" id="hdPrismCoupon" class="hd_prism hd_welfare">
                        <u id="hdPrismCouponNum" style="display:none;"></u>
                        <a class="hd_prism_tab" data-ref="top_prism_coupon" href="javascript:void(0);">
                            <em></em>
                            <p>福利</p>
                            <i></i>
                        </a>
                        <div id="hdPrismCouponList" class="hd_prism_show global_loading">
                        </div>
                    </div>
                    <div data-tpa="YHD_GLOBAl_HEADER_ORDER" id="hdPrismOrder" class="hd_prism hd_order">
                        <u id="hdPrismOrderNum" style="display:none;"></u>
                        <a class="hd_prism_tab" data-ref="top_prism_order" href="javascript:void(0);">
                            <em></em>
                            <p>订单查询</p>
                            <i></i>
                        </a>
                        <div id="hdPrismOrderList" class="hd_prism_show global_loading">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="hd_header_nav" id="headerNav">
            <div class="hd_fixed_bg"></div>
            <div class="wrap clearfix">
                <div class="not_index" id="allSortOuterbox">
                    <div data-tpa="YHD_GLOBAl_HEADER_CATEGORY_0" class="hd_all_sort_link fl"><a class="fl" href="http://www.yhd.com/marketing/allproduct.html"
                            data-ref="YHD_TOP_index_5">所有商品分类</a></div>
                    <div style="display:none;" id="allCategoryHeader" class="hd_allsort_out_box_new">
                    </div>
                </div>
                <div data-tpa="YHD_GLOBAl_HEADER_NAV" id="global_menu" class="headerNavWrap">
                    <ul class="headerNavMain clearfix" id="wideScreenTabShowID">
                        <li style="z-index:799"><a data-tcd="AD.2704_13664428_1" data-ref="2704_13664428_1" href="index.html">首页</a></li>
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
                <div data-version="1" data-mrt="1" data-tpa="YHD_GLOBAl_HEADER_CART" id="miniCart" class="hd_mini_cart">
                    <i class="hd_c_arrow"></i>
                    <u id="in_cart_num" class="hd_c_num none" style="display: none;"></u>
                    <a data-ref="YHD_TOP_MINICART" href="cart.html" class="hd_prism_cart">
                        <em></em>购物车
                    </a>
                    <div id="showMiniCartDetail" class="hd_cart_show none">
                    </div>
                </div>
                <div class="hd_mobile_wrap">
                    <a data-tpa="YHD_GLOBAl_HEADER_RIGHT_AD" data-ref="17102_28453146_1" target="_blank" href="http://cms.yhd.com/sale/157119"
                        id="globalRightPicsV2">
                        <i><img alt="掌上1号店" src="/beimages/ChEi2lYI4L-AB-YcAAAgFI-WAls08000.gif"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- cache enable -->
    <!--content start-->
    <input type="hidden" value="9928" autocomplete="off" id="productId">
    <input type="hidden" value="0" id="normativeId" autocomplete="off">
    <input type="hidden" value="73725" id="productMercantId" autocomplete="off">
    <input type="hidden" value="1" id="merchantId" autocomplete="off">
    <input type="hidden" value="浙江" id="provinceCnName" autocomplete="off">
    <input type="hidden" value="9928" id="mainProductId" autocomplete="off">
    <input type="hidden" value="1" id="isYiHaoDian" autocomplete="off">
    <input type="hidden" value="1" id="cutoffTimeKey" autocomplete="off">
    <input type="hidden" value="-1" id="isRuleType" autocomplete="off">
    <input type="hidden" value="3" id="mcSiteKey" autocomplete="off">
    <input type="hidden" value="5415" id="categoryId" autocomplete="off">
    <input type="hidden" value="9928" id="experoienceProductId" autocomplete="off">
    <input type="hidden" value="0" id="productType" autocomplete="off">
    <input type="hidden" value="0" id="deliveryPartitionId" autocomplete="off">
    <input type="hidden" value="0" id="isShengxianProd" autocomplete="off">
    <input type="hidden" value="http://d6.yihaodianimg.com/N00/M08/3D/57/CgQCtlLOUOKAfiKNAAAvXDZwljc878.jpg" id="newBrandLogoUrl"
        autocomplete="off">
    <input type="hidden" value="5135" id="currProductClass" autocomplete="off">
    <input type="hidden" value="5135" id="topCategoryId" autocomplete="off">
    <input type="hidden" value="1" id="yingyangTabSwith" autocomplete="off">
    <input type="hidden" value="1571" id="brandID" autocomplete="off">
    <input type="hidden" value="5415" id="backCategoryId" autocomplete="off">
    <input type="hidden" value="1" id="storeId" autocomplete="off">
    <input type="hidden" value="0" id="pointSiteKey" autocomplete="off">
    <input type="hidden" value="糖" id="lastCategory" autocomplete="off">
    <input type="hidden" value="0" id="onlineCustomUserId" autocomplete="off">
    <input type="hidden" value="1" id="yhdFreshFoodKeyId" autocomplete="off">
    <input type="hidden" value="0" id="isSecondHandProduct" autocomplete="off">
    <input type="hidden" value="0" id="sencondBasePmInfoId" autocomplete="off">
    <input type="hidden" value="0" id="isFbyProd" autocomplete="off">
    <input type="hidden" value="9928" id="urlProductId" autocomplete="off">
    <input type="hidden" value="1号店" id="companyName" autocomplete="off">
    <input type="hidden" value="0" id="detailOldForNewService" autocomplete="off">
    <input type="hidden" value="玉棠" id="brandName" autocomplete="off">
    <input type="hidden" value="" id="oneKeyGoDomain" autocomplete="off">
    <input type="hidden" value="1" id="threeAreas" autocomplete="off">
    <input type="hidden" value="19642" id="hasStockNum" autocomplete="off">
    <input type="hidden" value="1" id="isCanSale" autocomplete="off">
    <input type="hidden" value="0" id="combinePositionKey" autocomplete="off">
    <input type="hidden" value="0" id="onlineServerKey" autocomplete="off">
    <input type="hidden" value="1" id="isNewVersion" autocomplete="off">
    <input type="hidden" value="0" id="isLiuBai" autocomplete="off">
    <input type="hidden" value="0" id="isWineCategory" autocomplete="off">
    <input type="hidden" value="5415" id="curCategoryIdToGlobal" autocomplete="off">
    <input type="hidden" value="" id="shoppingGuideModelId" autocomplete="off">
    <input type="hidden" value="" id="shoppingGuideModelTitle" autocomplete="off">
    <input type="hidden" value="" id="shoppingGuideModelProddescPic" autocomplete="off">
    <input type="hidden" value="0" id="productSize" autocomplete="off">
    <input type="hidden" value="0,5135,5154,5415" id="categoryIds" autocomplete="off">
    <input type="hidden" value="0" id="isRXCategrory" autocomplete="off">
    <input type="hidden" value="1" id="rxIScale" autocomplete="off">
    <input type="hidden" value="玉棠 白砂糖 500g/袋" id="cnName" autocomplete="off">
    <input type="hidden" value="0" id="mainPmInfoId" autocomplete="off">
    <script>
        var isWidescreen = true
        if (screen.width >= 1280) { document.body.className = "w1200"; } else { document.body.className = "w980"; isWidescreen = false; };
        var reserveInfo = undefined;
        var detailparams = {
            pmId: 73725,
            productId: 9928,
            merchantId: 1,
            isYiHaoDian: 1,
            isSeriesProduct: 0,
            seriesSubProdDesc: 0,
            combSubPmInfoId: 0,
            combSubProductId: 0,
            paramSignature: "TY7JjWCk0ClPteB2FUJijg==",
            proSignature: "7pdiB3OIwrVmO0pNAJfiGQ==",
            errorCode: 0,
            errorMsgTip: "",
            productType: 0,
            pmBusinessType: 2,
            deliveryType: 0,
            bondedArea: 0,
            mallUnionKeyCookieFlag: "0",
            viewAndViewAbtestCont: "",
            viewAndViewPmsAjaxSwitch: "0",
            isGift: 0,
            landingpageID: 0,
            isMobileContract: 0,
            virtualProductType: 0,
            diffDistrictPmJumpKey: 0,
            detailYanbaoInfoSwitch: 1,
            isSecKillSwitch: 0,
            productCode: "0000099285",
            isLiuBai: 0,
            isMeiHu: 0,
            isBGCloth: 0,
            isFmcg: 1,
            isCncRight: 0,
            isYaowangCategory: 0,
            isNewShoppingDetail: 1,
            isSnapshotProduct: 0,
            btmModAbTest: 1,
            isHidCoupon: 1,
            couponPrice: 16,
            canBeReturn: 0,
            returnDay: 0,
            needOrderProduct: 0,
            babyCenterShow: 0,
            showHot10: 1,
            isCompareCategory: 0,
            isDisplayMobilePriceLeft: 0,
            isSam: 0,
            isSamMember: 0,
            isSamCard: 0,
            isBadgeMerchant: 1,
            pmType: 3,
            merchantGroupid: 1,
            isDisplayUncontractfenxiang: 0
        };
        var requestDetailContextPath = "http://item.yhd.com";
        var detailPath = {
            idcCtxDomain: "http://item.yhd.com",
            ctxDomain: "http://item-home.yhd.com",
            mobileDomain: "",
            myYhdDomain: "http://my.yhd.com"
        };
        var pmCoverProvinceArr = new Array();
        pmCoverProvinceArr.push(1);
        pmCoverProvinceArr.push(6);
        pmCoverProvinceArr.push(13);
        pmCoverProvinceArr.push(31);
        pmCoverProvinceArr.push(5);
        var categoryIds = [0, 5135, 5154, 5415];
        var subPmIdList = new Array();
        var subPmIdMap = {};
        var attributeValuesAndPmIdMap = {};
        var attributeValuesAndProductIdMap = {};
        var attributeLength = 0;
        function initDetailPageTracker() {
            trackerContainer.addParameter(new Parameter("productId", "9928"));
            trackerContainer.addParameter(new Parameter("extField7", "73725"));
            trackerContainer.addParameter(new Parameter("curMerchantId", "1"));
            trackerContainer.addStock("9928", "1:19642");
            trackerContainer.timeout = 3000;
        }
    </script>

		<!-- 导航条部分 start -->
		{{-- <div class="nav w1210 bc mt10">
			<!--  商品分类部分 start-->
			<div class="category fl cat1">
				<div class="cat_hd off">  <!-- 注意，首页在此div上只需要添加cat_hd类，非首页，默认收缩分类时添加上off类，并将cat_bd设置为不显示(加上类none即可)，鼠标滑过时展开菜单则将off类换成on类 -->
					<h2>全部商品分类</h2>
					<em></em>
				</div>

				<div class="cat_bd none">

					<div class="cat item1">
						<h3><a href="">图像、音像、数字商品</a> <b></b></h3>
						<div class="cat_detail none">
							<dl class="dl_1st">
								<dt><a href="">电子书</a></dt>
								<dd>
									<a href="">免费</a>
									<a href="">小说</a>
									<a href="">励志与成功</a>
									<a href="">婚恋/两性</a>
									<a href="">文学</a>
									<a href="">经管</a>
									<a href="">畅读VIP</a>
								</dd>
							</dl>

							<dl>
								<dt><a href="">数字音乐</a></dt>
								<dd>
									<a href="">通俗流行</a>
									<a href="">古典音乐</a>
									<a href="">摇滚说唱</a>
									<a href="">爵士蓝调</a>
									<a href="">乡村民谣</a>
									<a href="">有声读物</a>
								</dd>
							</dl>

							<dl>
								<dt><a href="">音像</a></dt>
								<dd>
									<a href="">音乐</a>
									<a href="">影视</a>
									<a href="">教育音像</a>
									<a href="">游戏</a>
								</dd>
							</dl>

							<dl>
								<dt><a href="">文艺</a></dt>
								<dd>
									<a href="">小说</a>
									<a href="">文学</a>
									<a href="">青春文学</a>
									<a href="">传纪</a>
									<a href="">艺术</a>
									<a href="">经管</a>
									<a href="">畅读VIP</a>
								</dd>
							</dl>

							<dl>
								<dt><a href="">人文社科</a></dt>
								<dd>
									<a href="">历史</a>
									<a href="">心理学</a>
									<a href="">政治/军事</a>
									<a href="">国学/古籍</a>
									<a href="">哲学/宗教</a>
									<a href="">社会科学</a>
								</dd>
							</dl>

							<dl>
								<dt><a href="">经管励志</a></dt>
								<dd>
									<a href="">经济</a>
									<a href="">金融与投资</a>
									<a href="">管理</a>
									<a href="">励志与成功</a>
								</dd>
							</dl>

							<dl>
								<dt><a href="">人文社科</a></dt>
								<dd>
									<a href="">历史</a>
									<a href="">心理学</a>
									<a href="">政治/军事</a>
									<a href="">国学/古籍</a>
									<a href="">哲学/宗教</a>
									<a href="">社会科学</a>
								</dd>
							</dl>

							<dl>
								<dt><a href="">生活</a></dt>
								<dd>
									<a href="">烹饪/美食</a>
									<a href="">时尚/美妆</a>
									<a href="">家居</a>
									<a href="">娱乐/休闲</a>
									<a href="">动漫/幽默</a>
									<a href="">体育/运动</a>
								</dd>
							</dl>

							<dl>
								<dt><a href="">科技</a></dt>
								<dd>
									<a href="">科普</a>
									<a href="">建筑</a>
									<a href="">IT</a>
									<a href="">医学</a>
									<a href="">工业技术</a>
									<a href="">电子/通信</a>
									<a href="">农林</a>
									<a href="">科学与自然</a>
								</dd>
							</dl>

						</div>
					</div>

					<div class="cat">
						<h3><a href="">家用电器</a><b></b></h3>
						<div class="cat_detail">
							<dl class="dl_1st">
								<dt><a href="">大家电</a></dt>
								<dd>
									<a href="">平板电视</a>
									<a href="">空调</a>
									<a href="">冰箱</a>
									<a href="">洗衣机</a>
									<a href="">热水器</a>
									<a href="">DVD</a>
									<a href="">烟机/灶具</a>
								</dd>
							</dl>

							<dl>
								<dt><a href="">生活电器</a></dt>
								<dd>
									<a href="">取暖器</a>
									<a href="">加湿器</a>
									<a href="">净化器</a>
									<a href="">饮水机</a>
									<a href="">净水设备</a>
									<a href="">吸尘器</a>
									<a href="">电风扇</a>
								</dd>
							</dl>

							<dl>
								<dt><a href="">厨房电器</a></dt>
								<dd>
									<a href="">电饭煲</a>
									<a href="">豆浆机</a>
									<a href="">面包机</a>
									<a href="">咖啡机</a>
									<a href="">微波炉</a>
									<a href="">电磁炉</a>
									<a href="">电水壶</a>
								</dd>
							</dl>

							<dl>
								<dt><a href="">个护健康</a></dt>
								<dd>
									<a href="">剃须刀</a>
									<a href="">电吹风</a>
									<a href="">按摩器</a>
									<a href="">足浴盆</a>
									<a href="">血压计</a>
									<a href="">体温计</a>
									<a href="">血糖仪</a>
								</dd>
							</dl>

							<dl>
								<dt><a href="">五金家装</a></dt>
								<dd>
									<a href="">灯具</a>
									<a href="">LED灯</a>
									<a href="">水槽</a>
									<a href="">龙头</a>
									<a href="">门铃</a>
									<a href="">电器开关</a>
									<a href="">插座</a>
								</dd>
							</dl>
						</div>
					</div>

					<div class="cat">
						<h3><a href="">手机、数码</a><b></b></h3>
						<div class="cat_detail none">

						</div>
					</div>

					<div class="cat">
						<h3><a href="">电脑、办公</a><b></b></h3>
						<div class="cat_detail none">

						</div>
					</div>

					<div class="cat">
						<h3><a href="">家局、家具、家装、厨具</a><b></b></h3>
						<div class="cat_detail none">

						</div>
					</div>

					<div class="cat">
						<h3><a href="">服饰鞋帽</a><b></b></h3>
						<div class="cat_detail none">

						</div>
					</div>

					<div class="cat">
						<h3><a href="">个护化妆</a><b></b></h3>
						<div class="cat_detail none">

						</div>
					</div>

					<div class="cat">
						<h3><a href="">礼品箱包、钟表、珠宝</a><b></b></h3>
						<div class="cat_detail none">

						</div>
					</div>

					<div class="cat">
						<h3><a href="">运动健康</a><b></b></h3>
						<div class="cat_detail none">

						</div>
					</div>

					<div class="cat">
						<h3><a href="">汽车用品</a><b></b></h3>
						<div class="cat_detail none">

						</div>
					</div>

					<div class="cat">
						<h3><a href="">母婴、玩具乐器</a><b></b></h3>
						<div class="cat_detail none">

						</div>
					</div>

					<div class="cat">
						<h3><a href="">食品饮料、保健食品</a><b></b></h3>
						<div class="cat_detail none">

						</div>
					</div>

					<div class="cat">
						<h3><a href="">彩票、旅行、充值、票务</a><b></b></h3>
						<div class="cat_detail none">

						</div>
					</div>

				</div>

			</div>
			<!--  商品分类部分 end-->

			<div class="navitems fl">
				<ul class="fl">
					<li class="current"><a href="">首页</a></li>
					<li><a href="">电脑频道</a></li>
					<li><a href="">家用电器</a></li>
					<li><a href="">品牌大全</a></li>
					<li><a href="">团购</a></li>
					<li><a href="">积分商城</a></li>
					<li><a href="">夺宝奇兵</a></li>
				</ul>
				<div class="right_corner fl"></div>
			</div>
		</div> --}}
		<!-- 导航条部分 end -->
	</div>
	<!-- 头部 end-->


	<div style="clear:both;"></div>
	<!-- 商品页面主体 start -->
	<div class="main w1210 mt10 bc">
		<!-- 面包屑导航 start -->
		<div class="breadcrumb">
            <h2>当前位置：
                <a href="">首页</a> >
                <a href="">{{ $cat1->name }}</a> >
                <a href="">{{ $cat2->name }}</a> >
                {{ $cat3->name }}
            </h2>

		</div>
		<!-- 面包屑导航 end -->

		<!-- 主体页面左侧内容 start -->
		<div class="goods_left fl">
			<!-- 相关分类 start -->
			<div class="related_cat leftbar mt10">
				<h2><strong>相关分类</strong></h2>
				<div class="leftbar_wrap">
					<ul>
						<li><a href="">笔记本</a></li>
						<li><a href="">超极本</a></li>
						<li><a href="">平板电脑</a></li>
					</ul>
				</div>
			</div>
			<!-- 相关分类 end -->

			<!-- 相关品牌 start -->
			<div class="related_cat	leftbar mt10">
				<h2><strong>同类品牌</strong></h2>
				<div class="leftbar_wrap">
					<ul>
						<li><a href="">D-Link</a></li>
						<li><a href="">戴尔</a></li>
						<li><a href="">惠普</a></li>
						<li><a href="">苹果</a></li>
						<li><a href="">华硕</a></li>
						<li><a href="">宏基</a></li>
						<li><a href="">神舟</a></li>
					</ul>
				</div>
			</div>
			<!-- 相关品牌 end -->

			<!-- 热销排行 start -->
			<div class="hotgoods leftbar mt10">
				<h2><strong>热销排行榜</strong></h2>
				<div class="leftbar_wrap">
					<ul>
						<li></li>
					</ul>
				</div>
			</div>
			<!-- 热销排行 end -->


			<!-- 浏览过该商品的人还浏览了  start 注：因为和list页面newgoods样式相同，故加入了该class -->
			<div class="related_view newgoods leftbar mt10">
				<h2><strong>浏览了该商品的用户还浏览了</strong></h2>
				<div class="leftbar_wrap">
					<ul>
						<li>
							<dl>
								<dt><a href=""><img src="/beimages/relate_view1.jpg" alt="" /></a></dt>
								<dd><a href="">ThinkPad E431(62771A7) 14英寸笔记本电脑 (i5-3230 4G 1TB 2G独显 蓝牙 win8)</a></dd>
								<dd><strong>￥5199.00</strong></dd>
							</dl>
						</li>

						<li>
							<dl>
								<dt><a href=""><img src="/beimages/relate_view2.jpg" alt="" /></a></dt>
								<dd><a href="">ThinkPad X230i(2306-3V9） 12.5英寸笔记本电脑 （i3-3120M 4GB 500GB 7200转 蓝牙 摄像头 Win8）</a></dd>
								<dd><strong>￥5199.00</strong></dd>
							</dl>
						</li>

						<li>
							<dl>
								<dt><a href=""><img src="/beimages/relate_view3.jpg" alt="" /></a></dt>
								<dd><a href="">T联想（Lenovo） Yoga13 II-Pro 13.3英寸超极本 （i5-4200U 4G 128G固态硬盘 摄像头 蓝牙 Win8）晧月银</a></dd>
								<dd><strong>￥7999.00</strong></dd>
							</dl>
						</li>

						<li>
							<dl>
								<dt><a href=""><img src="/beimages/relate_view4.jpg" alt="" /></a></dt>
								<dd><a href="">联想（Lenovo） Y510p 15.6英寸笔记本电脑（i5-4200M 4G 1T 2G独显 摄像头 DVD刻录 Win8）黑色</a></dd>
								<dd><strong>￥6199.00</strong></dd>
							</dl>
						</li>

						<li class="last">
							<dl>
								<dt><a href=""><img src="/beimages/relate_view5.jpg" alt="" /></a></dt>
								<dd><a href="">ThinkPad E530c(33662D0) 15.6英寸笔记本电脑 （i5-3210M 4G 500G NV610M 1G独显 摄像头 Win8）</a></dd>
								<dd><strong>￥4399.00</strong></dd>
							</dl>
						</li>
					</ul>
				</div>
			</div>
			<!-- 浏览过该商品的人还浏览了  end -->

			<!-- 最近浏览 start -->
			<div class="viewd leftbar mt10">
				<h2><a href="">清空</a><strong>最近浏览过的商品</strong></h2>
				<div class="leftbar_wrap">
					<dl>
						<dt><a href=""><img src="/beimages/hpG4.jpg" alt="" /></a></dt>
						<dd><a href="">惠普G4-1332TX 14英寸笔记...</a></dd>
					</dl>

					<dl class="last">
						<dt><a href=""><img src="/beimages/crazy4.jpg" alt="" /></a></dt>
						<dd><a href="">直降200元！TCL正1.5匹空调</a></dd>
					</dl>
				</div>
			</div>
			<!-- 最近浏览 end -->

		</div>
		<!-- 主体页面左侧内容 end -->

		<!-- 商品信息内容 start -->
		<div class="goods_content fl mt10 ml10">
			<!-- 商品概要信息 start -->
			<div class="summary">
				<h3><strong>{{ $goods->goods_name }}</strong></h3>

				<!-- 图片预览区域 start -->
				<div class="preview fl">
                        <div class="midpic">
                                <a href="{{'/upload/'.$pic[1]->pic}}" class="jqzoom" rel="gal1">
                                    <img style="width: 100%;" src="{{'/upload/'.$pic[1]->mid_pic}}" alt="" />
                                </a>
                        </div>
                        <div class="smallpic">
                            <a href="javascript:;" id="backward" class="off"></a>
                            <a href="javascript:;" id="forward" class="on"></a>
                            <div class="smallpic_wrap">
                                <ul>
                                    <li class="cur">
                                            <a class="zoomThumbActive" href="javascript:void(0);" rel="{gallery: 'gal1', smallimage: '{{'/upload/'.$pic[1]->mid_pic}}',largeimage: '{{'/upload/'.$pic[1]->pic}}'}"><img src="{{'/upload/'.$pic[1]->sm_pic}}"></a>
                                    </li>
                                    @foreach($pic as $v)
                                        <li>
                                            <a href="javascript:void(0);" rel="{gallery: 'gal1', smallimage: '{{'/upload/'.$v->mid_pic}}',largeimage: '{{'/upload/'.$v->pic}}'}"><img src="{{'/upload/'.$v->sm_pic}}"></a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>

                        </div>
				</div>
				<!-- 图片预览区域 end -->

				<!-- 商品基本信息区域 start -->
				<div class="goodsinfo fl ml10">
					<ul>
						<li><span>商品编号： </span>{{ $goods->id }}</li>
						<li class="market_price"><span>定价：</span><em>￥{{ $goods->maprice }}</em></li>
						<li class="shop_price">
                            <span>本店价：</span>
                            <div class="col-xs-10">
                                <span>￥<strong id="price">
                                    <img width='30' src='/beimages/zoomloader.gif'></strong></span></div>
                        </li>
						<li><span>上架时间：</span>{{ $goods->created_at }}</li>
						<li class="star"><span>商品评分：</span> <strong></strong><a href="">(已有21人评价)</a></li> <!-- 此处的星级切换css即可 默认为5星 star4 表示4星 star3 表示3星 star2表示2星 star1表示1星 -->
					</ul>
					<div class="goods-spec">
                            @php
                            $_spec = [];
                            foreach($goods->specs as $v)
                            {
                                $_spec[$v->attrgood->attr_name][] = [$v->attr_id,$v->attr_value];
                            }
                            @endphp
                            @foreach($_spec as $k => $v)
                            <div class="row">
                                <div class="col-xs-2">{{$k}}：</div><br>
                                <div class="col-xs-10">
                                    @foreach($v as $k1 => $v1)
                                    <a attr_id="{{$v1[0]}}" href="javascript:void(0);" @if($k1==0)class="active"@endif>{{$v1[1]}}</a>
                                    @endforeach
                                </div>
                            </div>
                            @endforeach
                    </div>
                    <div class="goods-btn">
                            <a href="javascript:void(0);" id="cart-num-btn-minus" class="cart-num-btn">-</a>
                            <input size="5" type="text" id="cart-num" class="cart-num" value="1">
                            <a href="javascript:void(0);" id="cart-num-btn-add" class="cart-num-btn">+</a>
                            {{-- <span id="stock"><img width='30' src='/beimages/zoomloader.gif'></span> --}}
                            <br><br>
                            <a href="javascript:void(0);" class="btn-add-cart">加入购物车</a>
                    </div>
				</div>
				<!-- 商品基本信息区域 end -->
			</div>
			<!-- 商品概要信息 end -->

			<div style="clear:both;"></div>

			<!-- 商品详情 start -->
			<div class="detail">
				<div class="detail_hd">
					<ul>
						<li class="first"><span>商品介绍</span></li>
						<li class="on"><span>商品评价</span></li>
						<li><span>售后保障</span></li>
					</ul>
				</div>
				<div class="detail_bd">
					<!-- 商品介绍 start -->
					<div class="introduce detail_div none">
						<div class="attr mt15">
							<ul>
								<li><span>商品名称：</span>{{ $goods->goods_name }}</li>
								<li><span>商品编号：</span>979631</li>
								<li><span>品牌：</span>联想（Thinkpad）</li>
								<li><span>上架时间：</span>2013-09-18 17:58:12</li>
								<li><span>商品毛重：</span>2.47kg</li>
								<li><span>商品产地：</span>中国大陆</li>
								<li><span>显卡：</span>集成显卡</li>
								<li><span>触控：</span>非触控</li>
								<li><span>厚度：</span>正常厚度（>25mm）</li>
								<li><span>处理器：</span>Intel i5</li>
								<li><span>尺寸：</span>12英寸</li>
							</ul>
						</div>

						<div class="desc mt10">
							<!-- 此处的内容 一般是通过在线编辑器添加保存到数据库，然后直接从数据库中读出 -->
							<img src="/beimages/desc1.jpg" alt="" />
							<p style="height:10px;"></p>
							<img src="/beimages/desc2.jpg" alt="" />
							<p style="height:10px;"></p>
							<img src="/beimages/desc3.jpg" alt="" />
							<p style="height:10px;"></p>
							<img src="/beimages/desc4.jpg" alt="" />
							<p style="height:10px;"></p>
							<img src="/beimages/desc5.jpg" alt="" />
							<p style="height:10px;"></p>
							<img src="/beimages/desc6.jpg" alt="" />
							<p style="height:10px;"></p>
							<img src="/beimages/desc7.jpg" alt="" />
							<p style="height:10px;"></p>
							<img src="/beimages/desc8.jpg" alt="" />
							<p style="height:10px;"></p>
							<img src="/beimages/desc9.jpg" alt="" />
						</div>
					</div>
					<!-- 商品介绍 end -->

					<!-- 商品评论 start -->
					<div class="comment detail_div mt10">
						<div class="comment_summary">
							<div class="rate fl">
								<strong><em>90</em>%</strong> <br />
								<span>好评度</span>
							</div>
							<div class="percent fl">
								<dl>
									<dt>好评（90%）</dt>
									<dd><div style="width:90px;"></div></dd>
								</dl>
								<dl>
									<dt>中评（5%）</dt>
									<dd><div style="width:5px;"></div></dd>
								</dl>
								<dl>
									<dt>差评（5%）</dt>
									<dd><div style="width:5px;" ></div></dd>
								</dl>
							</div>
							<div class="buyer fl">
								<dl>
									<dt>买家印象：</dt>
									<dd><span>屏幕大</span><em>(1953)</em></dd>
									<dd><span>外观漂亮</span><em>(786)</em></dd>
									<dd><span>系统流畅</span><em>(1091)</em></dd>
									<dd><span>功能齐全</span><em>(1109)</em></dd>
									<dd><span>反应快</span><em>(659)</em></dd>
									<dd><span>分辨率高</span><em>(824)</em></dd>
								</dl>
							</div>
						</div>

						<div class="comment_items mt10">
							<div class="user_pic">
								<dl>
									<dt><a href=""><img src="/beimages/user1.gif" alt="" /></a></dt>
									<dd><a href="">乖乖</a></dd>
								</dl>
							</div>
							<div class="item">
								<div class="title">
									<span>2013-03-11 22:18</span>
									<strong class="star star5"></strong> <!-- star5表示5星级 start4表示4星级，以此类推 -->
								</div>
								<div class="comment_content">
									<dl>
										<dt>心得：</dt>
										<dd>东西挺好，挺满意的！</dd>
									</dl>
									<dl>
										<dt>优点：</dt>
										<dd>反应速度开，散热性能好</dd>
									</dl>
									<dl>
										<dt>不足：</dt>
										<dd>暂时还没发现缺点哦！</dd>
									</dl>
									<dl>
										<dt>购买日期：</dt>
										<dd>2013-11-24</dd>
									</dl>
								</div>
								<div class="btns">
									<a href="" class="reply">回复(0)</a>
									<a href="" class="useful">有用(0)</a>
								</div>
							</div>
							<div class="cornor"></div>
						</div>

						<div class="comment_items mt10">
							<div class="user_pic">
								<dl>
									<dt><a href=""><img src="/beimages/user2.jpg" alt="" /></a></dt>
									<dd><a href="">小宝贝</a></dd>
								</dl>
							</div>
							<div class="item">
								<div class="title">
									<span>2013-10-01 14:10</span>
									<strong class="star star4"></strong> <!-- star5表示5星级 start4表示4星级，以此类推 -->
								</div>
								<div class="comment_content">
									<dl>
										<dt>心得：</dt>
										<dd>外观漂亮同，还在使用过程中。</dd>
									</dl>
									<dl>
										<dt>型号：</dt>
										<dd>i5 8G内存版</dd>
									</dl>
									<dl>
										<dt>购买日期：</dt>
										<dd>2013-11-20</dd>
									</dl>
								</div>
								<div class="btns">
									<a href="" class="reply">回复(0)</a>
									<a href="" class="useful">有用(0)</a>
								</div>
							</div>
							<div class="cornor"></div>
						</div>

						<div class="comment_items mt10">
							<div class="user_pic">
								<dl>
									<dt><a href=""><img src="/beimages/user3.jpg" alt="" /></a></dt>
									<dd><a href="">天使</a></dd>
								</dl>
							</div>
							<div class="item">
								<div class="title">
									<span>2013-03-11 22:18</span>
									<strong class="star star5"></strong> <!-- star5表示5星级 start4表示4星级，以此类推 -->
								</div>
								<div class="comment_content">
									<dl>
										<dt>心得：</dt>
										<dd>挺好的，物超所值，速度挺好，WIN8用起来也不错。</dd>
									</dl>
									<dl>
										<dt>优点：</dt>
										<dd>散热很好，配置不错</dd>
									</dl>
									<dl>
										<dt>不足：</dt>
										<dd>暂时还没发现缺点哦！</dd>
									</dl>
									<dl>
										<dt>购买日期：</dt>
										<dd>2013-11-24</dd>
									</dl>
								</div>
								<div class="btns">
									<a href="" class="reply">回复(0)</a>
									<a href="" class="useful">有用(0)</a>
								</div>
							</div>
							<div class="cornor"></div>
						</div>

						<!-- 分页信息 start -->
						<div class="page mt20">
							<a href="">首页</a>
							<a href="">上一页</a>
							<a href="">1</a>
							<a href="">2</a>
							<a href="" class="cur">3</a>
							<a href="">4</a>
							<a href="">5</a>
							<a href="">下一页</a>
							<a href="">尾页</a>
						</div>
						<!-- 分页信息 end -->

						<!--  评论表单 start-->
						<div class="comment_form mt20">
							<form action="">
								<ul>
									<li>
										<label for=""> 评分：</label>
										<input type="radio" name="grade"/> <strong class="star star5"></strong>
										<input type="radio" name="grade"/> <strong class="star star4"></strong>
										<input type="radio" name="grade"/> <strong class="star star3"></strong>
										<input type="radio" name="grade"/> <strong class="star star2"></strong>
										<input type="radio" name="grade"/> <strong class="star star1"></strong>
									</li>

									<li>
										<label for="">评价内容：</label>
										<textarea name="" id="" cols="" rows=""></textarea>
									</li>
									<li>
										<label for="">&nbsp;</label>
										<input type="submit" value="提交评论"  class="comment_btn"/>
									</li>
								</ul>
							</form>
						</div>
						<!--  评论表单 end-->

					</div>
					<!-- 商品评论 end -->

					<!-- 售后保障 start -->
					<div class="after_sale mt15 none detail_div">
						<div>
							<p>本产品全国联保，享受三包服务，质保期为：一年质保 <br />如因质量问题或故障，凭厂商维修中心或特约维修点的质量检测证明，享受7日内退货，15日内换货，15日以上在质保期内享受免费保修等三包服务！</p>
							<p>售后服务电话：800-898-9006 <br />品牌官方网站：http://www.lenovo.com.cn/</p>

						</div>

						<div>
							<h3>服务承诺：</h3>
							<p>本商城向您保证所售商品均为正品行货，京东自营商品自带机打发票，与商品一起寄送。凭质保证书及京东商城发票，可享受全国联保服务（奢侈品、钟表除外；奢侈品、钟表由本商城联系保修，享受法定三包售后服务），与您亲临商场选购的商品享受相同的质量保证。本商城还为您提供具有竞争力的商品价格和运费政策，请您放心购买！</p>

							<p>注：因厂家会在没有任何提前通知的情况下更改产品包装、产地或者一些附件，本司不能确保客户收到的货物与商城图片、产地、附件说明完全一致。只能确保为原厂正货！并且保证与当时市场上同样主流新品一致。若本商城没有及时更新，请大家谅解！</p>

						</div>

						<div>
							<h3>权利声明：</h3>
							<p>本商城上的所有商品信息、客户评价、商品咨询、网友讨论等内容，是京东商城重要的经营资源，未经许可，禁止非法转载使用。</p>
							<p>注：本站商品信息均来自于厂商，其真实性、准确性和合法性由信息拥有者（厂商）负责。本站不提供任何保证，并不承担任何法律责任。</p>

						</div>
					</div>
					<!-- 售后保障 end -->

				</div>
			</div>
			<!-- 商品详情 end -->


		</div>
		<!-- 商品信息内容 end -->


	</div>
	<!-- 商品页面主体 end -->


	<div style="clear:both;"></div>
    <!--content end-->
    <div id="provinceboxDiv"></div>
    <div data-tpa="YHD_GLOBAl_FOOTER_BROWSE_RELATED" id="globalBottomBrowseRelated"></div>
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
            <div id="footerServiceLinkId" lazyload_textarea="div_textarea_footerServiceLink">
                <textarea id="div_textarea_footerServiceLink" autocomplete="off" style="display:none;"><div id="bottomHelpLinkId" class="ft_help_list clearfix" data-tpa="YHD_GLOBAl_FOOTER_HELP" >
        <dl>
        <dt>新手入门</dt>
        <dd><a href="http://cms.yhd.com/cms/view.do?topicId=24091" data-ref="9075_4918049_1" data-tcd="AD.9075_4918049_1" target="_blank">购物流程</a></dd>
        <dd><a href="http://cms.yhd.com/cms/view.do?topicId=24223" data-ref="9075_4918070_2" data-tcd="AD.9075_4918070_2" target="_blank">会员制度</a></dd>
        <dd><a href="http://cms.yhd.com/cms/view.do?topicId=24095" data-ref="9075_4918532_3" data-tcd="AD.9075_4918532_3" target="_blank">订单查询</a></dd>
        <dd><a href="http://cms.yhd.com/cms/view.do?topicId=24102" data-ref="9075_4918536_4" data-tcd="AD.9075_4918536_4" target="_blank">发票制度</a></dd>
        <dd><a href="http://cms.yhd.com/cms/view.do?topicId=24099" data-ref="9075_4918577_5" data-tcd="AD.9075_4918577_5" target="_blank">常见问题</a></dd>
        </dl>
        <dl>
        <dt>支付方式</dt>
        <dd><a href="http://cms.yhd.com/cms/view.do?topicId=24107" data-ref="9077_18431408_1" data-tcd="AD.9077_18431408_1" target="_blank">货到付款</a></dd>
        <dd><a href="http://cms.yhd.com/cms/view.do?topicId=24126" data-ref="9077_18431423_2" data-tcd="AD.9077_18431423_2" target="_blank">网上支付</a></dd>
        <dd><a href="http://cms.yhd.com/cms/view.do?topicId=24128" data-ref="9077_18431424_3" data-tcd="AD.9077_18431424_3" target="_blank">银行转账</a></dd>
        <dd><a href="http://cms.yhd.com/cms/view.do?topicId=24114" data-ref="9077_18431439_4" data-tcd="AD.9077_18431439_4" target="_blank">礼品卡支付</a></dd>
        <dd><a href="http://cms.yhd.com/cms/view.do?topicId=24104" data-ref="9077_18431457_5" data-tcd="AD.9077_18431457_5" target="_blank">其他支付</a></dd>
        </dl>
        <dl>
        <dt>配送服务</dt>
        <dd><a href="http://www.yhd.com/marketing/deliveryinfo/deliveryInfo.do?tp=2091.0.0.0.0.KueGJlQ-11-CZDOe" data-ref="9079_18431491_2" data-tcd="AD.9079_18431491_2" target="_blank">配送范围及运费</a></dd>
        <dd><a href="http://cms.yhd.com/cms/view.do?topicId=24113" data-ref="9079_18432687_3" data-tcd="AD.9079_18432687_3" target="_blank">配送进度查询</a></dd>
        <dd><a href="http://cms.yhd.com/cms/view.do?topicId=24483" data-ref="9079_18432688_4" data-tcd="AD.9079_18432688_4" target="_blank">自提服务</a></dd>
        <dd><a href="http://cms.yhd.com/cms/view.do?topicId=24090" data-ref="9079_18432689_5" data-tcd="AD.9079_18432689_5" target="_blank">商品验货与签收</a></dd>
        </dl>
        <dl>
        <dt>售后保障</dt>
        <dd><a href="http://cms.yhd.com/cms/view.do?topicId=24071" data-ref="9081_4919277_1" data-tcd="AD.9081_4919277_1" target="_blank">退换货政策</a></dd>
        <dd><a href="http://cms.yhd.com/cms/view.do?topicId=24366" data-ref="9081_4919280_2" data-tcd="AD.9081_4919280_2" target="_blank">退换货流程</a></dd>
        <dd><a href="http://cms.yhd.com/cms/view.do?topicId=24127" data-ref="9081_4919302_3" data-tcd="AD.9081_4919302_3" target="_blank">退款说明</a></dd>
        <dd><a href="http://cms.yhd.com/cmsPage/show.do?pageId=73523" data-ref="9081_13586489_4" data-tcd="AD.9081_13586489_4" target="_blank">购买延保服务</a></dd>
        <dd><a href="http://cms.yhd.com/cms/view.do?topicId=24088" data-ref="9081_18432701_5" data-tcd="AD.9081_18432701_5" target="_blank">联系客服</a></dd>
        </dl>
        <dl>
        <dt>商家合作</dt>
        <dd><a href="http://cms.yhd.com/cmsPage/show.do?pageId=94952" data-ref="9083_18432703_1" data-tcd="AD.9083_18432703_1" target="_blank">商家入驻</a></dd>
        <dd><a href="http://cms.yhd.com/cms/view.do?topicId=24063" data-ref="9083_18432706_2" data-tcd="AD.9083_18432706_2" target="_blank">商必赢</a></dd>
        <dd><a href="http://xue.yhd.com/showlist/rulenew/rule.html" data-ref="9083_18432707_3" data-tcd="AD.9083_18432707_3" target="_blank">平台规则</a></dd>
        <dd><a href="http://b2b.yhd.com/index.do" data-ref="9083_18432708_4" data-tcd="AD.9083_18432708_4" target="_blank">企业采购</a></dd>
        </dl>
        </div>
        </textarea>
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
                    <img original="http://d8.yihaodianimg.com/N00/M00/46/FC/CgMBmVLfYZGALWNHAAAOxFbda9472600.gif" alt=""
                        src="/beimages/blank.gif">
                </a>
                |
                <a rel="nofollow" target="_blank" href="http://net.china.com.cn/index.htm">
                    <img original="http://d9.yihaodianimg.com/N01/M0A/95/FD/CgQCr1PQy1CAF7vaAABDexsiEYM24800.jpg" alt=""
                        src="/beimages/blank.gif">
                </a>
                |
                <a rel="nofollow" target="_blank" href="https://ss.knet.cn/verifyseal.dll?sn=e13050631010040492h5mq000000&ct=df&a=1&pa=500267">
                    <img original="http://d8.yihaodianimg.com/N01/M03/A0/40/CgQCrlPYTqCASlHXAAAd82JE0eA31000.png" alt=""
                        src="/beimages/blank.gif">
                </a>
                |
                <a rel="nofollow" target="_blank" href="https://search.szfw.org/cert/l/CX20150608010268010812">
                    <img original="http://d9.yihaodianimg.com/N08/M01/C7/7E/ChEi1FYXHcOAVk_WAAAL2r2-yfo10200.jpg" alt=""
                        src="/beimages/blank.gif">
                </a>
                |
                <a rel="nofollow" target="_blank" href="http://club.yhd.com/guide/922?tzm=shanghaigongshangju">
                    <img original="http://d6.yihaodianimg.com/N05/M07/92/EA/CgQI0lXmj5iAPoZJAAAMUQgIYEc49100.jpg" alt=""
                        src="/beimages/blank.gif">
                </a>
                |
            </small>
        </div>
    </div>
    {{-- <script>
        try {
            globalErrorLog.globalNodifyErrorLog();
        } catch (e) {
        }
    </script> --}}
    <!-- cache enable -->
    <!--js start-->
    <!--无页面级头部js时, 全局头部js下移-->
    {{-- <script charset="utf-8" src="/bejs/global_site_tracker_jq11.js" type="text/javascript"></script>
    <script charset="utf-8" src="/bejs/global_site_top.js" type="text/javascript"></script>
    <script charset="utf-8" src="/bejs/product_detail_c_page.js" type="text/javascript"></script> --}}
    <!--js end-->
    <div>
        <span style="color: #FFFFFF">
            140!$
            0%&
            4#@
            10!$
            ,
        </span>
        <span style="color: #FFFFFF">1554974</span>
    </div>
    <div class="error_info_show none hide">
        <p id="err_popwin">.........</p>
        <p><button onclick="yhdLib.popclose();">确定</button></p>
    </div>
    <script type="text/javascript">
        (function () {
            try {
                document.getElementById("headerAllProvince").style.height = "300px"; (function () { var a = $(".headerNavWrap").find("a:contains('1号钱包')"); if (a) { var b = a.next(); if (b) { if (document.location.host == "www.yhd.com") { } } } })();
            } catch (err) { }
            try {
                (function () { if (location.href.indexOf("channel.yhd.com/lipinka") >= 0) { window.buyVirtualCard = function (e) { var d = ""; var c = 0; var b = 0; jQuery("#SALE_Virtual_Card li[name='SALE_Gift_Card']").each(function (h) { var k = jQuery(this).attr("productId"); var j = jQuery(this).attr("pmInfoId"); var g = jQuery("#prodNum_" + k).val(); if (isNaN(g) || Number(g) <= 0) { g = 0 } g = parseFloat(g); if (g != 0 && !isNaN(g)) { if (b == 0) { d = "purchaseEcardProductVos[" + b + "].productId=" + k + "&purchaseEcardProductVos[" + b + "].productNum=" + g } else { d += "&purchaseEcardProductVos[" + b + "].productId=" + k + "&purchaseEcardProductVos[" + b + "].productNum=" + g } b++; c = Number(c) + Number(g) - 0; gotracker(j, "SALE_Virtual_Card" + j, k) } }); if (d != "") { if ((c - 0) > 200) { YHD.alert("购买的所有电子礼品卡总件数必须是0~200之间的数字！当前总数量为" + c); return false } else { var f = $(e); var a = "http://buy.yhd.com/ecard/buyEGiftCard.do?" + d; f.attr("href", a) } } else { $("#SALE_Virtual_Card .fast_buy_btn .btn_buy").parent(".fast_buy_btn").prev(".buy_card_list").find(".cart_num_text").addClass("bd_red"); setTimeout(function () { $(".cart_num_text").removeClass("bd_red") }, 1000); return false } } } })();
            } catch (err) { }
            try {
                document.getElementById("headerAllProvince").style.height = "300px";
            } catch (err) { }
            try {
                window.webPercent = 60;
            } catch (err) { }
            try {
                var global_menu = $("#global_menu"); if (global_menu) { var liObj = global_menu.find("li"); if (typeof (isWidescreen) != "undefined" && isWidescreen == true) { if (liObj.length == 10) { liObj.eq(9).hide() } } else { if (liObj.length == 9) { liObj.eq(8).hide() } } };
            } catch (err) { }
            try {
            } catch (err) { }
            try {
                $(function () { var a = setTimeout(function () { if (location.href.indexOf("list.html?") == 0 || location.href.indexOf("http://search.yhd.com") == 0 || location.href.indexOf("http://www.yhd.com/ctg/") == 0) { $("#footerQRcode,#footerIcon,#footer").lazyImg() } }, 5 * 1000) });
            } catch (err) { }
            try {
                $(function () { if ($.fn.jquery != "1.11.3") { return } var c = $("#miniCart"); if (c.size() == 0 || c.attr("data-version") == "1") { return } c.undelegate("div.hd_total_pro #miniCartPaybtn", "click"); var b = function (e, g) { var d = e.find("div.hd_over_tips"); var f = e.find("div.hd_cart_wrap"); d.find("p").text(g); d.slideDown(500); f.css("z-index", 1201); setTimeout(function () { d.slideUp(500); f.css("z-index", 1200) }, 3000) }; var a = function () { var h = "http://buy.yhd.com/checkoutV3/index.do"; var p = c.find("div.hd_cart_list dd[productId]"); var d = 0; var n = 0; var k = 0; var e = 0; p.each(function () { var q = $(this); var r = false; if (q.get(0).getAttribute("checked") == "true") { r = true } n++; if (q.attr("productType") == 4 && r && q.attr("disable") == "false") { d++; k = q } if (r) { e++ } }); if (d > 0 && d != n) { if (k) { var m = $("#miniCart div.hd_cart_list").position().top; var l = k.position().top; var j = $("#miniCart div.hd_cart_scrollwrap").scrollTop(); $("#miniCart div.hd_cart_scrollwrap").scrollTop(m + l + j); b(k, "实体礼品卡不能和其他商品一起购买!") } return false } if (e == 0) { return false } var i = c.find("div.hd_cart_list dd a.hd_select_box"); var g = []; i.each(function () { var q = $(this); var s = q.parents("dd").attr("cartItemId"); var r = q.hasClass("hd_selected") ? 1 : 0; g.push(s + "=" + r) }); var f = $("#miniCartForm").get(0); f.action = h; f.cart2Checkbox.value = g.join(","); var o = function (q) { if (q.result == 1) { f.submit() } else { if (yhdPublicLogin) { var r = URLPrefix.passport; yhdPublicLogin.showLoginDivNone(r, false, "", function (s) { if (s == 0) { $("#miniCartForm").submit() } }) } } }; loli.globalCheckLogin(o) }; c.delegate("div.hd_total_pro #miniCartPaybtn", "click", function () { a(); return false }) });
            } catch (err) { }
            try {
                loli.app.minicart.getJSON = function (b, e, d, a, c) { if (c == null) { c = 3000 } jQuery.ajax({ url: b, data: e, dataType: "jsonp", jsonp: "callback", jsonpCallback: "jsonp" + new Date().getTime(), cache: false, timeout: c, success: function (f) { if (d) { d(f) } }, error: function (f, h, g) { if (b.indexOf("http://pms.yhd.com/pms/getRecommProductsByJson.do") >= 0) { return } if (a) { a(f, h, g) } else { loli.app.minicart.errorCallback(f, h, g) } } }) };
            } catch (err) { }
            try {
                function sendGtags() { var a = $.cookie("guid"); var c = $.cookie("provinceId"); if ($.trim(a) != "" && $.trim(c) != "") { var b = new Image(); b.src = "http://cms.gtags.net/p?a=13&xid=" + a + "&yhd_cityid=" + c } } $(function () { if (location.href.indexOf("http://cms.yhd.com/sale/") == 0) { setTimeout(sendGtags, 30 * 1000) } });
            } catch (err) { }
        })();
    </script>
    <!--全局域cookie 白名单 add by lichao-->

</body>

</html>
<!-- jqzoom 效果 -->


<script>
    window.onload=function(){

        $(function(){
            $('.jqzoom').jqzoom({
                zoomType: 'standard',
                lens:true,
                preloadImages: false,
                alwaysOn:false,
                zoomWidth: 340,
                zoomHeight: 340,
                xOffset:10,
                yOffset:0,
                position:'right'
            });
        });

    }
        /*使用jqzoom*/

        // 数量++
        $("#cart-num-btn-add").click(function(){
            var v = parseInt($("#cart-num").val());
            // 判断库存 是否 有货  如果有就+1  没有就提示没有货了
            if(v<stock)
		        $("#cart-num").val(v+1);
            else{
                $("#cart-num").val(stock);
                alert('没有货了呢o(╥﹏╥)o!');
                }
        });
        // 数量--
        $("#cart-num-btn-minus").click(function(){
            var v = parseInt($("#cart-num").val());
            if(v>1)
            {
                $("#cart-num").val(v-1);
            }
        });
        // 商品规格
        var stock;
        var skuid;
        // 获取这个 商品规格a标签
        $(".goods-spec a").click(function(){
            //获取这个第一个a父类  并移除
            $(this).parent().find('a').removeClass('active');
            // 添加这个样式
            $(this).addClass('active');
            // 调用sku方法
            goods_sku();
        });
        // 获取sku值
        function goods_sku()
        {
            //先定义一个数组
            var arr=[];
            // 循环 得到 点击时获取的值  并
            $(".goods-spec a.active").each(function(k,v){
                arr.push($(v).attr("attr_id")+"|"+$(v).text());
            });
            // 把得到这个数组转成字符串
            var skustr = arr.join('@');
            // console.log(skustr);
            $.ajax({
                type:"GET",
                url:"/sku/{{$goods->id}}/"+skustr,
                data:'json',
                success:function(data)
                {
                    // console.log(data);
                    // 得到这个 判断价钱
                    if(data.price>0)
                        $("#price").text(data.price)
                    else
                        $("#price").text({{$goods->shop_price}});
                    stock=data.stock;
                    skuid=data.sku_id;
                    $("#stock").text('(库存量:'+stock+")");
                }
            });
        }
        // 获取SKU
        goods_sku();

        $(".btn-add-cart").click(function(){
            var gc = $("#cart-num").val();
            // console.log(gc);
            // 如果已经确定skuid
            if(skuid)
            {
                location.href='/addtocart/'+skuid+'/'+gc;
            }
        });

        </script>
