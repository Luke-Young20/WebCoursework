@extends('layouts.authorlayout')

@section('title', 'Create a Post')
    

@section('content')
    
<form action="/editpost/{{$post->id}}" method="post">
           @csrf
           {{ method_field('PATCH') }}
       <p> Title: <input type="text" name="title" value="{{old('title')}}"> </p> 
       <p> Content: <input type="text" name="content" value="{{old('content')}}"> </p> 
       <p> Date Of Posting: <input type="text" name="date_of_posting" value="{{old('date_of_posting')}}"> </p> 
       <!-- <p> Author ID: $id = Auth::user()->id;print_r($id); </p> -->


       <input type="submit" value="Submit">