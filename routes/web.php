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

Route::get('/cadastro/marca', function(){
    return view('cadastroMarca');
});

Route::get('/cadastro/influencer', function(){
    return view('cadastroInfluencer');
});

// Adicionar campanha
Route::get('/campanha/adicionar', 'CampanhaController@adicionandoCampanha')->name('campanha-adicionar');
Route::post('/campanha/adicionar', 'CampanhaController@salvandoCampanha');


Auth::routes();

// Rotas que apenas usuários logados acessam
Route::middleware(['auth'])->group(function (){
    Route::get('/home', 'HomeController@index')->name('home');
});