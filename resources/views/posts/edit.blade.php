IM ON THIS edit.blade PAGE
@extends('layouts.authorlayout')

@section('title', 'Edit a Post')
    

@section('content')
    
    <form method="POST" action="{{route('posts.edit', ['id' => $post->id]) }}">
       @csrf
       @method('PATCH')
       <p> Title: <input type="text" name="title" value="{{old('title')}}"> </p> 
       <p> Content: <input type="text" name="content" value="{{old('content')}}"> </p> 
       <!-- <p> Date Of Posting: <input type="text" name="date_of_posting" value="{{old('date_of_posting')}}"> </p>  -->
       <!-- <p> Author ID: $id = Auth::user()->id;print_r($id); </p> -->


       <input type="submit" value="Submit">
       <a href="{{route('posts.index')}}"> Cancel </a>
</form>

@endsection