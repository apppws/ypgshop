<div class="top-banner">
	<div class="container">
		<a href="/">
			<i class="glyphicon glyphicon-home"></i>
			京东首页
		</a>
		欢迎您，
		@if(session('id'))
		<a href="/member-profile">{{session('name')}}</a>
		<a href="/member-order">我的订单</a>
		<a href="/logout">退出</a>
		@else
			游客
	  		<a href="/regist">注册</a>
	  		<a href="/login">登录</a>
		@endif
	</div>
</div>