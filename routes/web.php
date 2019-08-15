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


Route::get('/', 'HomeController@index'); //ruta a la página principal

Route::get('/productos', 'ProductsController@index'); //ruta a la página de productos

Route::get('/detalles', 'ProductsController@show'); //ruta a los detalles de un producto

Route::get('/faq', 'HomeController@showFaq'); //ruta a las preguntas frecuentes

Route::get('/contacto', 'HomeController@showContact'); //ruta a la página de contacto

Route::get('/carrito', 'CartsController@index'); //ruta al carrito

Route::get('/perfil', 'UsersController@index'); //ruta al perfil del usuario

Route::get('/registro', 'UsersController@showRegister'); //ruta GET al formulario de registro

Route::post('/registro', 'UsersController@createUser'); //ruta POST al formulario de registro

Route::get('/login', 'UserController@showLogin'); // ruta GET al formulario de login

Route::post('/login', 'UserController@login'); //ruta POST al formulario de login
