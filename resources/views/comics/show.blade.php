@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>{{ $comic->title }}</h2>
            <img class="thumbShow" src={{$comic['thumb']}} alt="">

        </div>
        <div class="row">
            <p>{{ $comic->description }}</p>
            <p>{{ $comic->price }}</p>
            <p>{{ $comic->series }}</p>
            <p>{{ $comic->sale_date }}</p>
            <p>{{ $comic->type }}</p>

        </div>
    </div>
    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Modifica</a>
    <form action="{{ route('comics.destroy', $comic->id) }}" method="POST" class="d-inline-block">
        @csrf
        @method('DELETE')
        <input type="submit" value="Elimina" class="btn btn-danger">
    </form>
@endsection