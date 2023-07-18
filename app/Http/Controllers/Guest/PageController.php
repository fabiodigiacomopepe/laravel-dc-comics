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

        $data = $request -> all();

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

        $data = $request -> all();

        $comic = Comic :: findOrFail($id);

        $comic -> update($data);

        return redirect() -> route("comic.show", $comic -> id);
    }
}
