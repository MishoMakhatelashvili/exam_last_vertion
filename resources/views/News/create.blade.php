<form action="{{route('news.store')}}" method="post">
	{{ csrf_field() }}

    ნუმერაცია:
	<input type="number" name="number" value="1">
    {{$errors->first('title')}}
	<p>
	სათაური:
	<input type="text" name="title" value="{{ old('title') }}">
	</p>
    {{$errors->first('description')}}
	<p>
	აღწერა:
	<input type="text" name="description" value="{{ old('description') }}">
	</p>
    <p>
	ნახვები:
	<input type="number" name="views" value="1">  
	<p> 
    {{$errors->first('author')}}
    <p>
	ავტორი:
	<input type="text" name="author" value="{{old('author')}}">  
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