<?php

use App\Http\Controllers\AlbumController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/homepage', function () {
    return view('pages.homepage');
});


Route::get('/albums', [AlbumController::class, 'index'])->name('pages.albums');
Route::get('/show/{id}', [AlbumController::class, 'show'])->name('pages.show');
