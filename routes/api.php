<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsuarioController;
use App\Http\Controllers\Api\ConfirmacaoController;

Route::group(['middleware' => ['auth:api']], function () {
});
Route::prefix('restaurante')->group(function () {
    Route::get('/', 'RestauranteController@index');
    Route::get('show/{id}', 'RestauranteController@show');
    Route::post('create', 'RestauranteController@create');
    Route::put('update/{id}', 'RestauranteController@update');
    Route::delete('destroy/{id}', 'RestauranteController@destroy');

    Route::prefix('endereco')->group(function () {
        Route::get('/', 'EnderecoRestauranteController@index');
        Route::get('show/{id}', 'EnderecoRestauranteController@show');
        Route::post('create', 'EnderecoRestauranteController@create');
        Route::put('update/{id}', 'EnderecoRestauranteController@update');
        Route::delete('destroy/{id}', 'EnderecoRestauranteController@destroy');
    });

    Route::prefix('tempo_espera_entrega')->group(function () {
        Route::get('/', 'TempoEsperaEntregaController@index');
        Route::get('show/{id}', 'TempoEsperaEntregaController@show');
        Route::post('create', 'TempoEsperaEntregaController@create');
        Route::put('update/{id}', 'TempoEsperaEntregaController@update');
        Route::delete('destroy/{id}', 'TempoEsperaEntregaController@destroy');
    });

    Route::prefix('horario_funcionamento')->group(function () {
        Route::get('/', 'HorarioFuncionamentoController@index');
        Route::get('show/{id}', 'HorarioFuncionamentoController@show');
        Route::post('create', 'HorarioFuncionamentoController@create');
        Route::put('update/{id}', 'HorarioFuncionamentoController@update');
        Route::delete('destroy/{id}', 'HorarioFuncionamentoController@destroy');
    });

    Route::prefix('sobre_nos')->group(function () {
        Route::get('/', 'SobreNosController@index');
        Route::get('show/{id}', 'SobreNosController@show');
        Route::post('create', 'SobreNosController@create');
        Route::put('update/{id}', 'SobreNosController@update');
        Route::delete('destroy/{id}', 'SobreNosController@destroy');
    });
});

Route::prefix('forma_pagamento')->group(function () {
    Route::get('/', 'FormaPagamentoController@index');
    Route::get('show/{id}', 'FormaPagamentoController@show');
    Route::post('create', 'FormaPagamentoController@create');
    Route::put('update/{id}', 'FormaPagamentoController@update');
    Route::delete('destroy/{id}', 'FormaPagamentoController@destroy');
});

Route::prefix('produto')->group(function () {
    Route::get('/', 'FormaPagamentoController@index');
    Route::get('show/{id}', 'FormaPagamentoController@show');
    Route::post('create', 'FormaPagamentoController@create');
    Route::put('update/{id}', 'FormaPagamentoController@update');
    Route::delete('destroy/{id}', 'FormaPagamentoController@destroy');

    Route::prefix('categoria')->group(function () {
        Route::get('/', 'CategoriaController@index');
        Route::get('show/{id}', 'CategoriaController@show');
        Route::post('create', 'CategoriaController@create');
        Route::put('update/{id}', 'CategoriaController@update');
        Route::delete('destroy/{id}', 'CategoriaController@destroy');
    });

    Route::prefix('opcao_porcao')->group(function () {
        Route::get('/', 'OpcaoPorcaoController@index');
        Route::get('show/{id}', 'OpcaoPorcaoController@show');
        Route::post('create', 'OpcaoPorcaoController@create');
        Route::put('update/{id}', 'OpcaoPorcaoController@update');
        Route::delete('destroy/{id}', 'OpcaoPorcaoController@destroy');
    });
});