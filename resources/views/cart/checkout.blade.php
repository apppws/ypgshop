<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta content="IE=Edge" http-equiv="X-UA-Compatible">
    <meta content="webkit" name="renderer">
    <meta content="no-transform" http-equiv="Cache-Control">
    <meta content="no-siteapp" http-equiv="Cache-Control">

    <meta content="CHECKOUT_HOME.0" name="tp_page">


    <title>结算</title>


    <!--css start-->
    <link type="text/css" rel="stylesheet" href="/becss/global_site_simple.css?1551385">
    <link type="text/css" rel="stylesheet" href="/becss/checkoutV3.css?1551385">
    <!--css end-->
    <style>
        #pays a{
            border: 1px solid #DDD;
            padding: 6px 40px;
            color: #666;
            position: relative;
        }
        #pays .active{
            border: 2px solid #e4393c;
        }

    </style>
    <!--js start-->
    <script type="text/javascript">
        var URLPrefix = { "shop": "http://shop.yhd.com", "TipDate": "2012-09-29", "busystock": "http://busystock.i.yihaodian.com", "b2beam": "http://b2beam.yhd.com", "mallImgDomain": ".yihaodianimg.com", "shoping_pms": "http://pms.yhd.com", "search": "http://www.yhd.com/ctg", "shopping_gemini": "http://gemini.yhd.com", "commentZoneMall": "http://e.yhd.com/front-pe", "productDetailHost": "http://www.yhd.com", "central": "http://www.yhd.com", "yhmall": "http://mall.yhd.com", "centralShop": "http://shop.yhd.com", "shoping_my_statics": "http://image.yihaodianimg.com/member", "yaowang": "http://www.111.com.cn", "shoping_search": "http://www.yhd.com/ctg", "image": "http://image.yihaodian.com", "shoping_central": "http://www.yhd.com", "shoping_1mall": "http://www.yhd.com", "search_keyword": "http://search.yhd.com", "shoping_detail": "http://item.yhd.com", "shopping_p4p": "http://p4p.yhd.com", "sitedomainmall": ".yhd.com", "products_stock": "http://busystock.i.yihaodian.com/busystock", "commentZoneYhd": "http://e.yhd.com/front-pe", "centralImgDomain": ".yihaodianimg.com", "statics": "http://image.yihaodianimg.com/shopping", "shoping_checkout_self": "http://buy.yhd.com", "shoping_statics": "http://image.yihaodianimg.com/shopping", "pms": "http://pms.yhd.com", "my_statics": "http://image.yihaodianimg.com/member", "passportmall": "https://passport.yhd.com", "shoping_cart_self": "http://cart.yhd.com", "seoLinkMaxSize": "20", "shoping_shop": "http://shop.yhd.com", "sitedomain": ".yhd.com", "shoping_try": "http://interface.yhd.com", "shoping_self": "http://www.yhd.com", "coupon_url": "http://coupon.yhd.com", "tracker": "tracker.yhd.com", "footFriendLink": "http://www.yhd.com/friendlink/index.do", "shoping_passport": "https://passport.yhd.com", "shoping_yhd": "http://www.yhd.com", "uploadPostUrl": "http://upload.yihaodian.com/upload/UploadAction", "shoping_my": "http://my.yhd.com", "shoping_opposite": "http://www.yhd.com", "my": "http://my.yhd.com", "mymall": "http://my.yhd.com", "selfroot": "http://www.yhd.com", "yiwangauth": "http://mall.yiwang.cn", "productDetailUrl": "http://www.yhd.com", "passport": "https://passport.yhd.com", "mall": "http://www.yhd.com" };
        var headerType = "simple";
        var favorite = "1号店，只为更好的生活";
        var hostUrl = "www.yhd.com";
        var httpUrl = "http://www.yhd.com";
        var no3wUrl = "yhd.com";
        var simpleUrl = "yhd";
        var chineseUrl = "1号店";
        var imagePath = "http://image.yihaodianimg.com/shopping/global/images";
        var currSiteId = 1;
        var currBsSiteId = 1;
        var currSiteType = 1;
        var siteStyle = 1;
        var siteFlag = 1;
        var currDomain = "http://www.yhd.com";
        var oppositeDomain = "http://www.yhd.com";
        var busystock = "http://busystock.i.yihaodian.com";
        var multiSearch = "true";
        var globalShowMarketPrice = "0";
        var isIndex = 0;
        var currVersionNum = 1551385;
        var projectVersionNum = "0";
        var currProvinceId = 6;
        var lazyLoadImageObjArry = lazyLoadImageObjArry || [];
        var isFixTopNav = false;

        var globalSearchSelectFlag = "1";
        var globalSearchHotkeywordsFlag = "1";
        var globalTopPrismFlag = "1";
        var globalTpCheckFlag = "1";

        var _globalSpmDataModelJson = { "SPM_COM": { "ADD_CART": 1, "ADD_FAV": 2, "DELETE": 6, "TURN_PAGE": 8, "SETTLEMENT": 7 }, "CHECKOUT_HOME": "9", "SPM_DATA_TYPE": { "ADVANCED_TAG": 33, "MINGPIN_CAT": 32, "COMMENT_TAG": 28, "SEARCH_SCENE_AD": 36, "KEYWORD": 25, "BASICS_TAG": 34, "TRACKER_CODE": 16, "SMARTBOX_ATTR": 23, "CATEGORY": 9, "SEARCH_TURN_PAGE": 20, "LANDING": 6, "SEARCH_BRAND_SHOP": 35, "PROMOTION": 8, "MSG_TYPE": 31, "PRODUCT": 5, "SEARCH_FILTER": 21, "AD": 12, "SHOP": 26, "TUAN": 11, "SMARTBOX_KW": 22, "MINGPIN": 17, "PROVINCE": 14, "SEARCH_WORD": 15, "COUPON": 7, "BRAND": 10, "SEARCH_SORT": 19, "SMARTBOX_CATE": 24 }, "SPM_SYSTEM_TYPE": { "PMS": 4, "EDM": 30, "AD": 13, "CATEGORY": 29, "SEARCH": 3, "MANUAL": 2, "TRY": 27, "STORE": 18, "AUTO": 1 }, "SPM_AREA": { "SAVE_NEW_REAL_NAME_AUTH": 2645, "LINKRTN_TO_HOME_BY_SESSIONINVALID": 1358, "TITLE_TO_CART": 1345, "YHD_GLOBAl_PRISM": 22, "YHD_GLOBAl_HEADER_RIGHT_AD": 18, "YHD_GLOBAl_HEADER_CATEGORY_0": 156, "NORMALBUY_DEL_GOODS": 1353, "YHD_GLOBAl_HEADER_CATEGORY_1": 157, "YHD_GLOBAl_HEADER_CATEGORY_2": 158, "YHD_GLOBAl_HEADER_CATEGORY_3": 159, "YHD_GLOBAl_HEADER_CATEGORY_4": 160, "YHD_GLOBAl_HEADER_CATEGORY_5": 161, "YHD_GLOBAl_HEADER_CATEGORY_6": 162, "YHD_GLOBAl_HEADER_ORDER": 155, "YHD_GLOBAl_HEADER_CATEGORY_7": 163, "YHD_GLOBAl_HEADER_CATEGORY_8": 164, "YHD_GLOBAl_HEADER_CATEGORY_9": 165, "AREA_PRICE_BACKTOCART": 1349, "INVOICE_INFO": 2040, "COMMODITY_INFO": 2042, "SAVE_MODIFY_REAL_NAME_AUTH": 2644, "STATISTICS_INFO": 2043, "DELIVERY_INFO": 2039, "YHD_GLOBAl_TOP_PROVINCE": 153, "PAYMENT_INFO": 2041, "YHD_GLOBAl_FOOTER_BROWSE_RELATED": 19, "YHD_GLOBAl_HEADER_CATEGORY": 15, "YHD_GLOBAl_HEADER_LOGO": 11, "YHD_GLOBAl_FOOTER": 20, "RECEIPT_INFO": 2038, "YHD_GLOBAl_TOP_UNLOGIN": 150, "YHD_GLOBAl_HEADER_CATEGORY_13": 169, "EDIT_ADDRESS_SUBMITORDER": 1359, "YHD_GLOBAl_HEADER_CATEGORY_12": 168, "FASTBUY_CHANGE_ADDRESS": 1351, "YHD_GLOBAl_HEADER_CATEGORY_11": 167, "LINKRTN_TO_CART_BY_SESSION_INVALID": 1357, "YHD_GLOBAl_HEADER_MOBILE": 14, "YHD_GLOBAl_HEADER_CATEGORY_10": 166, "AREA_PRICE_CHANGE_ADDRESS": 1350, "YHD_GLOBAl_TOP_USER": 7, "YHD_GLOBAl_HEADER_CATEGORY_15": 595, "YHD_GLOBAl_HEADER_CATEGORY_14": 170, "YHD_GLOBAl_HEADER_CART": 149, "POPWINCLOSE": 1348, "YHD_GLOBAl_TOP_BANNER": 9, "TITLE_GO_YHD_INDEX": 1344, "YHD_GLOBAl_HEADER_HOT_SEARCH": 13, "YHD_GLOBAl_LEFT_CNY": 2655, "YHD_GLOBAl_HEADER_SEARCH": 12, "CONTRACTPHONEUSERINFO_SENDVERIFYCODE": 1346, "YHD_GLOBAl_TOP_MENU": 8, "YHD_GLOBAl_HEADER_SEARCHSHOP": 2058, "USE_GIFTCARD_AMOUNT": 1355, "YHD_GLOBAl_TOP_MSG": 2549, "YHD_GLOBAl_HEADER_MINICART": 17, "SUBMIT_ORDER": 1347, "YHD_GLOBAl_TOP_MESSAGE": 152, "YHD_GLOBAl_HEADER_WELFARE": 154, "NORMALBUY_CHANGE_ADDRESS": 1354, "YHD_GLOBAl_HEADER_NAV": 16, "YHD_GLOBAl_FOOTER_HELP": 21, "YHD_GLOBAl_TOP_LOGIN": 151, "FASTBUY_GO_DETAIL": 1352, "YHD_GLOBAl_TOP_CURTAIN": 10, "USE_ACCOUNT_AMOUNT": 1356 } };

    </script>
    <script charset="utf-8" src="/bejs/global_simple_tracker_jq11.js?11" type="text/javascript"></script>
    <script charset="utf-8" src="/bejs/global_simple_top.js?1551385" type="text/javascript"></script>
    <script charset="utf-8" src="/bejs/checkoutV3N.js" type="text/javascript"></script>
    <!--js end-->
    <script type="text/javascript" async="" src="/bejs/captcha.js?20160114"></script>
    <link rel="stylesheet" type="text/css" href="/becss/global_yhdLib.css?1551385">
