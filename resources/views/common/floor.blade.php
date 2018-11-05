<!-- 楼层 -->
		<div class="container">
			@foreach($floorData as $v)
			<!-- 1楼 -->
			<div class="floor">
				<div class="row">
					<h3>{{$v->flo_name}}</h3>
				</div>
				<div class="row">
					<div class="col-xs-2 ad">
						<a href="{{$v->ad_img_link}}"><img src="{{Storage::url('/').$v->ad_img}}" alt=""></a>
						<div class="ad-cat">
							<p>
								@foreach($v->catData as $v1)
								<a href="/search?cat_id1={{$v->cat_id1}}&cat_id2={{$v1->id}}">{{$v1->cat_name}}</a>
								@endforeach
							</p>
						</div>
					</div>
					<div class="col-xs-8 goods">
						<div class="goods-btn goods-btn-rec">
							<a href="javascript:void(0);" class="active">{{$v->subtitle1}}</a><a href="javascript:void(0);">{{$v->subtitle2}}</a><a href="javascript:void(0);">{{$v->subtitle3}}</a><a href="javascript:void(0);">{{$v->subtitle4}}</a><a href="javascript:void(0);">{{$v->subtitle5}}</a>
						</div>
						<div class="goods-rec-con">
							<div class="row">
								@foreach($v->goods1 as $v1)
								<div class="col-xs-3">
									<a href="/{{$v1->id}}.html">
										<img src="{{Storage::url('/').$v1->mid_pic}}">
										{{$v1->goods_name}}
									</a>
									<p class="price">
										<span class="price-new">¥{{$v1->shop_price}}</span>
										<span class="price-old">¥{{$v1->market_price}}</span>
									</p>
								</div>
								@endforeach
							</div>
						</div>
						<div class="goods-rec-con" style="display: none;">
							<div class="row">
								@foreach($v->goods2 as $v1)
								<div class="col-xs-3">
									<a href="/{{$v1->id}}.html">
										<img src="{{Storage::url('/').$v1->mid_pic}}">
										{{$v1->goods_name}}
									</a>
									<p class="price">
										<span class="price-new">¥{{$v1->shop_price}}</span>
										<span class="price-old">¥{{$v1->market_price}}</span>
									</p>
								</div>
								@endforeach
							</div>
						</div>
						<div class="goods-rec-con" style="display: none;">
							<div class="row">
								@foreach($v->goods3 as $v1)
								<div class="col-xs-3">
									<a href="/{{$v1->id}}.html">
										<img src="{{Storage::url('/').$v1->mid_pic}}">
										{{$v1->goods_name}}
									</a>
									<p class="price">
										<span class="price-new">¥{{$v1->shop_price}}</span>
										<span class="price-old">¥{{$v1->market_price}}</span>
									</p>
								</div>
								@endforeach
							</div>
						</div>
						<div class="goods-rec-con" style="display: none;">
							<div class="row">
								@foreach($v->goods4 as $v1)
								<div class="col-xs-3">
									<a href="/{{$v1->id}}.html">
										<img src="{{Storage::url('/').$v1->mid_pic}}">
										{{$v1->goods_name}}
									</a>
									<p class="price">
										<span class="price-new">¥{{$v1->shop_price}}</span>
										<span class="price-old">¥{{$v1->market_price}}</span>
									</p>
								</div>
								@endforeach
							</div>
						</div>
						<div class="goods-rec-con" style="display: none;">
							<div class="row">
								@foreach($v->goods5 as $v1)
								<div class="col-xs-3">
									<a href="/{{$v1->id}}.html">
										<img src="{{Storage::url('/').$v1->mid_pic}}">
										{{$v1->goods_name}}
									</a>
									<p class="price">
										<span class="price-new">¥{{$v1->shop_price}}</span>
										<span class="price-old">¥{{$v1->market_price}}</span>
									</p>
								</div>
								@endforeach
							</div>
						</div>
					</div>
					<div class="col-xs-2 xl">
						<div class="goods-btn">
							<a href="" class="active xl-btn">销量排行</a>
						</div>
						<ul>
							<li>
								<p>
									<span class="num">1</span> 
									<a href=""><img src="images/goods/a1.jpg"> 
									意大利德龙</a>
									￥300
								</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
			@endforeach
		</div>