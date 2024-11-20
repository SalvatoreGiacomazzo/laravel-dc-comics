<?php

namespace App\Http\Controllers\api;

use App\Models\Album;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AlbumController extends Controller
{
    public function index()
    {
        $albums = Album::all();


        return response()->json([

            "success" => true,
            "data" => $albums,
        ]);
    }
}