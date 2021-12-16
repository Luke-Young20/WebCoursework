@extends('layouts.authorlayout')

<div id='title'> @section('title', 'Edit a Post') </div>
    

@section('content')
    


<form method="POST" action="{{route('posts.update', ['id' => $post->id]) }}">   
@csrf
@method('PATCH')
<div id='title-input'> <p> Title: <input type="text" name="title" value="{{old('title')}}"> </p> </div>
<div id='content-input'> <p> Content: <input type="text" name="content" value="{{old('content')}}"> </p> </div>

       <!-- <button type="submit" formmethod="post" formaction="{{route('posts.update', ['id' => $post->id]) }}">Submit</button> -->
       <div id='submit-button'><button type="submit">Submit</button></div>

       <div id='cancel-button'> <a href="{{route('posts.index')}}"> Cancel </a> </div>

</form>

<style>
body {
    text-align: center;
}
#title{
       padding: 20px;
}
#title-input{
       padding: 5px;
}
#content-input{
       margin-right: 25;
}
#submit-button{
       float:center;
       margin-top: 15;
       margin-bottom: 55;
       margin-left: 10;
       font-size: 25px;
}
#cancel-button{
       float:center;
       margin-bottom: 55;
       margin-left: 10;
       font-size: 25px;
}
</style>

@endsection 