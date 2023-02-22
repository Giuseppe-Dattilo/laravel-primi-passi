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
    $links = ['home', 'contatti', 'chi siamo'];
    $name = 'home';

    return view('home', compact('name', 'links'));
})->name('home');


Route::get('/contatti/{index}', function ($index) {
    $links = ['home', 'contatti', 'chi siamo'];
    $name = $links[$index];

    return view('home', compact('name', 'links'));
})->name('contatti');


Route::get('/chi-siamo/{index}', function ($index) {
    
    $links = ['home', 'contatti', 'chi siamo'];
    $name = $links[$index];

    return view('home', compact('name', 'links'));
})->name('chi siamo');
