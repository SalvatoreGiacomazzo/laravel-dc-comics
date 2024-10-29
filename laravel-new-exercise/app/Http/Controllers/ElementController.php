<?php

namespace App\Http\Controllers;

use App\Models\Element;

use Illuminate\Http\Request;

class ElementController extends Controller
{
    public function index()
    {
        $elements = Element::all();
        return view('pages.elements', compact('elements'));
    }


    public function show(Element $element)
    {
        return view('pages.show', compact('element'));
    }
}