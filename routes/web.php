<?php

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
    return view('welcome');
});
Route::get('/saludo', function () {
  $nombre = "dw32";
    return view('saludo',['nombre' => $nombre]);
    // return view('saludo');
})->name('saludo');
Route::get('/home', function () {
    return view('home');
});
