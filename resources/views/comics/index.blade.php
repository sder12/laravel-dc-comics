@extends('layouts.app')

@section('title', 'Comics')

@section('content')
   
   <h1>Comics</h1>
   <ul>
   @foreach ($comics as $comic)
       <li> {{ $comic->title}}</li>
   @endforeach
    </ul>
@endsection