@extends('layouts.main')

@section('title', 'Inserisci un nuovo film')


@section('content')
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-6 text-left">
                <h1>Inserisci un nuovo film</h1>
            </div>
            <div class="col-sm-6 text-right">
                <a class="btn btn-success mt-2" href="{{ route('movies.index') }}">Torno alla home</a>
            </div>
        </div>
        <div class="row mt-5">
            <form method="post" action="{{ route('movies.store') }}">
                @csrf
                <div class="form-group">
                    <label for="title">Titolo</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci Titolo">
                </div>
                <div class="form-group">
                    <label for="year">Anno</label>
                    <input type="text" class="form-control" id="year" name="year" placeholder="Inserisci Anno di uscita">
                </div>
                <div class="form-group">
                    <label for="genre">Genere</label>
                    <input type="text" class="form-control" id="genre" name="genre" placeholder="Inserisci Genere">
                </div>
                <div class="form-group">
                    <label for="vote">Voto</label>
                    <input type="text" class="form-control" id="vote" name="vote" placeholder="Inserisci Voto">
                </div>
                <button type="submit" class="btn btn-primary">Aggiungi Film</button>
            </form>
        </div>
    </div>
@endsection
