@extends('layouts.authorlayout')


@section('title', 'Post Details')
    

@section('content')
        
   
    <ul>
        <li>Post Title: {{$post->title}}</li>
        <li>Content: {{$post->content}}</li>
        <li>Author ID: {{$post->author->name}}</li>
        <li>Date of posting: {{$post->created_at}}</li>
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




    <a href="{{route('comments.create')}}">Create A Comment</a>

<p><a href="{{route('posts.index')}}">Back</a></p>
@endsection