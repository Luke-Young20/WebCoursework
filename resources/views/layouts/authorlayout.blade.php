<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content ="ie=egde">

  <title> List of Authors - @yield('title')</title>

</head>

<body>
  <!-- your content here... -->
  <h1>Authors - @yield('title')</h1>
  
 @if ($errors->any()) 
  <div>
    Errors:
<ul>
      @foreach ($errors->all() as $error)
      <lu>{{$error}} </li>
      @endforeach
</ul>

  </div> 
@endif

<div>

@yield('content')

</div>
</body>
</html>