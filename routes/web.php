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


Route::get('/', 'SiteController@index'); //ruta a la página principal

Route::get('/productos', 'ProductsController@index'); //ruta a la página de productos

Route::get('/detalles/{id}', 'ProductsController@show'); //ruta a los detalles de un producto

Route::get('/faq', 'SiteController@showFaq'); //ruta a las preguntas frecuentes

Route::get('/contacto', 'SiteController@showContact'); //ruta a la página de contacto

Route::get('/carrito', 'CartsController@index'); //ruta al carrito

Route::get('/perfil', 'UsersController@index')->middleware('auth'); //ruta al perfil del usuario

Route::get('/registro', 'Auth\RegisterController@showRegistrationForm'); //ruta GET al formulario de registro

Route::get('/login', 'Auth\LoginController@showRegistrationForm'); //ruta GET al formulario de login

/* Route::post('/registro', 'UsersController@createUser'); //ruta POST al formulario de registro

Route::get('/login', 'UsersController@showLogin'); // ruta GET al formulario de login

Route::post('/login', 'UsersController@login'); //ruta POST al formulario de login */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
