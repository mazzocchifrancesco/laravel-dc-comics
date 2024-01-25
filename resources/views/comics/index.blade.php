@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Fumetti</h2>
        </div>
        <div class="row">
            @foreach ($products as $item)
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">
                                Descrizione: {{ $item->description }}<br>
                                Tipo: {{ $item->type }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection