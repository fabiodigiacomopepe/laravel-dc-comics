@extends('layouts.main-layout')

@section('content')
    <div class="text-center">
        <h1>
            New Comic
        </h1>
        <form method="POST" action="{{ route('comic.store') }}">

            @csrf

            <label for="title">Titolo</label>
            <br>
            <input type="text" name="title">
            <br>

            <label for="description">Descrizione</label>
            <br>
            <input type="text" name="description">
            <br>

            <label for="thumb">Immagine</label>
            <br>
            <input type="text" name="thumb">
            <br>

            <label for="price">Prezzo</label>
            <br>
            <input type="text" name="price">
            <br>

            <label for="series">Serie</label>
            <br>
            <input type="text" name="series">
            <br>

            <label for="sale_date">In vendita dal</label>
            <br>
            <input type="date" name="sale_date">
            <br>

            <label for="type">Tipo</label>
            <br>
            <input type="text" name="type">
            <br>

            <label for="artists">Artisti</label>
            <br>
            <input type="text" name="artists">
            <br>

            <label for="writers">Scrittori</label>
            <br>
            <input type="text" name="writers">
            <br>

            <input class="my-3" type="submit" value="CREATE">
        </form>
    </div>
@endsection
