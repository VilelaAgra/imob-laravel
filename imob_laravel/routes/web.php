<?php


/** LOGIN **/
Route::get('/', 'LoginController@login')->name('login');
Route::post('logar', 'LoginController@logar')->name('logar');
Route::get('logout', 'LoginController@logout')->name('logout');

Route::get('home', function () {
    return view ('home');
})->name('home');

//GRUPO DE ROTAS DE IMÓVEIS
Route::group(['prefix' => 'imovel'], function () {
    Route::get('/','ImovelController@buscar')->name('imovel.buscar');
    Route::get('/novo', 'ImovelController@cadastrar')->name('imovel.cadastrar');
});

//GRUPO DE ROTAS DE FUNCIONÁRIOS
Route::group(['prefix' => 'funcionario'], function () {
    Route::get('/','FuncionarioController@buscar')->name('funcionario.buscar');
    Route::get('/novo', 'FuncionarioController@cadastrar')->name('funcionario.cadastrar');
});


//GRUPO DE ROTAS DE CLIENTES
Route::group(['prefix' => 'cliente'], function () {
    Route::get('/','ClienteController@buscar')->name('cliente.buscar');
    Route::get('/novo', 'ClienteController@cadastrar')->name('cliente.cadastrar');
});