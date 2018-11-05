<div class="container">
	<div class="row header">
		<div class="col-xs-3">
			<a href="/"><img src="/images/logo.png" alt=""></a>
		</div>
		<div class="col-xs-7 search">
			<form action="/keyword">
				<input type="text" name="keyword" value="{{request()->get('keyword')}}"><input onclick="this.parentNode.submit();" type="button" value="搜索">
			</form>
			
			<div>
				<a href="">直降2000</a>
				<a href="">1元抵2018</a>
				<a href="">3折开抢</a>
				<a href="">欲望清单</a>
				<a href="">限时5折</a>
				<a href="">足浴盆木桶</a>
				<a href="">一体机电脑</a>
				<a href="">80减79券</a>
			</div>
		</div>
		@if(!isset($nocart))
		<div class="col-xs-2">
			<div class="cart">
				<i class="glyphicon glyphicon-shopping-cart"></i>
				我的购物车
				<span class="badge">{{count($cartData)}}</span>
				<div class="cart-con">
					@if(session('id'))
					@foreach($cartData as $v)
					<div class="row">
						<div class="col-xs-2">
							<img src="{{Storage::url('/').'/'.$v->sku->goods->mid_pic}}" width="50" height="50" alt="">
						</div>
						<div class="col-xs-6">
							{{$v->sku->goods->goods_name}} {!! str_replace(['|','@'],[':',' '],$v->sku->goods_attr_list_str) !!}
						</div>
						<div class="col-xs-4">
							￥{{$v->sku->price>0?$v->sku->price:$v->sku->goods->shop_price}}x{{$v->goods_count}} <br>
							<a href="">删除</a>
						</div>
					</div>
					@endforeach
					@else
					@foreach($cartData as $v)
					<div class="row">
						<div class="col-xs-2">
							<img src="{{Storage::url('/').'/'.$v->goods->mid_pic}}" width="50" height="50" alt="">
						</div>
						<div class="col-xs-6">
							{{$v->goods->goods_name}} {!! str_replace(['|','@'],[':',' '],$v->goods_attr_list_str) !!}
						</div>
						<div class="col-xs-4">
							￥{{$v->price>0?$v->price:$v->goods->shop_price}}x{{$cartData->goods_count[$v->sku_id]}} <br>
							<a href="">删除</a>
						</div>
					</div>
					@endforeach
					@endif
					<div class="cart-footer"><a href="/cart" class="btn btn-sm btn-danger">去购物车</a></div>
				</div>
			</div>
		</div>
		@endif
	</div>
</div>