<!doctype html>
<html lang="en">
<head>
<style>
      table,
      th,
      td {
        padding: 2px;
        border: 1px solid black;
        border-collapse: collapse;
      }

      title { text-align: center } 
     

    </style>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content ="ie=egde">

  <title> List of Authors - @yield('title')</title>
  <!-- Bootstrap css file -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>



  <!-- your content here... -->
  <h1>@yield('title')

  <style>
  h1 { text-align: center }
</style>
  </h1>
  
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

<style>
body {
 background-image: url("paper.gif");
 background-color: #aaaa;
}
li {
    list-style: none;
    font-size: 30px;
    text-align: center; 
    border:1px solid black;
    padding:15px;
    margin-top: 5px;
}





      </style>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"S integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->

</body>
</html>