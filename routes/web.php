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
    return view('inicio');
})->name('inicio');

Route::get('/acerca', function () {
    return view('acerca');
})->name('acerca');

Route::get('/contacto', function () {
    return view('contacto');
})->name('contacto');

Route::get('/blogs' , function(){
    return view('blogs');
})->name('blogs');