<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content ="ie=egde">

  <title> List of Authors - @yield('title')</title>
  <!-- Bootstrap css file -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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

@if (session('message'))
<div>
<p><b>{{session('message')}}</b></p>

</div>
@endif 
<div>

@yield('content')

</div>
</body>
</html>