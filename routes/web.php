<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //punto direttamente dentro la cartella views

    $data = [
        'name' => 'Ciccio',
        'surname' => 'Cantisani',
    ];

    // dump($data);
    // dd($data);

    return view('home', $data);
})->name('home');

Route::get('/blog', function () {
    return view('articles.blog');
})->name('articolo');

Route::get('/students', function () {
    $data = [
        'lista_studenti' => [
            'Pasquale Raso',
            'Michele Carbone',
            'Alessandro Faggiano',
            'Giuseppe Pisani'
        ]
    ];

    return view('students', $data);
})->name('students');
