@extends('layouts.authorlayout')

@section('title')
    A list of all Authors
@endsection

@section('content')
        
   <!--   <p> these are the authors {{$authors}} </p> */ -->
    <ul>
     @foreach ($authors as $author)
            <li>{{$author->name}}</li>

     @endforeach
    </ul>

    

@endsection