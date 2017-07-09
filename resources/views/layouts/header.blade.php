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
        
    </head>

    <body>
 <ul class="nav nav-tabs">
    <li><a data-toggle="tab" href="{{route('user.index')}}">განცხადებები</a></li>
    <li><a data-toggle="tab" href="{{route('cat.index')}}">კატეგორიები</a></li>
    <li><a data-toggle="tab" href="#menu3">პაროლის შეცვლა</a></li>
  </ul>
  

  	@yield('content')
   
    </body>
</html>
