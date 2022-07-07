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
    return view('home');
});

Route::get('/pag-1', function () {
    $data = [
        [
            "nome" => "Samuele",
            "cognome" => "Madrigali"
        ],
        [
            "nome" => "Pippo",
            "cognome" => "Neri"
        ],
        [
            "nome" => "Franco",
            "cognome" => "Bianchi"
        ],
        ];
    return view('pag-1', ["team" => $data]);
});

Route::get('/pag-2', function () {
    return view('pag-2');
});

Route::get('/pag-3', function () {
    return view('pag-3');
});
