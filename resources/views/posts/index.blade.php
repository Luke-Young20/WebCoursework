@extends('layouts.authorlayout')

@section('title')
    A list of all Posts
@endsection

@section('content')
        <form>
        
  <form>
<body>
    <div id='logout-button'>
                <a href="{{ url('/logout') }}" 
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
    </div>

</form>


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf


                    </form>
    <ul>
     @foreach ($posts as $post)
            <li><a href="{{ route('posts.show', ['id' => $post->id ])}}"> {{$post->title}}</a></li>

            

     @endforeach
    </ul>


    <a id='create-post' href="{{route('posts.create')}}">Create A Post</a>

    {{$posts->links()}}


@endsection

<style>
body {
    text-align: right;
    margin: 50;
}
#logout-button {
  text-align: right;
  margin-right: 50;
  font-size: 25px;
}
#create-post {
  text-align: left;
  margin-left: 100;
  font-size: 25px;
 
}
</style>
</body>