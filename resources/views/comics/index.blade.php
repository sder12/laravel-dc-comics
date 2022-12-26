@extends('layouts.app')

@section('title', 'Index')

@section('content')

    <section>
        <div class="container py-2">
            <h2 class="text-center">All Comics </h2>
        </div>
    </section>

    <section class="text-end">
        <a href="#" class="btn  btn-outline-dark">create new comic</a>
    </section>

    <section>
        <div class="container mt-4">

            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Type</th>
                        <th scope="col">Series</th>
                        <th scope="col">Sale date</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($comics as $comic)
                        <tr>
                            <th scope="row">{{ $comic->title }}</th>
                            <td>{{ $comic->type }}</td>
                            <td>{{ $comic->series }}</td>
                            <td>{{ $comic->sale_date }}</td>
                            <td>
                                <a href="#" class="btn btn-success">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="#" class="btn btn-warning">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                                <a href="#" class="btn btn-danger">
                                    <i class="fa-solid fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>

@endsection
