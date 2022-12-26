@extends('layouts.app')

@section('title', 'Show')

@section('content')

    <section class="text-end">
        <a href="{{ route('comics.index') }}" class="btn btn-outline-dark"> Back to all</a>
    </section>


    <section class="row">
        <div class="col col-7">

            <h1>{{ $comic->series }}</h1>
            <h4>{{ $comic->title }}</h4>
            <span class="d-block"> <em> {{ $comic->type }} </em> </span>
            <img src="{{ $comic->thumb }}" alt="{{ $comic->series }}" class="my-4 w-25">
            <p>{{ $comic->description }}</p>

        </div>
    </section>


@endsection
