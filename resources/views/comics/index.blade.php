@extends('layouts.app')

@section('title', 'Index')

@section('content')

    <section>
        <div class="container py-2">
            <h2 class="text-center">All Comics </h2>
        </div>
    </section>

    <section class="text-end">
        <a href="{{ route('comics.create') }}" class="btn  btn-outline-dark">create new comic</a>
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
                                <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success">
                                    <i class="fa-solid fa-eye"></i>
                                </a>
                                <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">
                                    <i class="fa-solid fa-pencil"></i>
                                </a>
                                <form action="{{ route('comics.destroy', $comic->id) }}" class="d-inline" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger delete-btn" data-comic-title="{{ $comic->title }}">
                                        <i class="fa-solid fa-trash"></i>
                                    </button>
                                </form>

                                {{-- soft delete creare nuova migration adding 
                                UP $table->softDeletes() DOWN $table->dropDeletes()
                                MODEL comic --> use SoftDeletes;
                                --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </section>
    @include('partials.delete-modal')
@endsection
