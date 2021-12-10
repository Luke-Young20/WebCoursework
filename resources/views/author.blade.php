@extends('layouts.authorlayout')

@section('title')
    {{$author}} is the Author
@endsection

@section('content')

        @if($author)
              
             <p> these are the authors {{$author}} </p>
        @else
            <h1> No author has been chosen </h1>
        @endif
    

@endsection

