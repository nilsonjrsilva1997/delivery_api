<?php

/*
|--------------------------------------------------------------------------
| Load The Cached Routes
|--------------------------------------------------------------------------
|
| Here we will decode and unserialize the RouteCollection instance that
| holds all of the route information for an application. This allows
| us to instantaneously load the entire route map into the router.
|
*/

app('router')->setCompiledRoutes(
    array (
  'compiled' => 
  array (
    0 => false,
    1 => 
    array (
      '/oauth/authorize' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.authorize',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.approve',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        2 => 
        array (
          0 => 
          array (
            '_route' => 'passport.authorizations.deny',
          ),
          1 => NULL,
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/token/refresh' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.token.refresh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/clients' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/scopes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.scopes.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/oauth/personal-access-tokens' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.index',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.store',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/endereco' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2xGV8eLn2eHqRog1',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/endereco/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GwTvOGeTXgvu65SS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/usuario_unidade/associar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ewW4ICyfpxkSjWqM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/forma_pagamento' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MTsHtAjax00RfBOD',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/forma_pagamento/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QEPVwbNX6fX38y4z',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/produto' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7jmY8Ce7lfVKI3sI',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/produto/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WlVwOjkIxBFGeHu6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/categoria' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aeKZbFSUQ1UrSlOW',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/categoria/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ATuT4ztZpiSBXyQk',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/categoriacardapio' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8TvG7OWA9fdThvz9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/categoriacardapio/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kUO1UMhLK2i9IRG9',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/categoriamenu' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SBPhY4guHMEAADA5',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/categoriamenu/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GQQVjhutZz86HA2y',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cupomdesconto' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Dg5ev92gixcsFLKm',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cupomdesconto/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uGi14ykfIDUDLmzF',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/endereco_restaurante' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6A6wE5n8nTnBrvZF',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/endereco_restaurante/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::syjCb03CbKqD7JWa',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/horario_funcionamento' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3PQcqSFTvxTXuSVh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/horario_funcionamento/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AUh9WU6OQXH5Qznx',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/adicional' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qcYb0106LgA1AEU6',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/adicional/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XgJy01bpXFELBoTV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/restaurante' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::meQQuirHlLfCaWKi',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/restaurante/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::29OHtuNRR2rTCtiS',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/unidade' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DsrpA97MpoWwy6IJ',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/unidade/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gebVVM5XPbQOCL87',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/unidade/pedido/fazer_pedido' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::okX69eyNpEbIGpke',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/unidade/pedido/index' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bSKyYbs6nR6CCb6W',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/unidade/extrato' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bZM2cOigDXxncg1l',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/unidade/tempo_espera_entrega' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qjCi5B4IJAiAWbjz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/unidade/tempo_espera_entrega/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rOSiKdXCOswcBi0X',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/unidade/horario_funcionamento' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J5fribUZHCSMkVoB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/unidade/horario_funcionamento/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YCBbIV0kxPLXnjiA',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/unidade/sobre_nos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FYeRHJ4TxBpIaDhk',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/unidade/sobre_nos/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3BNAI58j2WEzHkZV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/endereco_entrega' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XONlv8JApQkwV6dw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/endereco_entrega/enderecos_entrega_usuario' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gSrwGbLTEwtjk4kh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/endereco_entrega/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lWexGE6zo6NuhBVV',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/opcao' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lngB0GyW03XEpKzd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/opcao/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ny5pIcZeqZIYVSyK',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/adicionais' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OzwXru3ouGKIIdAt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/adicionais/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TZzlXDNIRpTn6Hbh',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/usuario/meus_restaurantes' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::f3pdf7yV49XSsdgt',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/produto_pedido' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::noLhdkcnSQoxp1Zs',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/produto_pedido/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CXDUlZIqYHZ8FX59',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pedido_adicional' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4Z4Tqhmh9ipQTbfE',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pedido_adicional/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HgxcbBE2f1uOwCnv',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pedido_adicional_opcao' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GYrrB41h1e7yyVNz',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pedido_adicional_opcao/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QfuJbBRnGDC1V2XM',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pergunta' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nfNEWKxQ5wwjxvcd',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pergunta/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VZ9xzLDQnAoqt995',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/entregador' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bFuP504dawqZVXsw',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/entregador/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4erNpW8o7tBzMBFL',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dados_empresa' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::G60o6nhd6BjMojYB',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dados_empresa/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kY31lCpmk1c60MVw',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/config_entrega' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::naGJ2i3vdnMJ0v9Q',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/config_entrega/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FTjawhoOadSlt4SP',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/permissao' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ygznsYtfQdJcprYh',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/permissao/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uUmyGK9PzNLXv9hf',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/area_entrega' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Z8QQcUxsvXviIGDY',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/area_entrega/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::K5eM0TVNZsfynty6',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cupom_desconto' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yGNeSwHxVk2cxaaK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/cupom_desconto/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W0p1MErHJieaxvyn',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dias_semana' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EAUifyfnn8BXVhlK',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/dias_semana/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::POrdNEfB7dUW4Hfs',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/periodo' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Of8kDDWHTcjfyi3q',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/periodo/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FbxzFA2O6tue4Qy1',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/fuso_horario' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Xgu2W7sUrMl7LbW9',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/fuso_horario/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hTG35Lu6k3uA7Q6m',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/horario_funcionamento_delivery' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1kzo688bhQN9YK6i',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/horario_funcionamento_delivery/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9fC24NuJYiJgCsO7',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/estatistica/receita_dia' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::li090CvDcgp1AAnT',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/estatistica/num_pedidos_dia' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h5kzTIxPPydTxorM',
          ),
          1 => NULL,
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pagamento_unidade/associar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4lDh5LMKk26ZURO2',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/pagamento_unidade/desassociar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wsBcoDBVucp64Rzq',
          ),
          1 => NULL,
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
    ),
    2 => 
    array (
      0 => '{^(?|/oauth/(?|tokens/([^/]++)(*:32)|clients/([^/]++)(?|(*:58))|personal\\-access\\-tokens/([^/]++)(*:99))|/api/(?|en(?|dereco(?|/(?|show/([^/]++)(*:146)|update/([^/]++)(*:169)|destroy/([^/]++)(*:193))|_(?|restaurante/(?|show/([^/]++)(*:234)|update/([^/]++)(*:257)|destroy/([^/]++)(*:281))|entrega/(?|show/([^/]++)(*:314)|update/([^/]++)(*:337)|destroy/([^/]++)(*:361))))|tregador/(?|show/([^/]++)(*:397)|update/([^/]++)(*:420)|destroy/([^/]++)(*:444)))|u(?|suario_unidade/desassociar/([^/]++)/([^/]++)(*:502)|nidade/(?|s(?|how/([^/]++)(*:536)|obre_nos/(?|show/([^/]++)(*:569)|update/([^/]++)(*:592)|destroy/([^/]++)(*:616)))|check_slug/([^/]++)/([^/]++)(*:654)|update/([^/]++)(*:677)|destroy/([^/]++)(*:701)|pedido/(?|by_slug/([^/]++)(*:735)|update_status/([^/]++)(*:765)|show/([^/]++)(*:786))|tempo_espera_entrega/(?|show/([^/]++)(*:832)|update/([^/]++)(*:855)|destroy/([^/]++)(*:879))|horario_funcionamento/(?|show/([^/]++)(*:926)|update/([^/]++)(*:949)|destroy/([^/]++)(*:973))))|f(?|orma_pagamento/(?|show/([^/]++)(*:1019)|update/([^/]++)(*:1043)|destroy/([^/]++)(*:1068))|uso_horario/(?|show/([^/]++)(*:1106)|update/([^/]++)(*:1130)|destroy/([^/]++)(*:1155)))|p(?|roduto(?|/(?|show/([^/]++)(*:1196)|update/([^/]++)(*:1220)|destroy/([^/]++)(*:1245))|_pedido/(?|show/([^/]++)(*:1279)|update/([^/]++)(*:1303)|destroy/([^/]++)(*:1328)))|e(?|dido_adicional(?|/(?|show/([^/]++)(*:1377)|update/([^/]++)(*:1401)|destroy/([^/]++)(*:1426))|_opcao/(?|show/([^/]++)(*:1459)|update/([^/]++)(*:1483)|destroy/([^/]++)(*:1508)))|r(?|gunta/(?|show/([^/]++)(*:1545)|update/([^/]++)(*:1569)|destroy/([^/]++)(*:1594))|missao/(?|show/([^/]++)(*:1627)|update/([^/]++)(*:1651)|destroy/([^/]++)(*:1676))|iodo/(?|show/([^/]++)(*:1707)|update/([^/]++)(*:1731)|destroy/([^/]++)(*:1756)))))|c(?|ategoria(?|/(?|by_slug/([^/]++)(*:1804)|show/([^/]++)(*:1826)|update/([^/]++)(*:1850)|destroy/([^/]++)(*:1875))|cardapio/(?|show/([^/]++)(*:1910)|update/([^/]++)(*:1934)|destroy/([^/]++)(*:1959))|menu/(?|show/([^/]++)(*:1990)|update/([^/]++)(*:2014)|destroy/([^/]++)(*:2039)))|upom(?|desconto/(?|show/([^/]++)(*:2082)|update/([^/]++)(*:2106)|destroy/([^/]++)(*:2131))|_desconto/(?|show/([^/]++)(*:2167)|update/([^/]++)(*:2191)|destroy/([^/]++)(*:2216)))|onfig_entrega/(?|show/([^/]++)(*:2257)|update/([^/]++)(*:2281)|destroy/([^/]++)(*:2306)))|horario_funcionamento(?|/(?|show/([^/]++)(*:2358)|update/([^/]++)(*:2382)|destroy/([^/]++)(*:2407))|_delivery/(?|show/([^/]++)(*:2443)|update/([^/]++)(*:2467)|destroy/([^/]++)(*:2492)))|a(?|diciona(?|l/(?|show/([^/]++)(*:2535)|update/([^/]++)(*:2559)|destroy/([^/]++)(*:2584))|is/(?|show/([^/]++)(*:2613)|update/([^/]++)(*:2637)|destroy/([^/]++)(*:2662)))|rea_entrega/(?|show/([^/]++)(*:2701)|update/([^/]++)(*:2725)|destroy/([^/]++)(*:2750)))|restaurante/(?|show/([^/]++)(*:2789)|u(?|nidades/([^/]++)(*:2818)|pdate/([^/]++)(*:2841))|check_slug/([^/]++)(*:2870)|destroy/([^/]++)(*:2895))|opcao/(?|show/([^/]++)(*:2927)|update/([^/]++)(*:2951)|destroy/([^/]++)(*:2976))|d(?|ados_empresa/(?|show/([^/]++)(*:3019)|update/([^/]++)(*:3043)|destroy/([^/]++)(*:3068))|ias_semana/(?|show/([^/]++)(*:3105)|update/([^/]++)(*:3129)|destroy/([^/]++)(*:3154)))|([^/]++)(?|(*:3176)|/([^/]++)(*:3194))|register(*:3212)|login(*:3226)))/?$}sDu',
    ),
    3 => 
    array (
      32 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      58 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.update',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
        1 => 
        array (
          0 => 
          array (
            '_route' => 'passport.clients.destroy',
          ),
          1 => 
          array (
            0 => 'client_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      99 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'passport.personal.tokens.destroy',
          ),
          1 => 
          array (
            0 => 'token_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      146 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PAU3kF65efqtOlvv',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      169 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dVmrKOS6TIrP3xGX',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      193 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZubyQtE5V2AE4OEk',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      234 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b0OvdBGjTk562mwp',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YH1BiFAhipViyi8b',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      281 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zoJBCCyoRc9NUd3T',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      314 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mCn5Xd3ItO9nwRZx',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      337 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SxhTXKNdbQgOVOu4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      361 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jQal6mqcE1h0S3bH',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      397 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Hqz5wRSdM9OyT5A2',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      420 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cXbvMdgcXj6iP4QY',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      444 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VpBIm0E76NEfxXJb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      502 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vXoS7N5hcacRrkw7',
          ),
          1 => 
          array (
            0 => 'unidade_id',
            1 => 'usuario_id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      536 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oaVwb4mzodcoB23F',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      569 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VnNn4pPbb7R2QD3Y',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      592 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5ahetN7vPpAp6RBb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      616 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QlBMFBg7JMdMBi7Q',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      654 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3YDUniFWEPayY9XC',
          ),
          1 => 
          array (
            0 => 'restaurante',
            1 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      677 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wdS3fitEifbvIosB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      701 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::57Vu13E49ArAl2rQ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      735 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LdpE5sPdpeD7xQCA',
          ),
          1 => 
          array (
            0 => 'unidade',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      765 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6uGHvdtsGGxmZALu',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      786 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SY4ajURFgjdhw6en',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      832 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6bmygkeiQmNHelZT',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      855 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SK5TnEdVJq7H5Ihb',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      879 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cEKeJAeuzC7GZ1NG',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      926 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eVb6XY8hEhaooQfo',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      949 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TH4Bq2xYxrdTHYik',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      973 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OOroOu6RDi78CcsE',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1019 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tgibzk2NCTOeYJGJ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1043 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HrrJEf70BRAmCSx6',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1068 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::I4q7pxzvHyJVCPI7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1106 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6zLW0fSfGG7N2oh0',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1130 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BB4w9KCbJqIuSzRU',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1155 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2sImo9hFqMy3wuaR',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1196 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CchVDtMdd6F6Ug6r',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1220 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GH7iDcYgcX5TIJjX',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1245 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NetlmKEYCeVkzbY7',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1279 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MaQBe1VCjewMDiFg',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1303 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::zPtZPJ0W9nVxBio5',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1328 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::V8z00ZVpTP7QanUz',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1377 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UNjxJfvFT0mpI80A',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1401 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oqCDWCcjDch0lUt4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1426 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SsGN3TkI8r7T0HYn',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1459 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::7Zjwy31ypp57R14U',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1483 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8qCaNXJg2yvVrH6F',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1508 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mJTxKLyrvPeQWcFc',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1545 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::huKgO103OM7HEaec',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1569 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ws6y1tjNudWuyHei',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1594 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qL1JlugjKOTUtpSL',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1627 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ku00V0PrPPuO1M0Y',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1651 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SOjFLV6L2YxLvoqp',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1676 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::49xTgb3cmRL2OgF2',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1707 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xIPnoPmnCYMLHyx9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1731 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GG6pLUeTkjg9HRsa',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1756 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::04hMuUxsjOHWGEpB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1804 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nipXbrWlewAIPSth',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1826 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KlqV0gE3x9IQNZVy',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1850 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mqrQcQKt9ziH4T5H',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1875 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IV3TQn4hQ87wsl9q',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1910 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1mgeoaCMa0m4JXg4',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1934 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nJlHe8v9OomOHrqj',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1959 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vCusfVQk0ezwLBlq',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      1990 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BAKvT7RCrmB0t3N0',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2014 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OkjAPfTobWuMk7Ls',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2039 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YAYT7v2dKssHpTJM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2082 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EEpXsYB6aADypMhK',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2106 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KCWfJPC2DMcal88X',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2131 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kEr6G3wtmQQ9A22N',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2167 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eRDbJRHBfZF47Urm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2191 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dUMW07jSuKZdDGpi',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2216 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RaujMVQY5ykLNZFB',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OWyOdAjffV07FTFz',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2281 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BGMfOOLo7G8OisPS',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2306 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eVSM7YK05iQdXC1j',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2358 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UzYjojAvz36liqj0',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2382 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FhnMaPF8pAFTCiZ9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2407 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q7KzdmZR1cArPNon',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2443 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9R6wTva9T3uG0HMY',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2467 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xe1QNaVqPfcGMhTf',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2492 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZeUMNWFkWPrmlDQs',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2535 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tzVyvyxUCjci8ZPs',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2559 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Hls1qsBp9HmBe9O5',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2584 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HKz8KpllT1l9Oqp1',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2613 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yosuzzzMPCPng2Wm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2637 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RwNQMFY0jSZlVQg1',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2662 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::18LMnAUSdlr2YvBZ',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2701 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lief2F2k1htjl71t',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2725 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hS2seHMif6yWLG38',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2750 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oUXGfi5yucLOhse0',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2789 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wOyReIQdxlFICbIh',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2818 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PbdjqCJjXmDgEnR3',
          ),
          1 => 
          array (
            0 => 'restaurante_id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2841 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CH9Y1KTDNlnIDBm9',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2870 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::SHbKvv1BfKtPJHkG',
          ),
          1 => 
          array (
            0 => 'slug',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2895 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tEl3uy0Mv9dpVgko',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2927 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WUxbOynSpjgZjzha',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2951 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yzak719Fwxg9SJ5k',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      2976 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OVzsZeCwc3pRkFcd',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3019 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fxOfKWWXWNBjEy6E',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3043 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oeoYksOg5Cn8CVDK',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3068 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lfY8qtTf2CguDsSM',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3105 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vIx4fSQKCJVPQmIm',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3129 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UJn65kbQgPmyMMl0',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3154 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r3XEV1fULXJWmH1m',
          ),
          1 => 
          array (
            0 => 'id',
          ),
          2 => 
          array (
            'DELETE' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3176 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZHWPrpzFrTmQua41',
          ),
          1 => 
          array (
            0 => 'apelido',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3194 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3vOfyOMNSootkz0L',
          ),
          1 => 
          array (
            0 => 'apelido',
            1 => 'cidade',
          ),
          2 => 
          array (
            'GET' => 0,
            'HEAD' => 1,
          ),
          3 => NULL,
          4 => false,
          5 => true,
          6 => NULL,
        ),
      ),
      3212 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Zm4F393d453L1Rqu',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      3226 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZK2BZxXdsbGTApHp',
          ),
          1 => 
          array (
          ),
          2 => 
          array (
            'POST' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
        1 => 
        array (
          0 => NULL,
          1 => NULL,
          2 => NULL,
          3 => NULL,
          4 => false,
          5 => false,
          6 => 0,
        ),
      ),
    ),
    4 => NULL,
  ),
  'attributes' => 
  array (
    'passport.authorizations.authorize' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'as' => 'passport.authorizations.authorize',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.authorizations.approve' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'as' => 'passport.authorizations.approve',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.authorizations.deny' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/authorize',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'as' => 'passport.authorizations.deny',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.token' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token',
      'action' => 
      array (
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'as' => 'passport.token',
        'middleware' => 'throttle',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'as' => 'passport.tokens.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'as' => 'passport.tokens.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.token.refresh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/token/refresh',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'as' => 'passport.token.refresh',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.clients.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'as' => 'passport.clients.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.clients.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/clients',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'as' => 'passport.clients.store',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@store',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.clients.update' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'as' => 'passport.clients.update',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@update',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.clients.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/clients/{client_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'as' => 'passport.clients.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.scopes.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/scopes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'as' => 'passport.scopes.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.personal.tokens.index' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'as' => 'passport.personal.tokens.index',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.personal.tokens.store' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'oauth/personal-access-tokens',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'as' => 'passport.personal.tokens.store',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'passport.personal.tokens.destroy' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'oauth/personal-access-tokens/{token_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'web',
          1 => 'auth',
        ),
        'uses' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'as' => 'passport.personal.tokens.destroy',
        'controller' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
        'namespace' => '\\Laravel\\Passport\\Http\\Controllers',
        'prefix' => 'oauth',
        'where' => 
        array (
        ),
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2xGV8eLn2eHqRog1' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/endereco',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoUnidadeController@index',
        'controller' => 'App\\Http\\Controllers\\EnderecoUnidadeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/endereco',
        'where' => 
        array (
        ),
        'as' => 'generated::2xGV8eLn2eHqRog1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PAU3kF65efqtOlvv' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/endereco/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoUnidadeController@show',
        'controller' => 'App\\Http\\Controllers\\EnderecoUnidadeController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/endereco',
        'where' => 
        array (
        ),
        'as' => 'generated::PAU3kF65efqtOlvv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GwTvOGeTXgvu65SS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/endereco/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoUnidadeController@create',
        'controller' => 'App\\Http\\Controllers\\EnderecoUnidadeController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/endereco',
        'where' => 
        array (
        ),
        'as' => 'generated::GwTvOGeTXgvu65SS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dVmrKOS6TIrP3xGX' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/endereco/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoUnidadeController@update',
        'controller' => 'App\\Http\\Controllers\\EnderecoUnidadeController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/endereco',
        'where' => 
        array (
        ),
        'as' => 'generated::dVmrKOS6TIrP3xGX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZubyQtE5V2AE4OEk' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/endereco/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoUnidadeController@destroy',
        'controller' => 'App\\Http\\Controllers\\EnderecoUnidadeController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/endereco',
        'where' => 
        array (
        ),
        'as' => 'generated::ZubyQtE5V2AE4OEk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ewW4ICyfpxkSjWqM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/usuario_unidade/associar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioUnidadeController@associar',
        'controller' => 'App\\Http\\Controllers\\UsuarioUnidadeController@associar',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/usuario_unidade',
        'where' => 
        array (
        ),
        'as' => 'generated::ewW4ICyfpxkSjWqM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vXoS7N5hcacRrkw7' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/usuario_unidade/desassociar/{unidade_id}/{usuario_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioUnidadeController@desassociar',
        'controller' => 'App\\Http\\Controllers\\UsuarioUnidadeController@desassociar',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/usuario_unidade',
        'where' => 
        array (
        ),
        'as' => 'generated::vXoS7N5hcacRrkw7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MTsHtAjax00RfBOD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/forma_pagamento',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\FormaPagamentoController@index',
        'controller' => 'App\\Http\\Controllers\\FormaPagamentoController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/forma_pagamento',
        'where' => 
        array (
        ),
        'as' => 'generated::MTsHtAjax00RfBOD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tgibzk2NCTOeYJGJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/forma_pagamento/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\FormaPagamentoController@show',
        'controller' => 'App\\Http\\Controllers\\FormaPagamentoController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/forma_pagamento',
        'where' => 
        array (
        ),
        'as' => 'generated::tgibzk2NCTOeYJGJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QEPVwbNX6fX38y4z' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/forma_pagamento/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\FormaPagamentoController@create',
        'controller' => 'App\\Http\\Controllers\\FormaPagamentoController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/forma_pagamento',
        'where' => 
        array (
        ),
        'as' => 'generated::QEPVwbNX6fX38y4z',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HrrJEf70BRAmCSx6' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/forma_pagamento/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\FormaPagamentoController@update',
        'controller' => 'App\\Http\\Controllers\\FormaPagamentoController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/forma_pagamento',
        'where' => 
        array (
        ),
        'as' => 'generated::HrrJEf70BRAmCSx6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::I4q7pxzvHyJVCPI7' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/forma_pagamento/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\FormaPagamentoController@destroy',
        'controller' => 'App\\Http\\Controllers\\FormaPagamentoController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/forma_pagamento',
        'where' => 
        array (
        ),
        'as' => 'generated::I4q7pxzvHyJVCPI7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7jmY8Ce7lfVKI3sI' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/produto',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\ProdutoController@index',
        'controller' => 'App\\Http\\Controllers\\ProdutoController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/produto',
        'where' => 
        array (
        ),
        'as' => 'generated::7jmY8Ce7lfVKI3sI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CchVDtMdd6F6Ug6r' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/produto/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\ProdutoController@show',
        'controller' => 'App\\Http\\Controllers\\ProdutoController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/produto',
        'where' => 
        array (
        ),
        'as' => 'generated::CchVDtMdd6F6Ug6r',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WlVwOjkIxBFGeHu6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/produto/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\ProdutoController@create',
        'controller' => 'App\\Http\\Controllers\\ProdutoController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/produto',
        'where' => 
        array (
        ),
        'as' => 'generated::WlVwOjkIxBFGeHu6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GH7iDcYgcX5TIJjX' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/produto/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\ProdutoController@update',
        'controller' => 'App\\Http\\Controllers\\ProdutoController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/produto',
        'where' => 
        array (
        ),
        'as' => 'generated::GH7iDcYgcX5TIJjX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NetlmKEYCeVkzbY7' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/produto/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\ProdutoController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProdutoController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/produto',
        'where' => 
        array (
        ),
        'as' => 'generated::NetlmKEYCeVkzbY7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::aeKZbFSUQ1UrSlOW' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categoria',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriaController@index',
        'controller' => 'App\\Http\\Controllers\\CategoriaController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/categoria',
        'where' => 
        array (
        ),
        'as' => 'generated::aeKZbFSUQ1UrSlOW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nipXbrWlewAIPSth' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categoria/by_slug/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriaController@indexBySlug',
        'controller' => 'App\\Http\\Controllers\\CategoriaController@indexBySlug',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/categoria',
        'where' => 
        array (
        ),
        'as' => 'generated::nipXbrWlewAIPSth',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KlqV0gE3x9IQNZVy' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categoria/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriaController@show',
        'controller' => 'App\\Http\\Controllers\\CategoriaController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/categoria',
        'where' => 
        array (
        ),
        'as' => 'generated::KlqV0gE3x9IQNZVy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ATuT4ztZpiSBXyQk' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/categoria/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriaController@create',
        'controller' => 'App\\Http\\Controllers\\CategoriaController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/categoria',
        'where' => 
        array (
        ),
        'as' => 'generated::ATuT4ztZpiSBXyQk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mqrQcQKt9ziH4T5H' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/categoria/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriaController@update',
        'controller' => 'App\\Http\\Controllers\\CategoriaController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/categoria',
        'where' => 
        array (
        ),
        'as' => 'generated::mqrQcQKt9ziH4T5H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::IV3TQn4hQ87wsl9q' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/categoria/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriaController@destroy',
        'controller' => 'App\\Http\\Controllers\\CategoriaController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/categoria',
        'where' => 
        array (
        ),
        'as' => 'generated::IV3TQn4hQ87wsl9q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8TvG7OWA9fdThvz9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categoriacardapio',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriaCardapioController@index',
        'controller' => 'App\\Http\\Controllers\\CategoriaCardapioController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/categoriacardapio',
        'where' => 
        array (
        ),
        'as' => 'generated::8TvG7OWA9fdThvz9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1mgeoaCMa0m4JXg4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categoriacardapio/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriaCardapioController@show',
        'controller' => 'App\\Http\\Controllers\\CategoriaCardapioController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/categoriacardapio',
        'where' => 
        array (
        ),
        'as' => 'generated::1mgeoaCMa0m4JXg4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kUO1UMhLK2i9IRG9' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/categoriacardapio/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriaCardapioController@create',
        'controller' => 'App\\Http\\Controllers\\CategoriaCardapioController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/categoriacardapio',
        'where' => 
        array (
        ),
        'as' => 'generated::kUO1UMhLK2i9IRG9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nJlHe8v9OomOHrqj' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/categoriacardapio/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriaCardapioController@update',
        'controller' => 'App\\Http\\Controllers\\CategoriaCardapioController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/categoriacardapio',
        'where' => 
        array (
        ),
        'as' => 'generated::nJlHe8v9OomOHrqj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vCusfVQk0ezwLBlq' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/categoriacardapio/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriaCardapioController@destroy',
        'controller' => 'App\\Http\\Controllers\\CategoriaCardapioController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/categoriacardapio',
        'where' => 
        array (
        ),
        'as' => 'generated::vCusfVQk0ezwLBlq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SBPhY4guHMEAADA5' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categoriamenu',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriaMenuController@index',
        'controller' => 'App\\Http\\Controllers\\CategoriaMenuController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/categoriamenu',
        'where' => 
        array (
        ),
        'as' => 'generated::SBPhY4guHMEAADA5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BAKvT7RCrmB0t3N0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categoriamenu/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriaMenuController@show',
        'controller' => 'App\\Http\\Controllers\\CategoriaMenuController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/categoriamenu',
        'where' => 
        array (
        ),
        'as' => 'generated::BAKvT7RCrmB0t3N0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GQQVjhutZz86HA2y' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/categoriamenu/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriaMenuController@create',
        'controller' => 'App\\Http\\Controllers\\CategoriaMenuController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/categoriamenu',
        'where' => 
        array (
        ),
        'as' => 'generated::GQQVjhutZz86HA2y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OkjAPfTobWuMk7Ls' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/categoriamenu/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriaMenuController@update',
        'controller' => 'App\\Http\\Controllers\\CategoriaMenuController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/categoriamenu',
        'where' => 
        array (
        ),
        'as' => 'generated::OkjAPfTobWuMk7Ls',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YAYT7v2dKssHpTJM' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/categoriamenu/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CategoriaMenuController@destroy',
        'controller' => 'App\\Http\\Controllers\\CategoriaMenuController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/categoriamenu',
        'where' => 
        array (
        ),
        'as' => 'generated::YAYT7v2dKssHpTJM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Dg5ev92gixcsFLKm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cupomdesconto',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CupomDescontoController@index',
        'controller' => 'App\\Http\\Controllers\\CupomDescontoController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/cupomdesconto',
        'where' => 
        array (
        ),
        'as' => 'generated::Dg5ev92gixcsFLKm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EEpXsYB6aADypMhK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cupomdesconto/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CupomDescontoController@show',
        'controller' => 'App\\Http\\Controllers\\CupomDescontoController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/cupomdesconto',
        'where' => 
        array (
        ),
        'as' => 'generated::EEpXsYB6aADypMhK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::uGi14ykfIDUDLmzF' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/cupomdesconto/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CupomDescontoController@create',
        'controller' => 'App\\Http\\Controllers\\CupomDescontoController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/cupomdesconto',
        'where' => 
        array (
        ),
        'as' => 'generated::uGi14ykfIDUDLmzF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KCWfJPC2DMcal88X' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/cupomdesconto/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CupomDescontoController@update',
        'controller' => 'App\\Http\\Controllers\\CupomDescontoController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/cupomdesconto',
        'where' => 
        array (
        ),
        'as' => 'generated::KCWfJPC2DMcal88X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kEr6G3wtmQQ9A22N' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/cupomdesconto/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CupomDescontoController@destroy',
        'controller' => 'App\\Http\\Controllers\\CupomDescontoController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/cupomdesconto',
        'where' => 
        array (
        ),
        'as' => 'generated::kEr6G3wtmQQ9A22N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6A6wE5n8nTnBrvZF' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/endereco_restaurante',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoUnidadeController@index',
        'controller' => 'App\\Http\\Controllers\\EnderecoUnidadeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/endereco_restaurante',
        'where' => 
        array (
        ),
        'as' => 'generated::6A6wE5n8nTnBrvZF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::b0OvdBGjTk562mwp' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/endereco_restaurante/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoUnidadeController@show',
        'controller' => 'App\\Http\\Controllers\\EnderecoUnidadeController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/endereco_restaurante',
        'where' => 
        array (
        ),
        'as' => 'generated::b0OvdBGjTk562mwp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::syjCb03CbKqD7JWa' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/endereco_restaurante/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoUnidadeController@create',
        'controller' => 'App\\Http\\Controllers\\EnderecoUnidadeController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/endereco_restaurante',
        'where' => 
        array (
        ),
        'as' => 'generated::syjCb03CbKqD7JWa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YH1BiFAhipViyi8b' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/endereco_restaurante/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoUnidadeController@update',
        'controller' => 'App\\Http\\Controllers\\EnderecoUnidadeController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/endereco_restaurante',
        'where' => 
        array (
        ),
        'as' => 'generated::YH1BiFAhipViyi8b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zoJBCCyoRc9NUd3T' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/endereco_restaurante/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoUnidadeController@destroy',
        'controller' => 'App\\Http\\Controllers\\EnderecoUnidadeController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/endereco_restaurante',
        'where' => 
        array (
        ),
        'as' => 'generated::zoJBCCyoRc9NUd3T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3PQcqSFTvxTXuSVh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/horario_funcionamento',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\HorarioFuncionamentoController@index',
        'controller' => 'App\\Http\\Controllers\\HorarioFuncionamentoController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/horario_funcionamento',
        'where' => 
        array (
        ),
        'as' => 'generated::3PQcqSFTvxTXuSVh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UzYjojAvz36liqj0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/horario_funcionamento/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\HorarioFuncionamentoController@show',
        'controller' => 'App\\Http\\Controllers\\HorarioFuncionamentoController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/horario_funcionamento',
        'where' => 
        array (
        ),
        'as' => 'generated::UzYjojAvz36liqj0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AUh9WU6OQXH5Qznx' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/horario_funcionamento/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\HorarioFuncionamentoController@create',
        'controller' => 'App\\Http\\Controllers\\HorarioFuncionamentoController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/horario_funcionamento',
        'where' => 
        array (
        ),
        'as' => 'generated::AUh9WU6OQXH5Qznx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FhnMaPF8pAFTCiZ9' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/horario_funcionamento/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\HorarioFuncionamentoController@update',
        'controller' => 'App\\Http\\Controllers\\HorarioFuncionamentoController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/horario_funcionamento',
        'where' => 
        array (
        ),
        'as' => 'generated::FhnMaPF8pAFTCiZ9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Q7KzdmZR1cArPNon' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/horario_funcionamento/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\HorarioFuncionamentoController@destroy',
        'controller' => 'App\\Http\\Controllers\\HorarioFuncionamentoController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/horario_funcionamento',
        'where' => 
        array (
        ),
        'as' => 'generated::Q7KzdmZR1cArPNon',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qcYb0106LgA1AEU6' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/adicional',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\AdicionalController@index',
        'controller' => 'App\\Http\\Controllers\\AdicionalController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/adicional',
        'where' => 
        array (
        ),
        'as' => 'generated::qcYb0106LgA1AEU6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tzVyvyxUCjci8ZPs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/adicional/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\AdicionalController@show',
        'controller' => 'App\\Http\\Controllers\\AdicionalController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/adicional',
        'where' => 
        array (
        ),
        'as' => 'generated::tzVyvyxUCjci8ZPs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XgJy01bpXFELBoTV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/adicional/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\AdicionalController@create',
        'controller' => 'App\\Http\\Controllers\\AdicionalController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/adicional',
        'where' => 
        array (
        ),
        'as' => 'generated::XgJy01bpXFELBoTV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Hls1qsBp9HmBe9O5' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/adicional/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\AdicionalController@update',
        'controller' => 'App\\Http\\Controllers\\AdicionalController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/adicional',
        'where' => 
        array (
        ),
        'as' => 'generated::Hls1qsBp9HmBe9O5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HKz8KpllT1l9Oqp1' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/adicional/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\AdicionalController@destroy',
        'controller' => 'App\\Http\\Controllers\\AdicionalController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/adicional',
        'where' => 
        array (
        ),
        'as' => 'generated::HKz8KpllT1l9Oqp1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::meQQuirHlLfCaWKi' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/restaurante',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\RestauranteController@index',
        'controller' => 'App\\Http\\Controllers\\RestauranteController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/restaurante',
        'where' => 
        array (
        ),
        'as' => 'generated::meQQuirHlLfCaWKi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wOyReIQdxlFICbIh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/restaurante/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\RestauranteController@show',
        'controller' => 'App\\Http\\Controllers\\RestauranteController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/restaurante',
        'where' => 
        array (
        ),
        'as' => 'generated::wOyReIQdxlFICbIh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PbdjqCJjXmDgEnR3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/restaurante/unidades/{restaurante_id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\RestauranteController@getUnidades',
        'controller' => 'App\\Http\\Controllers\\RestauranteController@getUnidades',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/restaurante',
        'where' => 
        array (
        ),
        'as' => 'generated::PbdjqCJjXmDgEnR3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SHbKvv1BfKtPJHkG' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/restaurante/check_slug/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\RestauranteController@checkSlug',
        'controller' => 'App\\Http\\Controllers\\RestauranteController@checkSlug',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/restaurante',
        'where' => 
        array (
        ),
        'as' => 'generated::SHbKvv1BfKtPJHkG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::29OHtuNRR2rTCtiS' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/restaurante/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\RestauranteController@create',
        'controller' => 'App\\Http\\Controllers\\RestauranteController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/restaurante',
        'where' => 
        array (
        ),
        'as' => 'generated::29OHtuNRR2rTCtiS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CH9Y1KTDNlnIDBm9' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/restaurante/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\RestauranteController@update',
        'controller' => 'App\\Http\\Controllers\\RestauranteController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/restaurante',
        'where' => 
        array (
        ),
        'as' => 'generated::CH9Y1KTDNlnIDBm9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tEl3uy0Mv9dpVgko' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/restaurante/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\RestauranteController@destroy',
        'controller' => 'App\\Http\\Controllers\\RestauranteController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/restaurante',
        'where' => 
        array (
        ),
        'as' => 'generated::tEl3uy0Mv9dpVgko',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DsrpA97MpoWwy6IJ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/unidade',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UnidadeController@index',
        'controller' => 'App\\Http\\Controllers\\UnidadeController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade',
        'where' => 
        array (
        ),
        'as' => 'generated::DsrpA97MpoWwy6IJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oaVwb4mzodcoB23F' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/unidade/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UnidadeController@show',
        'controller' => 'App\\Http\\Controllers\\UnidadeController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade',
        'where' => 
        array (
        ),
        'as' => 'generated::oaVwb4mzodcoB23F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3YDUniFWEPayY9XC' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/unidade/check_slug/{restaurante}/{slug}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UnidadeController@checkSlug',
        'controller' => 'App\\Http\\Controllers\\UnidadeController@checkSlug',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade',
        'where' => 
        array (
        ),
        'as' => 'generated::3YDUniFWEPayY9XC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::gebVVM5XPbQOCL87' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/unidade/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UnidadeController@create',
        'controller' => 'App\\Http\\Controllers\\UnidadeController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade',
        'where' => 
        array (
        ),
        'as' => 'generated::gebVVM5XPbQOCL87',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wdS3fitEifbvIosB' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/unidade/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UnidadeController@update',
        'controller' => 'App\\Http\\Controllers\\UnidadeController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade',
        'where' => 
        array (
        ),
        'as' => 'generated::wdS3fitEifbvIosB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::57Vu13E49ArAl2rQ' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/unidade/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UnidadeController@destroy',
        'controller' => 'App\\Http\\Controllers\\UnidadeController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade',
        'where' => 
        array (
        ),
        'as' => 'generated::57Vu13E49ArAl2rQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LdpE5sPdpeD7xQCA' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/unidade/pedido/by_slug/{unidade}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PedidoController@bySlug',
        'controller' => 'App\\Http\\Controllers\\PedidoController@bySlug',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade/pedido',
        'where' => 
        array (
        ),
        'as' => 'generated::LdpE5sPdpeD7xQCA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::okX69eyNpEbIGpke' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/unidade/pedido/fazer_pedido',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PedidoController@fazerPedido',
        'controller' => 'App\\Http\\Controllers\\PedidoController@fazerPedido',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade/pedido',
        'where' => 
        array (
        ),
        'as' => 'generated::okX69eyNpEbIGpke',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bSKyYbs6nR6CCb6W' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/unidade/pedido/index',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PedidoController@index',
        'controller' => 'App\\Http\\Controllers\\PedidoController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade/pedido',
        'where' => 
        array (
        ),
        'as' => 'generated::bSKyYbs6nR6CCb6W',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6uGHvdtsGGxmZALu' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/unidade/pedido/update_status/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PedidoController@updateStatusPedido',
        'controller' => 'App\\Http\\Controllers\\PedidoController@updateStatusPedido',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade/pedido',
        'where' => 
        array (
        ),
        'as' => 'generated::6uGHvdtsGGxmZALu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SY4ajURFgjdhw6en' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/unidade/pedido/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PedidoController@show',
        'controller' => 'App\\Http\\Controllers\\PedidoController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade/pedido',
        'where' => 
        array (
        ),
        'as' => 'generated::SY4ajURFgjdhw6en',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bZM2cOigDXxncg1l' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/unidade/extrato',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\ExtratoController@getData',
        'controller' => 'App\\Http\\Controllers\\ExtratoController@getData',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade/extrato',
        'where' => 
        array (
        ),
        'as' => 'generated::bZM2cOigDXxncg1l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qjCi5B4IJAiAWbjz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/unidade/tempo_espera_entrega',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\TempoEsperaEntregaController@index',
        'controller' => 'App\\Http\\Controllers\\TempoEsperaEntregaController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade/tempo_espera_entrega',
        'where' => 
        array (
        ),
        'as' => 'generated::qjCi5B4IJAiAWbjz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6bmygkeiQmNHelZT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/unidade/tempo_espera_entrega/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\TempoEsperaEntregaController@show',
        'controller' => 'App\\Http\\Controllers\\TempoEsperaEntregaController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade/tempo_espera_entrega',
        'where' => 
        array (
        ),
        'as' => 'generated::6bmygkeiQmNHelZT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rOSiKdXCOswcBi0X' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/unidade/tempo_espera_entrega/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\TempoEsperaEntregaController@create',
        'controller' => 'App\\Http\\Controllers\\TempoEsperaEntregaController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade/tempo_espera_entrega',
        'where' => 
        array (
        ),
        'as' => 'generated::rOSiKdXCOswcBi0X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SK5TnEdVJq7H5Ihb' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/unidade/tempo_espera_entrega/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\TempoEsperaEntregaController@update',
        'controller' => 'App\\Http\\Controllers\\TempoEsperaEntregaController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade/tempo_espera_entrega',
        'where' => 
        array (
        ),
        'as' => 'generated::SK5TnEdVJq7H5Ihb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cEKeJAeuzC7GZ1NG' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/unidade/tempo_espera_entrega/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\TempoEsperaEntregaController@destroy',
        'controller' => 'App\\Http\\Controllers\\TempoEsperaEntregaController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade/tempo_espera_entrega',
        'where' => 
        array (
        ),
        'as' => 'generated::cEKeJAeuzC7GZ1NG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::J5fribUZHCSMkVoB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/unidade/horario_funcionamento',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\HorarioFuncionamentoController@index',
        'controller' => 'App\\Http\\Controllers\\HorarioFuncionamentoController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade/horario_funcionamento',
        'where' => 
        array (
        ),
        'as' => 'generated::J5fribUZHCSMkVoB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eVb6XY8hEhaooQfo' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/unidade/horario_funcionamento/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\HorarioFuncionamentoController@show',
        'controller' => 'App\\Http\\Controllers\\HorarioFuncionamentoController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade/horario_funcionamento',
        'where' => 
        array (
        ),
        'as' => 'generated::eVb6XY8hEhaooQfo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YCBbIV0kxPLXnjiA' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/unidade/horario_funcionamento/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\HorarioFuncionamentoController@create',
        'controller' => 'App\\Http\\Controllers\\HorarioFuncionamentoController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade/horario_funcionamento',
        'where' => 
        array (
        ),
        'as' => 'generated::YCBbIV0kxPLXnjiA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::TH4Bq2xYxrdTHYik' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/unidade/horario_funcionamento/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\HorarioFuncionamentoController@update',
        'controller' => 'App\\Http\\Controllers\\HorarioFuncionamentoController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade/horario_funcionamento',
        'where' => 
        array (
        ),
        'as' => 'generated::TH4Bq2xYxrdTHYik',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OOroOu6RDi78CcsE' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/unidade/horario_funcionamento/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\HorarioFuncionamentoController@destroy',
        'controller' => 'App\\Http\\Controllers\\HorarioFuncionamentoController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade/horario_funcionamento',
        'where' => 
        array (
        ),
        'as' => 'generated::OOroOu6RDi78CcsE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FYeRHJ4TxBpIaDhk' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/unidade/sobre_nos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\SobreNosController@index',
        'controller' => 'App\\Http\\Controllers\\SobreNosController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade/sobre_nos',
        'where' => 
        array (
        ),
        'as' => 'generated::FYeRHJ4TxBpIaDhk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::VnNn4pPbb7R2QD3Y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/unidade/sobre_nos/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\SobreNosController@show',
        'controller' => 'App\\Http\\Controllers\\SobreNosController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade/sobre_nos',
        'where' => 
        array (
        ),
        'as' => 'generated::VnNn4pPbb7R2QD3Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3BNAI58j2WEzHkZV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/unidade/sobre_nos/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\SobreNosController@create',
        'controller' => 'App\\Http\\Controllers\\SobreNosController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade/sobre_nos',
        'where' => 
        array (
        ),
        'as' => 'generated::3BNAI58j2WEzHkZV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5ahetN7vPpAp6RBb' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/unidade/sobre_nos/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\SobreNosController@update',
        'controller' => 'App\\Http\\Controllers\\SobreNosController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade/sobre_nos',
        'where' => 
        array (
        ),
        'as' => 'generated::5ahetN7vPpAp6RBb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QlBMFBg7JMdMBi7Q' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/unidade/sobre_nos/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\SobreNosController@destroy',
        'controller' => 'App\\Http\\Controllers\\SobreNosController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade/sobre_nos',
        'where' => 
        array (
        ),
        'as' => 'generated::QlBMFBg7JMdMBi7Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XONlv8JApQkwV6dw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/endereco_entrega',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoEntregaController@index',
        'controller' => 'App\\Http\\Controllers\\EnderecoEntregaController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/endereco_entrega',
        'where' => 
        array (
        ),
        'as' => 'generated::XONlv8JApQkwV6dw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::gSrwGbLTEwtjk4kh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/endereco_entrega/enderecos_entrega_usuario',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoEntregaController@getEnderecosEntregaAuthUser',
        'controller' => 'App\\Http\\Controllers\\EnderecoEntregaController@getEnderecosEntregaAuthUser',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/endereco_entrega',
        'where' => 
        array (
        ),
        'as' => 'generated::gSrwGbLTEwtjk4kh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mCn5Xd3ItO9nwRZx' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/endereco_entrega/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoEntregaController@show',
        'controller' => 'App\\Http\\Controllers\\EnderecoEntregaController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/endereco_entrega',
        'where' => 
        array (
        ),
        'as' => 'generated::mCn5Xd3ItO9nwRZx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lWexGE6zo6NuhBVV' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/endereco_entrega/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoEntregaController@create',
        'controller' => 'App\\Http\\Controllers\\EnderecoEntregaController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/endereco_entrega',
        'where' => 
        array (
        ),
        'as' => 'generated::lWexGE6zo6NuhBVV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SxhTXKNdbQgOVOu4' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/endereco_entrega/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoEntregaController@update',
        'controller' => 'App\\Http\\Controllers\\EnderecoEntregaController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/endereco_entrega',
        'where' => 
        array (
        ),
        'as' => 'generated::SxhTXKNdbQgOVOu4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jQal6mqcE1h0S3bH' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/endereco_entrega/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EnderecoEntregaController@destroy',
        'controller' => 'App\\Http\\Controllers\\EnderecoEntregaController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/endereco_entrega',
        'where' => 
        array (
        ),
        'as' => 'generated::jQal6mqcE1h0S3bH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lngB0GyW03XEpKzd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/opcao',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\OpcaoController@index',
        'controller' => 'App\\Http\\Controllers\\OpcaoController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/opcao',
        'where' => 
        array (
        ),
        'as' => 'generated::lngB0GyW03XEpKzd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WUxbOynSpjgZjzha' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/opcao/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\OpcaoController@show',
        'controller' => 'App\\Http\\Controllers\\OpcaoController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/opcao',
        'where' => 
        array (
        ),
        'as' => 'generated::WUxbOynSpjgZjzha',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ny5pIcZeqZIYVSyK' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/opcao/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\OpcaoController@create',
        'controller' => 'App\\Http\\Controllers\\OpcaoController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/opcao',
        'where' => 
        array (
        ),
        'as' => 'generated::ny5pIcZeqZIYVSyK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yzak719Fwxg9SJ5k' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/opcao/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\OpcaoController@update',
        'controller' => 'App\\Http\\Controllers\\OpcaoController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/opcao',
        'where' => 
        array (
        ),
        'as' => 'generated::yzak719Fwxg9SJ5k',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OVzsZeCwc3pRkFcd' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/opcao/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\OpcaoController@destroy',
        'controller' => 'App\\Http\\Controllers\\OpcaoController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/opcao',
        'where' => 
        array (
        ),
        'as' => 'generated::OVzsZeCwc3pRkFcd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OzwXru3ouGKIIdAt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/adicionais',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\AdicionalController@index',
        'controller' => 'App\\Http\\Controllers\\AdicionalController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/adicionais',
        'where' => 
        array (
        ),
        'as' => 'generated::OzwXru3ouGKIIdAt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yosuzzzMPCPng2Wm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/adicionais/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\AdicionalController@show',
        'controller' => 'App\\Http\\Controllers\\AdicionalController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/adicionais',
        'where' => 
        array (
        ),
        'as' => 'generated::yosuzzzMPCPng2Wm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::TZzlXDNIRpTn6Hbh' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/adicionais/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\AdicionalController@create',
        'controller' => 'App\\Http\\Controllers\\AdicionalController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/adicionais',
        'where' => 
        array (
        ),
        'as' => 'generated::TZzlXDNIRpTn6Hbh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RwNQMFY0jSZlVQg1' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/adicionais/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\AdicionalController@update',
        'controller' => 'App\\Http\\Controllers\\AdicionalController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/adicionais',
        'where' => 
        array (
        ),
        'as' => 'generated::RwNQMFY0jSZlVQg1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::18LMnAUSdlr2YvBZ' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/adicionais/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\AdicionalController@destroy',
        'controller' => 'App\\Http\\Controllers\\AdicionalController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/adicionais',
        'where' => 
        array (
        ),
        'as' => 'generated::18LMnAUSdlr2YvBZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::f3pdf7yV49XSsdgt' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/usuario/meus_restaurantes',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\UsuarioController@meusRestaurantes',
        'controller' => 'App\\Http\\Controllers\\UsuarioController@meusRestaurantes',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/usuario',
        'where' => 
        array (
        ),
        'as' => 'generated::f3pdf7yV49XSsdgt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::noLhdkcnSQoxp1Zs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/produto_pedido',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\ProdutoPedidoController@index',
        'controller' => 'App\\Http\\Controllers\\ProdutoPedidoController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/produto_pedido',
        'where' => 
        array (
        ),
        'as' => 'generated::noLhdkcnSQoxp1Zs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MaQBe1VCjewMDiFg' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/produto_pedido/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\ProdutoPedidoController@show',
        'controller' => 'App\\Http\\Controllers\\ProdutoPedidoController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/produto_pedido',
        'where' => 
        array (
        ),
        'as' => 'generated::MaQBe1VCjewMDiFg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CXDUlZIqYHZ8FX59' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/produto_pedido/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\ProdutoPedidoController@create',
        'controller' => 'App\\Http\\Controllers\\ProdutoPedidoController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/produto_pedido',
        'where' => 
        array (
        ),
        'as' => 'generated::CXDUlZIqYHZ8FX59',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zPtZPJ0W9nVxBio5' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/produto_pedido/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\ProdutoPedidoController@update',
        'controller' => 'App\\Http\\Controllers\\ProdutoPedidoController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/produto_pedido',
        'where' => 
        array (
        ),
        'as' => 'generated::zPtZPJ0W9nVxBio5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::V8z00ZVpTP7QanUz' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/produto_pedido/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\ProdutoPedidoController@destroy',
        'controller' => 'App\\Http\\Controllers\\ProdutoPedidoController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/produto_pedido',
        'where' => 
        array (
        ),
        'as' => 'generated::V8z00ZVpTP7QanUz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4Z4Tqhmh9ipQTbfE' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/pedido_adicional',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PedidoAdicionalController@index',
        'controller' => 'App\\Http\\Controllers\\PedidoAdicionalController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/pedido_adicional',
        'where' => 
        array (
        ),
        'as' => 'generated::4Z4Tqhmh9ipQTbfE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UNjxJfvFT0mpI80A' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/pedido_adicional/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PedidoAdicionalController@show',
        'controller' => 'App\\Http\\Controllers\\PedidoAdicionalController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/pedido_adicional',
        'where' => 
        array (
        ),
        'as' => 'generated::UNjxJfvFT0mpI80A',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HgxcbBE2f1uOwCnv' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pedido_adicional/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PedidoAdicionalController@create',
        'controller' => 'App\\Http\\Controllers\\PedidoAdicionalController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/pedido_adicional',
        'where' => 
        array (
        ),
        'as' => 'generated::HgxcbBE2f1uOwCnv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oqCDWCcjDch0lUt4' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/pedido_adicional/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PedidoAdicionalController@update',
        'controller' => 'App\\Http\\Controllers\\PedidoAdicionalController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/pedido_adicional',
        'where' => 
        array (
        ),
        'as' => 'generated::oqCDWCcjDch0lUt4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SsGN3TkI8r7T0HYn' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/pedido_adicional/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PedidoAdicionalController@destroy',
        'controller' => 'App\\Http\\Controllers\\PedidoAdicionalController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/pedido_adicional',
        'where' => 
        array (
        ),
        'as' => 'generated::SsGN3TkI8r7T0HYn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GYrrB41h1e7yyVNz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/pedido_adicional_opcao',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PedidoAdicionalOpcaoController@index',
        'controller' => 'App\\Http\\Controllers\\PedidoAdicionalOpcaoController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/pedido_adicional_opcao',
        'where' => 
        array (
        ),
        'as' => 'generated::GYrrB41h1e7yyVNz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7Zjwy31ypp57R14U' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/pedido_adicional_opcao/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PedidoAdicionalOpcaoController@show',
        'controller' => 'App\\Http\\Controllers\\PedidoAdicionalOpcaoController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/pedido_adicional_opcao',
        'where' => 
        array (
        ),
        'as' => 'generated::7Zjwy31ypp57R14U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QfuJbBRnGDC1V2XM' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pedido_adicional_opcao/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PedidoAdicionalOpcaoController@create',
        'controller' => 'App\\Http\\Controllers\\PedidoAdicionalOpcaoController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/pedido_adicional_opcao',
        'where' => 
        array (
        ),
        'as' => 'generated::QfuJbBRnGDC1V2XM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8qCaNXJg2yvVrH6F' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/pedido_adicional_opcao/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PedidoAdicionalOpcaoController@update',
        'controller' => 'App\\Http\\Controllers\\PedidoAdicionalOpcaoController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/pedido_adicional_opcao',
        'where' => 
        array (
        ),
        'as' => 'generated::8qCaNXJg2yvVrH6F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mJTxKLyrvPeQWcFc' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/pedido_adicional_opcao/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PedidoAdicionalOpcaoController@destroy',
        'controller' => 'App\\Http\\Controllers\\PedidoAdicionalOpcaoController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/pedido_adicional_opcao',
        'where' => 
        array (
        ),
        'as' => 'generated::mJTxKLyrvPeQWcFc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nfNEWKxQ5wwjxvcd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/pergunta',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PerguntaController@index',
        'controller' => 'App\\Http\\Controllers\\PerguntaController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/pergunta',
        'where' => 
        array (
        ),
        'as' => 'generated::nfNEWKxQ5wwjxvcd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::huKgO103OM7HEaec' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/pergunta/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PerguntaController@show',
        'controller' => 'App\\Http\\Controllers\\PerguntaController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/pergunta',
        'where' => 
        array (
        ),
        'as' => 'generated::huKgO103OM7HEaec',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::VZ9xzLDQnAoqt995' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pergunta/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PerguntaController@create',
        'controller' => 'App\\Http\\Controllers\\PerguntaController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/pergunta',
        'where' => 
        array (
        ),
        'as' => 'generated::VZ9xzLDQnAoqt995',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Ws6y1tjNudWuyHei' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/pergunta/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PerguntaController@update',
        'controller' => 'App\\Http\\Controllers\\PerguntaController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/pergunta',
        'where' => 
        array (
        ),
        'as' => 'generated::Ws6y1tjNudWuyHei',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qL1JlugjKOTUtpSL' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/pergunta/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PerguntaController@destroy',
        'controller' => 'App\\Http\\Controllers\\PerguntaController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/pergunta',
        'where' => 
        array (
        ),
        'as' => 'generated::qL1JlugjKOTUtpSL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bFuP504dawqZVXsw' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/entregador',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EntregadorController@index',
        'controller' => 'App\\Http\\Controllers\\EntregadorController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/entregador',
        'where' => 
        array (
        ),
        'as' => 'generated::bFuP504dawqZVXsw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Hqz5wRSdM9OyT5A2' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/entregador/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EntregadorController@show',
        'controller' => 'App\\Http\\Controllers\\EntregadorController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/entregador',
        'where' => 
        array (
        ),
        'as' => 'generated::Hqz5wRSdM9OyT5A2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4erNpW8o7tBzMBFL' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/entregador/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EntregadorController@create',
        'controller' => 'App\\Http\\Controllers\\EntregadorController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/entregador',
        'where' => 
        array (
        ),
        'as' => 'generated::4erNpW8o7tBzMBFL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cXbvMdgcXj6iP4QY' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/entregador/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EntregadorController@update',
        'controller' => 'App\\Http\\Controllers\\EntregadorController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/entregador',
        'where' => 
        array (
        ),
        'as' => 'generated::cXbvMdgcXj6iP4QY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::VpBIm0E76NEfxXJb' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/entregador/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EntregadorController@destroy',
        'controller' => 'App\\Http\\Controllers\\EntregadorController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/entregador',
        'where' => 
        array (
        ),
        'as' => 'generated::VpBIm0E76NEfxXJb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::G60o6nhd6BjMojYB' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dados_empresa',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\DadosEmpresaController@index',
        'controller' => 'App\\Http\\Controllers\\DadosEmpresaController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/dados_empresa',
        'where' => 
        array (
        ),
        'as' => 'generated::G60o6nhd6BjMojYB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fxOfKWWXWNBjEy6E' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dados_empresa/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\DadosEmpresaController@show',
        'controller' => 'App\\Http\\Controllers\\DadosEmpresaController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/dados_empresa',
        'where' => 
        array (
        ),
        'as' => 'generated::fxOfKWWXWNBjEy6E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kY31lCpmk1c60MVw' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dados_empresa/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\DadosEmpresaController@create',
        'controller' => 'App\\Http\\Controllers\\DadosEmpresaController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/dados_empresa',
        'where' => 
        array (
        ),
        'as' => 'generated::kY31lCpmk1c60MVw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oeoYksOg5Cn8CVDK' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/dados_empresa/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\DadosEmpresaController@update',
        'controller' => 'App\\Http\\Controllers\\DadosEmpresaController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/dados_empresa',
        'where' => 
        array (
        ),
        'as' => 'generated::oeoYksOg5Cn8CVDK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lfY8qtTf2CguDsSM' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/dados_empresa/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\DadosEmpresaController@destroy',
        'controller' => 'App\\Http\\Controllers\\DadosEmpresaController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/dados_empresa',
        'where' => 
        array (
        ),
        'as' => 'generated::lfY8qtTf2CguDsSM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::naGJ2i3vdnMJ0v9Q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/config_entrega',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\ConfigEntregaController@index',
        'controller' => 'App\\Http\\Controllers\\ConfigEntregaController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/config_entrega',
        'where' => 
        array (
        ),
        'as' => 'generated::naGJ2i3vdnMJ0v9Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OWyOdAjffV07FTFz' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/config_entrega/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\ConfigEntregaController@show',
        'controller' => 'App\\Http\\Controllers\\ConfigEntregaController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/config_entrega',
        'where' => 
        array (
        ),
        'as' => 'generated::OWyOdAjffV07FTFz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FTjawhoOadSlt4SP' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/config_entrega/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\ConfigEntregaController@create',
        'controller' => 'App\\Http\\Controllers\\ConfigEntregaController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/config_entrega',
        'where' => 
        array (
        ),
        'as' => 'generated::FTjawhoOadSlt4SP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BGMfOOLo7G8OisPS' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/config_entrega/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\ConfigEntregaController@update',
        'controller' => 'App\\Http\\Controllers\\ConfigEntregaController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/config_entrega',
        'where' => 
        array (
        ),
        'as' => 'generated::BGMfOOLo7G8OisPS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eVSM7YK05iQdXC1j' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/config_entrega/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\ConfigEntregaController@destroy',
        'controller' => 'App\\Http\\Controllers\\ConfigEntregaController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/config_entrega',
        'where' => 
        array (
        ),
        'as' => 'generated::eVSM7YK05iQdXC1j',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ygznsYtfQdJcprYh' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/permissao',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PermissaoController@index',
        'controller' => 'App\\Http\\Controllers\\PermissaoController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/permissao',
        'where' => 
        array (
        ),
        'as' => 'generated::ygznsYtfQdJcprYh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ku00V0PrPPuO1M0Y' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/permissao/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PermissaoController@show',
        'controller' => 'App\\Http\\Controllers\\PermissaoController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/permissao',
        'where' => 
        array (
        ),
        'as' => 'generated::ku00V0PrPPuO1M0Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::uUmyGK9PzNLXv9hf' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/permissao/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PermissaoController@create',
        'controller' => 'App\\Http\\Controllers\\PermissaoController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/permissao',
        'where' => 
        array (
        ),
        'as' => 'generated::uUmyGK9PzNLXv9hf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SOjFLV6L2YxLvoqp' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/permissao/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PermissaoController@update',
        'controller' => 'App\\Http\\Controllers\\PermissaoController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/permissao',
        'where' => 
        array (
        ),
        'as' => 'generated::SOjFLV6L2YxLvoqp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::49xTgb3cmRL2OgF2' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/permissao/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PermissaoController@destroy',
        'controller' => 'App\\Http\\Controllers\\PermissaoController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/permissao',
        'where' => 
        array (
        ),
        'as' => 'generated::49xTgb3cmRL2OgF2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Z8QQcUxsvXviIGDY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/area_entrega',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\AreaEntregaController@index',
        'controller' => 'App\\Http\\Controllers\\AreaEntregaController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/area_entrega',
        'where' => 
        array (
        ),
        'as' => 'generated::Z8QQcUxsvXviIGDY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lief2F2k1htjl71t' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/area_entrega/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\AreaEntregaController@show',
        'controller' => 'App\\Http\\Controllers\\AreaEntregaController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/area_entrega',
        'where' => 
        array (
        ),
        'as' => 'generated::lief2F2k1htjl71t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::K5eM0TVNZsfynty6' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/area_entrega/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\AreaEntregaController@create',
        'controller' => 'App\\Http\\Controllers\\AreaEntregaController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/area_entrega',
        'where' => 
        array (
        ),
        'as' => 'generated::K5eM0TVNZsfynty6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hS2seHMif6yWLG38' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/area_entrega/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\AreaEntregaController@update',
        'controller' => 'App\\Http\\Controllers\\AreaEntregaController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/area_entrega',
        'where' => 
        array (
        ),
        'as' => 'generated::hS2seHMif6yWLG38',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oUXGfi5yucLOhse0' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/area_entrega/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\AreaEntregaController@destroy',
        'controller' => 'App\\Http\\Controllers\\AreaEntregaController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/area_entrega',
        'where' => 
        array (
        ),
        'as' => 'generated::oUXGfi5yucLOhse0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yGNeSwHxVk2cxaaK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cupom_desconto',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CupomDescontoController@index',
        'controller' => 'App\\Http\\Controllers\\CupomDescontoController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/cupom_desconto',
        'where' => 
        array (
        ),
        'as' => 'generated::yGNeSwHxVk2cxaaK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eRDbJRHBfZF47Urm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cupom_desconto/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CupomDescontoController@show',
        'controller' => 'App\\Http\\Controllers\\CupomDescontoController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/cupom_desconto',
        'where' => 
        array (
        ),
        'as' => 'generated::eRDbJRHBfZF47Urm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::W0p1MErHJieaxvyn' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/cupom_desconto/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CupomDescontoController@create',
        'controller' => 'App\\Http\\Controllers\\CupomDescontoController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/cupom_desconto',
        'where' => 
        array (
        ),
        'as' => 'generated::W0p1MErHJieaxvyn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dUMW07jSuKZdDGpi' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/cupom_desconto/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CupomDescontoController@update',
        'controller' => 'App\\Http\\Controllers\\CupomDescontoController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/cupom_desconto',
        'where' => 
        array (
        ),
        'as' => 'generated::dUMW07jSuKZdDGpi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RaujMVQY5ykLNZFB' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/cupom_desconto/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CupomDescontoController@destroy',
        'controller' => 'App\\Http\\Controllers\\CupomDescontoController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/cupom_desconto',
        'where' => 
        array (
        ),
        'as' => 'generated::RaujMVQY5ykLNZFB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EAUifyfnn8BXVhlK' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dias_semana',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\DiasSemanaHorarioDeliveryController@index',
        'controller' => 'App\\Http\\Controllers\\DiasSemanaHorarioDeliveryController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/dias_semana',
        'where' => 
        array (
        ),
        'as' => 'generated::EAUifyfnn8BXVhlK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vIx4fSQKCJVPQmIm' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/dias_semana/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\DiasSemanaHorarioDeliveryController@show',
        'controller' => 'App\\Http\\Controllers\\DiasSemanaHorarioDeliveryController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/dias_semana',
        'where' => 
        array (
        ),
        'as' => 'generated::vIx4fSQKCJVPQmIm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::POrdNEfB7dUW4Hfs' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/dias_semana/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\DiasSemanaHorarioDeliveryController@create',
        'controller' => 'App\\Http\\Controllers\\DiasSemanaHorarioDeliveryController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/dias_semana',
        'where' => 
        array (
        ),
        'as' => 'generated::POrdNEfB7dUW4Hfs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UJn65kbQgPmyMMl0' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/dias_semana/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\DiasSemanaHorarioDeliveryController@update',
        'controller' => 'App\\Http\\Controllers\\DiasSemanaHorarioDeliveryController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/dias_semana',
        'where' => 
        array (
        ),
        'as' => 'generated::UJn65kbQgPmyMMl0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::r3XEV1fULXJWmH1m' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/dias_semana/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\DiasSemanaHorarioDeliveryController@destroy',
        'controller' => 'App\\Http\\Controllers\\DiasSemanaHorarioDeliveryController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/dias_semana',
        'where' => 
        array (
        ),
        'as' => 'generated::r3XEV1fULXJWmH1m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Of8kDDWHTcjfyi3q' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/periodo',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PeriodoController@index',
        'controller' => 'App\\Http\\Controllers\\PeriodoController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/periodo',
        'where' => 
        array (
        ),
        'as' => 'generated::Of8kDDWHTcjfyi3q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xIPnoPmnCYMLHyx9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/periodo/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PeriodoController@show',
        'controller' => 'App\\Http\\Controllers\\PeriodoController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/periodo',
        'where' => 
        array (
        ),
        'as' => 'generated::xIPnoPmnCYMLHyx9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FbxzFA2O6tue4Qy1' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/periodo/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PeriodoController@create',
        'controller' => 'App\\Http\\Controllers\\PeriodoController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/periodo',
        'where' => 
        array (
        ),
        'as' => 'generated::FbxzFA2O6tue4Qy1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GG6pLUeTkjg9HRsa' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/periodo/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PeriodoController@update',
        'controller' => 'App\\Http\\Controllers\\PeriodoController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/periodo',
        'where' => 
        array (
        ),
        'as' => 'generated::GG6pLUeTkjg9HRsa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::04hMuUxsjOHWGEpB' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/periodo/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PeriodoController@destroy',
        'controller' => 'App\\Http\\Controllers\\PeriodoController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/periodo',
        'where' => 
        array (
        ),
        'as' => 'generated::04hMuUxsjOHWGEpB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Xgu2W7sUrMl7LbW9' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fuso_horario',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\FusoHorarioController@index',
        'controller' => 'App\\Http\\Controllers\\FusoHorarioController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/fuso_horario',
        'where' => 
        array (
        ),
        'as' => 'generated::Xgu2W7sUrMl7LbW9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6zLW0fSfGG7N2oh0' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/fuso_horario/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\FusoHorarioController@show',
        'controller' => 'App\\Http\\Controllers\\FusoHorarioController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/fuso_horario',
        'where' => 
        array (
        ),
        'as' => 'generated::6zLW0fSfGG7N2oh0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hTG35Lu6k3uA7Q6m' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/fuso_horario/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\FusoHorarioController@create',
        'controller' => 'App\\Http\\Controllers\\FusoHorarioController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/fuso_horario',
        'where' => 
        array (
        ),
        'as' => 'generated::hTG35Lu6k3uA7Q6m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BB4w9KCbJqIuSzRU' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/fuso_horario/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\FusoHorarioController@update',
        'controller' => 'App\\Http\\Controllers\\FusoHorarioController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/fuso_horario',
        'where' => 
        array (
        ),
        'as' => 'generated::BB4w9KCbJqIuSzRU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2sImo9hFqMy3wuaR' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/fuso_horario/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\FusoHorarioController@destroy',
        'controller' => 'App\\Http\\Controllers\\FusoHorarioController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/fuso_horario',
        'where' => 
        array (
        ),
        'as' => 'generated::2sImo9hFqMy3wuaR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1kzo688bhQN9YK6i' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/horario_funcionamento_delivery',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\HorarioFuncionamentoDeliveryController@index',
        'controller' => 'App\\Http\\Controllers\\HorarioFuncionamentoDeliveryController@index',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/horario_funcionamento_delivery',
        'where' => 
        array (
        ),
        'as' => 'generated::1kzo688bhQN9YK6i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9R6wTva9T3uG0HMY' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/horario_funcionamento_delivery/show/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\HorarioFuncionamentoDeliveryController@show',
        'controller' => 'App\\Http\\Controllers\\HorarioFuncionamentoDeliveryController@show',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/horario_funcionamento_delivery',
        'where' => 
        array (
        ),
        'as' => 'generated::9R6wTva9T3uG0HMY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9fC24NuJYiJgCsO7' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/horario_funcionamento_delivery/create',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\HorarioFuncionamentoDeliveryController@create',
        'controller' => 'App\\Http\\Controllers\\HorarioFuncionamentoDeliveryController@create',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/horario_funcionamento_delivery',
        'where' => 
        array (
        ),
        'as' => 'generated::9fC24NuJYiJgCsO7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xe1QNaVqPfcGMhTf' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/horario_funcionamento_delivery/update/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\HorarioFuncionamentoDeliveryController@update',
        'controller' => 'App\\Http\\Controllers\\HorarioFuncionamentoDeliveryController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/horario_funcionamento_delivery',
        'where' => 
        array (
        ),
        'as' => 'generated::xe1QNaVqPfcGMhTf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZeUMNWFkWPrmlDQs' => 
    array (
      'methods' => 
      array (
        0 => 'DELETE',
      ),
      'uri' => 'api/horario_funcionamento_delivery/destroy/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\HorarioFuncionamentoDeliveryController@destroy',
        'controller' => 'App\\Http\\Controllers\\HorarioFuncionamentoDeliveryController@destroy',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/horario_funcionamento_delivery',
        'where' => 
        array (
        ),
        'as' => 'generated::ZeUMNWFkWPrmlDQs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::li090CvDcgp1AAnT' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/estatistica/receita_dia',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EstatisticaController@receitaDia',
        'controller' => 'App\\Http\\Controllers\\EstatisticaController@receitaDia',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/estatistica',
        'where' => 
        array (
        ),
        'as' => 'generated::li090CvDcgp1AAnT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::h5kzTIxPPydTxorM' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/estatistica/num_pedidos_dia',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EstatisticaController@pedidosPorDia',
        'controller' => 'App\\Http\\Controllers\\EstatisticaController@pedidosPorDia',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/estatistica',
        'where' => 
        array (
        ),
        'as' => 'generated::h5kzTIxPPydTxorM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4lDh5LMKk26ZURO2' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pagamento_unidade/associar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PagamentoUnidadeController@associar',
        'controller' => 'App\\Http\\Controllers\\PagamentoUnidadeController@associar',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/pagamento_unidade',
        'where' => 
        array (
        ),
        'as' => 'generated::4lDh5LMKk26ZURO2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wsBcoDBVucp64Rzq' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pagamento_unidade/desassociar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PagamentoUnidadeController@desassociar',
        'controller' => 'App\\Http\\Controllers\\PagamentoUnidadeController@desassociar',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/pagamento_unidade',
        'where' => 
        array (
        ),
        'as' => 'generated::wsBcoDBVucp64Rzq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZHWPrpzFrTmQua41' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{apelido}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UnidadeRestauranteController@byApelido',
        'controller' => 'App\\Http\\Controllers\\UnidadeRestauranteController@byApelido',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZHWPrpzFrTmQua41',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3vOfyOMNSootkz0L' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{apelido}/{cidade}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\UnidadeRestauranteController@byApelidoCidade',
        'controller' => 'App\\Http\\Controllers\\UnidadeRestauranteController@byApelidoCidade',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::3vOfyOMNSootkz0L',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Zm4F393d453L1Rqu' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/register',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@register',
        'controller' => 'App\\Http\\Controllers\\AuthController@register',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::Zm4F393d453L1Rqu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZK2BZxXdsbGTApHp' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/login',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@login',
        'controller' => 'App\\Http\\Controllers\\AuthController@login',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api',
        'where' => 
        array (
        ),
        'as' => 'generated::ZK2BZxXdsbGTApHp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
  ),
)
);
