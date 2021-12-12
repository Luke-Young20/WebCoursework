@extends('layouts.authorlayout')


@section('title', 'Post Details')
    

@section('content')
        
   
    <ul>
        <li>Post Title: {{$post->title}}</li>
        <li>Content: {{$post->content}}</li>
        <li>Author ID: {{$post->author->name}}</li>
        <li>Date of posting: {{$post->date_of_posting ?? 'unknown'}}</li>
    </ul>

    <form method="POST"
    action="{{route('posts.destroy', ['id' => $post->id]) }}">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>

<form method="UPDATE"
    action="{{route('posts.update', ['id' => $post->id]) }}">
    @csrf
    @method('PATCH')
    <button type="submit">Update</button>
    </form>



<p><a href="{{route('posts.index')}}">Back</a></p>
@endsection