<?php

namespace App\Http\Controllers;

use App\Models\Album;

use Illuminate\Http\Request;
use App\Http\Requests\StoreAlbumRequest;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();
        return view('pages.albums', compact('albums'));
    }


    public function show($id)
    {
        $album = Album::findOrFail($id);
        return view('pages.show', compact('album'));
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(StoreAlbumRequest $request)
    {

        $validatedData = $request->validated();


        $newAlbum = new Album();
        $newAlbum->album_name = $validatedData["album_name"];
        $newAlbum->band_name = $validatedData["band_name"];
        $newAlbum->drop_year = $validatedData["drop_year"];
        $newAlbum->genre = $validatedData["genre"];
        $newAlbum->img_Url = $validatedData["img_Url"];


        $newAlbum->save();

        return redirect()->route("pages.albums");
    }


    public function edit(string $id)
    {
        $album = Album::findOrFail($id);

        return view('pages.edit', compact('album'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            "album_name" => "required|string|min:4|max:255",
            "band_name" => "required|string|min:3|max:255",
            "drop_year" => "required|numeric|min_digits:4|min:1900|max:2024",
            "genre" => "required|string|min:3|max:255",
            "img_Url" => "required|url"

        ]);



        $data = $request->all();

        $album = Album::findOrFail($id);
        $album->album_name = $data["album_name"];
        $album->band_name = $data["band_name"];
        $album->drop_year = $data["drop_year"];
        $album->genre = $data["genre"];
        $album->img_Url = $data["img_Url"];

        $album->save();
        return redirect()->route("pages.albums");
    }


    public function destroy(string $id)
    {

        $album = Album::findOrFail($id);
        $album->delete();
        return redirect()->route("pages.albums");
    }
}
