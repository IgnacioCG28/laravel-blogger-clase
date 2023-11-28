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

Route::get('/', function () {
    return view('welcome');
});

//  El ('/ayuda') es la url que hay que poner, si pones "pepe", funcionaria pero tienes que buscar pagina con "/pepe"

Route ::get('/ayuda', function () {
    return view('ayuda');
});
