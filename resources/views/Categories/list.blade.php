
@extends('layouts.master')

@section('content')
	
	<table class="table table-hover">
	 <thead>
    <tr>
      <th>#</th>
      <th>სახელი</th>
      <th>სტატუსი</th>
      <th>რედაქტირება</th>
    </tr>
  </thead>
  <tbody>
	@foreach($category as $category)

     <tr>
      <th scope="row">1</th>
      <td>{{$category->name}}</td>
      <td>{{$category->status}}</td>
      <td><a href="{{route('categories.edit', $category->id)}}">edit</a></td>
    </tr>

      {{--   <tr>
     
      <td>{{$category->name}}<td>
      <td>{{$category->status}}</td>
      <td><a href="{{route('categories.edit', $category->id)}}">edit</a></td>
    </tr> --}}
 
    
 	@endforeach
	</tbody>
</table>


  <a style="margin-left:800px;" href="{{route('categories.create')}}" class="btn btn-primary">კატეგორიის დამატება</a>





  
 


@endsection





