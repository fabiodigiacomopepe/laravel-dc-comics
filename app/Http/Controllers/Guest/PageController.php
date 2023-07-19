<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Comic;

class PageController extends Controller
{
    public function index() {

        $comics = Comic :: all();

        return view('comic.index', compact('comics'));
    }

    public function show($id) {

        $comic = Comic :: findOrFail($id);

        return view('comic.show', compact('comic'));
    }

    public function create() {

        return view('comic.create');
    }

    public function store(Request $request) {

        $data = $request -> validate(
            $this -> getValidationRules(),
            $this -> getValidationMessages()
        );

        $comic = Comic :: create($data);

        // $comic = Comic :: create([
        //     "title" => $data["title"],
        //     "description" => $data["description"],
        //     "thumb" => $data["thumb"],
        //     "price" => $data["price"],
        //     "series" => $data["series"],
        //     "sale_date" => $data["sale_date"],
        //     "type" => $data["type"],
        //     "artists" => $data["artists"],
        //     "writers" => $data["writers"]
        // ]);

        return redirect() -> route("comic.show", $comic -> id);
    }

    public function edit($id) {

        $comic = Comic :: findOrFail($id);

        return view('comic.edit', compact('comic'));
    }

    public function update(Request $request, $id) {

        $data = $request -> validate(
            $this -> getValidationRules(),
            $this -> getValidationMessages()
        );

        $comic = Comic :: findOrFail($id);

        $comic -> update($data);

        return redirect() -> route("comic.show", $comic -> id);
    }

    public function destroy($id) {

        $comic = Comic :: findOrFail($id);

        $comic -> delete();

        return redirect() -> route("comic.index");
    }

    private function getValidationRules() {

        return [
            'title' => 'required|string',
            'description' => 'required|string',
            'thumb' => 'required|string',
            'price' => 'required|string',
            'series' => 'required|string',
            'sale_date' => 'required|date',
            'type' => 'required|string',
            'artists' => 'required|string',
            'writers' => 'required|string',
        ];
    }

    private function getValidationMessages() {

        return [
            'title.required' => 'Il titolo è necessario',
            'description.required' => 'La descrizione è necessaria',
            'thumb.required' => 'L\'mmagine è necessaria',
            'price.required' => 'Il prezzo è necessario',
            'series.required' => 'La serie è necessaria',
            'sale_date.required' => 'La data è necessaria',
            'type.required' => 'Il tipo è necessario',
            'artists.required' => 'L\' artista è necessario',
            'writers.required' => 'Lo scrittore è necessario',
        ];
    }
}
