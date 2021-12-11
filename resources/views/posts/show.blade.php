@extends('layouts.authorlayout')
use App\Models\Author;

@section('title', 'Post Details')
    

@section('content')
        
   
    <ul>
        <li>Name: {{$post->title}}</li>
        <li>Content: {{$post->content}}</li>
        <li>Author ID: {{$post->author->name}}</li>
        <li>Date of posting: {{$post->date_of_posting ?? 'unknown'}}</li>
    </ul>

    

@endsection