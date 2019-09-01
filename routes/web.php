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

Route::post('/productos', 'ProductsController@index'); //ruta a la página de productos via POST

Route::get('/detalles/{id}', 'ProductsController@show'); //ruta a los detalles de un producto

Route::post('/detalles/{id}', 'ProductsController@addToCart'); //ruta POST a agregar al carrito 

Route::get('/faq', 'SiteController@showFaq'); //ruta a las preguntas frecuentes

Route::get('/contacto', 'SiteController@showContact'); //ruta a la página de contacto

Route::get('/agregar', 'ProductsController@addProduct'); //ruta GET a la página de agregar producto

Route::post('/agregar', 'ProductsController@store'); //ruta POST a la página de agregar producto

Route::get('/eliminar', 'ProductsController@deleteProduct'); //ruta GET a la página de eliminar producto

Route::post('/eliminar', 'ProductsController@destroy'); //ruta POST a la página de eliminar producto

Route::get('/modificar/{id}', 'ProductsController@edit'); //ruta GET a la página de modificar producto

Route::post('/modificar/{id}', 'ProductsController@update'); //ruta POST a la página de modificar producto

Route::get('/carrito', 'CartsController@index'); //ruta al carrito

Route::get('/perfil/{user}', 'UsersController@show'); //->middleware('auth'); //ruta al perfil del usuario

Route::get('/registro', 'Auth\RegisterController@showRegistrationForm'); //ruta GET al formulario de registro

Route::get('/login', 'Auth\LoginController@showRegistrationForm'); //ruta GET al formulario de login

/* Route::post('/registro', 'UsersController@createUser'); //ruta POST al formulario de registro

Route::get('/login', 'UsersController@showLogin'); // ruta GET al formulario de login

Route::post('/login', 'UsersController@login'); //ruta POST al formulario de login */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
