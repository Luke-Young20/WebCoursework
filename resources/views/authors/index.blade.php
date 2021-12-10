@extends('layouts.authorlayout')

@section('title')
    Authors
@endsection

@section('content')
        
   <!--   <p> these are the authors {{$authors}} </p> */ -->
    <ul>
     @foreach ($authors as $author)
            <li>{{$author->name}}</li>

     @endforeach
    </ul>

    

@endsection