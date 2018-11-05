<div class="col-xs-2 like-goods">
	<h4>相似选购</h4>
	<ul class="goods">
		@foreach($goods->alike() as $v)
		<li>
			<a href="{{$v->id}}.html">
				<img src="{{Storage::url('/').'/'.$v->mid_pic}}">
				{{$v->goods_name}}
			</a>
			<p class="price">
				<span class="price-new">¥{{$v->shop_price}}</span>
				<span class="price-old">¥{{$v->market_price}}</span>
			</p>
		</li>
		@endforeach
	</ul>
</div>