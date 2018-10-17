<?php



Route::get('/', ['uses' => 'Controller@login'])->name('login');

Route::post('/home', ['uses' => 'Controller@homepage'])->name('home');

Route::group(['prefix' => 'imovel'], function () {
    Route::get('/','ImovelController@buscar')->name('imovel.buscar');
    Route::get('/novo', 'ImovelController@cadastrar')->name('imovel.cadastrar');
});

Route::group(['prefix' => 'funcionario'], function () {
    Route::get('/','FuncionarioController@buscar')->name('funcionario.buscar');
    Route::get('/novo', 'FuncionarioController@cadastrar')->name('funcionario.cadastrar');
});

Route::group(['prefix' => 'cliente'], function () {
    Route::get('/','ClienteController@buscar')->name('cliente.buscar');
    Route::get('/novo', 'ClienteController@cadastrar')->name('cliente.cadastrar');
});