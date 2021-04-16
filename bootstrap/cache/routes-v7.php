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
            '_route' => 'generated::veMTOSZlkYbEfpYs',
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
            '_route' => 'generated::AQr2BsoFZX7tpgou',
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
            '_route' => 'generated::Fdit4J9p8Cgdn3DG',
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
            '_route' => 'generated::IHCmMrdGd5lYaR7e',
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
            '_route' => 'generated::wFYR15aVP4baJhYj',
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
            '_route' => 'generated::gUsb6POpqE7NtAVi',
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
            '_route' => 'generated::2Vj5ETHZTRM5DFsZ',
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
            '_route' => 'generated::Iiuht1y1AWe2wZmH',
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
            '_route' => 'generated::2HxiNlbtnt0n48LE',
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
            '_route' => 'generated::BJyiQ4i8hyt9YCrg',
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
            '_route' => 'generated::bXnsEwEdQHkLHLOh',
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
            '_route' => 'generated::trzIoR8xic8JtFmm',
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
            '_route' => 'generated::tLdy0rQJSq3mjEIH',
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
            '_route' => 'generated::ywJQMX20fsRZ6yeJ',
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
            '_route' => 'generated::5weKEqpj6EdXVnys',
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
            '_route' => 'generated::n5yVf44OOKAEBpTE',
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
            '_route' => 'generated::FdlddetuvhhFoxIM',
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
            '_route' => 'generated::zScjWP4QR5qlDXl0',
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
            '_route' => 'generated::jiOXuxahS46jD6UU',
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
            '_route' => 'generated::IAPRUxgdlAMo8dzq',
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
            '_route' => 'generated::xxwGgRnUDkbVB2wt',
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
            '_route' => 'generated::Zs5n3V4LNLppN2u8',
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
            '_route' => 'generated::sQLw3mJz8OqQXy36',
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
            '_route' => 'generated::PPrrMlefGjKQ5C7q',
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
            '_route' => 'generated::qpmDsZ6SDxKB6zv5',
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
            '_route' => 'generated::q9jqpITAlbEestDL',
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
            '_route' => 'generated::lPZGdWKOWK4R8csq',
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
            '_route' => 'generated::4l12xNSLjrQyTEyG',
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
            '_route' => 'generated::vFUF3faYVToYqUIy',
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
            '_route' => 'generated::Cexmn1bLSrUhqs5a',
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
            '_route' => 'generated::MAJ97ZFRH53X2LKw',
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
            '_route' => 'generated::cckyC2EHZIKpfaN0',
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
            '_route' => 'generated::YC7kHhcoG5zrJiY9',
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
            '_route' => 'generated::mNP23gMGXRg1xqdR',
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
            '_route' => 'generated::fPUB156FBNokljcy',
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
            '_route' => 'generated::pr9VtjXW6xc4dt5E',
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
            '_route' => 'generated::OHJSKm6B3JbOUZJ7',
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
            '_route' => 'generated::gXg8C7ldPxyd2Xx6',
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
            '_route' => 'generated::dCb5ulVTPQJ3JjMG',
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
            '_route' => 'generated::VjdmX9txj5eJMr8v',
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
            '_route' => 'generated::q0OzrEkJyLaeHtQn',
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
            '_route' => 'generated::WGTlTYZCw4TA4bZ5',
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
            '_route' => 'generated::ynQHi0lAJOyA6Cg1',
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
            '_route' => 'generated::blMVO8cYAijqNeMx',
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
            '_route' => 'generated::qsRK3UAMYSPy7qe0',
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
            '_route' => 'generated::pzgMxrJjT2SC3Tpc',
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
            '_route' => 'generated::1Wqz1e3mjjilGgrf',
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
            '_route' => 'generated::b5exqQkP22I1OCTL',
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
            '_route' => 'generated::123X0UogWg4IuuVj',
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
            '_route' => 'generated::SWbIJaLy7CXUAwMm',
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
            '_route' => 'generated::ww1gyertXOMOq3yh',
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
            '_route' => 'generated::F5W8pjtfNIo3mKQZ',
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
            '_route' => 'generated::2RwoxgTCKu74OxTm',
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
            '_route' => 'generated::VaNGGDeqP4HAysiO',
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
            '_route' => 'generated::eFfkiaCb6mgES6KV',
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
            '_route' => 'generated::WGoeqGb31y1XXKGd',
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
            '_route' => 'generated::sisB6CIOJbXnTIna',
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
            '_route' => 'generated::4ERj9JgntJAONMVz',
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
            '_route' => 'generated::TdD1zPpJA26mxzy9',
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
            '_route' => 'generated::RRwg3YGUfDOBKjKQ',
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
            '_route' => 'generated::FADJGiWtxadRREvv',
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
            '_route' => 'generated::yrAD7KPmev5Tm8wf',
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
            '_route' => 'generated::Uphn4CDFDWQ7ETBM',
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
            '_route' => 'generated::SMEWAalK2sTjl0Wv',
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
            '_route' => 'generated::lUeK8VJVsD2FypBq',
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
            '_route' => 'generated::dxY17cgqwrDCXrXC',
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
            '_route' => 'generated::4dNrSczEndhO9faV',
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
            '_route' => 'generated::R0DZuoV4rAWoXUSE',
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
            '_route' => 'generated::dYknbsTSJJLTvEej',
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
            '_route' => 'generated::sBB8W9B5v4CtXi6Q',
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
            '_route' => 'generated::Ky99zdmgg0J6hnCg',
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
            '_route' => 'generated::dRilvqTsxwiqPA40',
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
            '_route' => 'generated::zLNZs34zvgfjmz85',
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
            '_route' => 'generated::Hrow79rhznet4Cbw',
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
            '_route' => 'generated::t0n6XYmNniaySWKF',
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
            '_route' => 'generated::P3GU0zqjEOuRVjoe',
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
            '_route' => 'generated::vlJNuXOiLO7Jz3HF',
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
            '_route' => 'generated::F0PvwqvqJGqWsBt5',
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
            '_route' => 'generated::pSFvdy3vrp7bYwlF',
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
            '_route' => 'generated::NVG26ZjoMj5KAS4S',
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
            '_route' => 'generated::V5cuDQPPPbY1JYut',
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
            '_route' => 'generated::HbuYk8cRfWimqmMH',
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
            '_route' => 'generated::kKQQPab1V1PZezvh',
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
            '_route' => 'generated::DFGqe4sec8t67IKJ',
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
            '_route' => 'generated::Rfi5w9tN4jpe0VbM',
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
            '_route' => 'generated::HNrfLz8VpAiB2IMy',
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
            '_route' => 'generated::LePNJvmXcw8h9Xbm',
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
            '_route' => 'generated::QIi2wLDz9RqZZbcV',
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
            '_route' => 'generated::JxX4Ag792fYe864F',
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
            '_route' => 'generated::JH6wMTaXG8HPbvip',
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
            '_route' => 'generated::OwR90M6bRUDhBI5e',
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
            '_route' => 'generated::w8XAPrkDboQQdJYH',
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
            '_route' => 'generated::izOeGZ3U5zQJ7xup',
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
            '_route' => 'generated::VbQw6SdjqVUx55dj',
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
            '_route' => 'generated::Px733lc8jXhTjlyy',
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
            '_route' => 'generated::Iuq8ZbTjGJW6glxE',
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
            '_route' => 'generated::V3vUoJSYMg0wIWh3',
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
            '_route' => 'generated::I04LHYRGSsEocc1G',
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
            '_route' => 'generated::TJ7ifh0NJ1VrfRbL',
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
            '_route' => 'generated::Zn7ekGpCa7NfBByn',
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
            '_route' => 'generated::KFKWvV1Ooh2peNgW',
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
            '_route' => 'generated::75R1rlvZdbthdKYU',
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
            '_route' => 'generated::8dRoyuXuFXyHJvZ7',
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
            '_route' => 'generated::Qej4S8IgxypGx4Lq',
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
            '_route' => 'generated::UjHkFk6QcYX1bOmA',
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
            '_route' => 'generated::yt135yfwCjDZVj1F',
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
            '_route' => 'generated::FhPpy0SWJUV8ug3x',
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
            '_route' => 'generated::SjBsd1q5qwaIM85f',
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
            '_route' => 'generated::Biofe3WVQAsN4G31',
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
            '_route' => 'generated::kYUvTSfDhLgQ8e6t',
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
            '_route' => 'generated::85I0dPV9hqrRbqHa',
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
            '_route' => 'generated::SgovKBwqJhkqYjIC',
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
            '_route' => 'generated::rKlW9VsUNBJ2Mnof',
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
            '_route' => 'generated::tLHGWIoZM6Wbm8OC',
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
            '_route' => 'generated::lHLQPiulFyEPhPwr',
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
            '_route' => 'generated::TmdYmwg0sG7qSNcY',
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
            '_route' => 'generated::B0vcGj0WXVOYOQdc',
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
            '_route' => 'generated::n5Z8pTXiIAJNpWm7',
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
            '_route' => 'generated::BGfjaAdTS11UBcvL',
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
            '_route' => 'generated::zRd9st0EvZJ1VI11',
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
            '_route' => 'generated::cYKqh4NEqtcSJEnI',
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
            '_route' => 'generated::tYBp1Zf0vnHaFtkm',
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
            '_route' => 'generated::aS9bISqyGzRYdOHq',
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
            '_route' => 'generated::4hPvhbZj6lZUq7JI',
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
            '_route' => 'generated::KHDNrE9eJBejHAHc',
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
            '_route' => 'generated::9DWVHOomUTefSo2R',
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
            '_route' => 'generated::hikIZfzbo8BY2mtB',
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
            '_route' => 'generated::mRRd3IXPP5nHlMuK',
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
            '_route' => 'generated::LjP1Jdf9skmYcaFq',
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
            '_route' => 'generated::cetnOaoErBHOy9lA',
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
            '_route' => 'generated::8Gl01TDJepNqPM4v',
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
            '_route' => 'generated::fdqZe7pTaPmtnqOM',
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
            '_route' => 'generated::crF1g6pNUzIkMwkl',
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
            '_route' => 'generated::CelUvnsQ3jdhRx4D',
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
            '_route' => 'generated::KMMy9uZjbzvtBOlZ',
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
            '_route' => 'generated::QPuy1XuN4evXq8Pt',
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
            '_route' => 'generated::xIzQ4Azn7L6qBa6S',
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
            '_route' => 'generated::HA6XpGa6TJFREU3a',
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
            '_route' => 'generated::B43lCsuhnDyyfHnS',
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
            '_route' => 'generated::4tHGjzVx4MYMh7oN',
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
            '_route' => 'generated::B5TmXK7RAK7bfP4b',
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
            '_route' => 'generated::s9PMFOR9Yv0xN9nb',
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
            '_route' => 'generated::bqwR6bVj1AVy30pw',
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
            '_route' => 'generated::vO7TIqowrh0W7f3x',
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
            '_route' => 'generated::EAgr5w2ABANdXXyM',
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
            '_route' => 'generated::tswzd9Oa3QFhACbu',
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
            '_route' => 'generated::ATvzp6wlXUQMDL3i',
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
            '_route' => 'generated::7EvV1biwsfxXZXjO',
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
            '_route' => 'generated::ixDbtBNUyzMJiU8f',
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
            '_route' => 'generated::QxF7OuaWo30zENpv',
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
            '_route' => 'generated::UOkOE92g0DCfDcZL',
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
            '_route' => 'generated::J0Icwv1L1gYCb0s9',
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
            '_route' => 'generated::MfCnfZmCG9aPYLBr',
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
            '_route' => 'generated::Ij8ayGYS0e3ekjVD',
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
            '_route' => 'generated::b7Qmzq4mCJ8SSg6e',
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
            '_route' => 'generated::mHKsmQ6AECYl7xDr',
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
            '_route' => 'generated::Wav8kjJ3LwAY6Q9J',
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
            '_route' => 'generated::TesPBroNm0MbsQXm',
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
            '_route' => 'generated::3JVjsw21fXFmGoqR',
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
            '_route' => 'generated::NlKiTnftipcBOctM',
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
            '_route' => 'generated::3wsR64NVgqM3s0hr',
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
            '_route' => 'generated::MVocU48CmDSJhnwa',
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
            '_route' => 'generated::TpVXeiVSpP6Vxmhe',
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
            '_route' => 'generated::Swamz0znrh9Oae3y',
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
            '_route' => 'generated::85VQwdJgz02M3zQq',
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
            '_route' => 'generated::8eL4djrWakhRe7FZ',
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
            '_route' => 'generated::lFkZVvfBren9lWP1',
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
            '_route' => 'generated::edK1GrCf9nPVpTnb',
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
            '_route' => 'generated::kB8vpfygleuuB81x',
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
            '_route' => 'generated::qFKIbkYHtbaCS02D',
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
            '_route' => 'generated::H1zjhoWwrHbU7nhF',
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
            '_route' => 'generated::eDgp0yNpw8wB5IWG',
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
            '_route' => 'generated::kYfA5eGWPgMyjIGQ',
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
            '_route' => 'generated::Y0v455v8kPQGTlBg',
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
            '_route' => 'generated::m4fBeA4X36lpDXb4',
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
            '_route' => 'generated::fEckVHurwHIq8Ksv',
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
            '_route' => 'generated::eoUPiMk24LFpOln8',
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
            '_route' => 'generated::c9Z6NNLTyDbk17qY',
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
            '_route' => 'generated::XLO1lAQ1QiA0cWlD',
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
            '_route' => 'generated::17xJbmniWCZfusXo',
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
            '_route' => 'generated::PBRdCykbyR8NYtTx',
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
            '_route' => 'generated::4cYcwM9WhiXjPGIw',
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
    'generated::veMTOSZlkYbEfpYs' => 
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
        'as' => 'generated::veMTOSZlkYbEfpYs',
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
    'generated::t0n6XYmNniaySWKF' => 
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
        'as' => 'generated::t0n6XYmNniaySWKF',
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
    'generated::AQr2BsoFZX7tpgou' => 
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
        'as' => 'generated::AQr2BsoFZX7tpgou',
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
    'generated::P3GU0zqjEOuRVjoe' => 
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
        'as' => 'generated::P3GU0zqjEOuRVjoe',
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
    'generated::vlJNuXOiLO7Jz3HF' => 
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
        'as' => 'generated::vlJNuXOiLO7Jz3HF',
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
    'generated::Fdit4J9p8Cgdn3DG' => 
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
        'as' => 'generated::Fdit4J9p8Cgdn3DG',
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
    'generated::LePNJvmXcw8h9Xbm' => 
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
        'as' => 'generated::LePNJvmXcw8h9Xbm',
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
    'generated::IHCmMrdGd5lYaR7e' => 
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
        'as' => 'generated::IHCmMrdGd5lYaR7e',
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
    'generated::Qej4S8IgxypGx4Lq' => 
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
        'as' => 'generated::Qej4S8IgxypGx4Lq',
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
    'generated::wFYR15aVP4baJhYj' => 
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
        'as' => 'generated::wFYR15aVP4baJhYj',
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
    'generated::UjHkFk6QcYX1bOmA' => 
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
        'as' => 'generated::UjHkFk6QcYX1bOmA',
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
    'generated::yt135yfwCjDZVj1F' => 
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
        'as' => 'generated::yt135yfwCjDZVj1F',
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
    'generated::gUsb6POpqE7NtAVi' => 
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
        'as' => 'generated::gUsb6POpqE7NtAVi',
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
    'generated::kYUvTSfDhLgQ8e6t' => 
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
        'as' => 'generated::kYUvTSfDhLgQ8e6t',
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
    'generated::2Vj5ETHZTRM5DFsZ' => 
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
        'as' => 'generated::2Vj5ETHZTRM5DFsZ',
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
    'generated::85I0dPV9hqrRbqHa' => 
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
        'as' => 'generated::85I0dPV9hqrRbqHa',
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
    'generated::SgovKBwqJhkqYjIC' => 
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
        'as' => 'generated::SgovKBwqJhkqYjIC',
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
    'generated::Iiuht1y1AWe2wZmH' => 
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
        'as' => 'generated::Iiuht1y1AWe2wZmH',
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
    'generated::8Gl01TDJepNqPM4v' => 
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
        'as' => 'generated::8Gl01TDJepNqPM4v',
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
    'generated::fdqZe7pTaPmtnqOM' => 
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
        'as' => 'generated::fdqZe7pTaPmtnqOM',
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
    'generated::2HxiNlbtnt0n48LE' => 
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
        'as' => 'generated::2HxiNlbtnt0n48LE',
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
    'generated::crF1g6pNUzIkMwkl' => 
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
        'as' => 'generated::crF1g6pNUzIkMwkl',
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
    'generated::CelUvnsQ3jdhRx4D' => 
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
        'as' => 'generated::CelUvnsQ3jdhRx4D',
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
    'generated::BJyiQ4i8hyt9YCrg' => 
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
        'as' => 'generated::BJyiQ4i8hyt9YCrg',
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
    'generated::KMMy9uZjbzvtBOlZ' => 
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
        'as' => 'generated::KMMy9uZjbzvtBOlZ',
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
    'generated::bXnsEwEdQHkLHLOh' => 
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
        'as' => 'generated::bXnsEwEdQHkLHLOh',
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
    'generated::QPuy1XuN4evXq8Pt' => 
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
        'as' => 'generated::QPuy1XuN4evXq8Pt',
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
    'generated::xIzQ4Azn7L6qBa6S' => 
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
        'as' => 'generated::xIzQ4Azn7L6qBa6S',
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
    'generated::trzIoR8xic8JtFmm' => 
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
        'as' => 'generated::trzIoR8xic8JtFmm',
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
    'generated::HA6XpGa6TJFREU3a' => 
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
        'as' => 'generated::HA6XpGa6TJFREU3a',
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
    'generated::tLdy0rQJSq3mjEIH' => 
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
        'as' => 'generated::tLdy0rQJSq3mjEIH',
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
    'generated::B43lCsuhnDyyfHnS' => 
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
        'as' => 'generated::B43lCsuhnDyyfHnS',
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
    'generated::4tHGjzVx4MYMh7oN' => 
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
        'as' => 'generated::4tHGjzVx4MYMh7oN',
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
    'generated::ywJQMX20fsRZ6yeJ' => 
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
        'as' => 'generated::ywJQMX20fsRZ6yeJ',
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
    'generated::B5TmXK7RAK7bfP4b' => 
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
        'as' => 'generated::B5TmXK7RAK7bfP4b',
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
    'generated::5weKEqpj6EdXVnys' => 
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
        'as' => 'generated::5weKEqpj6EdXVnys',
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
    'generated::s9PMFOR9Yv0xN9nb' => 
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
        'as' => 'generated::s9PMFOR9Yv0xN9nb',
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
    'generated::bqwR6bVj1AVy30pw' => 
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
        'as' => 'generated::bqwR6bVj1AVy30pw',
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
    'generated::n5yVf44OOKAEBpTE' => 
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
        'as' => 'generated::n5yVf44OOKAEBpTE',
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
    'generated::F0PvwqvqJGqWsBt5' => 
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
        'as' => 'generated::F0PvwqvqJGqWsBt5',
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
    'generated::FdlddetuvhhFoxIM' => 
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
        'as' => 'generated::FdlddetuvhhFoxIM',
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
    'generated::pSFvdy3vrp7bYwlF' => 
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
        'as' => 'generated::pSFvdy3vrp7bYwlF',
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
    'generated::NVG26ZjoMj5KAS4S' => 
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
        'as' => 'generated::NVG26ZjoMj5KAS4S',
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
    'generated::zScjWP4QR5qlDXl0' => 
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
        'as' => 'generated::zScjWP4QR5qlDXl0',
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
    'generated::QxF7OuaWo30zENpv' => 
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
        'as' => 'generated::QxF7OuaWo30zENpv',
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
    'generated::jiOXuxahS46jD6UU' => 
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
        'as' => 'generated::jiOXuxahS46jD6UU',
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
    'generated::UOkOE92g0DCfDcZL' => 
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
        'as' => 'generated::UOkOE92g0DCfDcZL',
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
    'generated::J0Icwv1L1gYCb0s9' => 
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
        'as' => 'generated::J0Icwv1L1gYCb0s9',
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
    'generated::IAPRUxgdlAMo8dzq' => 
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
        'as' => 'generated::IAPRUxgdlAMo8dzq',
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
    'generated::mHKsmQ6AECYl7xDr' => 
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
        'as' => 'generated::mHKsmQ6AECYl7xDr',
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
    'generated::xxwGgRnUDkbVB2wt' => 
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
        'as' => 'generated::xxwGgRnUDkbVB2wt',
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
    'generated::Wav8kjJ3LwAY6Q9J' => 
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
        'as' => 'generated::Wav8kjJ3LwAY6Q9J',
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
    'generated::TesPBroNm0MbsQXm' => 
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
        'as' => 'generated::TesPBroNm0MbsQXm',
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
    'generated::Zs5n3V4LNLppN2u8' => 
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
        'as' => 'generated::Zs5n3V4LNLppN2u8',
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
    'generated::85VQwdJgz02M3zQq' => 
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
        'as' => 'generated::85VQwdJgz02M3zQq',
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
    'generated::8eL4djrWakhRe7FZ' => 
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
        'as' => 'generated::8eL4djrWakhRe7FZ',
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
    'generated::edK1GrCf9nPVpTnb' => 
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
        'as' => 'generated::edK1GrCf9nPVpTnb',
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
    'generated::sQLw3mJz8OqQXy36' => 
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
        'as' => 'generated::sQLw3mJz8OqQXy36',
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
    'generated::lFkZVvfBren9lWP1' => 
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
        'as' => 'generated::lFkZVvfBren9lWP1',
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
    'generated::kB8vpfygleuuB81x' => 
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
        'as' => 'generated::kB8vpfygleuuB81x',
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
    'generated::PPrrMlefGjKQ5C7q' => 
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
        'as' => 'generated::PPrrMlefGjKQ5C7q',
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
    'generated::QIi2wLDz9RqZZbcV' => 
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
        'as' => 'generated::QIi2wLDz9RqZZbcV',
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
    'generated::w8XAPrkDboQQdJYH' => 
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
        'as' => 'generated::w8XAPrkDboQQdJYH',
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
    'generated::qpmDsZ6SDxKB6zv5' => 
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
        'as' => 'generated::qpmDsZ6SDxKB6zv5',
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
    'generated::izOeGZ3U5zQJ7xup' => 
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
        'as' => 'generated::izOeGZ3U5zQJ7xup',
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
    'generated::VbQw6SdjqVUx55dj' => 
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
        'as' => 'generated::VbQw6SdjqVUx55dj',
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
    'generated::Px733lc8jXhTjlyy' => 
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
        'as' => 'generated::Px733lc8jXhTjlyy',
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
    'generated::q9jqpITAlbEestDL' => 
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
        'as' => 'generated::q9jqpITAlbEestDL',
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
    'generated::lPZGdWKOWK4R8csq' => 
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
        'as' => 'generated::lPZGdWKOWK4R8csq',
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
    'generated::Iuq8ZbTjGJW6glxE' => 
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
        'as' => 'generated::Iuq8ZbTjGJW6glxE',
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
    'generated::V3vUoJSYMg0wIWh3' => 
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
        'as' => 'generated::V3vUoJSYMg0wIWh3',
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
    'generated::4l12xNSLjrQyTEyG' => 
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
        'as' => 'generated::4l12xNSLjrQyTEyG',
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
    'generated::vFUF3faYVToYqUIy' => 
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
        'as' => 'generated::vFUF3faYVToYqUIy',
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
    'generated::I04LHYRGSsEocc1G' => 
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
        'as' => 'generated::I04LHYRGSsEocc1G',
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
    'generated::Cexmn1bLSrUhqs5a' => 
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
        'as' => 'generated::Cexmn1bLSrUhqs5a',
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
    'generated::TJ7ifh0NJ1VrfRbL' => 
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
        'as' => 'generated::TJ7ifh0NJ1VrfRbL',
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
    'generated::Zn7ekGpCa7NfBByn' => 
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
        'as' => 'generated::Zn7ekGpCa7NfBByn',
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
    'generated::MAJ97ZFRH53X2LKw' => 
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
        'as' => 'generated::MAJ97ZFRH53X2LKw',
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
    'generated::KFKWvV1Ooh2peNgW' => 
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
        'as' => 'generated::KFKWvV1Ooh2peNgW',
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
    'generated::cckyC2EHZIKpfaN0' => 
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
        'as' => 'generated::cckyC2EHZIKpfaN0',
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
    'generated::75R1rlvZdbthdKYU' => 
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
        'as' => 'generated::75R1rlvZdbthdKYU',
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
    'generated::8dRoyuXuFXyHJvZ7' => 
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
        'as' => 'generated::8dRoyuXuFXyHJvZ7',
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
    'generated::YC7kHhcoG5zrJiY9' => 
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
        'as' => 'generated::YC7kHhcoG5zrJiY9',
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
    'generated::JxX4Ag792fYe864F' => 
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
        'as' => 'generated::JxX4Ag792fYe864F',
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
    'generated::mNP23gMGXRg1xqdR' => 
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
        'as' => 'generated::mNP23gMGXRg1xqdR',
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
    'generated::JH6wMTaXG8HPbvip' => 
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
        'as' => 'generated::JH6wMTaXG8HPbvip',
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
    'generated::OwR90M6bRUDhBI5e' => 
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
        'as' => 'generated::OwR90M6bRUDhBI5e',
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
    'generated::fPUB156FBNokljcy' => 
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
        'as' => 'generated::fPUB156FBNokljcy',
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
    'generated::pr9VtjXW6xc4dt5E' => 
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
        'as' => 'generated::pr9VtjXW6xc4dt5E',
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
    'generated::V5cuDQPPPbY1JYut' => 
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
        'as' => 'generated::V5cuDQPPPbY1JYut',
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
    'generated::OHJSKm6B3JbOUZJ7' => 
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
        'as' => 'generated::OHJSKm6B3JbOUZJ7',
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
    'generated::HbuYk8cRfWimqmMH' => 
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
        'as' => 'generated::HbuYk8cRfWimqmMH',
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
    'generated::kKQQPab1V1PZezvh' => 
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
        'as' => 'generated::kKQQPab1V1PZezvh',
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
    'generated::gXg8C7ldPxyd2Xx6' => 
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
        'as' => 'generated::gXg8C7ldPxyd2Xx6',
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
    'generated::qFKIbkYHtbaCS02D' => 
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
        'as' => 'generated::qFKIbkYHtbaCS02D',
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
    'generated::dCb5ulVTPQJ3JjMG' => 
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
        'as' => 'generated::dCb5ulVTPQJ3JjMG',
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
    'generated::H1zjhoWwrHbU7nhF' => 
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
        'as' => 'generated::H1zjhoWwrHbU7nhF',
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
    'generated::eDgp0yNpw8wB5IWG' => 
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
        'as' => 'generated::eDgp0yNpw8wB5IWG',
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
    'generated::VjdmX9txj5eJMr8v' => 
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
        'as' => 'generated::VjdmX9txj5eJMr8v',
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
    'generated::3JVjsw21fXFmGoqR' => 
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
        'as' => 'generated::3JVjsw21fXFmGoqR',
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
    'generated::q0OzrEkJyLaeHtQn' => 
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
        'as' => 'generated::q0OzrEkJyLaeHtQn',
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
    'generated::NlKiTnftipcBOctM' => 
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
        'as' => 'generated::NlKiTnftipcBOctM',
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
    'generated::3wsR64NVgqM3s0hr' => 
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
        'as' => 'generated::3wsR64NVgqM3s0hr',
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
    'generated::WGTlTYZCw4TA4bZ5' => 
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
        'as' => 'generated::WGTlTYZCw4TA4bZ5',
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
    'generated::ynQHi0lAJOyA6Cg1' => 
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
        'as' => 'generated::ynQHi0lAJOyA6Cg1',
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
    'generated::rKlW9VsUNBJ2Mnof' => 
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
        'as' => 'generated::rKlW9VsUNBJ2Mnof',
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
    'generated::blMVO8cYAijqNeMx' => 
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
        'as' => 'generated::blMVO8cYAijqNeMx',
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
    'generated::tLHGWIoZM6Wbm8OC' => 
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
        'as' => 'generated::tLHGWIoZM6Wbm8OC',
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
    'generated::lHLQPiulFyEPhPwr' => 
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
        'as' => 'generated::lHLQPiulFyEPhPwr',
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
    'generated::qsRK3UAMYSPy7qe0' => 
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
        'as' => 'generated::qsRK3UAMYSPy7qe0',
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
    'generated::TmdYmwg0sG7qSNcY' => 
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
        'as' => 'generated::TmdYmwg0sG7qSNcY',
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
    'generated::pzgMxrJjT2SC3Tpc' => 
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
        'as' => 'generated::pzgMxrJjT2SC3Tpc',
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
    'generated::B0vcGj0WXVOYOQdc' => 
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
        'as' => 'generated::B0vcGj0WXVOYOQdc',
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
    'generated::n5Z8pTXiIAJNpWm7' => 
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
        'as' => 'generated::n5Z8pTXiIAJNpWm7',
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
    'generated::1Wqz1e3mjjilGgrf' => 
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
        'as' => 'generated::1Wqz1e3mjjilGgrf',
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
    'generated::BGfjaAdTS11UBcvL' => 
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
        'as' => 'generated::BGfjaAdTS11UBcvL',
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
    'generated::b5exqQkP22I1OCTL' => 
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
        'as' => 'generated::b5exqQkP22I1OCTL',
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
    'generated::zRd9st0EvZJ1VI11' => 
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
        'as' => 'generated::zRd9st0EvZJ1VI11',
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
    'generated::cYKqh4NEqtcSJEnI' => 
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
        'as' => 'generated::cYKqh4NEqtcSJEnI',
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
    'generated::123X0UogWg4IuuVj' => 
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
        'as' => 'generated::123X0UogWg4IuuVj',
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
    'generated::tYBp1Zf0vnHaFtkm' => 
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
        'as' => 'generated::tYBp1Zf0vnHaFtkm',
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
    'generated::SWbIJaLy7CXUAwMm' => 
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
        'as' => 'generated::SWbIJaLy7CXUAwMm',
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
    'generated::aS9bISqyGzRYdOHq' => 
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
        'as' => 'generated::aS9bISqyGzRYdOHq',
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
    'generated::4hPvhbZj6lZUq7JI' => 
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
        'as' => 'generated::4hPvhbZj6lZUq7JI',
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
    'generated::ww1gyertXOMOq3yh' => 
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
        'as' => 'generated::ww1gyertXOMOq3yh',
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
    'generated::DFGqe4sec8t67IKJ' => 
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
        'as' => 'generated::DFGqe4sec8t67IKJ',
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
    'generated::F5W8pjtfNIo3mKQZ' => 
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
        'as' => 'generated::F5W8pjtfNIo3mKQZ',
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
    'generated::Rfi5w9tN4jpe0VbM' => 
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
        'as' => 'generated::Rfi5w9tN4jpe0VbM',
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
    'generated::HNrfLz8VpAiB2IMy' => 
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
        'as' => 'generated::HNrfLz8VpAiB2IMy',
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
    'generated::2RwoxgTCKu74OxTm' => 
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
        'as' => 'generated::2RwoxgTCKu74OxTm',
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
    'generated::kYfA5eGWPgMyjIGQ' => 
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
        'as' => 'generated::kYfA5eGWPgMyjIGQ',
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
    'generated::VaNGGDeqP4HAysiO' => 
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
        'as' => 'generated::VaNGGDeqP4HAysiO',
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
    'generated::Y0v455v8kPQGTlBg' => 
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
        'as' => 'generated::Y0v455v8kPQGTlBg',
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
    'generated::m4fBeA4X36lpDXb4' => 
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
        'as' => 'generated::m4fBeA4X36lpDXb4',
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
    'generated::eFfkiaCb6mgES6KV' => 
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
        'as' => 'generated::eFfkiaCb6mgES6KV',
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
    'generated::ATvzp6wlXUQMDL3i' => 
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
        'as' => 'generated::ATvzp6wlXUQMDL3i',
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
    'generated::WGoeqGb31y1XXKGd' => 
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
        'as' => 'generated::WGoeqGb31y1XXKGd',
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
    'generated::7EvV1biwsfxXZXjO' => 
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
        'as' => 'generated::7EvV1biwsfxXZXjO',
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
    'generated::ixDbtBNUyzMJiU8f' => 
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
        'as' => 'generated::ixDbtBNUyzMJiU8f',
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
    'generated::sisB6CIOJbXnTIna' => 
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
        'as' => 'generated::sisB6CIOJbXnTIna',
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
    'generated::KHDNrE9eJBejHAHc' => 
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
        'as' => 'generated::KHDNrE9eJBejHAHc',
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
    'generated::4ERj9JgntJAONMVz' => 
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
        'as' => 'generated::4ERj9JgntJAONMVz',
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
    'generated::9DWVHOomUTefSo2R' => 
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
        'as' => 'generated::9DWVHOomUTefSo2R',
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
    'generated::hikIZfzbo8BY2mtB' => 
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
        'as' => 'generated::hikIZfzbo8BY2mtB',
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
    'generated::TdD1zPpJA26mxzy9' => 
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
        'as' => 'generated::TdD1zPpJA26mxzy9',
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
    'generated::MVocU48CmDSJhnwa' => 
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
        'as' => 'generated::MVocU48CmDSJhnwa',
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
    'generated::RRwg3YGUfDOBKjKQ' => 
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
        'as' => 'generated::RRwg3YGUfDOBKjKQ',
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
    'generated::TpVXeiVSpP6Vxmhe' => 
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
        'as' => 'generated::TpVXeiVSpP6Vxmhe',
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
    'generated::Swamz0znrh9Oae3y' => 
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
        'as' => 'generated::Swamz0znrh9Oae3y',
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
    'generated::FADJGiWtxadRREvv' => 
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
        'as' => 'generated::FADJGiWtxadRREvv',
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
    'generated::vO7TIqowrh0W7f3x' => 
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
        'as' => 'generated::vO7TIqowrh0W7f3x',
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
    'generated::yrAD7KPmev5Tm8wf' => 
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
        'as' => 'generated::yrAD7KPmev5Tm8wf',
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
    'generated::EAgr5w2ABANdXXyM' => 
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
        'as' => 'generated::EAgr5w2ABANdXXyM',
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
    'generated::tswzd9Oa3QFhACbu' => 
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
        'as' => 'generated::tswzd9Oa3QFhACbu',
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
    'generated::Uphn4CDFDWQ7ETBM' => 
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
        'as' => 'generated::Uphn4CDFDWQ7ETBM',
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
    'generated::fEckVHurwHIq8Ksv' => 
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
        'as' => 'generated::fEckVHurwHIq8Ksv',
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
    'generated::SMEWAalK2sTjl0Wv' => 
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
        'as' => 'generated::SMEWAalK2sTjl0Wv',
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
    'generated::eoUPiMk24LFpOln8' => 
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
        'as' => 'generated::eoUPiMk24LFpOln8',
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
    'generated::c9Z6NNLTyDbk17qY' => 
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
        'as' => 'generated::c9Z6NNLTyDbk17qY',
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
    'generated::lUeK8VJVsD2FypBq' => 
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
        'as' => 'generated::lUeK8VJVsD2FypBq',
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
    'generated::mRRd3IXPP5nHlMuK' => 
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
        'as' => 'generated::mRRd3IXPP5nHlMuK',
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
    'generated::dxY17cgqwrDCXrXC' => 
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
        'as' => 'generated::dxY17cgqwrDCXrXC',
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
    'generated::LjP1Jdf9skmYcaFq' => 
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
        'as' => 'generated::LjP1Jdf9skmYcaFq',
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
    'generated::cetnOaoErBHOy9lA' => 
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
        'as' => 'generated::cetnOaoErBHOy9lA',
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
    'generated::4dNrSczEndhO9faV' => 
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
        'as' => 'generated::4dNrSczEndhO9faV',
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
    'generated::FhPpy0SWJUV8ug3x' => 
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
        'as' => 'generated::FhPpy0SWJUV8ug3x',
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
    'generated::R0DZuoV4rAWoXUSE' => 
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
        'as' => 'generated::R0DZuoV4rAWoXUSE',
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
    'generated::SjBsd1q5qwaIM85f' => 
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
        'as' => 'generated::SjBsd1q5qwaIM85f',
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
    'generated::Biofe3WVQAsN4G31' => 
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
        'as' => 'generated::Biofe3WVQAsN4G31',
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
    'generated::dYknbsTSJJLTvEej' => 
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
        'as' => 'generated::dYknbsTSJJLTvEej',
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
    'generated::MfCnfZmCG9aPYLBr' => 
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
        'as' => 'generated::MfCnfZmCG9aPYLBr',
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
    'generated::sBB8W9B5v4CtXi6Q' => 
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
        'as' => 'generated::sBB8W9B5v4CtXi6Q',
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
    'generated::Ij8ayGYS0e3ekjVD' => 
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
        'as' => 'generated::Ij8ayGYS0e3ekjVD',
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
    'generated::b7Qmzq4mCJ8SSg6e' => 
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
        'as' => 'generated::b7Qmzq4mCJ8SSg6e',
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
    'generated::Ky99zdmgg0J6hnCg' => 
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
        'as' => 'generated::Ky99zdmgg0J6hnCg',
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
    'generated::dRilvqTsxwiqPA40' => 
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
        'as' => 'generated::dRilvqTsxwiqPA40',
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
    'generated::zLNZs34zvgfjmz85' => 
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
        'as' => 'generated::zLNZs34zvgfjmz85',
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
    'generated::Hrow79rhznet4Cbw' => 
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
        'as' => 'generated::Hrow79rhznet4Cbw',
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
    'generated::XLO1lAQ1QiA0cWlD' => 
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
        'as' => 'generated::XLO1lAQ1QiA0cWlD',
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
    'generated::17xJbmniWCZfusXo' => 
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
        'as' => 'generated::17xJbmniWCZfusXo',
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
    'generated::PBRdCykbyR8NYtTx' => 
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
        'as' => 'generated::PBRdCykbyR8NYtTx',
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
    'generated::4cYcwM9WhiXjPGIw' => 
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
        'as' => 'generated::4cYcwM9WhiXjPGIw',
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
