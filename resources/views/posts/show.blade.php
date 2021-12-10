@extends('layouts.authorlayout')

@section('title', 'Post Details')
    

@section('content')
        
   
    <ul>
        <li>Name: {{$post->title}}</li>
        <li>Content: {{$post->content}}</li>

    </ul>

    

@endsection