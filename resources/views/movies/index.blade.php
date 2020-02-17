@extends('layouts.main')

@section('title', 'Lista dei Film')


@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-6 text-left">
                <h1>Lista dei Film disponibili</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a class="btn btn-success mt-2" href="{{ route('movies.create') }}">Aggiungi Film</a>
            </div>
        </div>
        <div class="row mt-5">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Titolo</th>
                            <th scope="col">Anno</th>
                            <th scope="col">Genere</th>
                            <th scope="col">Azioni</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($movies as $movie)
                            <tr>
                                <th scope="row">{{ $movie->id }}</th>
                                <td>{{ $movie->title }}</td>
                                <td>{{ $movie->year }}</td>
                                <td>{{ $movie->genre }}</td>
                                <td></td>
                            </tr>
                        @empty
                            <tr>
                                <td>Non Ci Sono Film Presenti nel Database</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
        </div>
    </div>
@endsection
