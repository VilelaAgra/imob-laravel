<?php


/** LOGIN **/
Route::get('/', 'LoginController@login')->name('login');
Route::post('logar', 'LoginController@logar')->name('logar');
Route::get('logout', 'LoginController@logout')->name('logout');


// AJEITAR O MIDDLEWARE EM HOME
Route::get('home', function () {return view ('home');})->name('home');


//GRUPO DE ROTAS DE IMÓVEIS
Route::group(['prefix' => 'imovel', 'middleware' => ['login']], function () {
    Route::get('/','ImovelController@buscar')->name('imovel.buscar');
    Route::get('/novo', 'ImovelController@cadastrar')->name('imovel.cadastrar');
    Route::post('/salvar', 'ImovelController@salvar')->name('imovel.salvar');
    Route::get('/editar-imovel/{id}', 'ImovelController@editar')->name('imovel.editar');
    Route::post('/atualizar/{id}', 'ImovelController@atualizar')->name('imovel.atualizar');
    Route::get('/listar-imovel', 'ImovelController@buscar')->name('imovel.buscar');
    Route::get('/excluir/{id}', 'ImovelController@excluir')->name('imovel.excluir');
});

//GRUPO DE ROTAS DE FUNCIONÁRIOS
Route::group(['prefix' => 'funcionario', 'middleware' => ['login']], function () {
    Route::get('/','FuncionarioController@buscar')->name('funcionario.buscar');
    Route::get('/novo', 'FuncionarioController@cadastrar')->name('funcionario.cadastrar');
    Route::post('/salvar', 'FuncionarioController@salvar')->name('funcionario.salvar');
    Route::get('/editar-funcionario/{id}', 'FuncionarioController@editar')->name('funcionario.editar');
    Route::post('/atualizar/{id}', 'FuncionarioController@atualizar')->name('funcionario.atualizar');
    Route::get('/listar-funcionario', 'FuncionarioController@buscar')->name('funcionario.buscar');
    Route::get('/excluir/{id}', 'FuncionarioController@excluir')->name('funcionario.excluir');
});


//GRUPO DE ROTAS DE CLIENTES
Route::group(['prefix' => 'cliente', 'middleware' => ['login']], function () {
    Route::get('/','ClienteController@buscar')->name('cliente.buscar');
    Route::get('/novo', 'ClienteController@cadastrar')->name('cliente.cadastrar');
    Route::post('/salvar', 'ClienteController@salvar')->name('cliente.salvar');
    Route::get('/editar-cliente/{id}', 'ClienteController@editar')->name('cliente.editar');
    Route::post('/atualizar/{id}', 'ClienteController@atualizar')->name('cliente.atualizar');
    Route::get('/listar-cliente', 'ClienteController@buscar')->name('cliente.buscar');
    Route::get('/excluir/{id}', 'ClienteController@excluir')->name('cliente.excluir');
});

//GRUPO DE ROTAS DE PROPOSTA E VENDA
// Route::group(['prefix' => 'proposta', 'middleware' => ['login']], function () {
//     Route::get('/novo','PropostaController@buscarImovel')->name('proposta.buscarImovel');
//     Route::get('/selecionar-imovel/{id}', 'PropostaController@selecionarImovel')->name('proposta.selecionarImovel');
//     Route::get('/editar-cliente/{id}', 'PropostaController@editar')->name('proposta.editar');
    

//     Route::post('/salvar', 'PropostaController@salvar')->name('proposta.salvar');

// });