@extends('layouts.authorlayout')
@section('title', 'Create a Post')
    

@section('content')
    
    <form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
       @csrf
       <div id='title-input'> <p> Title: <input type="text" name="title" value="{{old('title')}}"> </p> 
       <div id='content-input'> <p> Content: <input type="text" name="content" value="{{old('content')}}"> </p> 
      
            <input
        type="file"
        class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
        name="image">
      
       <div id='submit-button'><input type="submit" value="Submit">
       <div id='cancel-button'><a href="{{route('posts.index')}}"> Cancel </a>

  




</form>

<style>
body {
    text-align: center;
}
#title{
       padding: 20px;
}
#title-input{
       padding: 5px;
}
#content-input{
       margin-right: 25;
}
#submit-button{
       float:center;
       margin-top: 15;
       margin-bottom: 55;
       margin-left: 10;
       font-size: 20px;
}
#cancel-button{
       float:center;
       margin-bottom: 45;
       margin-left: 10;
       font-size: 20px;
}
</style>

    

@endsection