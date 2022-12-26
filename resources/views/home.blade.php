@extends('layouts.app')

@section('title', 'Home')

@section('content')
   
    <section class="text-center">
        <h1>Homepage</h1>
    </section>
    <section class="text-center my-4">
        <img src="https://static1.srcdn.com/wordpress/wp-content/uploads/2022/12/dc-comics.jpg" alt="dc-comic-banner" class="w-75">
    </section>
    <section class="text-center">    
        <a href="{{route('comics.index')}}" class="btn btn-outline-danger">See all the comics</a>    
    </section>

@endsection