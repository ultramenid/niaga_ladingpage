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
    return view('pages.home', [
        'title' => 'Niagahoster - Landing page'
    ]);
});

Route::get('/backend', function () {
    return view('pages.backend', [
        'title' => 'Harga Paket - Landing page'
    ]);
});


