<div class="footer-btns">
@foreach($aboutData as $v)
	<a target="_blank" href="article-{{$v->id}}.html">{{$v->title}}</a>
	<span class="line"></span>
@endforeach
</div>
