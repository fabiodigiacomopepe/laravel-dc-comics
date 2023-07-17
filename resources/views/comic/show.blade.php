@extends('layouts.main-layout')

@section('content')
    <div class="text-center">
        <h1>{{ $comic->title }}</h1>
        <img src="{{ $comic->thumb }}">
        <div class="row justify-content-between py-4">
            <span class="col">Prezzo: {{ $comic->price }}</span>
            <span class="col">Serie: {{ $comic->series }}</span>
            <span class="col">In vendita dal: {{ $comic->sale_date }}</span>
            <span class="col">Tipo: {{ $comic->type }}</span>
        </div>
        <p class="px-5">
            {{ $comic->description }}
        </p>
        <p class="px-5">
            Autori:
            {{ $comic->artists }}
        </p>
        <p class="px-5">
            Scrittori:
            {{ $comic->writers }}
        </p>
    </div>
@endsection
