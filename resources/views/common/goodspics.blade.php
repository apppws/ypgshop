<div class="col-xs-4">
					<div class="preview fl">
						<div class="midpic">
							<a href="{{Storage::url('/').'/'.$goods->pic}}" class="jqzoom" rel="gal1"> 
								<img style="width: 100%;" src="{{Storage::url('/').'/'.$goods->mid_pic}}" alt="" />             
							</a>
						</div>
						<div class="smallpic">
							<a href="javascript:;" id="backward" class="off"></a>
							<a href="javascript:;" id="forward" class="on"></a>
							<div class="smallpic_wrap">
								<ul>
									<li class="cur">
										<a class="zoomThumbActive" href="javascript:void(0);" rel="{gallery: 'gal1', smallimage: '{{Storage::url('/').'/'.$goods->mid_pic}}',largeimage: '{{Storage::url('/').'/'.$goods->pic}}'}"><img src="{{Storage::url('/').'/'.$goods->sm_pic}}"></a>
									</li>
									@foreach($goods->pics as $v)
									<li>
										<a href="javascript:void(0);" rel="{gallery: 'gal1', smallimage: '{{Storage::url('/').'/'.$v->mid_pic}}',largeimage: '{{Storage::url('/').'/'.$v->pic}}'}"><img src="{{Storage::url('/').'/'.$v->sm_pic}}"></a>
									</li>
									@endforeach
								</ul>
							</div>
							
						</div>
					</div>
				</div>