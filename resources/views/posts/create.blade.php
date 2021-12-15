Im on create blade.php
@extends('layouts.authorlayout')
@section('title', 'Create a Post')
    

@section('content')
    
    <form method="POST" action="{{route('posts.store')}}" enctype="multipart/form-data">
       @csrf
       <p> Title: <input type="text" name="title" value="{{old('title')}}"> </p> 
       <p> Content: <input type="text" name="content" value="{{old('content')}}"> </p> 
       <input type="submit" value="Submit">
       <a href="{{route('posts.index')}}"> Cancel </a>

        <input
        type="file"
        class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400"
        name="image">




</form>


    

@endsection