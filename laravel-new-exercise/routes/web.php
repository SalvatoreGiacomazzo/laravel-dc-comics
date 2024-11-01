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


Route::get('/albums', [AlbumController::class, "index"])->name('pages.albums');
Route::get('/albums/create', [AlbumController::class, "create"])->name('pages.create');
Route::get('/show/{id}', [AlbumController::class, "show"])->name('pages.show');
Route::post('/albums', [AlbumController::class, "store"])->name('album.store');


Route::get('/albums/{id}/edit', [AlbumController::class, 'edit'])->name('edit');
Route::put('/albums/{id}/', [AlbumController::class, 'update'])->name('update');
