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
@endsection