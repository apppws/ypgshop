<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="tp_page" content="3.0">
    <title>注册1号店</title>
    <link href="/becss/register_3.0.css?1561453" rel="stylesheet" type="text/css" />
    <script src="/bejs/register_new.js"></script>
</head>

<body>
    <link rel="shortcut icon" href="/beimages/yhd_favicon.ico" />

    <div class="regist_header clearfix">
        <div class="wrap">
            <a href="index.html" class="logo"><img src="/beimages/loginlogo.jpg" height="55" alt="1号店" /></a>
            <div class="regist_header_right clearfix">
                <!--<a href="#" class="english_edition" id="edition" style="display:none">English</a>-->
                <div class="help_wrap">
                    <a class="hd_menu" href="help.html"><s class="help_ico"></s>帮助中心</a>
                    <div class="hd_menu_list">
                        <ul>
                            <li><a href="member_order.html">包裹跟踪</a></li>
                            <li><a href="help.html">常见问题</a></li>
                            <li><a href="http://my.yhd.com/return/returnApplyList.do">在线退换货</a></li>
                            <li><a href="http://my.yhd.com/opinion/opinionList.do">在线投诉</a></li>
                            <li><a href="http://www.yhd.com/deliveryinfo/deliveryInfo.do">配送范围</a></li>
                        </ul>
                    </div>
                </div>
                <span class="fr">您好，欢迎光临1号店！ <a href="login.html" class="blue_link">请登录</a></span>
            </div>
        </div>
    </div>
    {{-- <script type="text/javascript">
        var no3wUrl = "yhd.com";
        var currSiteId = 1;
        var URLPrefix = { "mymall": "http://my.1mall.com", "passport_statics": "https://passport.yhd.com/front-passport/passport", "yiwangauth": "http://mall.yiwang.cn", "yaowang": "http://www.111.com.cn", "tracker": "tracker.yhd.com", "passport": "https://passport.yhd.com", "my": "http://my.yhd.com", "central": "http://www.yhd.com", "validCodeShowUrl": "https://captcha.yhd.com/public/validcode.do", "mall": "http://www.1mall.com", "passportother": "https://passport.1mall.com" };
        var yhdUrl = "http://www.yhd.com";
        var yhdPassportUrl = "https://passport.yhd.com";
        var ywPassportUrl = "https://passport.111.com.cn";
        var loli = window['loli'] || {};
        var valid_code_service_flag = "1";
    </script> --}}
    <script type="text/javascript" src="/bejs/jquery.cookie.js?1561453"></script>

    <input type="hidden" id="validateSig" />
    <input type="hidden" name="returnUrl" value="" id="returnUrl">
    <input id="p" type="hidden" value="" />
    <input type="password" style="display:none">
    <div class="y_regist_wrap">
        <!--背景小图标 -->
        <div class="r_icon1"></div>
        <div class="r_icon2"></div>
        <div class="r_icon3"></div>
        <div class="r_icon4"></div>
        <div class="r_icon5"></div>
        <div class="y_regist_model">

            <h4 class="y_regist_tit">1号店注册</h4>
            <form action="{{ route('doregister') }}" method="POST">
                @csrf
            <div class="y_regist_form">
                    <ul class="clearfix">
                            <li>
                               <div class="y_same_item">
                                   <input class="ysame_input" name="username" type="text" value="" id="userName">
                                   <span class="y_same_label">用户名</span>

                               </div>

                               <div class="y_regist_tips y_regist_tips_black" style="top: 16px;">
                                 <div class="y_regtip_rel">
                                    <i></i>
                                    <div class="y_tips_words">

                                    </div>
                                 </div>
                               </div>

                               <div class="y_regist_right"></div>
                               <!--提示信息end -->
                               <div class="y_regist_tips y_regist_tips_red" style="top: 6px;">
                                    <div class="y_regtip_rel">
                                       <i></i>
                                       <div class="y_tips_words">用户名不能为空</div>
                                    </div>
                                  </div>
                           </li>

                           <li>
                               <div class="y_same_item">
                                   <input class="ysame_input" type="text" name="phone" value="" id="phone">
                                   <span class="y_same_label">手机号</span>

                               </div>
                               <div class="y_regist_tips y_regist_tips_black" style="top: -4px;">
                                 <div class="y_regtip_rel">
                                    <i></i>
                                    <div class="y_tips_words">
                                                请填写正确的手机号码，以便 接收订单通知，找回密码等
                                    </div>
                                 </div>
                               </div>

                               <div class="y_regist_right"></div>
                           </li>

                           <li class="ishort_li clearfix " id="validPhoneCodeDiv">
                               <div class="fl y_same_item">
                                   <input class="ysame_input" type="text" name="code" value="" id="validPhoneCode">
                                   <span class="y_same_label">短信验证码</span>
                               </div>
                               {{-- 获取验证码 --}}
                              <input class="receive_code fl same_code_btn r_disable_code " id="btn-send" type="button" value="获取验证码">
                               <div class="y_regist_tips y_regist_tips_red" style="top: -14px;">
                                     <div class="y_regtip_rel">
                                        <i></i>
                                        <div class="y_tips_words">
                                            如无法接受验证码，请重启手机并确认短信未被拦截！4G用户请关闭4G网络进行接收
                                        </div>
                                     </div>
                               </div>
                           </li>

                           <li>
                               <div class="y_same_item">
                                   <input class="ysame_input y_set_password" type="password" name="password" oncopy="return false;" oncut="return false;" onpaste="return false;" autocomplete="off" id="password">
                                   <span class="y_same_label">设置密码</span>
                               </div>
                               <div class="y_regist_tips y_regist_tips_red" style="top: 6px;">
                                  <div class="y_regtip_rel">
                                    <i></i>
                                    <div class="y_tips_words">
                                        6-20个大小
                                    </div>
                                  </div>
                              </div>

                             <div class="y_regist_tips_keywords strength_l">
                                 <div class="y_regtip_rel">
                                    <i></i>
                                    <div class="y_tips_words y_tips_words_key">
                                        <em class="em_redA"></em>
                                        <em></em>
                                        <em></em>
                                        <b class="em_words">低</b>
                                    </div>
                                 </div>
                             </div>

                             <div class="y_regist_tips_keywords strength_m">
                                 <div class="y_regtip_rel">
                                    <i></i>
                                    <div class="y_tips_words y_tips_words_key">
                                        <em class="em_yellowA1"></em><em class="em_yellowA1"></em><em></em><b class="em_words">中</b>
                                    </div>
                                 </div>
                             </div>

                             <div class="y_regist_tips_keywords strength_h">
                                 <div class="y_regtip_rel">
                                    <i></i>
                                    <div class="y_tips_words y_tips_words_key">
                                        <em class="em_greenA1"></em><em class="em_greenA1"></em><em class="em_greenA1"></em><b class="em_words">高</b>
                                    </div>
                                 </div>
                             </div>
                           </li>

                           <li>
                               <div class="y_same_item">
                                   <input class="ysame_input" type="password" name="cpassword" oncopy="return false;" oncut="return false;" onpaste="return false;" id="password2">
                                   <span class="y_same_label">确认密码</span>
                               </div>

                                <div class="y_regist_tips y_regist_tips_red" style="top: 6px;">
                                  <div class="y_regtip_rel">
                                      <i></i>
                                      <div class="y_tips_words">
                                                 请再次输入密码
                                      </div>
                                  </div>
                               </div>

                               <div class="y_regist_right"></div>
                           </li>
                           <li>
                               <div class="y_agreement_word">点击注册，表示您同意1号店  <a href="http://cms.yhd.com/cms/view.do?topicId=10" target="_blank">《服务协议及隐私声明》</a></div>
                               <button class="y_agreement_btn" type="submit" id="register_button">同意协议并注册</button>
                           </li>
                       </ul>
            </div> <!-- // y_regist_form ending -->
        </form>
        </div>
    </div>
    <!--// y_regist_wrap ending -->
    <script type="text/javascript" src='https://captcha.yhd.com/captcha/js/api.js?0.1543943106'></script>

    <div class="regist_popWin regist_success_newst" id="sale_pop">
        <div class="regist_popWin_con">
            <div class="regist_popWin_title">
                <a href="javascript:void(0)" class="regist_popWin_closeBtn"></a>
            </div>
            <div class="regist_popWin_Info clearfix">
                <p class="tit"><i></i>注册成功</p>
                <p class="fuli"><b>0元抢、双倍积分、爆款低价</b></p>
                <a href="http://cms.yhd.com/sale/180770" class="shopping_btn" data-tpa="2548">领取福利</a>
            </div>
        </div>
    </div>
    <div class="regist_success regist_popWin" id="default_pop">
        <div class="regist_popWin_con">
            <div class="regist_popWin_title">
                <a href="javascript:void(0)" class="regist_popWin_closeBtn"></a>
            </div>
            <div class="regist_popWin_Info clearfix">
                <div class="regist_popWin_main">
                    <div class="regist_popWin_mainCon">
                        <p class="tit"><i></i>注册成功</p>
                    </div>
                </div>
            </div>
            <div class="popWin_tips">
                <span>3</span>s后跳转至首页
            </div>
        </div>
    </div>

    <div id="simplefooter"><a href="http://www.miibeian.gov.cn/" target="_blank">沪ICP备13044278号</a>|<a>合字B1.B2-20130004</a>|<a
            href="http://d7.yihaodianimg.com/N01/M04/14/0D/CgQCr1KgLjGAM5w3AAQiJTyDkdw48000.jpg" data-ref="YHD_Footer_Licence"
            target="_blank">营业执照</a>
        <p>Copyright &copy; 1号店网上超市 2007-2014，All Rights Reserved</p>
    </div>
    <div>
        <span style="color: #FFFFFF">
            117!$
            4%&
            4#@
            10!$
            ,
        </span>
        <span style="color: #FFFFFF">1561453</span>
    </div>
    {{-- <script type="text/javascript" src="https://passport.yhd.com/front-homepage/global/js/global_tracker.js?1561453"></script> --}}
