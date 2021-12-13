IM ON THIS update.blade PAGE
@extends('layouts.authorlayout')

@section('title', 'Edit a Post')
    

@section('content')
    
    <form method="PUT" action="{{route('posts.edit', ['id' => $post->id]) }}">
       @csrf
       <p> Title: <input type="text" name="title" value="{{old('title')}}"> </p> 
       <p> Content: <input type="text" name="content" value="{{old('content')}}"> </p> 
       <p> Date Of Posting: <input type="text" name="date_of_posting" value="{{old('date_of_posting')}}"> </p> 

       <input type="submit" value="Submit">
      
       <a href="{{route('posts.index')}}"> Cancel </a>
</form>

@endsection