<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="renderer" content="webkit">

    <!--deeplink add by lichao-->

    <meta name="tp_page" content="MYYHD_PC_USERINFO.0">


    <title>我的1号店-编辑个人资料</title>
    <meta name="Keywords" content="我的1号店-编辑个人资料">
    <meta name="Description" content="我的1号店-编辑个人资料">


    <!--css start-->
    <link href="/becss/global_site_base.css?1563681" rel="stylesheet" type="text/css" />
    <link href="/becss/editInfo.css?1563681" rel="stylesheet" type="text/css" />
    <script src="/assets/layer/layer.js" type="text/javascript"></script>
    {{-- <script src="/assets/laydate/laydate.js" type="text/javascript"></script>
    <script src="/assets/js/bootstrap.min.js"></script> --}}
    {{-- <script src="/assets/js/typeahead-bs2.min.js"></script> --}}
    <!-- page specific plugin scripts -->
    {{-- <script src="/assets/js/jquery.dataTables.min.js"></script>
    <script src="/assets/js/jquery.dataTables.bootstrap.js"></script> --}}
    <!--css end-->

    <!--js start-->
    <script type="text/javascript">
        var URLPrefix = { "shop": "http://shop.yhd.com", "returnyas": "http://yas.yhd.com", "netpay": "http://netpay.yihaodian.com", "jipiao": "http://jipiao.1mall.com", "memberVip": "http://vip.yhd.com", "piao": "http://piao.1mall.com/myOrder.action", "opinionhelp": "http://help.yhd.com", "yihaodian_img": "http://d11.yihaodianimg.com;http://d12.yihaodianimg.com;http://d13.yihaodianimg.com", "mallImgDomain": ".yihaodianimg.com", "search": "http://www.yhd.com/ctg", "ad_ydt_yhd": "http://p4p.yhd.com/advdolphin/external/prdBiddingAd?", "commentZoneMall": "http://e.yhd.com/front-pe", "SDFDomainUrl": "http://www.sdfeng.com", "promotion_1mall": "http://interface.yhd.com/promotion/search/getPromotionInfoWithSku.do", "productDetailHost": "http://www.yhd.com", "fund": "https://8.yhd.com", "central": "http://www.yhd.com", "deliveryRule": "http://cms.yhd.com/cms/view.do?topicId=13735&type=3", "mobilemall": "http://m.yhd.com", "productDetailMall": "http://item.yhd.com", "promotion_boughtItem": "http://interface.yhd.com/promotion/search/getPromotionInfoWithSku.do", "pms_boughtItem": "http://pms.yhd.com/pms/getProductByBought.do", "yaowang": "http://www.111.com.cn", "yihaomall_img": "http://d11.yihaodianimg.com;http://d12.yihaodianimg.com;http://d13.yihaodianimg.com", "mingpin": "http://interface.int.yihaodian.com/mingpin/hessian/mingpinActivityService", "coupon_self": "http://coupon.yhd.com", "pms_boughtItemIndex": "http://pms.yhd.com/pms/getProductByBoughtForIndex.do", "search_keyword": "http://search.yhd.com", "tuanGou": "http://t.yhd.com", "productDetail": "http://item.yhd.com", "b2bManagerUrl": "http://b2beam.yhd.com", "productDetailIdc": "http://item-home.yhd.com", "commentZoneYhd": "http://e.yhd.com/front-pe", "pointShop": "http://jifen.yhd.com", "trymall": "http://try.yhd.com", "dqg": "http://www.yhd.com/dqg/mysubscribe/mySubscribe.do", "busyStock_boughtItem": "http://busystock.i.yihaodian.com/busystock/restful/truestock", "statics": "http://image.yihaodianimg.com/member", "mobile": "http://m.yhd.com", "tuanGouMainUrl": "http://t.yhd.com", "shoping_checkout_self": "http://buy.yhd.com", "insurance": "http://life.1mall.com/queryMyOrders.action", "yaowang_img": "http://d1.111.com.cn", "edm": "http://edm.yhd.com", "realBargainRulePage": "http://cms.yhd.com/cmsPage/show.do?pageId=50983", "cms": "http://cms.yhd.com", "pms": "http://pms.yhd.com", "chongzhi": "http://image.yihaodianimg.com/virtual-web_static/mobile_myyhd_index.html", "my_statics": "http://image.yihaodianimg.com/member", "passportmall": "https://passport.yhd.com", "shoping_cart_self": "http://cart.yhd.com", "caipiao": "http://life.yhd.com/lottery/displayMyLottery.do", "messageUrl": "http://edm.yhd.com/pcMsg/myMessage.action", "life": "http://life.yhd.com", "sitedomain": ".yhd.com", "pms_index": "http://pms.yhd.com/pms/getPeriodProduct.do?currSiteType=1", "webimPrefix": "http://webim.yhd.com", "b2bCardUrl": "http://b2beam.yhd.com/gift-cards/displayGiftCardAddMoney.do", "tracker": "tracker.yhd.com", "mobileyhd": "http://my.m.yhd.com", "uploadPostUrl": "http://upload.yihaodian.com/upload/UploadAction", "onlineAssistant": "http://ic.yhd.com/toolbar/jsp/download.jsp", "mallCacheTime": "10", "mallTypeMainUrl": "http://s.yhd.com", "my": "http://my.yhd.com", "pms_order": "http://pms.yhd.com/pms/getOrderGuessYourFavorate.do", "mymall": "http://my.yhd.com", "oldForNewIframe_1": "http://yhd.youdemai.com/product/product/index?yhduserid=%s&uec=%<s", "tryyihaodian": "http://try.yhd.com", "pms_1mall": "http://pms.yhd.com", "oldForNewIframe_2": "http://yihaodian2.aihuishou.com/home?uec=%s", "oldForNewIframe_3": "http://www.sdfeng.com/Yhdiframe/recycle?uec=%s", "pms_yihaodian": "http://pms.yhd.com", "dingqigouUrl": "http://www.yhd.com/dqg/mysubscribe/mydqg.do", "passport": "https://passport.yhd.com", "channel": "list.html?", "mall": "http://www.yhd.com" };
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
        var siteStyle = 0;
        var siteFlag = 1;
        var currDomain = "http://www.yhd.com";
        var oppositeDomain = "http://www.yhd.com";
        var busystock = "http://gps.yihaodian.com";
        var multiSearch = "true";
        var globalShowMarketPrice = "0";
        var isIndex = 0;
        var currVersionNum = 1563681;
        var projectVersionNum = "0";
        var currProvinceId = 1;
        var lazyLoadImageObjArry = lazyLoadImageObjArry || [];
        var isFixTopNav = false;

        var globalSearchSelectFlag = "1";
        var globalSearchHotkeywordsFlag = "1";
        var globalTopPrismFlag = "1";
        var globalTpCheckFlag = "1";

        var _globalSpmDataModelJson = { "SPM_COM": { "ADD_CART": 1, "ADD_FAV": 2, "DELETE": 6, "TURN_PAGE": 8, "SETTLEMENT": 7 }, "SPM_DATA_TYPE": { "ADVANCED_TAG": 33, "MINGPIN_CAT": 32, "COMMENT_TAG": 28, "SEARCH_SCENE_AD": 36, "KEYWORD": 25, "BASICS_TAG": 34, "TRACKER_CODE": 16, "SMARTBOX_ATTR": 23, "CATEGORY": 9, "SEARCH_TURN_PAGE": 20, "LANDING": 6, "SEARCH_BRAND_SHOP": 35, "PROMOTION": 8, "MSG_TYPE": 31, "PRODUCT": 5, "SEARCH_FILTER": 21, "AD": 12, "SHOP": 26, "TUAN": 11, "SMARTBOX_KW": 22, "MINGPIN": 17, "PROVINCE": 14, "SEARCH_WORD": 15, "COUPON": 7, "BRAND": 10, "SEARCH_SORT": 19, "SMARTBOX_CATE": 24 }, "MYYHD_PC_USERINFO": "2098", "SPM_SYSTEM_TYPE": { "PMS": 4, "EDM": 30, "AD": 13, "CATEGORY": 29, "SEARCH": 3, "MANUAL": 2, "TRY": 27, "STORE": 18, "AUTO": 1 }, "SPM_AREA": { "MYYHD_PC_USERINFO_BINE_MAIL": 2383, "YHD_GLOBAl_PRISM": 22, "YHD_GLOBAl_HEADER_RIGHT_AD": 18, "YHD_GLOBAl_HEADER_CATEGORY_0": 156, "MYYHD_PC_USERINFO_MAIL_SEND": 2391, "MYYHD_PC_USERINFO_MAIL_NEXT": 2389, "YHD_GLOBAl_HEADER_CATEGORY_1": 157, "YHD_GLOBAl_HEADER_CATEGORY_2": 158, "YHD_GLOBAl_HEADER_CATEGORY_3": 159, "MYYHD_PC_USERINFO_DETAIL": 1634, "YHD_GLOBAl_HEADER_CATEGORY_4": 160, "YHD_GLOBAl_HEADER_CATEGORY_5": 161, "YHD_GLOBAl_HEADER_CATEGORY_6": 162, "YHD_GLOBAl_HEADER_ORDER": 155, "YHD_GLOBAl_HEADER_CATEGORY_7": 163, "YHD_GLOBAl_HEADER_CATEGORY_8": 164, "YHD_GLOBAl_HEADER_CATEGORY_9": 165, "MYYHD_PC_USERINFOPIC_SURE": 1639, "MYYHD_PC_USERINFO_BINE_MOBILE": 2381, "YHD_GLOBAl_TOP_PROVINCE": 153, "YHD_GLOBAl_FOOTER_BROWSE_RELATED": 19, "YHD_GLOBAl_HEADER_CATEGORY": 15, "MYYHD_PC_USERINFO_EDITPIC": 1635, "YHD_GLOBAl_HEADER_LOGO": 11, "YHD_GLOBAl_FOOTER": 20, "YHD_GLOBAl_TOP_UNLOGIN": 150, "MYYHD_PC_USERINFO_MAIL_BIND": 2390, "MYYHD_PC_USERINFO_SAFE": 1636, "YHD_GLOBAl_HEADER_CATEGORY_13": 169, "YHD_GLOBAl_HEADER_CATEGORY_12": 168, "YHD_GLOBAl_HEADER_CATEGORY_11": 167, "YHD_GLOBAl_HEADER_MOBILE": 14, "YHD_GLOBAl_HEADER_CATEGORY_10": 166, "YHD_GLOBAl_TOP_USER": 7, "YHD_GLOBAl_HEADER_CATEGORY_15": 595, "YHD_GLOBAl_HEADER_CATEGORY_14": 170, "YHD_GLOBAl_HEADER_CART": 149, "YHD_GLOBAl_TOP_BANNER": 9, "YHD_GLOBAl_HEADER_HOT_SEARCH": 13, "YHD_GLOBAl_LEFT_CNY": 2655, "YHD_GLOBAl_HEADER_SEARCH": 12, "YHD_GLOBAl_TOP_MENU": 8, "YHD_GLOBAl_HEADER_SEARCHSHOP": 2058, "MYYHD_PC_USERINFO_EMAIL": 1637, "MYYHD_PC_USERINFO_MAIL_FINISH": 2392, "MYYHD_PC_USERINFO_SURE": 1638, "YHD_GLOBAl_TOP_MSG": 2549, "MYYHD_PC_USERINFO_SFZ_EIDT": 2382, "YHD_GLOBAl_HEADER_MINICART": 17, "YHD_GLOBAl_TOP_MESSAGE": 152, "YHD_GLOBAl_HEADER_WELFARE": 154, "YHD_GLOBAl_HEADER_NAV": 16, "YHD_GLOBAl_FOOTER_HELP": 21, "YHD_GLOBAl_TOP_LOGIN": 151, "YHD_GLOBAl_TOP_CURTAIN": 10, "MYYHD_PC_USERINFO_MAIL_CODE": 2388 } };
    </script>
    <!--js end-->
