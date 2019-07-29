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
    return view('inicio');
});

Route::get('/productos', function () {
    return view('productos');
});

Route::get('/detalles', function () {
    return view('detalles');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/contacto', function () {
    return view('contacto');
});

Route::get('/carrito', function () {
    return view('carrito');
});

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/registro', function () {
    return view('perfil');
});

Route::get('/login', function () {
    return view('perfil');
});
