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
    $sedi = [
        [
            "luogo" => "Agrigento",
            "indirizzo" => "Via Linosa, 34"
        ],
        [
            "luogo" => "Palermo",
            "indirizzo" => "Via Lipari, 109"
        ],
        [
            "luogo" => "Catania",
            "indirizzo" => "Via Favignana, 2"
        ],
    ];
    return view('pag-2', ["sedi" => $sedi]);
});

Route::get('/pag-3', function () {
    return view('pag-3');
});