</head>

<body id="comParamId" data-param='{"globalPageCode":"-1","currPageId":"0"}'>
    <div class="pop_win" id="yhd_pop_win" style="display:none;"></div>
    <div class="hd_header_wrap">
        <div id="global_error_log" style="display:none"></div>
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
        <div class="hd_global_top_bar" id="global_top_bar">
            <div class="wrap clearfix">
                <div class="hd_topbar_left clearfix">
                    <div class="hd_unlogin_wrap" data-addclass="hd_unlogin_hover" id="global_unlogin" data-tpa="YHD_GLOBAl_TOP_UNLOGIN">
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
                                    {{-- <a class="hd_avata_box" href="http://my.yhd.com/member/my.do" target="_blank"
                                        data-ref="YHD_TOP_userpic_nonlogin"></a> --}}
                                </div>
                                <div class="hd_growth_box">
                                    <a class="hd_vip_earn" href="http://vip.yhd.com" target="_blank" data-ref="YHD_TOP_vip_nonlogin">会员专享价，V3免费购</a>
                                    <p class="hd_my_yhd"><a href="http://my.yhd.com/member/my.do" target="_blank"
                                            data-ref="YHD_TOP_myyihaodian_nonlogin">欢迎进入我的1号店</a></p>
                                </div>
                            </div>
                            <div class="hd_message">
                                <a href="http://jifen.yhd.com/pointshop/pointIndex.do" target="_blank" data-ref="YHD_TOP_userjifen_nonlogin">积分</a>
                                <a href="http://vip.yhd.com/badge-shop/index.html" target="_blank" data-ref="YHD_TOP_userxunzhang_nonlogin">勋章</a>
                            </div>
                        </div>
                        <em class="hd_login_arrow"></em>
                    </div>
                    <div class="hd_login_wrap none" id="global_login" data-type="new" data-mpIcon='{"imgUrl":"images/choujiang.gif", "imgLink":"", "tracker":"", "altName":""}'
                        data-tpa="YHD_GLOBAl_TOP_LOGIN">
                    </div>
                    <div class="hd_notice_wrap none" id="hdUserMsg" data-cfg="1" data-tpa="YHD_GLOBAl_TOP_MSG">
                        <a class="hd_notice_tit clearfix" href="http://edm.yhd.com/pcMsg/myMessage.action" data-ref="YHD_TOP_MSG"
                            rel="nofollow" target='_blank'><i></i>我的消息<span></span></a>
                        <div class="hd_notice"></div>
                    </div>
                    <div class="hd_indxProvce fl" id="headerSelectProvince" data-tpa="YHD_GLOBAl_TOP_PROVINCE">
                        <span>送货至</span><a class="hd_header_province_name" id="currProvince" href="javascript:showProvincesV2();"></a>
                        <div class="hd_provincelist" id="headerAllProvince" data-hot="1:上海,2:北京,20:广东,18:湖北,12:四川,14:福建">
                        </div>
                    </div>
                </div>
                <div class="hd_top_manu clearfix" data-tpa="YHD_GLOBAl_TOP_MENU">
                    <ul class="clearfix">
                        <li class="hd_menu_tit hd_my_order" data-addClass="hd_menu_hover" id="glHdMyYhd" data-tpc="1">
                            <a class="hd_menu" target="_blank" data-ref="YHD_TOP_myyhd" href="http://my.yhd.com/member/my.do"
                                rel="nofollow"><s></s>我的1号店</a>
                            <div class="hd_menu_list">
                                <ul>
                                    <li><a href="http://my.yhd.com/order/myOrder.do" data-ref="YHD_TOP_order" target="_blank"
                                            rel="nofollow">我的订单</a></li>
                                    <li><a href="http://my.yhd.com/points/displayPointAccount.do" data-ref="YHD_TOP_points"
                                            target="_blank" rel="nofollow">我的积分</a></li>
                                    <li><a href="http://coupon.yhd.com/myCoupon" data-ref="YHD_TOP_coupon" target="_blank"
                                            rel="nofollow">我的抵用券</a></li>
                                    <li><a href="http://my.yhd.com/member/myCollection/myCollectionProduct.do" data-ref="YHD_TOP_mycollection"
                                            target="_blank" rel="nofollow">我的收藏夹</a></li>
                                    <li><a href="http://e.yhd.com/front-pe/pelist/view.do" data-ref="YHD_TOP_comment"
                                            target="_blank" rel="nofollow">我的评论</a></li>
                                    <li><a href="http://vip.yhd.com" data-ref="YHD_TOP_vip" target="_blank" rel="nofollow">会员专享</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="hd_menu_tit" data-addclass="hd_menu_hover" id="glShouCang">
                            <a href="javascript:void(0);" class="hd_menu">
                                <span style="vertical-align:middle;">&nbsp;&nbsp;&nbsp;&nbsp;收藏夹</span></a>
                            <div class="hd_menu_list" id="glShouCangChild" data-tpc="2">
                                <ul>
                                    <li><a href="http://my.yhd.com/member/myNewCollection/myFavorite.do?operType=0"
                                            data-ref="YHD_TOP_mycollection_product" target="_blank" rel="nofollow">商品收藏</a></li>
                                    <li><a href="http://my.yhd.com/member/myNewCollection/myFavorite.do?operType=1"
                                            data-ref="YHD_TOP_mycollection_shop" target="_blank" rel="nofollow">店铺收藏</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="hd_menu_tit" data-addClass="hd_menu_hover" id="glKeHuDuan">
                            <a href="#" class="hd_menu"><i class="hd_mobile_icon"></i>掌上1号店</a>
                            <div class="hd_mobile_show">
                                <i></i>
                                <div class="hd_mobile_list clearfix" data-tpc="3">
                                    <div class="hd_mobile_content">
                                        <img src="/beimages/blank.gif" alt="" original="http://d9.yihaodianimg.com/N06/M0A/60/7F/ChEbu1WRDpOAf6xxAAAz2LgGaek47900_93x93.jpg">
                                    </div>
                                    <dl class="hd_mobile_tab">
                                        <dt><b>掌上1号店</b></dt>
                                        <dd><a class="blue_link" href="http://cms.yhd.com/sale/157119" target="_blank"
                                                data-ref="YHD_TOP_wx_link">手机购物更优惠</a></dd>
                                        <dd>
                                            <a href="https://itunes.apple.com/us/app/1hao-dian/id427457043?mt=8" target="_blank"
                                                data-ref="YHD_TOP_wx_iphone" rel="nofollow" class="hd_iconfont"></a>
                                            <a href="https://itunes.apple.com/cn/app/1hao-dianhd/id550780860?mt=8"
                                                target="_blank" data-ref="YHD_TOP_wx_ipad" rel="nofollow" class="hd_iconfont"></a>
                                            <a href="http://m.yhd.com/downloads/10600518746/TheStoreApp.apk" target="_blank"
                                                data-ref="YHD_TOP_wx_android" rel="nofollow" class="hd_iconfont"></a>
                                        </dd>
                                    </dl>
                                </div>
                            </div>
                        </li>

                        <li class="hd_menu_tit" data-addClass="hd_menu_hover" id="glKeHuFuWu" data-tpc="4">
                            <a target="_blank" href="http://www.yhd.com/cms/view.do?topicId=18942" data-ref="YHD_TOP_help"
                                class="hd_menu"><s class="khfw"></s>客户服务</a>
                            <div class="hd_menu_list">
                                <ul>
                                    <li><a href="http://my.yhd.com/order/myOrder.do" data-ref="YHD_TOP_help_baoguo"
                                            target="_blank">包裹跟踪</a></li>
                                    <li><a href="http://www.yhd.com/cms/view.do?topicId=18991" data-ref="YHD_TOP_help_wenti"
                                            target="_blank">常见问题</a></li>
                                    <li><a href="http://yas.yhd.com/return/returnApplyList.do" data-ref="YHD_TOP_help_shouhou"
                                            target="_blank">在线退换货</a></li>
                                    <li><a href="http://help.yhd.com/opinion/opinionList.do" data-ref="YHD_TOP_help_tousu"
                                            target="_blank">在线投诉</a></li>
                                    <li><a href="http://www.yhd.com/marketing/deliveryinfo/deliveryInfo.do" data-ref="YHD_TOP_help_peisongfanwei"
                                            target="_blank">配送范围</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="hd_menu_tit" data-addClass="hd_menu_hover" id="glWangZhanDaoHang">
                            <a href="#" class="hd_menu">网站导航</a>
                            <div class="hd_site_nav" data-tpc="5">
                                <em></em>
                                <ul class="clearfix">
                                    <li><a href="http://1mall.yhd.com" data-ref="YHD_TOP_links_mall" target="_blank">1号商城</a></li>
                                </ul>
                                <ul class="clearfix">
                                    <li><a target="_blank" data-ref="14509_10535717_2" data-tcd="AD.14509_10535717_2"
                                            href="http://club.yhd.com/" title="1号社区"> 1号社区
                                        </a></li>
                                    <li><a target="_blank" data-ref="14509_10535724_4" data-tcd="AD.14509_10535724_4"
                                            href="http://try.yhd.com/" title="0元试用"> 0元试用
                                        </a></li>
                                    <li><a target="_blank" data-ref="14509_11754949_5" data-tcd="AD.14509_11754949_5"
                                            href="http://cms.yhd.com/cmsPage/show.do?pageId=73060" title="平安金卡"> 平安金卡
                                        </a></li>
                                    <li><a target="_blank" data-ref="14509_15636664_6" data-tcd="AD.14509_15636664_6"
                                            href="http://fx.yhd.com/pifa/index.action" title="分销平台"> 分销平台
                                        </a></li>
                                </ul>
                                <ul class="clearfix">
                                    <li><a href="http://union.yhd.com/" data-ref="YHD_TOP_union" target="_blank">网站联盟</a></li>
                                    <li><a href="http://zhaoshang.yhd.com" data-ref="YHD_TOP_settled" target="_blank">招商通道</a></li>
                                    <li><a href="http://b2b.yhd.com/" data-ref="YHD_TOP_b2b" target="_blank">企业采购</a></li>
                                </ul>
                            </div>
                        </li>

                    </ul>

                    <span class="hd_follow_us">关注我们：</span>
                    <a target="_blank" id="weibo" onclick="gotracker('2','YHD_TOP_weibo');" rel="nofollow" href="http://weibo.com/yihaodian"
                        class="hd_sina_weibo" title="去关注1号店的新浪微博">关注1号店新浪微博</a>
                    <a data-tpc="6" class="hd_weixin hd_menu_tit" data-addClass="hd_menu_hover" id="glWeiXin" title="关注1号店微信"
                        href="http://cms.yhd.com/cms/view.do?topicId=24484" target="_blank">
                        <div class="hd_weixin_show">
                            <i></i>
                            <p>
                                扫描二维码<br />关注1号店微信
                            </p>
                            <img src="/beimages/blank.gif" alt="扫描二维码<br />关注1号店微信" original="http://d7.yihaodianimg.com/N00/M04/0E/56/CgQCtlKW1RSAe6dIAAAcun_R_Wk58300.jpg" />
                        </div>
                    </a>
                </div>
            </div>
        </div>



        <div class="wrap hd_header clearfix" id="site_header">
            <div id="logo_areaID" class="hd_logo_area fl clearfix" data-tpa="YHD_GLOBAl_HEADER_LOGO">
                <a href="index.html" class="fl" data-ref="index_1">
                    <img src="http://d9.yihaodianimg.com/N02/M02/40/EB/CgQCsFLVBOOAE0boAAAK5UNpfUI56300.png" alt="1号店">
                </a>
                <div class="logo_area_right fl">
                    <a href="http://www.yhd.com" target="_blank" data-ref="16152_21321887_1" class="header_ad_n"><img
                            src="http://d9.yihaodianimg.com/N07/M02/72/0C/ChEbvFSb6eiAdCkSAAARM8pEdCs39700.jpg" alt="1号店" /></a>
                </div>
            </div>

            <div class="hd_head_search">
                <div class="hd_search_form clearfix">
                    <div class="hd_serach_tab" id="hdSearchTab" data-type="1">
                        <a href="javascript:;" data-type="1">商品</a>
                        <a href="javascript:;" data-type="2">店铺</a>
                        <i></i>
                    </div>
                    <div class="hd_search_wrap clearfix" data-tpa="YHD_GLOBAl_HEADER_SEARCH">

                        <input class="hd_input_test" name="keyword" value="2016宠爱女人节-美容护理满199减100送100！" id="keyword"
                            type="text" original="2016宠爱女人节-美容护理满199减100送100！" url="http://cms.yhd.com/sale/vdfXODXbBvo"
                            style="color:#333333;" maxLength="100" AUTOCOMPLETE="off" data-autofocus="true"
                            x-webkit-speech="" onwebkitspeechchange="emptySearchBar();" x-webkit-grammar="builtin:translate" />

                        <!--搜索提示 begin-->
                        <div id="searchSuggest" class="hd_search_tips_result hd_search_history" style="display:none"
                            onmouseover="$('#searchSuggest').show()"></div>
                        <button type="button" class="hd_search_btn" id="hdSearchBtn" onclick="javascript:addTrackPositionToCookie('1','search');searchMeForClick();"
                            isTrkCustom="1">搜 索</button>
                    </div>
                    <button class="hd_shop_btn" type="button" id="hdShopBtn" style="display:none;" onclick="javascript:addTrackPositionToCookie('1','search_shop');">搜本店</button>
                    <button class="hd_shop_btn" type="button" id="hd_search_tuan" style="display:none;" onclick="javascript:addTrackPositionToCookie('1','search_tuan');">搜团购</button>
                </div>
                <p id="hotKeywordsShow" class="hd_hot_search" data-tpa="YHD_GLOBAl_HEADER_HOT_SEARCH"
                    data-specialHotword='{"text":"厨卫清洁","linkUrl":"http://cms.yhd.com/sale/phYwTRwNnzM","style":"0","tc":"ad.0.0.14585-31220482","tce":null,"perTracker":"14585_31220482_1"}'>
                </p>
            </div>

            <div class="hd_prism_wrap" id="hdPrismWrap">
                <div class="hd_prism hd_welfare" id="hdPrismCoupon" data-tpa="YHD_GLOBAl_HEADER_WELFARE">
                    <u style="display:none;" id="hdPrismCouponNum"></u>
                    <a href="http://coupon.yhd.com/myCoupon" target="_blank" data-ref="top_prism_coupon" class="hd_prism_tab">
                        <em></em>
                        <p>福利</p>
                        <i></i>
                    </a>
                    <div class="hd_prism_show global_loading" id="hdPrismCouponList">
                    </div>
                </div>

                <div class="hd_prism hd_order" id="hdPrismOrder" data-tpa="YHD_GLOBAl_HEADER_ORDER">
                    <u style="display:none;" id="hdPrismOrderNum"></u>
                    <a href="http://my.yhd.com/order/myOrder.do" target="_blank" data-ref="top_prism_order" class="hd_prism_tab">
                        <em></em>
                        <p>订单查询</p>
                        <i></i>
                    </a>
                    <div class="hd_prism_show global_loading" id="hdPrismOrderList">
                    </div>
                </div>

            </div>
        </div>
        <div id="headerNav" class="hd_header_nav ">
            <div class="hd_fixed_bg"></div>
            <div class="wrap clearfix">
                <div id="allSortOuterbox" class="not_index">
                    <div class="hd_all_sort_link fl" data-tpa="YHD_GLOBAl_HEADER_CATEGORY_0"><a data-ref="YHD_TOP_index_5"
                            href="http://www.yhd.com/marketing/allproduct.html" class="fl">所有商品分类</a></div>
                    <div class="hd_allsort_out_box_new" id="allCategoryHeader" style="display:none;">
                    </div>
                </div>
                <div class="headerNavWrap" id="global_menu" data-tpa="YHD_GLOBAl_HEADER_NAV">
                    <ul id="wideScreenTabShowID" class="headerNavMain clearfix">





                        <li class="cur" style="z-index:799"><a href="http://www.yhd.com" data-ref="2704_13664428_1"
                                data-tcd="AD.2704_13664428_1">首页</a></li>

                        <li style="z-index:798"><a href="supermarket.html" target="_blank" hl="" class="light" data-ref="2704_15986209_2"
                                data-tcd="AD.2704_15986209_2">自营超市</a></li>

                        <li style="z-index:797"><a href="http://t.yhd.com" target="_blank" hl="疯抢" class="light"
                                data-ref="2704_13659166_3" data-tcd="AD.2704_13659166_3">1号团</a></li>

                        <li style="z-index:796"><a href="http://1mall.yhd.com" target="_blank" hl="" data-ref="2704_13659165_4"
                                data-tcd="AD.2704_13659165_4">1号商城</a></li>

                        <li style="z-index:795"><a href="http://s.yhd.com/" target="_blank" hl="" data-ref="2704_13852075_5"
                                data-tcd="AD.2704_13852075_5">闪购</a></li>

                        <li style="z-index:794"><a href="list.html?/fresh.html" target="_blank" hl="" data-ref="2704_15636713_6"
                                data-tcd="AD.2704_15636713_6">活色生鲜</a></li>

                        <li style="z-index:793"><a href="list.html?/yao.html" target="_blank" hl="" data-ref="2704_15736041_7"
                                data-tcd="AD.2704_15736041_7">医药</a></li>

                        <li style="z-index:792"><a href="list.html?/haigou" target="_blank" hl="" data-ref="2704_23981202_8"
                                data-tcd="AD.2704_23981202_8">1号海购</a></li>

                        <li style="z-index:791"><a href="http://dangdang.yhd.com" target="_blank" hl="" data-ref="2704_31299628_9"
                                data-tcd="AD.2704_31299628_9">当当书城</a></li>
                    </ul>
                </div>


                <div class="hd_fix_search clearfix">
                    <input class="keywordInput" name="keyword" value="2016宠爱女人节-美容护理满199减100送100！" id="fix_keyword"
                        type="text" original="2016宠爱女人节-美容护理满199减100送100！" url="http://cms.yhd.com/sale/vdfXODXbBvo"
                        style="color:#333333;" maxLength="100" AUTOCOMPLETE="off" data-autofocus="auto" x-webkit-speech=""
                        onwebkitspeechchange="emptySearchBar('#fix_keyword');" x-webkit-grammar="builtin:translate" />
                    <a href="javascript:addTrackPositionToCookie('1','search_float_btn');searchMe(jQuery('#fix_keyword'));"
                        class="hd_fix_searchBtn">搜 索</a>
                    <a href="javascript:addTrackPositionToCookie('1','search_shop_float_btn');" class="hd_fix_searchshop"
                        id="hdShopBtnFix" style="display:none;">搜本店</a>
                    <!--搜索提示 begin-->
                    <div class="hd_search_tips_result hd_search_history" id="fix_searchSuggest" style="display:none;">
                    </div>
                    <!--搜索提示 end-->
                </div>

                <div class="hd_mini_cart" id="miniCart" data-tpa="YHD_GLOBAl_HEADER_CART" data-mrt="1" data-version="1">
                    <i class="hd_c_arrow"></i>
                    <u class="hd_c_num none" id="in_cart_num"></u>
                    <a class="hd_prism_cart" href="http://cart.yhd.com/cart/cart.do?action=view" data-ref="YHD_TOP_MINICART">
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
                    <a id="globalRightPicsV2" href="http://cms.yhd.com/sale/157119" target="_blank" data-ref="17102_28453146_1"
                        data-tpa="YHD_GLOBAl_HEADER_RIGHT_AD">
                        <i><img src="http://d8.yihaodianimg.com/N10/M0B/A3/ED/ChEi2lYI4L-AB-YcAAAgFI-WAls08000.gif" alt="掌上1号店"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <!-- cache enable -->
    <!--content start-->
    <div alt="" id="container" class="clearfix">
        <div class="grid_4" id="grid_4" selectId="Myyhd_New_Left_Menu_Member_Ziliao"></div>
        <script type="text/javascript" src="/bejs/myyhdLeftMenuNew.js"></script>
        <input type="hidden" id="utype" value="0" />
        <div class="columnright">
            <div class="tab_container">
                <ul class="mod_vs_one__tab">
                    <li class="title_li_active">个人信息</li>
                    <li class="">实名认证</li>
                </ul>
            </div>

            <div class="mod_vs_one__content">
                <div class="mod_person_edit person_info clearfix">
                    <div class="mod_person_edit_top clearfix">
                        <div class="mod_person_edit_left">
                            <div class="header_img">
                                <label for="">头像：</label>
                                <a class="box_a">
                                    <input type="hidden" name="userId" id="userId" value="215915778" />
                                    <input type="hidden" name="userInfo.id" value="215915778" />
                                    <p class="user_pic"><img src="/beimages/peopleicon_01.gif" width="78" height="78" /></p>
                                    <span class="opacity_box"></span>
                                    <span class="real_box" style="cursor:pointer" onclick="showUploadPopbox();"
                                        data-tpa="MYYHD_PC_USERINFO_EDITPIC" href="javascript:void(0);">编辑头像</span>
                                </a>
                            </div>
                    <form method="post" name="editInfo" id="updateBaseInfoSubmit" action="{{ route('dobemember',['id'=>$users->id]) }}">
                        @csrf
                                <input type="hidden" name="myyhdUserToken" value="ad0c30e4-9c0d-403b-8873-51d6123493af" />
                                <div class="header_img edit_name">
                                    <label for="">昵称：</label>
                                    <input type="text" name="username" class="input_txt nick_name" value="{{$users->username }}">
                                    <p>
                                        <span class="edit_name_warn" style="margin-left:90px;">昵称长度不能超过40个汉字 </span>
                                    </p>
                                </div>
                                <div class="header_img edit_name">
                                    <label for=""><i>*&nbsp;</i>性别：</label>
                                    <input type="radio" class="gender_radio" name="sex" id="male" value="男" @if($users->sex=='男') checked @endif><span>男</span>
                                    <input type="radio" class="gender_radio" name="sex" id="female" value="女"@if($users->sex=='女') checked @endif><span>女</span>
                                    <input type="radio" class="gender_radio" name="sex" id="female" value="保密"@if($users->sex=='保密') checked @endif><span>保密</span>
                                </div>
                        </div>
                        <div class="mod_person_edit_right">
                            <p><strong>用户名：</strong><strong>b8aee62b815f89ecdc2d97c43148da1b@tencent</strong></p>
                            <p class="telephone_p"><i class="telephone_icon"></i><span class="telephone_border"></span><span
                                    class="telephone_test">手机</span>
                                <span>（已绑定）</span>
                            </p>
                            <p class="telephone_p"><i class="email_icon"></i><span class="telephone_border"></span><span
                                    class="telephone_test">邮箱</span>
                                <span>（未绑定）</span>
                                <p>
                                    <input type="text" style="color:#BDBDBD;" class="input_txt_email" size="38px" id="userEmail"
                                        name="userInfo.email" value="绑定邮箱，送100积分，可兑各种抵用券">
                                </p>
                                <p>
                                    <button class="bind_email" id="emailBind" data-tpa="MYYHD_PC_USERINFO_BINE_MAIL"
                                        onclick="javascript:return false">立即绑定</button>
                                </p>
                            </p>
                            <p class="warn2">注：修改密码、手机等信息请到 <a data-tpa="MYYHD_PC_USERINFO_SAFE" href="http://my.yhd.com/member/safecenter/index.do"
                                    target="_self">安全设置</a></p>
                        </div>
                    </div>
                    <div class="header_img birth_box clearfix">
                        <label class="birth" for=""><i>*&nbsp;</i>生日：</label>
                        <div class="selected_box">
                            <input type="text" value="{{ $users->birthday }}"  name="birthday" class="laydate-icon" onClick="laydate({istime: false, format: 'YYYY-MM-DD'})">
                        </div>
                    </div>
                    <input class="sure_save" style="cursor:pointer" data-tpa="MYYHD_PC_USERINFO_SURE" type="submit" id="btnSubmit"
                        value="确认保存" />
                    </form>
                </div>


                <div class="mod_person_edit checked_real_name clearfix hide">
                    <div class="options"><i></i>
                        <span>温馨提示：根据海关规定，购买1号海购商品需要办理清关手续，需要您的配合进行实名认证，以确保您购买的商品顺利通过海关检查。1号店确保你的个人隐私不受侵犯，感谢您的配合，如有疑问，请您随时拨打客服热线。</span>
                    </div>
                    <!--<p class="warn">填写真实姓名、身份证编号</p> -->
                    <dl class="checked_real">
                        <dt class="id_card clearfix">
                            <label class="card_num" for=""><i>*</i>真实姓名：</label>
                            <input type="text" name="userInfo.endUserRealRealName" class="input_txt" value="" id="end_user_real_realname_2" />
                        </dt>
                        <dt class="id_card clearfix">
                            <label class="card_num" for=""><i>*</i>身份证号：</label>
                            <input type="text" maxlength="18" id="idCard" name="userInfo.idCard" _valueBackup="" value="" />

                            <span id="tipinfo">
                            </span>
                            <p class="tips">请填写和真实姓名一致的18位身份证号码</p>
                        </dt>

                        <dt class="card_submit clearfix">
                            <label class="card_type" for=""><i>*</i>身份证正面:</label>
                            <div class="container_id_card2 first_id_container">
                                <a href="javascript:;" id="idCardFront" _isUpload=false><i class="icon_add"></i>添加照片
                                    <div class="file_add_pic">
                                        <input type="file" id="card_front" name="frontCard" />
                                    </div>
                                    <div id="frond_card_queue_pic"></div>
                                </a>
                            </div>
                            <label class="card_type" for="">示例:</label>
                            <div class="container_id_card example"><img src="/beimages/card_img1.png" /></div>
                            <div class="result_submit" id="btnFrontUploadAgain" style="display:none">
                                <div id="card_front_again" name="frontCardAgain"> </div>
                                <div id="frond_card_queue"></div>
                            </div>
                        </dt>

                        <dt class="card_submit clearfix">
                            <label class="card_type" for=""><i>*</i>身份证背面:</label>
                            <div class="container_id_card2 first_id_container">
                                <a href="javascript:;" id="idCardBack" _isUpload="false"><i class="icon_add"></i>添加照片
                                    <div class="file_add_pic">
                                        <div id="card_back" name="backCard"></div>
                                    </div>
                                    <div id="back_card_queue_pic"></div>
                                </a>
                            </div>
                            <label class="card_type" for="">示例:</label>
                            <div class="container_id_card example" href="javascript:;"><img src="/beimages/card_img2.png"
                                    alt="" /></div>
                            <div class="result_submit" id="btnBackUploadAgain" style="display:none">
                                <div id="card_back_again" name="backCardAgain"> </div>
                                <div id="back_card_queue"></div>
                            </div>
                        </dt>

                        <dt class="card_submit clearfix">
                            <label class="card_type" for="">手持身份证照片:</label>
                            <div class="container_id_card2 first_id_container">
                                <a href="javascript:;" id="idCardHand" _isUpload="false"><i class="icon_add"></i>添加照片
                                    <div class="file_add_pic">
                                        <div id="handWith_card" name="withIdCard"></div>
                                    </div>
                                    <div id="handWith_card_queue_pic"></div>
                                </a>
                            </div>
                            <label class="card_type" for="">示例:</label>
                            <div class="container_id_card example" href="javascript:;"><img src="/beimages/card_img3.png"
                                    alt="" /></div>
                            <div class="result_submit" id="btnHandUploadAgain" style="display:none">
                                <div id="handWith_card_again" name="withIdCardAgain"> </div>
                                <div id="handWith_card_queue"></div>
                            </div>
                        </dt>

                        <dt class="warn_submit">
                            <p>证件必须是清晰彩色原件电子版本。可以是扫描件或者数码拍摄照片。仅支持jpg、png、jpeg的图片格式</p>
                            <p id="flashPlayInstallEditinfoCheck"></p>
                            <input type="hidden" id="f_hidden">
                            <input type="hidden" id="b_hidden">

                            <input type="hidden" id="w_hidden">
                            <input data-tpa="MYYHD_PC_USERINFOPIC_SURE" class="btn_save" type="button" value="确认保存" id="saveIdCardBtn" />
                        </dt>
                    </dl>
                </div>


            </div>
        </div>
        <!--编辑头像弹出层 begin-->
        <div class="pop_box edit_picture hide" id="popbox_editpic" style="display: none; top:250px">
            <div class="pop_tit"><a class="close fr" onclick="cancelUpload();">关闭</a>修改头像</div>
            <p class="select_way"><a href="###" class="cur_edit" id="user_pic_sel" onclick="changePicType(this);">自定义头像</a>|<a
                    href="###" id="sys_pic_sel" onclick="changePicType(this);">系统头像</a></p>
            <!--自定义头像 begin-->
            <div class="pic_editbox clearfix" id="user_pic_box">
                <div id="flashPlayInstallEditinfoCheck"></div>
                <p><span id="packaging"><span id="userPicUpload"></span></span> <span class="gray9">仅支持JPG、JPEG、PNG图片文件，且文件小于1M，建议使用正方形图片</span></p>
                <div class="customavatar">
                    <div id="temp">
                        <div id="upload_pic">
                            <img src="" width="238" height="238" />
                        </div>
                    </div>
                    <!--正在上传提示-->
                    <div id="upload_progresse" div-css="10" style="position: absolute;display:none;float: left;">
                        <div id="upload_progress_bge" style="background: #8BABCE; height: 20px; float:left;"></div>
                    </div>
                    <div class="hide" id="fsUploadProgress" style="display:none;">
                        <img src="/beimages/loading.gif" /><span class="gray9">正在上传图片，请稍等...</span>
                    </div>
                    <!--正在上传提示 -->
                </div>
                <dl class="preview clearfix">
                    <dt>您上传的头像会自动生成4种尺寸，请注意中小尺寸的头像是否清晰：</dt>
                    <dd class="picbox1">
                        <span id="size1"><img src="" width="238" height="238" /></span>
                        <p>150x150像素</p>
                        <span id="size2"><img src="" width="238" height="238" /></span>
                        <p>50x50像素</p>

                    </dd>
                    <dd class="picbox2">
                        <span id="size3"><img src="" width="238" height="238" /></span>
                        <p>80x80像素</p>
                        <span id="size4"><img src="" width="238" height="238" /></span>
                        <p>30x30像素</p>
                    </dd>
                </dl>
            </div>
            <!--自定义头像 end-->
            <!--系统头像 begin-->
            <div class="pic_editbox clearfix hide" id="sys_pic_box">
                <dl class="select_pic clearfix">
                    <dt>请选择：</dt>
                    <dd class="cur"><img src="" onclick="selectSysPic(this);" width="80" height="80" /></dd>
                    <dd><img src="" onclick="selectSysPic(this);" width="80" height="80" /></dd>
                    <dd><img src="" onclick="selectSysPic(this);" width="80" height="80" /></dd>
                    <dd><img src="" onclick="selectSysPic(this);" width="80" height="80" /></dd>
                    <dd><img src="" onclick="selectSysPic(this);" width="80" height="80" /></dd>
                    <dd><img src="" onclick="selectSysPic(this);" width="80" height="80" /></dd>
                </dl>
                <dl class="preview clearfix">
                    <dt>预览：</dt>
                    <dd class="picbox1">
                        <img src="" width="150" height="150" class="size1" />
                        <p>150x150像素</p>
                        <img src="" width="50" height="50" class="size3" />
                        <p>50x50像素</p>

                    </dd>
                    <dd class="picbox2">
                        <img src="" width="80" height="80" class="size2" />
                        <p>80x80像素</p>
                        <img src="" width="30" height="30" class="size4" />
                        <p>30x30像素</p>
                    </dd>
                </dl>
            </div>
            <!--系统头像 end-->
            <p class="tc">
                <button class="save_btn" id="save_pic" onclick="saveUpload();">保存</button>
                <button class="cancel_btn" onclick="cancelUpload();">取消</button>
            </p>
        </div>
        <!--编辑头像弹出层 end-->

        <!--温馨提示 begin-->
        <div class="pop_box prompt hide" id="prompt" style="display: none;">
            <div class="pop_tit"><a class="close fr" onclick="closePromptPopbox();">关闭</a>修改头像</div>
            <p class="img_succeed">图片上传成功！</p>
            <div class="prompt_detail">稍后我们将对您的图片进行审核，审核通过后，您的图片将被公开，如审核未通过，我们会尽快通知您。</div>
            <p class="tc"><button class="save_btn" onclick="closePromptPopbox();">确定</button></p>
        </div>
    </div>

    <input type="hidden" id="editinfo" value="1" />
    <div id="popwin_modifyTip" class="none">
        <div id="Tc_giftcard2" class="jqmID1">
            <div class="popbox">
                <div class="popc">
                    <div class="pop_tit"><a class="close fr" href="###" onclick="closeDiv();">关闭</a>提示</div>
                    <div class="recharge_msg">
                        <strong>修改提示！</strong>
                        <h4 id="error_popwin">您的个人信息修改成功！</h4>
                        <ul>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!--content end-->



    <div id="provinceboxDiv"></div>


    <div id="globalBottomBrowseRelated" data-tpa="YHD_GLOBAl_FOOTER_BROWSE_RELATED"></div>

    <div class="ft_wrap">
        <div class="wrap ft_footer_service clearfix" id="footerIcon">


            <a href="http://cms.yhd.com/cms/view.do?topicId=24123" title="" data-tc="ad.0.0.17536-18431204" data-ref="17536_18431204_1"
                target="_blank">
                <img alt="" src="/beimages/blank.gif" original="http://d8.yihaodianimg.com/N05/M0B/39/F3/CgQI0lWskgmADBnsAAAPZvcSh3E68900.jpg" />
                <b>正品保障</b>
                <span>正品行货 放心选购</span>
            </a>


            <a href="http://www.yhd.com/marketing/deliveryinfo/deliveryInfo.do" title="" data-tc="ad.0.0.17539-18431238"
                data-ref="17539_18431238_1" target="_blank">
                <img alt="" src="/beimages/blank.gif" original="http://d6.yihaodianimg.com/N05/M09/96/23/ChEbulWsk4iADa_aAAAM544hHN818600.jpg" />
                <b>满68包邮</b>
                <span>满68元 免运费</span>
            </a>


            <a href="http://cms.yhd.com/cms/view.do?topicId=24071" title="" data-tc="ad.0.0.17542-18431289" data-ref="17542_18431289_1"
                target="_blank">
                <img alt="" src="/beimages/blank.gif" original="http://d9.yihaodianimg.com/N07/M00/2D/8B/CgQIz1WslI-Adao3AAAN5b_ut2I80100.jpg" />
                <b>售后无忧</b>
                <span>7天无理由退货</span>
            </a>


            <a href="http://cms.yhd.com/cms/view.do?topicId=24111" title="" data-tc="ad.0.0.17545-18434559" data-ref="17545_18434559_1"
                target="_blank">
                <img alt="" src="/beimages/blank.gif" original="http://d8.yihaodianimg.com/N09/M06/08/C8/ChEi11WsyiyALBbiAAAN9lEEK5M33200.jpg" />
                <b>准时送达</b>
                <span>收货时间由你做主</span>
            </a>
        </div>





        <div class="wrap ft_service_link clearfix">
            <div lazyLoad_textarea="div_textarea_footerServiceLink" id="footerServiceLinkId">
                <textarea style="display:none;" autocomplete="off" id="div_textarea_footerServiceLink">
		  &lt;div  id=&quot;bottomHelpLinkId&quot;  class=&quot;ft_help_list clearfix&quot;  data-tpa=&quot;YHD_GLOBAl_FOOTER_HELP&quot; &gt;
			    &lt;dl&gt;
				    &lt;dt&gt;新手入门&lt;/dt&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://cms.yhd.com/cms/view.do?topicId=24091&quot; data-ref=&quot;9075_4918049_1&quot;  data-tcd=&quot;AD.9075_4918049_1&quot; target=&quot;_blank&quot;&gt;购物流程&lt;/a&gt;&lt;/dd&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://cms.yhd.com/cms/view.do?topicId=24223&quot; data-ref=&quot;9075_4918070_2&quot;  data-tcd=&quot;AD.9075_4918070_2&quot; target=&quot;_blank&quot;&gt;会员制度&lt;/a&gt;&lt;/dd&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://cms.yhd.com/cms/view.do?topicId=24095&quot; data-ref=&quot;9075_4918532_3&quot;  data-tcd=&quot;AD.9075_4918532_3&quot; target=&quot;_blank&quot;&gt;订单查询&lt;/a&gt;&lt;/dd&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://cms.yhd.com/cms/view.do?topicId=24102&quot; data-ref=&quot;9075_4918536_4&quot;  data-tcd=&quot;AD.9075_4918536_4&quot; target=&quot;_blank&quot;&gt;发票制度&lt;/a&gt;&lt;/dd&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://cms.yhd.com/cms/view.do?topicId=24099&quot; data-ref=&quot;9075_4918577_5&quot;  data-tcd=&quot;AD.9075_4918577_5&quot; target=&quot;_blank&quot;&gt;常见问题&lt;/a&gt;&lt;/dd&gt;
			    &lt;/dl&gt;
			    &lt;dl&gt;
				    &lt;dt&gt;支付方式&lt;/dt&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://cms.yhd.com/cms/view.do?topicId=24107&quot; data-ref=&quot;9077_18431408_1&quot;  data-tcd=&quot;AD.9077_18431408_1&quot; target=&quot;_blank&quot;&gt;货到付款&lt;/a&gt;&lt;/dd&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://cms.yhd.com/cms/view.do?topicId=24126&quot; data-ref=&quot;9077_18431423_2&quot;  data-tcd=&quot;AD.9077_18431423_2&quot; target=&quot;_blank&quot;&gt;网上支付&lt;/a&gt;&lt;/dd&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://cms.yhd.com/cms/view.do?topicId=24128&quot; data-ref=&quot;9077_18431424_3&quot;  data-tcd=&quot;AD.9077_18431424_3&quot; target=&quot;_blank&quot;&gt;银行转账&lt;/a&gt;&lt;/dd&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://cms.yhd.com/cms/view.do?topicId=24114&quot; data-ref=&quot;9077_18431439_4&quot;  data-tcd=&quot;AD.9077_18431439_4&quot; target=&quot;_blank&quot;&gt;礼品卡支付&lt;/a&gt;&lt;/dd&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://cms.yhd.com/cms/view.do?topicId=24104&quot; data-ref=&quot;9077_18431457_5&quot;  data-tcd=&quot;AD.9077_18431457_5&quot; target=&quot;_blank&quot;&gt;其他支付&lt;/a&gt;&lt;/dd&gt;
			    &lt;/dl&gt;
			    &lt;dl&gt;
				    &lt;dt&gt;配送服务&lt;/dt&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://www.yhd.com/marketing/deliveryinfo/deliveryInfo.do?tp=2091.0.0.0.0.KueGJlQ-11-CZDOe&quot; data-ref=&quot;9079_18431491_2&quot;  data-tcd=&quot;AD.9079_18431491_2&quot; target=&quot;_blank&quot;&gt;配送范围及运费&lt;/a&gt;&lt;/dd&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://cms.yhd.com/cms/view.do?topicId=24113&quot; data-ref=&quot;9079_18432687_3&quot;  data-tcd=&quot;AD.9079_18432687_3&quot; target=&quot;_blank&quot;&gt;配送进度查询&lt;/a&gt;&lt;/dd&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://cms.yhd.com/cms/view.do?topicId=24483&quot; data-ref=&quot;9079_18432688_4&quot;  data-tcd=&quot;AD.9079_18432688_4&quot; target=&quot;_blank&quot;&gt;自提服务&lt;/a&gt;&lt;/dd&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://cms.yhd.com/cms/view.do?topicId=24090&quot; data-ref=&quot;9079_18432689_5&quot;  data-tcd=&quot;AD.9079_18432689_5&quot; target=&quot;_blank&quot;&gt;商品验货与签收&lt;/a&gt;&lt;/dd&gt;
			    &lt;/dl&gt;
			    &lt;dl&gt;
				    &lt;dt&gt;售后保障&lt;/dt&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://cms.yhd.com/cms/view.do?topicId=24071&quot; data-ref=&quot;9081_4919277_1&quot;  data-tcd=&quot;AD.9081_4919277_1&quot; target=&quot;_blank&quot;&gt;退换货政策&lt;/a&gt;&lt;/dd&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://cms.yhd.com/cms/view.do?topicId=24366&quot; data-ref=&quot;9081_4919280_2&quot;  data-tcd=&quot;AD.9081_4919280_2&quot; target=&quot;_blank&quot;&gt;退换货流程&lt;/a&gt;&lt;/dd&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://cms.yhd.com/cms/view.do?topicId=24127&quot; data-ref=&quot;9081_4919302_3&quot;  data-tcd=&quot;AD.9081_4919302_3&quot; target=&quot;_blank&quot;&gt;退款说明&lt;/a&gt;&lt;/dd&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://cms.yhd.com/cmsPage/show.do?pageId=73523&quot; data-ref=&quot;9081_13586489_4&quot;  data-tcd=&quot;AD.9081_13586489_4&quot; target=&quot;_blank&quot;&gt;购买延保服务&lt;/a&gt;&lt;/dd&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://cms.yhd.com/cms/view.do?topicId=24088&quot; data-ref=&quot;9081_18432701_5&quot;  data-tcd=&quot;AD.9081_18432701_5&quot; target=&quot;_blank&quot;&gt;联系客服&lt;/a&gt;&lt;/dd&gt;
			    &lt;/dl&gt;
			    &lt;dl&gt;
				    &lt;dt&gt;商家合作&lt;/dt&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://cms.yhd.com/cmsPage/show.do?pageId=94952&quot; data-ref=&quot;9083_18432703_1&quot;  data-tcd=&quot;AD.9083_18432703_1&quot; target=&quot;_blank&quot;&gt;商家入驻&lt;/a&gt;&lt;/dd&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://cms.yhd.com/cms/view.do?topicId=24063&quot; data-ref=&quot;9083_18432706_2&quot;  data-tcd=&quot;AD.9083_18432706_2&quot; target=&quot;_blank&quot;&gt;商必赢&lt;/a&gt;&lt;/dd&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://xue.yhd.com/showlist/rulenew/rule.html&quot; data-ref=&quot;9083_18432707_3&quot;  data-tcd=&quot;AD.9083_18432707_3&quot; target=&quot;_blank&quot;&gt;平台规则&lt;/a&gt;&lt;/dd&gt;
					      &lt;dd&gt;&lt;a href=&quot;http://b2b.yhd.com/index.do&quot; data-ref=&quot;9083_18432708_4&quot;  data-tcd=&quot;AD.9083_18432708_4&quot; target=&quot;_blank&quot;&gt;企业采购&lt;/a&gt;&lt;/dd&gt;
			    &lt;/dl&gt;
		 &lt;/div&gt;

	</textarea>
            </div>

            <!--footer 二维码 begin -->
            <div class="ft_code_wrap clearfix" data-tpa="YHD_GLOBAl_HEADER_MOBILE" id="footerQRcode">
                <div class="ft_mobile_code clearfix">
                    <p>1号店客户端</p>
                    <img src="/beimages/blank.gif" original="http://d9.yihaodianimg.com/N01/M01/0D/7A/CgQCr1KW1juAFH9YAAAatCrcuRI48200.png"
                        alt="1号店客户端二维码" />
                </div>
                <div class="ft_mobile_code clearfix">
                    <p>1号店微信</p>
                    <img src="/beimages/blank.gif" original="http://d6.yihaodianimg.com/N00/M04/0E/56/CgQCtlKW1RSAe6dIAAAcun_R_Wk58300.jpg"
                        alt="1号店官方微信二维码" />
                </div>
            </div>
        </div>
        <!--footer 二维码 end-->

        <div id="footer" data-tpa="YHD_GLOBAl_FOOTER">
            <p class="ft_footer_link">
                <a href="http://cms.yhd.com/cms/view.do?topicId=24183" data-ref="YHD_FOOTER_NAV_about" target="_blank">关于1号店</a>|<a
                    href="http://www.yhd.com/cms/view.do?topicId=8121" data-ref="YHD_FOOTER_NAV_team" target="_blank">我们的团队</a>|<a
                    href="http://union.yhd.com/passport/login_input.do" data-ref="YHD_FOOTER_NAV_union" target="_blank">网站联盟</a>|<a
                    href="http://www.yhd.com/hotq/" data-ref="YHD_FOOTER_NAV_hotProduct" target="_blank">热门搜索</a>|<a
                    href="http://www.yhd.com/marketing/friendlink.html" data-ref="YHD_FOOTER_NAV_friendlink" target="_blank">友情链接</a>|<a
                    href="http://club.yhd.com" data-ref="YHD_FOOTER_NAV_popwords" target="_blank">1号店社区</a>|<a href="http://zhaopin.yhd.com"
                    data-ref="YHD_FOOTER_NAV_hr" target="_blank">诚征英才</a>|<a href="http://shangjia.yhd.com" data-ref="YHD_FOOTER_NAV_apply"
                    target="_blank" rel="nofollow">商家登录</a>|<a href="http://supplier.yhd.com" data-ref="YHD_FOOTER_NAV_suppliers"
                    target="_blank" rel="nofollow">供应商登录</a>|<a href="http://www.zx110.org/cxs/" data-ref="YHD_FOOTER_NAV_zx110"
                    target="_blank" rel="nofollow">放心搜</a>|<a href="http://item.yhd.com/" data-ref="YHD_FOOTER_NAV_eat"
                    target="_blank">1号店新品</a>|<a href="http://fuwu.yhd.com" data-ref="YHD_FOOTER_NAV_open" target="_blank">开放平台</a>|<a
                    href="http://www.wal-martchina.com" target="_blank" rel="nofollow">沃尔玛</a>
            </p>

            <p class="ft_footer_link">
                <a href="http://www.miibeian.gov.cn/" target="_blank" rel="nofollow">沪ICP备13044278号</a>|<a>合字B1.B2-20130004</a>|<a
                    href="http://d7.yihaodianimg.com/N06/M00/CC/B5/CgQIzlYwjGmAbQ-9AAHXHGHiMkU51700.jpg" data-ref="YHD_Footer_Licence"
                    target="_blank" rel="nofollow">营业执照</a>|<a href="http://d8.yihaodianimg.com/N07/M06/45/9B/CgQI0FQRFB2ABIWaAARgpiKdkvg12600.jpg"
                    target="_blank" rel="nofollow">互联网药品信息服务资格证</a>|<a href="http://d6.yihaodianimg.com/N05/M0A/A9/D6/CgQI0lQRE_OATEfzAAO0AcF4zkQ56000.jpg"
                    target="_blank" rel="nofollow">互联网药品交易服务资格证</a>
            </p>

            <p>Copyright© 1号店网上超市 2007-2016，All Rights Reserved</p>

            <small id="footerbanner2LazyLoad" class="ft_pic_link">
                <a href="https://online.unionpay.com/" target="_blank" rel="nofollow">
                    <img src="/beimages/blank.gif" alt="" original="http://d6.yihaodianimg.com/N00/M01/1A/30/CgMBmVDzwyaAaIMBAAAJZgSEr6I65200.jpg">
                </a>
                |
                <a rel="nofollow">
                    <img src="/beimages/blank.gif" alt="" original="http://d9.yihaodianimg.com/N01/M06/19/98/CgQCr1Dzwj2AVUL0AAA-ic2BxNw39500.jpg">
                </a>
                |
                <a href="http://www.sgs.gov.cn/lz/licenseLink.do?method=licenceView&entyId=20131129184754956" target="_blank"
                    rel="nofollow">
                    <img src="/beimages/blank.gif" alt="" original="http://d6.yihaodianimg.com/N01/M08/19/94/CgQCrlDzwnKAUkfSAAAIPrrML6M92400.jpg">
                </a>
                |
                <a href="http://www.zx110.org/" target="_blank" rel="nofollow">
                    <img src="/beimages/blank.gif" alt="" original="http://d6.yihaodianimg.com/N02/M05/19/94/CgQCsVDzw0GABUElAADHlvRfNUk94600.jpg">
                </a>
                |
                <a href="http://www.shodr.org/" target="_blank" rel="nofollow">
                    <img src="/beimages/blank.gif" alt="" original="http://d8.yihaodianimg.com/N00/M00/46/FC/CgMBmVLfYZGALWNHAAAOxFbda9472600.gif">
                </a>
                |
                <a href="http://net.china.com.cn/index.htm" target="_blank" rel="nofollow">
                    <img src="/beimages/blank.gif" alt="" original="http://d9.yihaodianimg.com/N01/M0A/95/FD/CgQCr1PQy1CAF7vaAABDexsiEYM24800.jpg">
                </a>
                |
                <a href="https://ss.knet.cn/verifyseal.dll?sn=e13050631010040492h5mq000000&ct=df&a=1&pa=500267" target="_blank"
                    rel="nofollow">
                    <img src="/beimages/blank.gif" alt="" original="http://d8.yihaodianimg.com/N01/M03/A0/40/CgQCrlPYTqCASlHXAAAd82JE0eA31000.png">
                </a>
                |
                <a href="https://search.szfw.org/cert/l/CX20150608010268010812" target="_blank" rel="nofollow">
                    <img src="/beimages/blank.gif" alt="" original="http://d9.yihaodianimg.com/N08/M01/C7/7E/ChEi1FYXHcOAVk_WAAAL2r2-yfo10200.jpg">
                </a>
                |
                <a href="http://club.yhd.com/guide/922?tzm=shanghaigongshangju" target="_blank" rel="nofollow">
                    <img src="/beimages/blank.gif" alt="" original="http://d6.yihaodianimg.com/N05/M07/92/EA/CgQI0lXmj5iAPoZJAAAMUQgIYEc49100.jpg">
                </a>
                |
            </small>
        </div>
    </div>

    <script>
        try {
            globalErrorLog.globalNodifyErrorLog();
        } catch (e) {

        }
    </script>




    <!-- cache enable -->
    <!--js start-->
    <!--无页面级头部js时, 全局头部js下移-->
    <script type="text/javascript" src="/bejs/global_site_tracker_jq11.js?11" charset="utf-8"></script>
    <script type="text/javascript" src="/bejs/global_site_top.js?1563681" charset="utf-8"></script>
    <script type="text/javascript" src="/bejs/editInfo.js?1563681" charset="utf-8"></script>
    <!--js end-->
    <div>
        <span style="color: #FFFFFF">
            127!$
            30%&
            17#@
            10!$
            ,
        </span>
        <span style="color: #FFFFFF">1563681</span>
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
<script src="/assets/laydate/laydate.js" type="text/javascript"></script>
<script>
     laydate({
        elem: '#start',
        event: 'focus'
    });
    function getNowFormatDate() {
        var date = new Date();
        var seperator1 = "-";
        var year = date.getFullYear();
        var month = date.getMonth() + 1;
        var strDate = date.getDate();
        if (month >= 1 && month <= 9) {
            month = "0" + month;
        }
        if (strDate >= 0 && strDate <= 9) {
            strDate = "0" + strDate;
        }
        var currentdate = year + seperator1 + month + seperator1 + strDate;
        return currentdate;
    }
</script>
