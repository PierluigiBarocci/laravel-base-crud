@extends('layouts.main')

@section('title', 'Dettagli')


@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-6 text-left">
                <h1>Dettagli film</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a class="btn btn-success mt-2" href="{{ route('movies.index') }}">Torno alla home</a>
            </div>
        </div>
        <div class="row mt-5">
            <div class="card">
                <div class="card-header">
                    {{ $movie->title }}
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Id: {{ $movie->id }}</li>
                    <li class="list-group-item">Anno: {{ $movie->year }}</li>
                    <li class="list-group-item">Genere: {{ $movie->genre }}</li>
                    <li class="list-group-item">Voto: {{ $movie->vote }}</li>
                    <li class="list-group-item">Creato in data: {{ $movie->created_at }}</li>
                    <li class="list-group-item">Modificato in data: {{ $movie->updated_at }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