</head>

<body data-param="{" globalPageCode":"-1","currPageId":"0"}" id="comParamId">
    <div style="display:none;" id="yhd_pop_win" class="pop_win"></div>

    <div id="provinceboxDiv">
        <!--切换省份展开   -->
        <div style="display:none" id="allProvinces" class="ap_area ">
            <div class="a_title"><a class="fr popwinClose" onclick="javascript:closeProvinces(1);return false;" href="###">关闭</a>请选择您的收货省份</div>

            <dl class="first">
                <dt>华东地区</dt>
                <dd>
                    <a href="javascript:setAddressCity(1)" id="p_1">上海</a>
                    <a href="javascript:setAddressCity(5)" id="p_5">江苏</a>
                    <a href="javascript:setAddressCity(6)" id="p_6">浙江</a>
                    <a href="javascript:setAddressCity(13)" id="p_13">安徽</a>
                    <a href="javascript:setAddressCity(16)" id="p_16">山东</a>
                </dd>

            </dl>
            <dl>
                <dt>华北东北</dt>
                <dd>
                    <a href="javascript:setAddressCity(2)" id="p_2">北京</a>
                    <a href="javascript:setAddressCity(3)" id="p_3">天津</a>
                    <a href="javascript:setAddressCity(4)" id="p_4">河北</a>
                    <a href="javascript:setAddressCity(32)" id="p_32">山西</a>
                    <a href="javascript:setAddressCity(8)" id="p_8">内蒙古</a>
                    <a href="javascript:setAddressCity(9)" id="p_9">辽宁</a>
                    <a href="javascript:setAddressCity(10)" id="p_10">吉林</a>
                    <a href="javascript:setAddressCity(11)" id="p_11">黑龙江</a>
                </dd>

            </dl>
            <dl>
                <dt>华南西南</dt>
                <dd>
                    <a href="javascript:setAddressCity(20)" id="p_20">广东</a>
                    <a href="javascript:setAddressCity(21)" id="p_21">广西</a>
                    <a href="javascript:setAddressCity(22)" id="p_22">海南</a>
                    <a href="javascript:setAddressCity(14)" id="p_14">福建</a>
                    <a href="javascript:setAddressCity(12)" id="p_12">四川</a>
                    <a href="javascript:setAddressCity(7)" id="p_7">重庆</a>
                    <a href="javascript:setAddressCity(23)" id="p_23">贵州</a>
                    <a href="javascript:setAddressCity(24)" id="p_24">云南</a>
                    <a href="javascript:setAddressCity(25)" id="p_25">西藏</a>
                </dd>

            </dl>
            <dl class="last">
                <dt>华中西北</dt>
                <dd class="nobor">
                    <a href="javascript:setAddressCity(18)" id="p_18">湖北</a>
                    <a href="javascript:setAddressCity(19)" id="p_19">湖南</a>
                    <a href="javascript:setAddressCity(17)" id="p_17">河南</a>
                    <a href="javascript:setAddressCity(15)" id="p_15">江西</a>
                    <a href="javascript:setAddressCity(26)" id="p_26">陕西</a>
                    <a href="javascript:setAddressCity(27)" id="p_27">甘肃</a>
                    <a href="javascript:setAddressCity(28)" id="p_28">青海</a>
                    <a href="javascript:setAddressCity(30)" id="p_30">宁夏</a>
                    <a href="javascript:setAddressCity(29)" id="p_29">新疆</a>
                </dd>

            </dl>
            <p style="display:none" class="poptips" id="provincesPoptips">因各省份所售商品不同，如果您切换省份，部分商品可能会从购物车中移除</p>
            <p class="ip_tips">

            </p>
        </div>

    </div>
    <!--content start-->
    <!--content start-->
    <script type="text/javascript">
        var resJsonData = {};
        if (typeof (JSON) == 'undefined') {
            resJsonData = (new Function("return " + '{"shopping.completeUI.bankTipOne1":"请于下单9天内支付您的款项","shopping.deliveryUI.weight":"重量(kg)","shopping.main.yipoyisuiProduct":"易损易破商品","shopping.receiverUI.phone":"或  固定电话","shopping.completeUI.bankTipTwo2":"天内转帐，若逾期未付款订单将被取消，需重新下单","shopping.main.yudingProduct":"预定商品","shopping.invoiceUI.btnSaveReceiptInfo":"保存发票信息","shopping.completeUI.bankTipTwo1":"为保证及时处理您的订单，请于","shopping.common.yihaodian":"1号店","shopping.paymentUI.bankTransfer":"银行转账","shopping.submitUI.needPay":"您需为订单支付","shopping.deliveryUI.title":"配送信息","shopping.invoiceUI.standardReceipt":"普通发票","shopping.receiverUI.receiverAddress":"收货地址","shopping.receiverUI.title":"收货信息","shopping.completeUI.netTipOne1":"为了保证及时处理您的订单，请于下单","shopping.deliveryUI.freeDeliveryFee":"免运费","shopping.deliveryUI.packages":"包裹(个)","shopping.completeUI.netTipOne2":"内付款，若逾期未付款订单将被取消，需重新下单。","shopping.invoiceUI.title":"发票信息","shopping.main.message":"温馨提示：商品列表中含<em>{0}<\/em>，该订单将拆分多个包裹配送给您","shopping.paymentUI.applyAccountBalance":"使用账户余额","shopping.completeUI.accountNumber":"账&#12288;号","shopping.common.modify":"修改","shopping.receiverUI.askDelAddress":"确定删除该收货地址？","shopping.main.lipingkaProduct":"礼品卡","shopping.completeUI.bankTipOne2":"元，祝您购物愉快！","shopping.deliveryUI.totalValue":"商品金额","shopping.common.cancelApply1":"取消","shopping.common.cancelApply2":"取消使用","shopping.submitUI.needPayBox":"您需支付","shopping.main.shangjiaSendProduct":"多个商家直送商品","shopping.paymentUI.swipCard":"货到刷卡","shopping.common.cancel":"取消","shopping.common.confirm":"确定","shopping.paymentUI.useGiftCard":"使用礼品卡激活","shopping.common.1mall":"1号商城","shopping.receiverUI.commonAddress":"常用地址","shopping.completeUI.tipRememberToPay":"您的订单已生成，请尽快支付订单！","shopping.deliveryUI.deliveryFeeGuide":"运费说明","shopping.invoiceUI.header":"发票抬头","shopping.receiverUI.newAddress":"使用新地址","shopping.completeUI.continueShopping":"继续购物","shopping.receiverUI.detailAddress":"详细地址","shopping.common.delete":"删除","shopping.common.apply":"使用","shopping.completeUI.mobileApp":"掌上1号店","shopping.submitUI.submitOrder":"提交订单","shopping.completeUI.seeOrderDetails":"查看订单详情","shopping.completeUI.otherPay":"选择其他网银支付方式","shopping.deliveryUI.standardDelivery":"普通快递","shopping.deliveryUI.deliveryFee":"运费","shopping.main.title":"填写核对订单信息","shopping.common.tipRemember":"温馨提示","shopping.receiverUI.useAlipayAddress":"使用支付宝地址","shopping.deliveryUI.saveDeliveryInfo":"保存配送信息","shopping.receiverUI.allAddress":"展开全部地址","shopping.common.yuan":"元","shopping.deliveryUI.preArrangedDelivery":"预约送货","shopping.commodityUI.title":"商品信息","shopping.paymentUI.title":"支付信息","shopping.paymentUI.cod":"货到付款","shopping.receiverUI.packupAddress":"收起地址","shopping.receiverUI.postSearchAddress":"邮编查询所在地区","shopping.paymentUI.applyDiscountCoupon":"使用抵用券","shopping.invoiceUI.content":"发票内容","shopping.receiverUI.receiverName":"收&nbsp;&nbsp;货 人","shopping.main.gysSendProduct":"供应商直送商品","shopping.invoiceUI.tipOne":"若您订购的是数码、手机、家电类商品、为了保证您能充分享受厂家提供的售后服务，我们将根据您订购商品的全称和型号开具内容并随单发送。","shopping.completeUI.bank":"开户行","shopping.receiverUI.deliveryGuide":"配送说明","shopping.receiverUI.mobile":"手机号码","shopping.common.close":"关闭","shopping.paymentUI.haveGiftCard":"已有礼品卡？","shopping.completeUI.accountName":"户&#12288;名","shopping.invoiceUI.btnCancelReceipt":"暂不要发票","shopping.completeUI.codTipOne":"元，请在收货时向送货员支付您的款项，祝您购物愉快，谢谢。","shopping.receiverUI.saveReceiverInfo":"保存收货信息","shopping.receiverUI.setCommonAddress":"设为常用地址","shopping.invoiceUI.vatReceipt":"增值税发票","shopping.invoiceUI.receiptType":"发票类型","shopping.completeUI.checkoutSurvey":"新版结算流程使用调查","shopping.common.edit":"编辑","shopping.paymentUI.payOnline":"网上支付"}'))();
        } else {
            resJsonData = JSON.parse('{"shopping.completeUI.bankTipOne1":"请于下单9天内支付您的款项","shopping.deliveryUI.weight":"重量(kg)","shopping.main.yipoyisuiProduct":"易损易破商品","shopping.receiverUI.phone":"或  固定电话","shopping.completeUI.bankTipTwo2":"天内转帐，若逾期未付款订单将被取消，需重新下单","shopping.main.yudingProduct":"预定商品","shopping.invoiceUI.btnSaveReceiptInfo":"保存发票信息","shopping.completeUI.bankTipTwo1":"为保证及时处理您的订单，请于","shopping.common.yihaodian":"1号店","shopping.paymentUI.bankTransfer":"银行转账","shopping.submitUI.needPay":"您需为订单支付","shopping.deliveryUI.title":"配送信息","shopping.invoiceUI.standardReceipt":"普通发票","shopping.receiverUI.receiverAddress":"收货地址","shopping.receiverUI.title":"收货信息","shopping.completeUI.netTipOne1":"为了保证及时处理您的订单，请于下单","shopping.deliveryUI.freeDeliveryFee":"免运费","shopping.deliveryUI.packages":"包裹(个)","shopping.completeUI.netTipOne2":"内付款，若逾期未付款订单将被取消，需重新下单。","shopping.invoiceUI.title":"发票信息","shopping.main.message":"温馨提示：商品列表中含<em>{0}<\/em>，该订单将拆分多个包裹配送给您","shopping.paymentUI.applyAccountBalance":"使用账户余额","shopping.completeUI.accountNumber":"账&#12288;号","shopping.common.modify":"修改","shopping.receiverUI.askDelAddress":"确定删除该收货地址？","shopping.main.lipingkaProduct":"礼品卡","shopping.completeUI.bankTipOne2":"元，祝您购物愉快！","shopping.deliveryUI.totalValue":"商品金额","shopping.common.cancelApply1":"取消","shopping.common.cancelApply2":"取消使用","shopping.submitUI.needPayBox":"您需支付","shopping.main.shangjiaSendProduct":"多个商家直送商品","shopping.paymentUI.swipCard":"货到刷卡","shopping.common.cancel":"取消","shopping.common.confirm":"确定","shopping.paymentUI.useGiftCard":"使用礼品卡激活","shopping.common.1mall":"1号商城","shopping.receiverUI.commonAddress":"常用地址","shopping.completeUI.tipRememberToPay":"您的订单已生成，请尽快支付订单！","shopping.deliveryUI.deliveryFeeGuide":"运费说明","shopping.invoiceUI.header":"发票抬头","shopping.receiverUI.newAddress":"使用新地址","shopping.completeUI.continueShopping":"继续购物","shopping.receiverUI.detailAddress":"详细地址","shopping.common.delete":"删除","shopping.common.apply":"使用","shopping.completeUI.mobileApp":"掌上1号店","shopping.submitUI.submitOrder":"提交订单","shopping.completeUI.seeOrderDetails":"查看订单详情","shopping.completeUI.otherPay":"选择其他网银支付方式","shopping.deliveryUI.standardDelivery":"普通快递","shopping.deliveryUI.deliveryFee":"运费","shopping.main.title":"填写核对订单信息","shopping.common.tipRemember":"温馨提示","shopping.receiverUI.useAlipayAddress":"使用支付宝地址","shopping.deliveryUI.saveDeliveryInfo":"保存配送信息","shopping.receiverUI.allAddress":"展开全部地址","shopping.common.yuan":"元","shopping.deliveryUI.preArrangedDelivery":"预约送货","shopping.commodityUI.title":"商品信息","shopping.paymentUI.title":"支付信息","shopping.paymentUI.cod":"货到付款","shopping.receiverUI.packupAddress":"收起地址","shopping.receiverUI.postSearchAddress":"邮编查询所在地区","shopping.paymentUI.applyDiscountCoupon":"使用抵用券","shopping.invoiceUI.content":"发票内容","shopping.receiverUI.receiverName":"收&nbsp;&nbsp;货 人","shopping.main.gysSendProduct":"供应商直送商品","shopping.invoiceUI.tipOne":"若您订购的是数码、手机、家电类商品、为了保证您能充分享受厂家提供的售后服务，我们将根据您订购商品的全称和型号开具内容并随单发送。","shopping.completeUI.bank":"开户行","shopping.receiverUI.deliveryGuide":"配送说明","shopping.receiverUI.mobile":"手机号码","shopping.common.close":"关闭","shopping.paymentUI.haveGiftCard":"已有礼品卡？","shopping.completeUI.accountName":"户&#12288;名","shopping.invoiceUI.btnCancelReceipt":"暂不要发票","shopping.completeUI.codTipOne":"元，请在收货时向送货员支付您的款项，祝您购物愉快，谢谢。","shopping.receiverUI.saveReceiverInfo":"保存收货信息","shopping.receiverUI.setCommonAddress":"设为常用地址","shopping.invoiceUI.vatReceipt":"增值税发票","shopping.invoiceUI.receiptType":"发票类型","shopping.completeUI.checkoutSurvey":"新版结算流程使用调查","shopping.common.edit":"编辑","shopping.paymentUI.payOnline":"网上支付"}');//全局的资源的json数据
        }

        function getResPageInfo(strKey) {
            return resJsonData[strKey];
        }
    </script>
    <script src="http://api.map.baidu.com/api?v=2.0&ak=Ani8myMl2yth7hTNKoBZE0OW" type="text/javascript"></script>
    <script src="http://api.map.baidu.com/getscript?v=2.0&ak=Ani8myMl2yth7hTNKoBZE0OW&services=&t=20160224094302" type="text/javascript"></script>
    <div id="checkoutV3HeadDiv" class="headBCST_box headBCST_yhd cfx">
        <div class="headBCST_Main cfx">
            <a data-tpa="TITLE_GO_YHD_INDEX" href="index.html" class="headBCST_logo"></a>
            <div class="headBCST_step step2_headBCST"><a data-tpa="TITLE_TO_CART" title="返回购物车" href="cart.html"
                    onclick="addTrackPositionToCookie(1,'checkoutBackToCart');">查看购物车</a></div>
        </div>
    </div>
    <form action="{{ route('order_pay') }}" method="post" enctype="multipart/form-data">
        @csrf
    <div xmlns="http://www.w3.org/1999/html" class="containerBox clearfix" id="SettlementProcess">
        <h1>填写核对订单信息</h1>
        <div id="haigouSplitMsg"></div>
        <div id="1mallHaigouSplitMsg"></div>
        <div id="splitMsg"></div>
        <div data-tpa="RECEIPT_INFO" class="checkInforBox" id="ReceiptInfo">
            <!--newUser-->
            <h2>收货信息
                <div id="receiverAD" class="adverPositon none"></div>
            </h2>
            {{-- 显示 地址栏 S --}}
            <div class="addressListBox showRow1" id="addressList">
                <ul>
                    @php
                    $address_list='';
                    $phones ='';
                    $names = '';
                    global $counts;
                    @endphp
                     @foreach ($address as $v )
                    @php
                    $address_list = $v->address;
                    $phones = $v->phone;
                    $names = $v->name;
                    @endphp
                         <li selffetch="false" addressid="76567122" class="slt">
                            <p><b name="receiverName">{{ $v->name }}</b>收</p>
                            <p class="listAddressShow">{{ $v->province.'  '.$v->city }}</p>
                            <p class="listAddressShow">{{ $v->address }}</p>
                            <p>{{ $v->phone }}</p>
                            <div class="operaNav"><span class="editBt">编缉</span><em class="defaultAddressTag">常用地址</em></div>
                            <sup class="closeSTB"></sup><sub></sub>
                        </li>
                    @endforeach
                </ul>
                <div id="scrollBarMap">
                    <p> </p>
                </div>
            </div>
            {{-- 显示 地址栏 E --}}

            <div id="showAddressOperatBt" style="display: none;"><span class="bLink">展开其他地址<s></s></span></div>
            <div id="addAddressOperatBt"><span class="Bt Btw2">使用新地址<s></s></span>
                <span title="使用支付宝地址" class="usingAlipayAddressCss" id="usingAlipaySpecial" style="display: none;"></span>
                <span id="usingSelfPickup" class="Bt Btw2 none" style="display: none;">使用自提服务<s></s></span>
                <div id="usingSelfPickup_tip" class="none" style="display: none;">
                    <i></i>
                    <ins><s></s>温馨提示：</ins>
                    <p>1号店现已推出自提服务，您可以选择将所购商品送到自提点，不再担心因外出而错失签收包裹</p>
                </div>
            </div>
            <!-- 定金预售-->
            <div style="display:none" id="bookedPreSell"></div>
        </div>
        <div data-tpa="DELIVERY_INFO" class="distrInfo checkInforBox" id="deliveryUI">
            <h2 class="infoTitle">配送信息
                <span id="deliveryInfoTip" class="adverPositon" style="display: none;">包裹信息可能已修改，请重新确定配送方式 </span>
                <div id="deliveryAD" class="adverPositon none"></div>
            </h2>
            <div class="showInfoOrder" id="DeliveryDisplayDiv">
                <h3>1号店自营</h3>
                <table cellspacing="0" cellpadding="0" border="0" class="showInfoOrder inshop">
                    <tbody>
                        <tr>
                            <th>包裹</th>
                            <th class="slow_service"> 配送方式 </th>
                            <th>运费</th>
                            <th> 备注 </th>
                        </tr>
                        <tr>
                            <td class="DeliveryShowTd">
                                <div class="DeliveryShowBox"> 包裹{{ $counts }}<i></i></div>
                            </td>

                            <td rowspan="1" class="deliverMethod">
                                <table cellspacing="0" cellpadding="0" border="0" class="delivMehoedSltBox">
                                    <tbody>
                                        <tr>
                                            <td class="delivMehoedSlt">
                                                {{-- <input type="radio" class="hidden" selected="true" checked="checked" name="1_1_1" value="10001"> --}}
                                            </td>
                                            <td valign="middle" class="delivMehoedSltTxt">
                                                <div style="z-index:19" class="mod_selectDate">
                                                    <div ordermark="1_1_1" class="timedDelivery_btn_input">
                                                        <div class="timedDelivery_input clearfix"> <span class="text">
                                                                任意日期<em>（普通快递）</em> </span> <i class="icon data_icon"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </td>
                            <td rowspan="1" class="freight"> <b> <b>¥10</b> </b>
                                <div class="freightInfo">
                                    <p> </p>
                                </div>
                            </td>
                            <td rowspan="1" class="remark"> 预计商品下单后明日送达(默认中通、圆通快递) </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="rece_box editeDeliveryBt"><button type="button" class="bt_yrt6 saveOrderDelivery">保存配送信息</button>
                <!--<small class="PromptInfo">储蓄卡单笔最高限额¥1000,000,信用卡单笔最高限额¥1000</small>-->
            </div>
        </div>
        <div data-tpa="INVOICE_INFO" class="Invoice checkInforBox" id="invoiceUI">
            <h2 class="infoTitle">发票信息 <label><a id="invoiceModify" href="javascript:void(0);">[修改]</a></label>
            </h2>
            <ul class="showInfoOrder" id="InvoiceDisplayDiv">
                <li><b>发票类型：</b>普通发票</li>
                <li><b>开票方式：</b>电子发票</li>
                <li><b>手机号码：</b>{{ $phones }}</li>
                <li><b>发票内容：</b> 日用品 <span class="ml20">需要商品清单</span> </li>
                <div id="displayNormalInvoiceNotice" class="msgBx"> <ins><s></s>温馨提示：</ins>
                    <p> 发票金额为现金支付金额（扣除礼品卡金额，抵用券，返利金额等）。</p>
                    <p class="mt5"> 电子发票是税务局认可的有效付款凭证，支持企业报销，请先确认所属公司是否支持。</p>
                </div> <input type="hidden" value="1" id="displayNeedProductDetail">
            </ul>
            <div class="invoiceForm clearfix" id="InvoiceEditDiv"></div>
        </div>

        {{-- 支付方式 --}}
        <div data-tpa="PAYMENT_INFO" class="payInfo checkInforBox" id="paymentUI">
                <h2 class="infoTitle">支付方式</h2>
                <div class="col-xs-12" id="pays">
                        <a href="javascript:void(0);"  class="pay_method active borderd-a">
                            <input type="radio" name="pay_method" value="货到付款" checked> 货到付款<b></b>
                        </a>
                        <a href="javascript:void(0);"  class="pay_method borderd-a">
                            <input type="radio" name="pay_method" value="微信支付"> 微信支付<b></b>
                        </a>
                        <a href="javascript:void(0);"  class="pay_method borderd-a">
                            <input type="radio" name="pay_method" value="支付宝"> 支付宝<b></b>
                        </a>
                </div>
        </div>
        <script>
                $(".pay_method").click(function(){
                $(".pay_method.active").removeClass('active');
                $(this).addClass('active');
                $(this).find(":radio").prop("checked",true);
            });
        </script>
         {{-- 支付方式 --}}

         {{-- 商品信息 S --}}
        <div class="none" id="userAuthDiv"></div>
        <div data-tpa="COMMODITY_INFO" class="commodityInfor checkInforBox">
            <h2 class="infoTitle">商品信息
                <div id="confirmAD" class="adverPositon none"></div>
            </h2>
            <div id="confirmUI">
                <table cellspacing="0" cellpadding="0" border="0" width="100%" class="showInfoOrder orderProductListInfo">
                    <tbody>
                        <tr>
                            <th width="300" class="txtl">商品名称</th>
                            <th>商品图片</th>
                            <th>数 量(个)</th>
                            <th>重 量(kg)</th>
                            <th>金额小计</th>
                        </tr>
                        @php
                            $tp=0;
						@endphp
                        @foreach($cartData as $v)
                        @php
                            $tp = ($v->price>0?$v->price:$v->shprice)* $v->goods_count;
                            $counts = $v->goods_count;
						@endphp
                        <tr>
                            <td class="txtl">{{ $v->goods_name }} 	{!! str_replace(['|','@'],[':','  '],$v->goods_attr_list) !!}
                                <a class="tuihuo tuihuo_no"><em>不支持无理由退货<i></i></em></a>
                            </td>
                            <td><img src="{{ '/upload/'.$v->mid_pic }}" alt="" width="50px" height="50px"></td>
                            <td>{{ $v->goods_count }}</td>
                            <td>{{ $v->weight }}</td>
                            <td> ¥{{($v->price>0?$v->price:$v->shprice)* $v->goods_count}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <p class="tuihuo_title">
                <span><i class="tuihuo">&nbsp;&nbsp;</i>&nbsp;&nbsp;支持无理由退货（支持天数详见具体商品）</span>
                <span><i class="tuihuo_no"></i>不支持无理由退货</span>
            </p>
        </div>
        {{-- 商品信息 E --}}

        {{-- 结算 S --}}
        <div data-tpa="STATISTICS_INFO" class="mallsettelment">
            <div class="payTotal" id="statisticsUI">
                <p class="fr">商品金额<label>{{ $tp }}</label>元 + 运费<label>10</label>元 </p>
                <p>包裹(个)：1&#12288;&#12288;重量(kg)：0.682 </p> <strong>您需为订单支付<b>{{ $tp+10 }}</b>元</strong>
                <div class="userPrivilege clearfix"></div>
                <div class="mallsettelment_address"> {{ $address_list.' '.$phones.' '.$names }} <a data-tpa="EDIT_ADDRESS_SUBMITORDER"
                        onclick="returnToEdit();" href="#"> 修改</a></div>
            </div>
            <div class="money_tips">
                <div class="tips_box">
                    <label for="BookedPayFix"><input type="checkbox" name="bookedPay" id="BookedPayFix">同意支付<em></em>元定金</label>
                    <span>(预售商品定金恕不退还，请同意支付定金)</span>
                </div>
                <p class="tips_txt"></p>
            </div>
            <div class="btOrderConfig">
                <div class="submitOrderValidCode"></div>
                <button data-tpa="SUBMIT_ORDER" class="btSubOrder1" type="submit">提交订单</button>
                <input type="hidden" name="skuids" value="{{ $skuids ? implode('|',$skuids) : '' }}">
            </div>
        </div>
        {{-- 结算 E --}}
    </div>
</form>
    <div class="none" id="paymentPrivilegeDiv"></div>
    <div class="templateBox">
        <textarea id="1mallHaigouSplitMsgTemplate">		<div class="mod_yelTextTips">
			<i class="pointIcon"></i>
			您购买的商品因海关审查，将被拆成多个包裹送达。
		</div>
	</textarea>

    </div>
 <div id="__yct_container__" style="display: none; visibility: hidden;">
        <script src="http://captcha.yhd.com/public/getenv.do?f=MDOxEGM3IzMwY2N3gzYkhzYjNmY0ImZ4cTYlhTZiVWO&callback=captchaCallback&t=0.3131689522355128"></script>
    </div><input type="hidden" id="__yct_str__" name="__yct_str__" value="%2Bj65HjAhbb7IA8oKgfuhxZXDYFY2khDzWybEmVSWeB1UkKfVfPF22fsVRxEjR0esrxE8z%2F%2FNSDBuM1teL0xUC1YxKUNWVjmwt0EivWb3oDYOfJGaoDj5N9gY37YWFtc83YlGgkMnJuepwbchikUXaSXvOE0CIzsk2EM%2B5PLHBqYAkF%2FGI7wtes53TORTVmy2DnVuKcSmbODheXxNg0oyewdGiSyV6zQMQkFFCIElVjc%3D">
</body>

</html>
