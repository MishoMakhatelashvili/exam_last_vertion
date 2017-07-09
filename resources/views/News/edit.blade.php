<form action="{{route('news.update',$news->id)}}" method="post">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PUT">
     ნუმერაცია:
	<input type="number" name="number" value="1">
   
	<p>
	სათაური:
	<input type="text" name="title" value="{{$news->title}}">
	</p>
  
	<p>
	აღწერა:
	<input type="text" name="description" value="{{ $news->description }}">
	</p>
    <p>
	ნახვები:
	<input type="number" name="views" value="1">  
	<p> 

    <p>
	ავტორი:
	<input type="text" name="author" value="{{$news->author}}">  
	<p>
    <p>
	კატეგორია:
	<select name="category_id">
	@foreach($category as $category)
	<option value="{{$category->id}}">{{$category->name}}</option> 
	@endforeach
	</select>
	</p>
    <p>
	სურათი:
	<input type="text" name="img" value="src">
	</p>
	<p>
	<button type="submit">save</button>
</form>