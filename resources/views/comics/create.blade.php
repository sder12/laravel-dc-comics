@extends('layouts.app')

@section('title', 'Create + Store')

@section('content')

    <section>
        <div class="container">
            <h2 class="text-center"> Create a new comic </h2>
            <div class="row justify-content-center">
                <div class="col-7 mb-5">

                    {{-- ERROR DIV --}}
                    {{-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->any() as $error)
                                    <li> {{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif --}}

                    {{-- FORM --}}

                    <form action="{{ route('comics.store') }}" method="POST">
                        @csrf

                        <div class="mb-2">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>

                        <div class="mb-2">
                            <label for="description">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="10"></textarea>
                        </div>


                        <div class="mb-2">
                            <label for="thumb">Image</label>
                            <input type="text" class="form-control" id="thumb" name="thumb">
                        </div>


                        <div class="mb-2">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" id="price" name="price">
                        </div>

                        <div class="mb-2">
                            <label for="series">Series</label>
                            <input type="text" class="form-control" id="series" name="series">
                        </div>

                        <div class="mb-2">
                            <label for="sale_date">Sales date</label>
                            <input type="date" class="form-control" id="sale_date" name="sale_date">
                        </div>

                        <div class="mb-2">
                            <label for="type">Type</label>
                            <input type="text" class="form-control" id="type" name="type">
                        </div>



                        <button class="btn btn-outline-success" type="submit">Salva</button>
                    </form>
                </div>
            </div>

        </div>
    </section>


@endsection
