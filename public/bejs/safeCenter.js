/* SVN.committedRevision=1559019 */
function validEmail(){var a="/activate/sendEmail.do?callback=?";jQuery.getJSON(a,function(b){if(b.code==0){YHD.alert("验证邮件已经发送至您的邮箱，请登录邮箱进行验证！")}else{YHD.alert("验证邮件发送失败，请重试或者至编辑个人资料修改邮箱！")}})}function unbindMobile(){var a='<div class="popup_content_unlock" id="popup_unlock"><p class="tips_care"><strong>解除绑定手机会对您的账户造成安全隐患！</strong></p>';a+='<p class="tips_txt1">请确认后谨慎操作</p><div class="btn_box">';a+='<button class="btn_sure"><span>解绑手机</span></button><button class="btn_no"><span>取&nbsp;&nbsp;消</span></button></div></div>';yhdLib.popwin({poptitle:"解绑手机",popcontentstr:a});$(".btn_sure","#popup_unlock").unbind("click").bind("click",function(){yhdLib.popclose();window.location.href="/member/bind/unbindMobile.do"});$(".btn_no","#popup_unlock").unbind("click").bind("click",function(){yhdLib.popclose()
})}_loadMyYihaodianLeftMenu.loadLeftDiv();