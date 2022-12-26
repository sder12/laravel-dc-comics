@extends('layouts.app')

@section('title', 'Edit + Update')

@section('content')
    <section>
        <div class="container">
            <h2 class="text-center"> Edit this comic </h2>
            <div class="row justify-content-center">
                <div class="col-7 mb-5">
                    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
                        @method('PUT')
                        @csrf

                        <div class="mb-2">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title"
                                value="{{ $comic->title }}">
                        </div>

                        <div class="mb-2">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="10">{{ $comic->description }}</textarea>
                        </div>


                        <div class="mb-2">
                            <label for="thumb">Image</label>
                            <input type="text" class="form-control" id="thumb" name="thumb"
                                value="{{ $comic->thumb }}">
                        </div>


                        <div class="mb-2">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price"
                                value="{{ $comic->price }}">
                        </div>

                        <div class="mb-2">
                            <label for="series">Series</label>
                            <input type="text" class="form-control" id="series" name="series"
                                value="{{ $comic->series }}">
                        </div>

                        <div class="mb-2">
                            <label for="sale_date">Sales date</label>
                            <input type="date" class="form-control" id="sale_date" name="sale_date"
                                value="{{ $comic->sale_date }}">
                        </div>

                        <div class="mb-2">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" id="type" name="type"
                                value="{{ $comic->type }}">
                        </div>



                        <button class="btn btn-outline-success" type="submit">Save</button>
                    </form>
                </div>
            </div>

        </div>
    </section>
@endsection
