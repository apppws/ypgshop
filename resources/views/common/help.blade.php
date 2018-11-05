<div class="row helper">
	@foreach($helpData as $v)
	<div class="col-xs-2">
		<h5>{{$v->cat_name}}</h5>
		<ul>
			@foreach($v->articles as $v1)
			<li><a href="article-{{$v1->id}}.html">{{$v1->title}}</a></li>
			@endforeach
		</ul>
	</div>
	@endforeach
</div>