@extends('layouts.authorlayout')

@section('title', 'Create a Post')
    

@section('content')
    
    <form method="POST" action="{{route('posts.store')}}">
       @csrf
       <p> Title: <input type="text" name="title" value="{{old('title')}}"> </p> 
       <p> Content: <input type="text" name="content" value="{{old('content')}}"> </p> 
       <p> Date Of Posting: <input type="text" name="date_of_posting" value="{{old('date_of_posting')}}"> </p> 
       <p> Author ID: <input type="text" name="author_id" value="{{old('author_id')}}"> </p> 
       <input type="submit" value="Submit">
       <a href="{{route('posts.index')}}"> Cancel </a>
</form>


    

@endsection