<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UsuarioController;
use App\Http\Controllers\Api\ConfirmacaoController;

Route::group(['middleware' => ['auth:api']], function () {

    // teste
    Route::prefix('unidade')->group(function () {
        Route::get('/', 'UnidadeController@index');
        Route::get('show/{id}', 'UnidadeController@show');
        Route::get('check_slug/{restaurante}/{slug}', 'UnidadeController@checkSlug');
        Route::post('create', 'UnidadeController@create');
        Route::put('update/{id}', 'UnidadeController@update');
        Route::delete('destroy/{id}', 'UnidadeController@destroy');

        Route::prefix('endereco')->group(function () {
            Route::get('/', 'EnderecoUnidadeController@index');
            Route::get('show/{id}', 'EnderecoUnidadeController@show');
            Route::post('create', 'EnderecoUnidadeController@create');
            Route::put('update/{id}', 'EnderecoUnidadeController@update');
            Route::delete('destroy/{id}', 'EnderecoUnidadeController@destroy');
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
    });


    Route::prefix('categoria')->group(function () {
        Route::get('/', 'CategoriaController@index');
        Route::get('show/{id}', 'CategoriaController@show');
        Route::post('create', 'CategoriaController@create');
        Route::put('update/{id}', 'CategoriaController@update');
        Route::delete('destroy/{id}', 'CategoriaController@destroy');
    });

    Route::prefix("uploadfile")->group(function () {
        Route::get("/", "UploadFileController@index");
        Route::get("show/{id}", "UploadFileController@show");
        Route::post("create", "UploadFileController@create");
        Route::put("update/{id}", "UploadFileController@update");
        Route::delete("destroy/{id}", "UploadFileController@destroy");
    });


    Route::prefix("categoriacardapio")->group(function () {
        Route::get("/", "CategoriaCardapioController@index");
        Route::get("show/{id}", "CategoriaCardapioController@show");
        Route::post("create", "CategoriaCardapioController@create");
        Route::put("update/{id}", "CategoriaCardapioController@update");
        Route::delete("destroy/{id}", "CategoriaCardapioController@destroy");
    });


    Route::prefix("categoriamenu")->group(function () {
        Route::get("/", "CategoriaMenuController@index");
        Route::get("show/{id}", "CategoriaMenuController@show");
        Route::post("create", "CategoriaMenuController@create");
        Route::put("update/{id}", "CategoriaMenuController@update");
        Route::delete("destroy/{id}", "CategoriaMenuController@destroy");
    });


    Route::prefix("cupomdesconto")->group(function () {
        Route::get("/", "CupomDescontoController@index");
        Route::get("show/{id}", "CupomDescontoController@show");
        Route::post("create", "CupomDescontoController@create");
        Route::put("update/{id}", "CupomDescontoController@update");
        Route::delete("destroy/{id}", "CupomDescontoController@destroy");
    });


    Route::prefix("cupomdesconto")->group(function () {
        Route::get("/", "CupomDescontoController@index");
        Route::get("show/{id}", "CupomDescontoController@show");
        Route::post("create", "CupomDescontoController@create");
        Route::put("update/{id}", "CupomDescontoController@update");
        Route::delete("destroy/{id}", "CupomDescontoController@destroy");
    });

    Route::prefix("endereco_restaurante")->group(function () {
        Route::get("/", "EnderecoUnidadeController@index");
        Route::get("show/{id}", "EnderecoUnidadeController@show");
        Route::post("create", "EnderecoUnidadeController@create");
        Route::put("update/{id}", "EnderecoUnidadeController@update");
        Route::delete("destroy/{id}", "EnderecoUnidadeController@destroy");
    });

    Route::prefix("horario_funcionamento")->group(function () {
        Route::get("/", "HorarioFuncionamentoController@index");
        Route::get("show/{id}", "HorarioFuncionamentoController@show");
        Route::post("create", "HorarioFuncionamentoController@create");
        Route::put("update/{id}", "HorarioFuncionamentoController@update");
        Route::delete("destroy/{id}", "HorarioFuncionamentoController@destroy");
    });

    Route::prefix("produto")->group(function () {
        Route::get("/", "ProdutoController@index");
        Route::get("show/{id}", "ProdutoController@show");
        Route::post("create", "ProdutoController@create");
        Route::put("update/{id}", "ProdutoController@update");
        Route::delete("destroy/{id}", "ProdutoController@destroy");
    });

    Route::prefix("adicional")->group(function () {
        Route::get("/", "AdicionalController@index");
        Route::get("show/{id}", "AdicionalController@show");
        Route::post("create", "AdicionalController@create");
        Route::put("update/{id}", "AdicionalController@update");
        Route::delete("destroy/{id}", "AdicionalController@destroy");
    });

    Route::prefix("restaurante")->group(function () {
        Route::get("/", "RestauranteController@index");
        Route::get("show/{id}", "RestauranteController@show");
        Route::get("check_slug/{slug}", "RestauranteController@checkSlug");
        Route::post("create", "RestauranteController@create");
        Route::put("update/{id}", "RestauranteController@update");
        Route::delete("destroy/{id}", "RestauranteController@destroy");
    });

    Route::prefix("endereco_entrega")->group(function () {
        Route::get("/", "EnderecoEntregaController@index");
        Route::get("enderecos_entrega_usuario", "EnderecoEntregaController@getEnderecosEntregaAuthUser");
        Route::get("show/{id}", "EnderecoEntregaController@show");
        Route::post("create", "EnderecoEntregaController@create");
        Route::put("update/{id}", "EnderecoEntregaController@update");
        Route::delete("destroy/{id}", "EnderecoEntregaController@destroy");
    });

    Route::prefix("opcao")->group(function () {
        Route::get("/", "OpcaoController@index");
        Route::get("show/{id}", "OpcaoController@show");
        Route::post("create", "OpcaoController@create");
        Route::put("update/{id}", "OpcaoController@update");
        Route::delete("destroy/{id}", "OpcaoController@destroy");
    });

    Route::prefix("adicionais")->group(function () {
        Route::get("/", "AdicionaisController@index");
        Route::get("show/{id}", "AdicionaisController@show");
        Route::post("create", "AdicionaisController@create");
        Route::put("update/{id}", "AdicionaisController@update");
        Route::delete("destroy/{id}", "AdicionaisController@destroy");
    });


    Route::prefix("usuario")->group(function () {
        Route::get("/meus_restaurantes", "UsuarioController@meusRestaurantes");
    });

    Route::prefix("pedido")->group(function () {
        Route::get("/", "PedidoController@index");
        Route::get("show/{id}", "PedidoController@show");
        Route::post("create", "PedidoController@create");
        Route::put("update/{id}", "PedidoController@update");
        Route::delete("destroy/{id}", "PedidoController@destroy");
    });

    Route::prefix("produto_pedido")->group(function () {
        Route::get("/", "ProdutoPedidoController@index");
        Route::get("show/{id}", "ProdutoPedidoController@show");
        Route::post("create", "ProdutoPedidoController@create");
        Route::put("update/{id}", "ProdutoPedidoController@update");
        Route::delete("destroy/{id}", "ProdutoPedidoController@destroy");
    });

    Route::prefix("pedido_adicional")->group(function () {
        Route::get("/", "PedidoAdicionalController@index");
        Route::get("show/{id}", "PedidoAdicionalController@show");
        Route::post("create", "PedidoAdicionalController@create");
        Route::put("update/{id}", "PedidoAdicionalController@update");
        Route::delete("destroy/{id}", "PedidoAdicionalController@destroy");
    });

    Route::prefix("pedido_adicional_opcao")->group(function () {
        Route::get("/", "PedidoAdicionalOpcaoController@index");
        Route::get("show/{id}", "PedidoAdicionalOpcaoController@show");
        Route::post("create", "PedidoAdicionalOpcaoController@create");
        Route::put("update/{id}", "PedidoAdicionalOpcaoController@update");
        Route::delete("destroy/{id}", "PedidoAdicionalOpcaoController@destroy");
    });

    Route::prefix("pergunta")->group(function () {
        Route::get("/", "PerguntaController@index");
        Route::get("show/{id}", "PerguntaController@show");
        Route::post("create", "PerguntaController@create");
        Route::put("update/{id}", "PerguntaController@update");
        Route::delete("destroy/{id}", "PerguntaController@destroy");
    });

    Route::prefix("pesquisa")->group(function() {
        Route::post("/criar_pesquisa", "PesquisaSatisfacaoController@criarPesquisa");
    });

    Route::prefix("pedido")->group(function () {
        Route::post("/fazer_pedido", "PedidoController@fazerPedido");
        Route::get("/index", "PedidoController@index");
        Route::put("/update_status_pedido/{id}", "PedidoController@updateStatusPedido");
        Route::get("/show/{id}", "PedidoController@show");
    });

    Route::prefix("extrato")->group(function () {
        Route::get("/", "ExtratoController@getData");
    });

    Route::prefix("entregador")->group(function () {
        Route::get("/", "EntregadorController@index");
        Route::get("show/{id}", "EntregadorController@show");
        Route::post("create", "EntregadorController@create");
        Route::put("update/{id}", "EntregadorController@update");
        Route::delete("destroy/{id}", "EntregadorController@destroy");
    });

    Route::prefix("dados_empresa")->group(function () {
        Route::get("/", "DadosEmpresaController@index");
        Route::get("show/{id}", "DadosEmpresaController@show");
        Route::post("create", "DadosEmpresaController@create");
        Route::put("update/{id}", "DadosEmpresaController@update");
        Route::delete("destroy/{id}", "DadosEmpresaController@destroy");
    });

    Route::prefix("config_entrega")->group(function () {
        Route::get("/", "ConfigEntregaController@index");
        Route::get("show/{id}", "ConfigEntregaController@show");
        Route::post("create", "ConfigEntregaController@create");
        Route::put("update/{id}", "ConfigEntregaController@update");
        Route::delete("destroy/{id}", "ConfigEntregaController@destroy");
    });

    Route::prefix("area_entrega")->group(function () {
        Route::get("/", "AreaEntregaController@index");
        Route::get("show/{id}", "AreaEntregaController@show");
        Route::post("create", "AreaEntregaController@create");
        Route::put("update/{id}", "AreaEntregaController@update");
        Route::delete("destroy/{id}", "AreaEntregaController@destroy");
    });

    Route::prefix("cupom_desconto")->group(function () {
        Route::get("/", "CupomDescontoController@index");
        Route::get("show/{id}", "CupomDescontoController@show");
        Route::post("create", "CupomDescontoController@create");
        Route::put("update/{id}", "CupomDescontoController@update");
        Route::delete("destroy/{id}", "CupomDescontoController@destroy");
    });


    Route::prefix("dias_semana")->group(function () {
        Route::get("/", "DiasSemanaHorarioDeliveryController@index");
        Route::get("show/{id}", "DiasSemanaHorarioDeliveryController@show");
        Route::post("create", "DiasSemanaHorarioDeliveryController@create");
        Route::put("update/{id}", "DiasSemanaHorarioDeliveryController@update");
        Route::delete("destroy/{id}", "DiasSemanaHorarioDeliveryController@destroy");
    });

    Route::prefix("periodo")->group(function () {
        Route::get("/", "PeriodoController@index");
        Route::get("show/{id}", "PeriodoController@show");
        Route::post("create", "PeriodoController@create");
        Route::put("update/{id}", "PeriodoController@update");
        Route::delete("destroy/{id}", "PeriodoController@destroy");
    });

    Route::prefix("fuso_horario")->group(function () {
        Route::get("/", "FusoHorarioController@index");
        Route::get("show/{id}", "FusoHorarioController@show");
        Route::post("create", "FusoHorarioController@create");
        Route::put("update/{id}", "FusoHorarioController@update");
        Route::delete("destroy/{id}", "FusoHorarioController@destroy");
    });

    Route::prefix("horario_funcionamento_delivery")->group(function () {
        Route::get("/", "HorarioFuncionamentoDeliveryController@index");
        Route::get("show/{id}", "HorarioFuncionamentoDeliveryController@show");
        Route::post("create", "HorarioFuncionamentoDeliveryController@create");
        Route::put("update/{id}", "HorarioFuncionamentoDeliveryController@update");
        Route::delete("destroy/{id}", "HorarioFuncionamentoDeliveryController@destroy");
    });

    Route::prefix("estatistica")->group(function () {
        Route::get("/receita_dia", "EstatisticaController@receitaDia");
        Route::get("/num_pedidos_dia", "EstatisticaController@pedidosPorDia");
    });

    Route::prefix("pagamento_unidade")->group(function () {
        Route::post("/associar", "PagamentoUnidadeController@associar");
        Route::post("/desassociar", "PagamentoUnidadeController@desassociar");
    });
});

Route::get("/{apelido}", "UnidadeRestauranteController@byApelido");
Route::get("/{apelido}/{cidade}", "UnidadeRestauranteController@byApelidoCidade");

Route::post("register", "AuthController@register");
Route::post("login", "AuthController@login");
