@extends('layouts.authorlayout')

@section('title')
    A list of all Posts
@endsection

@section('content')
        
<a href="{{ url('/logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
    <ul>
     @foreach ($posts as $post)
            <li><a href="{{ route('posts.show', ['id' => $post->id ])}}"> {{$post->title}}</a></li>

     @endforeach
    </ul>

    {{$posts->links()}}


    <a href="{{route('posts.create')}}">Create A Post</a>

    

@endsection