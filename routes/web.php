<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactoController;


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

Route::post('mail' , [contactoController::class, 'mail'] )->name('mail');