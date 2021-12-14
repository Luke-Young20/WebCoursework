IM ON THIS edit.blade PAGE
@extends('layouts.authorlayout')

@section('title', 'Edit a Post')
    

@section('content')
    


<form method="POST" action="{{route('posts.update', ['id' => $post->id]) }}">   
@csrf
@method('PATCH')
       <p> Title: <input type="text" name="title" value="{{old('title')}}"> </p> 
       <p> Content: <input type="text" name="content" value="{{old('content')}}"> </p> 
       </form>


       <input type="submit" value="Submit">
       
       <a href="{{route('posts.index')}}"> Cancel </a>

</form>


@endsection 