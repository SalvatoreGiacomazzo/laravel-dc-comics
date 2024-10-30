<?php

namespace App\Http\Controllers;

use App\Models\Album;

use Illuminate\Http\Request;

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

    public function store(Request $request)
    {

        $albumData = $request->all();

        $newAlbum = new Album();
        $newAlbum->album_name = $albumData["album_name"];
        $newAlbum->band_name = $albumData["band_name"];
        $newAlbum->drop_year = $albumData["drop_year"];
        $newAlbum->genre = $albumData["genre"];
        $newAlbum->img_Url = $albumData["img_Url"];

        $newAlbum->save();


        return redirect()->route("pages.show", ["id" => $newAlbum->id]);
    }
}
