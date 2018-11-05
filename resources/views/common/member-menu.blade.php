<div class="col-xs-1">
	<dl>
		<dt>设置</dt>
		<dd><a href="/member-profile" @if($active=='profile') class="active" @endif>个人信息</a></dd>
		<dd><a href="/member-address" @if($active=='address') class="active" @endif>收货地址</a></dd>
		<dd><a href="/member-password" @if($active=='password') class="active" @endif>密　　码</a></dd>
		<td><a href="/member-face" @if($active=='face') class="active" @endif>我的头像</a></td>
	</dl>
	<dl>
		<dt>订单中心</dt>
		<dd><a href="/member-order" @if($active=='order') class="active" @endif>我的订单</a></dd>
		<dd><a href="/member-aftersale" @if($active=='aftersale') class="active" @endif>退换货</a></dd>
	</dl>
	<dl>
		<dt>关注中心</dt>
		<dd><a href="/member-follow" @if($active=='follow') class="active" @endif>我的关注</a></dd>
		<dd><a href="/member-history" @if($active=='history') class="active" @endif>浏览历史</a></dd>
	</dl>
</div>