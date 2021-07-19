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
    $prenom = "Issam";
    $variable = 24;
    return view('issam', compact('prenom', 'variable'));
});
Route::get('/exo2', function () {
    $variable = 24;
    return view('pages.exo2', compact('variable'));
});
Route::get('/exo3', function () {
    $x = 24;
    $y = 10;
    return view('pages.exo3', compact('x', 'y'));
});


