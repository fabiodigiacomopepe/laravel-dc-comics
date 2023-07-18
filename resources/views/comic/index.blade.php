@extends('layouts.main-layout')

@section('content')
    <div class="text-center">
        <h1>
            Comics
            <a href="{{ route('comic.create') }}">+</a>
        </h1>
        <ul class="list-unstyled" style="width: 45%; margin: 0 auto">
            @foreach ($comics as $comic)
                <li class="d-flex justify-content-between">
                    <a href="{{ route('comic.show', $comic->id) }}">
                        {{ $comic->title }}
                    </a>
                    <div class="d-flex">
                        <a class="btn btn-primary" href="{{ route('comic.edit', $comic->id) }}">
                            EDIT
                        </a>

                        <form method="POST" action="{{ route('comic.destroy', $comic->id) }}">

                            @csrf
                            @method('DELETE')

                            <input class="btn btn-danger" type="submit" value="DELETE">
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>

    </div>
@endsection
