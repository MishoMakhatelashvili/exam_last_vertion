@extends('layouts.header')
 @section('content')
<div class="container">
 
  	
  	<div class="list-group" style="margin-top:30px">


@foreach($category as $cate)
    <a href="{{route('user.edit',$cate->id)}}" class="list-group-item">
      <h4 class="list-group-item-heading">{{$cate->name}}</h4>
    </a>
  @endforeach

  </div>

@endsection


