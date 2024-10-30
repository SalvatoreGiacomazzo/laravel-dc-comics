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
}
