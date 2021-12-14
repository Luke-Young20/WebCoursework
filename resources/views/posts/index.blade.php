@extends('layouts.authorlayout')

@section('title')
    A list of all Posts
@endsection

@section('content')
        

    <ul>
     @foreach ($posts as $post)
            <li><a href="{{ route('posts.show', ['id' => $post->id ])}}"> {{$post->title}}</a></li>

     @endforeach
    </ul>

    {{$posts->links()}}
    

    <a href="{{route('posts.create')}}">Create A Post</a>

    

@endsection