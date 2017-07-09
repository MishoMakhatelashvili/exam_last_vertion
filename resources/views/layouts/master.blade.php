<!doctype html>
<html lang="{{ app()->getLocale() }}">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        
        </style>
    </head>

    <body>
      
 <ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">მთავარი</a></li>
    <li><a data-toggle="tab" href="{{route('categories.index')}}">კატეგორიების მართვა</a></li>
    <li><a data-toggle="tab" href="{{route('news.index')}}">განცხადებების მართვა</a></li>
    <li><a data-toggle="tab" href="#menu3">პაროლის შეცვლა</a></li>
  </ul>
  	@yield('content')
   
    </body>
</html>
