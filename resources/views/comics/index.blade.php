@extends('layouts.app')

@section('content')
<div id="main">

    <div id="jumbo"></div>
    <div id="cardBox" class="position-relative">
        <div id="series" class="position-absolute bg-primary px-3 fs-5 top-0 translate-middle">CURRENT SERIES
        </div>
        <div id="cardBox" class="container">
            <div class="row">
            @foreach ($products as $fumetto)
                <div class="col-2" id="card">
                    <img class="thumb" src={{$fumetto['thumb']}} alt="">
                    <p class="text-uppercase">{{ $fumetto['title'] }}</p>
                    <a href="{{ route('comics.show', $fumetto->id) }}" class="btn btn-primary">Mostra dettagli</a>
                </div>
                @endforeach
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="btn btn-primary rounded-0 px-4"> LOAD MORE</div>
        </div>
    </div>
</div>
@endsection