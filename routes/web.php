<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


// ------- ROTAS TABELIÕES --------------

Route::get('/tabelioes', 'TabeliaoController@index')
->name('tabelioes.index');

Route::get('/tabelioes/adicionar', 'TabeliaoController@adicionar')
->name('tabelioes.adicionar');

Route::post('/tabelioes/salvar', 'TabeliaoController@salvar')
->name('tabelioes.salvar');

Route::get('tabelios/editar/{id}', 'TabeliaoController@editar')
        ->name('tabelioes.editar');

Route::put('tabelioes/atualizar/{id}', 'TabeliaoController@atualizar')
        ->name('tabelioes.atualizar');


 Route::delete('tabelioes/deletar/{id}', 'TabeliaoController@deletar')
        ->name('tabelioes.deletar');


// -----------ROTAS CERTIDÕES--------------------

Route::get('/certidoes', 'CertidaoController@index')
->name('certidoes.index');

Route::get('/certidoes/adicionar', 'CertidaoController@adicionar')
->name('certidoes.adicionar');

Route::post('/certidoes/salvar', 'CertidaoController@salvar')
->name('certidoes.salvar');

Route::get('certidoes/editar/{id}', 'CertidaoController@editar')
        ->name('certidoes.editar');

Route::put('certidoes/atualizar/{id}', 'CertidaoController@atualizar')
        ->name('certidoes.atualizar');


 Route::delete('certidoes/deletar/{id}', 'CertidaoController@deletar')
        ->name('certidoes.deletar');

// -----------ROTAS CONTRATOS--------------------

Route::get('/contratos', 'ContratoController@index')
->name('contratos.index');

Route::get('/contratos/adicionar', 'ContratoController@adicionar')
->name('contratos.adicionar');

Route::post('/contratos/salvar', 'ContratoController@salvar')
->name('contratos.salvar');

Route::get('contratos/editar/{id}', 'ContratoController@editar')
        ->name('contratos.editar');

Route::put('contratos/atualizar/{id}', 'ContratoController@atualizar')
        ->name('contratos.atualizar');


 Route::delete('contratos/deletar/{id}', 'ContratoController@deletar')
        ->name('contratos.deletar');


