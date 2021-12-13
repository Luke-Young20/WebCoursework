@extends('layouts.authorlayout')
@section('title', 'Add a Comment')
    

@section('content')
    
    <form method="POST" action="{{route('comments.store')}}">
       @csrf
       <p> Title: <input type="text" name="title" value="{{old('title')}}"> </p> 
       <p> commentText: <input type="text" name="content" value="{{old('commentText')}}"> </p> 

       <input type="submit" value="Submit">
       <a href="{{route('posts.index')}}"> Cancel </a>
</form>


    

@endsection