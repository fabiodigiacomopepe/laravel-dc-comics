@extends('layouts.main-layout')

@section('content')
    <div class="text-center">
        <h3>
            Crea fumetto
        </h3>
        {{-- <form method="POST" action="{{ route('update', $comic->id) }}"> --}}

        @csrf
        @method('PUT')

        <label for="title">Nome</label>
        <br>
        <input type="text" name="title" id="title" value="{{ $comic->title }}">
        <br>

        <label for="thumb">Immagine</label>
        <br>
        <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}">
        <br>

        <label for="price">Prezzo</label>
        <br>
        <input type="text" name="price" id="price" value="{{ $comic->price }}">
        <br>

        <label for="series">Serie</label>
        <br>
        <input type="text" name="series" id="series" value="{{ $comic->series }}">
        <br>

        <label for="sale_date">In vendita dal</label>
        <br>
        <input type="date" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
        <br>

        <label for="type">Tipo</label>
        <br>
        <input type="text" name="type" id="type" value="{{ $comic->type }}">
        <br>

        <label for="description">Descrizione</label>
        <br>
        <input type="text" name="description" id="description" value="{{ $comic->description }}">
        <br>

        <label for="artists">Autori</label>
        <br>
        <input type="text" name="artists" id="artists" value="{{ $comic->artists }}">
        <br>

        <label for="writers">Scrittori</label>
        <br>
        <input type="text" name="writers" id="writers" value="{{ $comic->writers }}">
        <br>

        <input class="my-3" type="submit" value="UPDATE">

        </form>
    </div>
@endsection
