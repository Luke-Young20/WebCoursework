@extends('layouts.authorlayout')
@section('title', 'Create a Post')
    

@section('content')
    
    <form method="POST" action="{{route('posts.store')}}">
       @csrf
       <p> Title: <input type="text" name="title" value="{{old('title')}}"> </p> 
       <p> Content: <input type="text" name="content" value="{{old('content')}}"> </p> 
       <!-- <p> Date Of Posting: <input type="text" name="date_of_posting" value="{{old('date_of_posting')}}"> </p>  -->
      




       <div class="flex justify-center">
         <form action="/posts" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="block">
            <input type="file" class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-400" 
            name = "image">
          </div>
        </div>


       <!-- <p> Author ID: $id = Auth::user()->id;print_r($id); </p> -->


       <input type="submit" value="Submit">
       <a href="{{route('posts.index')}}"> Cancel </a>
</form>


    

@endsection