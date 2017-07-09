@extends('layouts.header')
 @section('content')
<div class="container">
 



  <div class="row">



@foreach($news as $new)

    <div class="col-sm-4">
      <h3>{{$new->title}}</h3>

      <p>{{$new->description}}</p>
      <p>ავტორი:{{$new->author}}</p>
    </div>
@endforeach

  </div>
  
</div>

</div>
@endsection


