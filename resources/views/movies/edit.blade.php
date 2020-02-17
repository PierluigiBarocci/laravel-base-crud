@extends('layouts.main')

@section('title', 'Modifica film')


@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-6 text-left">
                <h1>Modifica film</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a class="btn btn-success mt-2" href="{{ route('movies.index') }}">Torno alla lista dei Film</a>
            </div>
        </div>
        <div class="row mt-5">
            <form method="post" action="{{ route('movies.update', ['movie'=> $movie]) }}">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title"
                    value="{{ $movie->title }}" placeholder="Inserisci Titolo">
                </div>
                <div class="form-group">
                    <label for="year">Anno</label>
                    <input type="text" class="form-control" id="year" name="year" value="{{ $movie->year }}" placeholder="Inserisci Anno di uscita">
                </div>
                <div class="form-group">
                    <label for="genre">Genere</label>
                    <input type="text" class="form-control" id="genre" name="genre" value="{{ $movie->genre }}" placeholder="Inserisci Genere">
                </div>
                <div class="form-group">
                    <label for="vote">Voto</label>
                    <input type="text" class="form-control" id="vote" name="vote" value="{{ $movie->vote }}" placeholder="Inserisci Voto">
                </div>
                <button type="submit" class="btn btn-primary">Aggiorna</button>
            </form>
        </div>
    </div>
@endsection
