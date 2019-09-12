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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return view('index');
});

Route::get('/contato', function(){
    return view('contato');
});

route::get('/influenciadores', function(){
    return view('influenciadores');
});

Route::get('/marcas', function(){
    return view('marcas');
});

Route::get('/cadastrocliente', function(){
    return view('cadastroCliente');
});

Route::get('/cadastroinfluencer', function(){
    return view('cadastroInfluencer');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
