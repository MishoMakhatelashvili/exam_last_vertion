<h1>{{$news->title}}</h1>
<p>
	{{$news->category->name}}
</p>
<p>
	{{$news->description}}
</p>
<a href="{{route('news.edit',$news->id)}}">შეცვლა</a>
