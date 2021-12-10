@extends('layouts.authorlayout')

@section('title')
    A list of all Posts
@endsection

@section('content')
        

    <ul>
     @foreach ($posts as $post)
            <li>{{$post->title}}</li>

     @endforeach
    </ul>

    

@endsection