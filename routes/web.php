<?php

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

Route::get('/app', function () {
    $title = "boolean laravel-10-template";
    $listLinks = config('db.listLinks');
    $footerListLinks = config('db.footerListLinks');


    return view('layouts.app', compact("title", "listLinks", "footerListLinks"));
})->name("route-layoutsApp");



Route::get('/comics', function () {
    $comicsList = config('db.comicsList');

    return view('comics.index', compact("comicsList"));
})->name("route-comicsIndex");

Route::get('/comics/{index}', function (string $index) {
    $comicsList = config('db.comicsList');
    // dd($index);

    if (isset($comicsList[$index])) {
        $comic = $comicsList[$index];
        // dd($comic);
        return view('comics.show', compact("comic"));
    } else {
        abort(404);
    }
})->name("route-comicShow");
