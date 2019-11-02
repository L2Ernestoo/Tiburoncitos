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

Auth::routes();
Route::get('/home', 'HomeController@home')->name('home');

//Equipo
Route::get('/equipo', 'HomeController@equipo')->name('equipo');

//Navios
Route::get('/navios', 'HomeController@navios')->name('navios');

//Pagina de inicio
Route::get('/', 'HomeController@index')->name('inicio');

//Destinos
Route::get('/destinos', 'destinoController@index')->name('destinos');
Route::post('/crear_destino', 'destinoController@crear')->name('crear_destino');
Route::get('/eliminar_destino/{id}', 'destinoController@eliminar')->name('eliminar_destino');

//Origenes
Route::get('/origenes', 'origenController@index')->name('origenes');
Route::post('/crear_origen', 'origenController@crear')->name('crear_origen');
Route::get('/eliminar_origen/{id}', 'origenController@eliminar')->name('eliminar_origen');

//Rutas (Viajes Disponibles)
Route::get('/viajes', 'rutaController@index')->name('rutas');
Route::post('/crear_viaje', 'rutaController@crear')->name('crear_viaje');
Route::get('/eliminar_viaje/{id}', 'rutaController@eliminar')->name('eliminar_viaje');

//Reservar
Route::post('/reservar/', 'rutaController@reservar')->name('reservar_viaje');

//Mis Viajes

Route::get('/mis_viajes', 'rutaController@mis_viajes')->name('mis_viajes');