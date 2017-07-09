
<a href="{{route('news.create')}}">create</a>

@foreach($news as $news)
	<ul>
		<li><a href="{{route('news.show',$news->id)}}">{{$news->title}}({{$news->category->name}})</a></li>
	</ul>

@endforeach