</body>
<script type="text/javascript">
    var showValidCodeWhenRegistByMobile = false;
    var registerValidateUserBehaviorSwitcher = true;
    jRegist.init();
</script>

</html>
<script src="/js/jquery-3.2.1.min.js"></script>
<script>

        var seconds=60;
        var si;  // 保存定时器

        $("#btn-send").click(function(){

            // 获取手机号码
            var phone = $("input[name=phone]").val();
            // console.log(phone);
            // 执行AJAX发到服务器
            $.ajax({
                type:"GET",     // GET方式
                url:"{{ route('sendphone') }}",    // AJAX提交的地址
                data:{phone:phone},                           // 提交的参数（手机号码）
                success:function(data) {                        // AJAX成功之后执行的代码

                    // 设置按钮失效
                    $("#btn-send").attr('disabled',true);

                    // 每1秒执行一次
                    si = setInterval(function(){
                        seconds--;
                        if(seconds==0)
                        {
                            // 生效
                            $("#btn-send").attr('disabled',false);
                            seconds=60;
                            $("#btn-send").val("发送验证码");
                            // 关闭定时器
                            clearInterval( si );
                        }
                        else{
                            $("#btn-send").val("还剩："+(seconds));
                        }
                    }, 1000);


                }
            });

        });

        </script>
