@extends('layouts.main')

@section('title', 'homepage')


@section('content')
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center mt-5">
                <a class="btn btn-success btn-lg btn-block mb-3" href="{{ route('movies.index') }}">Vai alla lista dei Film disponibili</a>
                <a class="btn btn-primary btn-lg btn-block mb-3 disabled" href="{{ route('home') }}">Vai alla lista delle Serie Tv disponibili</a>
                <a class="btn btn-warning btn-lg btn-block disabled" href="{{ route('home') }}">Vai alla lista dei Programmi disponibili</a>
            </div>
        </div>

    </div>
@endsection
