<div class="col-xs-2 cat-list">
	<ul>
		@foreach($catData as $v)
		<li class="cat-item">
			<a href="/special?cat_id1={{$v->id}}">{{$v->cat_name}}</a>
			<div class="cat-item-content">
				<dl>
					@foreach($v->subCat as $v1)
					<dt><a href="/channel?cat_id1={{$v->id}}&cat_id2={{$v1->id}}">{{$v1->cat_name}}</a></dt>
						@foreach($v1->subCat as $v2)
						<dd><a href="/search?cat_id1={{$v->id}}&cat_id2={{$v1->id}}&cat_id3={{$v2->id}}">{{$v2->cat_name}}</a></dd>
						@endforeach
					@endforeach
				</dl>
			</div>
		</li>
		@endforeach
	</ul>
</div>