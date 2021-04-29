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
      '/api/user/meus_pedidos' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::L6Bp0yfSjkZEVAo4',
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
      '/api/user/update' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::b6zcS14TJSyG9d7b',
          ),
          1 => NULL,
          2 => 
          array (
            'PUT' => 0,
          ),
          3 => NULL,
          4 => false,
          5 => false,
          6 => NULL,
        ),
      ),
      '/api/user/nova_senha' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NckwngdgGnZFt28t',
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
      '/api/user/desativar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CB0KLQYvL172WxnX',
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
            '_route' => 'generated::6Tj0QPMlgt9aqntd',
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
            '_route' => 'generated::9A6PDawckN4q3IGl',
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
            '_route' => 'generated::5d1SUDo1AByMBeSb',
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
            '_route' => 'generated::tMPkh7ep0xZp3PLI',
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
            '_route' => 'generated::6G2c9qTuPGiH3iqA',
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
            '_route' => 'generated::h4VDLY9bqbthuiCJ',
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
            '_route' => 'generated::L5NN32dqnFwWI7VG',
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
            '_route' => 'generated::ChrqynyAkEm7Zwos',
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
            '_route' => 'generated::2gmNTE3HgUJUUqK2',
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
            '_route' => 'generated::BWDUVdtFvpCdDLVZ',
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
            '_route' => 'generated::2o4WVHcg13tjzBJD',
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
            '_route' => 'generated::dI22DFQJkE5Bqz0M',
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
            '_route' => 'generated::B5S784lDjyluqYHW',
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
            '_route' => 'generated::ddO5tgkzm11LpWoI',
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
            '_route' => 'generated::5yUhyiu6LSVqdf4U',
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
            '_route' => 'generated::ML5OI89zCuUJid0P',
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
            '_route' => 'generated::Z8yMf8BwXvqHj5yk',
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
            '_route' => 'generated::VW0iGpl507NuV6rZ',
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
            '_route' => 'generated::39CFMXAgNDgYC6fg',
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
            '_route' => 'generated::4zCmXXCUWKPfIWvi',
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
            '_route' => 'generated::yJTRW8wVyN9pB9kt',
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
            '_route' => 'generated::5m9fAic6JJv9Hl5v',
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
            '_route' => 'generated::FjLndQp9q3V6ETmL',
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
            '_route' => 'generated::4YVI853f5p3JBq7s',
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
            '_route' => 'generated::y8KI39oTywXtWlLP',
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
            '_route' => 'generated::SRIzcIOdfIeQTCwG',
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
            '_route' => 'generated::RwOCTqG4jJXqu0u4',
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
            '_route' => 'generated::sveBsn0rns280aKe',
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
            '_route' => 'generated::BDnl42iywYBNnZpY',
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
            '_route' => 'generated::0Z5Ju3rrZnYdtEhU',
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
            '_route' => 'generated::yCEMnsul6P9jPvQ7',
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
            '_route' => 'generated::vsc4fmKHew1CHJ6O',
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
            '_route' => 'generated::Ul9OL4TxoFNiJFn2',
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
            '_route' => 'generated::OCpTT056Py4rU95d',
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
            '_route' => 'generated::wnehvDpDWOLjCpXC',
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
            '_route' => 'generated::RUViZ7eeYEY14Lf5',
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
            '_route' => 'generated::Nlxc9K41YK4pf4bP',
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
            '_route' => 'generated::5zJxDtbS7irEm9rs',
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
            '_route' => 'generated::UY0EAZuogDnYaeAf',
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
            '_route' => 'generated::C35xBeZUZgT3IFak',
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
            '_route' => 'generated::gqmq43grMwZLTICs',
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
            '_route' => 'generated::t4sYhoxItoCk14GN',
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
            '_route' => 'generated::sHXv8swEsXbnz2u9',
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
            '_route' => 'generated::eekjqkNiqrQe5yFT',
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
            '_route' => 'generated::UxXfMdD0FHdNpS4Q',
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
            '_route' => 'generated::twf2qrfS8Ue0xWd8',
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
            '_route' => 'generated::u8rmrAcl3LwaoGus',
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
            '_route' => 'generated::ZfRWbc7f7rU8ltlN',
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
            '_route' => 'generated::icRGoC6pjtHqOZ5H',
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
            '_route' => 'generated::8rI5tu40xQg0CmL7',
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
            '_route' => 'generated::T96zTCZWhooW5kLj',
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
            '_route' => 'generated::fLch9PB52glxyFDB',
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
            '_route' => 'generated::PkUFzd4qfIOV1Zou',
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
            '_route' => 'generated::cpuwExRWg57FYaBj',
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
            '_route' => 'generated::8Vvt8gn3mai0LkaN',
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
            '_route' => 'generated::YPhscCZzjHLX9eA1',
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
            '_route' => 'generated::6FRvBPoSL1BmOWjI',
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
            '_route' => 'generated::kOVSDGsh1jeJ2g3O',
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
            '_route' => 'generated::7MxjDp86rqUwxlRR',
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
      '/api/cupom_desconto/verify' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ThnUbsjvTFkKw6M5',
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
      '/api/cupom_desconto/create' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fb3awHdBpwLEGjZ9',
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
            '_route' => 'generated::fnONitiNvr7mmsKZ',
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
            '_route' => 'generated::Qmi2EoG3qlIIXtrz',
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
            '_route' => 'generated::k2xe6tRKkjffdo0X',
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
            '_route' => 'generated::GGs2fbxeB0UnSPbJ',
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
            '_route' => 'generated::tbj2ThPKqBZx1uoB',
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
            '_route' => 'generated::oTDJNKQrYAXSHnuI',
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
            '_route' => 'generated::3B0h9oFE7Nj2CUmR',
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
            '_route' => 'generated::iqx92LMedltFRRUI',
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
      '/api/pagamento_unidade/associar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DWt0SFDZPJjlcpiu',
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
            '_route' => 'generated::KuwqKouQ7Ikj7SHp',
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
      '/api/pagamento_unidade/limpar' => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZhIuLSi1vlc84Zgi',
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
      0 => '{^(?|/oauth/(?|tokens/([^/]++)(*:32)|clients/([^/]++)(?|(*:58))|personal\\-access\\-tokens/([^/]++)(*:99))|/api/(?|en(?|dereco(?|/(?|show/([^/]++)(*:146)|update/([^/]++)(*:169)|destroy/([^/]++)(*:193))|_(?|restaurante/(?|show/([^/]++)(*:234)|update/([^/]++)(*:257)|destroy/([^/]++)(*:281))|entrega/(?|show/([^/]++)(*:314)|update/([^/]++)(*:337)|destroy/([^/]++)(*:361))))|tregador/(?|show/([^/]++)(*:397)|by_unidade/([^/]++)(*:424)|update/([^/]++)(*:447)|destroy/([^/]++)(*:471)))|u(?|suario_unidade/desassociar/([^/]++)/([^/]++)(*:529)|nidade/(?|s(?|how/([^/]++)(*:563)|obre_nos/(?|show/([^/]++)(*:596)|update/([^/]++)(*:619)|destroy/([^/]++)(*:643)))|check_slug/([^/]++)/([^/]++)(*:681)|update/([^/]++)(*:704)|destroy/([^/]++)(*:728)|pedido/(?|by_slug/([^/]++)/([^/]++)(*:771)|update_(?|status/([^/]++)(*:804)|entregador/([^/]++)(*:831))|show/([^/]++)(*:853))|tempo_espera_entrega/(?|show/([^/]++)(*:899)|update/([^/]++)(*:922)|destroy/([^/]++)(*:946))|horario_funcionamento/(?|show/([^/]++)(*:993)|update/([^/]++)(*:1016)|destroy/([^/]++)(*:1041))))|f(?|orma_pagamento/(?|show/([^/]++)(*:1088)|update/([^/]++)(*:1112)|destroy/([^/]++)(*:1137))|uso_horario/(?|show/([^/]++)(*:1175)|update/([^/]++)(*:1199)|destroy/([^/]++)(*:1224)))|p(?|roduto(?|/(?|show/([^/]++)(*:1265)|update/([^/]++)(*:1289)|destroy/([^/]++)(*:1314))|_pedido/(?|show/([^/]++)(*:1348)|update/([^/]++)(*:1372)|destroy/([^/]++)(*:1397)))|e(?|dido_adicional(?|/(?|show/([^/]++)(*:1446)|update/([^/]++)(*:1470)|destroy/([^/]++)(*:1495))|_opcao/(?|show/([^/]++)(*:1528)|update/([^/]++)(*:1552)|destroy/([^/]++)(*:1577)))|r(?|gunta/(?|show/([^/]++)(*:1614)|update/([^/]++)(*:1638)|destroy/([^/]++)(*:1663))|missao/(?|show/([^/]++)(*:1696)|update/([^/]++)(*:1720)|destroy/([^/]++)(*:1745))|iodo/(?|show/([^/]++)(*:1776)|update/([^/]++)(*:1800)|destroy/([^/]++)(*:1825)))))|c(?|ategoria(?|/(?|by_slug/([^/]++)/([^/]++)(*:1882)|show/([^/]++)(*:1904)|update/([^/]++)(*:1928)|destroy/([^/]++)(*:1953))|cardapio/(?|show/([^/]++)(*:1988)|update/([^/]++)(*:2012)|destroy/([^/]++)(*:2037))|menu/(?|show/([^/]++)(*:2068)|update/([^/]++)(*:2092)|destroy/([^/]++)(*:2117)))|onfig_entrega/(?|show/([^/]++)(*:2158)|update/([^/]++)(*:2182)|destroy/([^/]++)(*:2207))|upom_desconto/(?|show/([^/]++)(*:2247)|by_unidade/([^/]++)(*:2275)|update/([^/]++)(*:2299)|destroy/([^/]++)(*:2324)))|horario_funcionamento(?|/(?|show/([^/]++)(*:2376)|update/([^/]++)(*:2400)|destroy/([^/]++)(*:2425))|_delivery/(?|show/([^/]++)(*:2461)|update/([^/]++)(*:2485)|destroy/([^/]++)(*:2510)))|a(?|diciona(?|l/(?|show/([^/]++)(*:2553)|update/([^/]++)(*:2577)|destroy/([^/]++)(*:2602))|is/(?|show/([^/]++)(*:2631)|update/([^/]++)(*:2655)|destroy/([^/]++)(*:2680)))|rea_entrega/(?|show/([^/]++)(*:2719)|update/([^/]++)(*:2743)|destroy/([^/]++)(*:2768)))|restaurante/(?|show/([^/]++)(*:2807)|u(?|nidades/([^/]++)(*:2836)|pdate/([^/]++)(*:2859))|check_slug/([^/]++)(*:2888)|destroy/([^/]++)(*:2913))|opcao/(?|show/([^/]++)(*:2945)|update/([^/]++)(*:2969)|destroy/([^/]++)(*:2994))|d(?|ados_empresa/(?|show/([^/]++)(*:3037)|update/([^/]++)(*:3061)|destroy/([^/]++)(*:3086))|ias_semana/(?|show/([^/]++)(*:3123)|update/([^/]++)(*:3147)|destroy/([^/]++)(*:3172)))|([^/]++)(?|/([^/]++)(?|/estatistica/(?|receita_dia(*:3233)|num_pedidos_dia(*:3257))|(*:3267))|(*:3277))|register(*:3295)|login(*:3309)))/?$}sDu',
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
            '_route' => 'generated::lRQn69CsYRs5aBX5',
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
            '_route' => 'generated::FR6iivdQmAvEb5yD',
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
            '_route' => 'generated::aGmttgQYvvn8DbE0',
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
            '_route' => 'generated::oV5sTRTpG1e0fpaF',
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
            '_route' => 'generated::R5NoDFqaQ03hVXWf',
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
            '_route' => 'generated::k2J51BGX8YM4aroZ',
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
            '_route' => 'generated::k18gWAX5XBYFKdqr',
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
            '_route' => 'generated::tkrI6SfKmwtOYJ9m',
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
            '_route' => 'generated::qaWHzVOOsrUO1iRJ',
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
            '_route' => 'generated::nsPuHvvPiOLeOhmf',
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
      424 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4YVk7PUfk65pKJcX',
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
      447 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CoiMy2qJU76QdOKW',
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
      471 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fB73AqhDMGDtBxE6',
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
      529 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0bQwUqF5aSQoh1dC',
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
      563 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LPawXUBqemhhSioe',
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
      596 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6XCCsl5BVUAVvEFX',
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
      619 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ferFbWaWewfn9omB',
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
      643 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ne6VHBY02fZPe0KM',
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
      681 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pu26iJJEC2G5OHlJ',
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
      704 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tRkiCvFUnumOLH66',
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
      728 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rvfkihGntpjMHFj6',
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
      771 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tKNlaGLAD2jnPwYZ',
          ),
          1 => 
          array (
            0 => 'restaurante',
            1 => 'unidade',
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
      804 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tuVvI17D64sC51BF',
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
      831 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::F0gBe4OWybYkXiAE',
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
      853 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::46qYzbMM7t3UwWEA',
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
      899 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2wvNLtCqtKGO8V7q',
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
      922 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9lZxJPiztIswaTg0',
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
      946 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v2WrWGqn5LbtOV0M',
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
      993 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nohNUhVSOz4b1jr9',
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
      1016 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6FVekmRfCVbJQxZC',
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
      1041 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FOkdWSxNkOECkuqM',
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
      1088 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AhOfGBc8rXS0OCYe',
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
      1112 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mXGlqTpFiImD8hRT',
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
      1137 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rghgjQkuKcDCz0ix',
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
      1175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::axHE70EdpEV8rSs2',
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
      1199 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X2hG3nYQeogLUJvx',
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
      1224 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3Aymh3uOYXXsFjRp',
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
      1265 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::E99AsNqHo2ahm35I',
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
      1289 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wwdUh0zu38Hr9agq',
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
      1314 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XP59p8CiBuFxTTrd',
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
      1348 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AsrR3E5WRDRQqHJI',
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
      1372 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NAdholkOo31Qx0F4',
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
      1397 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kGNwKgsIuJOpMDv4',
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
      1446 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tqcm9yplfHG3BXjk',
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
      1470 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p9fol4p0rwxuU6uu',
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
      1495 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::x6VIs3BNsVdaERH4',
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
      1528 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6yy6iRxbTayoKZRh',
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
      1552 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::JYBdaSTDNnUwKDQN',
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
      1577 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hZ5XGrsIXhsXnHsf',
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
      1614 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::X7v8IvThSPXBK4jN',
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
      1638 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Pf02XKqX9ulvgfc3',
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
      1663 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WZC41RplmQMOOTFc',
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
      1696 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k0n1l2dQZBMFCW6Y',
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
      1720 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qzYj0XqNa6yPqgcF',
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
      1745 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0NMzi67rrMDFnQE0',
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
      1776 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WIGLeUaPh2WOdjDE',
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
      1800 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Pik2f7wX1Y9MImkO',
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
      1825 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KDIZx7pqeBfYyfmB',
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
      1882 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2LXt1ilOxzcLckQs',
          ),
          1 => 
          array (
            0 => 'restaurante',
            1 => 'unidade',
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
      1904 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ZWttzN49yHWYm1lU',
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
      1928 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IRZdzEMxufTKMurk',
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
      1953 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8bSPlrOqzCXwZePA',
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
      1988 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rFD9HVdeBH6yp3mK',
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
      2012 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YIGurn0mDg0OC8Vh',
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
      2037 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::cnrUSdMu0RWfH5f8',
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
      2068 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Iu6pFV7CoIX0y5Se',
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
      2092 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Lu8gS4L67rO3Jhet',
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
      2117 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ySkS9w2q2OJa0p2f',
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
      2158 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3Ag436CJ1gEYcORk',
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
      2182 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kditR59Kvpg6qStt',
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
      2207 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fwt2ZCYAo1wX59KP',
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
      2247 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xKu8yaELfKLVCAMN',
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
      2275 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XN012SzPNJotQliD',
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
      2299 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LieOiXG8lFisESdd',
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
      2324 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Cq5tMl1sfZvDvZT1',
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
      2376 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wl4qT5EHgLMlYdIt',
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
      2400 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dcPSebZtDgKJXkOm',
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
      2425 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ES8WhpUQEZ7dsGaf',
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
      2461 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tIAt5dkRhB8bTTBj',
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
      2485 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dT5RHpxlMm1UAMFc',
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
      2510 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jweatPxX35hjKPv9',
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
      2553 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GC5Jhak1J8TiQHoL',
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
      2577 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::buM8DfumAJ8VVJWn',
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
      2602 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Tnz4hLDBFBuwbtW4',
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
      2631 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::74Pi76vKKNQERDfy',
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
      2655 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pElbTy8kabp6ibHA',
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
      2680 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XgtWAqc3St2LXEWm',
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
      2719 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ghYwAKr8kK7nzt2t',
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
      2743 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4h1HJmNjn4GdcWMv',
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
      2768 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ybQPkbF3zt2GC5VM',
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
      2807 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gxPHhIO15sMXRWkh',
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
      2836 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PMBtQm58ruyUnEDG',
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
      2859 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1SYVf65hIxWHI8kx',
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
      2888 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RhYyjOFhox0AUQTn',
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
      2913 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NMx1o6iFFKP3boPR',
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
      2945 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RkWRV9DAdA7AvTB8',
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
      2969 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pzuwsauDtx7CHwvr',
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
      2994 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YqcBYNFTtrjLySY6',
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
      3037 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5UMpAoAKoU5Q3bW0',
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
      3061 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6bnrqfkP55QTG94e',
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
      3086 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sA673Y4cSvs7RLxY',
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
      3123 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sjFB0ZoVSZa9NKHJ',
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
      3147 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9GAWSUMxxP1VqA4o',
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
      3172 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::y1eEh2mViP1Y9Z1D',
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
      3233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vuKXTXhvu6kgYmDd',
          ),
          1 => 
          array (
            0 => 'restaurante',
            1 => 'unidade',
          ),
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
      3257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pEbWrteiIOKNodt3',
          ),
          1 => 
          array (
            0 => 'restaurante',
            1 => 'unidade',
          ),
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
      3267 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k1tkK19HE2UElRIN',
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
      3277 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::otd8tdCc743PqPjR',
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
      3295 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e4UIh786Q55lM5TK',
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
      3309 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::reYPc9zqYyVmdyWN',
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
    'generated::L6Bp0yfSjkZEVAo4' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/user/meus_pedidos',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@meusPedidos',
        'controller' => 'App\\Http\\Controllers\\AuthController@meusPedidos',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::L6Bp0yfSjkZEVAo4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::b6zcS14TJSyG9d7b' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/user/update',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@update',
        'controller' => 'App\\Http\\Controllers\\AuthController@update',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::b6zcS14TJSyG9d7b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NckwngdgGnZFt28t' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/nova_senha',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@novaSenha',
        'controller' => 'App\\Http\\Controllers\\AuthController@novaSenha',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::NckwngdgGnZFt28t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CB0KLQYvL172WxnX' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/user/desativar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\AuthController@desativarConta',
        'controller' => 'App\\Http\\Controllers\\AuthController@desativarConta',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/user',
        'where' => 
        array (
        ),
        'as' => 'generated::CB0KLQYvL172WxnX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6Tj0QPMlgt9aqntd' => 
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
        'as' => 'generated::6Tj0QPMlgt9aqntd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lRQn69CsYRs5aBX5' => 
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
        'as' => 'generated::lRQn69CsYRs5aBX5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9A6PDawckN4q3IGl' => 
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
        'as' => 'generated::9A6PDawckN4q3IGl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FR6iivdQmAvEb5yD' => 
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
        'as' => 'generated::FR6iivdQmAvEb5yD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::aGmttgQYvvn8DbE0' => 
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
        'as' => 'generated::aGmttgQYvvn8DbE0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5d1SUDo1AByMBeSb' => 
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
        'as' => 'generated::5d1SUDo1AByMBeSb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0bQwUqF5aSQoh1dC' => 
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
        'as' => 'generated::0bQwUqF5aSQoh1dC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tMPkh7ep0xZp3PLI' => 
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
        'as' => 'generated::tMPkh7ep0xZp3PLI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AhOfGBc8rXS0OCYe' => 
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
        'as' => 'generated::AhOfGBc8rXS0OCYe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6G2c9qTuPGiH3iqA' => 
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
        'as' => 'generated::6G2c9qTuPGiH3iqA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mXGlqTpFiImD8hRT' => 
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
        'as' => 'generated::mXGlqTpFiImD8hRT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rghgjQkuKcDCz0ix' => 
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
        'as' => 'generated::rghgjQkuKcDCz0ix',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::h4VDLY9bqbthuiCJ' => 
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
        'as' => 'generated::h4VDLY9bqbthuiCJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::E99AsNqHo2ahm35I' => 
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
        'as' => 'generated::E99AsNqHo2ahm35I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::L5NN32dqnFwWI7VG' => 
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
        'as' => 'generated::L5NN32dqnFwWI7VG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wwdUh0zu38Hr9agq' => 
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
        'as' => 'generated::wwdUh0zu38Hr9agq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XP59p8CiBuFxTTrd' => 
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
        'as' => 'generated::XP59p8CiBuFxTTrd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ChrqynyAkEm7Zwos' => 
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
        'as' => 'generated::ChrqynyAkEm7Zwos',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2LXt1ilOxzcLckQs' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/categoria/by_slug/{restaurante}/{unidade}',
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
        'as' => 'generated::2LXt1ilOxzcLckQs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZWttzN49yHWYm1lU' => 
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
        'as' => 'generated::ZWttzN49yHWYm1lU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2gmNTE3HgUJUUqK2' => 
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
        'as' => 'generated::2gmNTE3HgUJUUqK2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::IRZdzEMxufTKMurk' => 
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
        'as' => 'generated::IRZdzEMxufTKMurk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8bSPlrOqzCXwZePA' => 
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
        'as' => 'generated::8bSPlrOqzCXwZePA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BWDUVdtFvpCdDLVZ' => 
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
        'as' => 'generated::BWDUVdtFvpCdDLVZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rFD9HVdeBH6yp3mK' => 
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
        'as' => 'generated::rFD9HVdeBH6yp3mK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2o4WVHcg13tjzBJD' => 
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
        'as' => 'generated::2o4WVHcg13tjzBJD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YIGurn0mDg0OC8Vh' => 
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
        'as' => 'generated::YIGurn0mDg0OC8Vh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cnrUSdMu0RWfH5f8' => 
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
        'as' => 'generated::cnrUSdMu0RWfH5f8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dI22DFQJkE5Bqz0M' => 
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
        'as' => 'generated::dI22DFQJkE5Bqz0M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Iu6pFV7CoIX0y5Se' => 
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
        'as' => 'generated::Iu6pFV7CoIX0y5Se',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::B5S784lDjyluqYHW' => 
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
        'as' => 'generated::B5S784lDjyluqYHW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Lu8gS4L67rO3Jhet' => 
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
        'as' => 'generated::Lu8gS4L67rO3Jhet',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ySkS9w2q2OJa0p2f' => 
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
        'as' => 'generated::ySkS9w2q2OJa0p2f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ddO5tgkzm11LpWoI' => 
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
        'as' => 'generated::ddO5tgkzm11LpWoI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oV5sTRTpG1e0fpaF' => 
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
        'as' => 'generated::oV5sTRTpG1e0fpaF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5yUhyiu6LSVqdf4U' => 
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
        'as' => 'generated::5yUhyiu6LSVqdf4U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::R5NoDFqaQ03hVXWf' => 
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
        'as' => 'generated::R5NoDFqaQ03hVXWf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::k2J51BGX8YM4aroZ' => 
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
        'as' => 'generated::k2J51BGX8YM4aroZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ML5OI89zCuUJid0P' => 
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
        'as' => 'generated::ML5OI89zCuUJid0P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Wl4qT5EHgLMlYdIt' => 
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
        'as' => 'generated::Wl4qT5EHgLMlYdIt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Z8yMf8BwXvqHj5yk' => 
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
        'as' => 'generated::Z8yMf8BwXvqHj5yk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dcPSebZtDgKJXkOm' => 
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
        'as' => 'generated::dcPSebZtDgKJXkOm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ES8WhpUQEZ7dsGaf' => 
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
        'as' => 'generated::ES8WhpUQEZ7dsGaf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::VW0iGpl507NuV6rZ' => 
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
        'as' => 'generated::VW0iGpl507NuV6rZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GC5Jhak1J8TiQHoL' => 
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
        'as' => 'generated::GC5Jhak1J8TiQHoL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::39CFMXAgNDgYC6fg' => 
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
        'as' => 'generated::39CFMXAgNDgYC6fg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::buM8DfumAJ8VVJWn' => 
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
        'as' => 'generated::buM8DfumAJ8VVJWn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Tnz4hLDBFBuwbtW4' => 
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
        'as' => 'generated::Tnz4hLDBFBuwbtW4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4zCmXXCUWKPfIWvi' => 
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
        'as' => 'generated::4zCmXXCUWKPfIWvi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::gxPHhIO15sMXRWkh' => 
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
        'as' => 'generated::gxPHhIO15sMXRWkh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PMBtQm58ruyUnEDG' => 
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
        'as' => 'generated::PMBtQm58ruyUnEDG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RhYyjOFhox0AUQTn' => 
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
        'as' => 'generated::RhYyjOFhox0AUQTn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yJTRW8wVyN9pB9kt' => 
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
        'as' => 'generated::yJTRW8wVyN9pB9kt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1SYVf65hIxWHI8kx' => 
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
        'as' => 'generated::1SYVf65hIxWHI8kx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NMx1o6iFFKP3boPR' => 
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
        'as' => 'generated::NMx1o6iFFKP3boPR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5m9fAic6JJv9Hl5v' => 
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
        'as' => 'generated::5m9fAic6JJv9Hl5v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LPawXUBqemhhSioe' => 
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
        'as' => 'generated::LPawXUBqemhhSioe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pu26iJJEC2G5OHlJ' => 
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
        'as' => 'generated::pu26iJJEC2G5OHlJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FjLndQp9q3V6ETmL' => 
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
        'as' => 'generated::FjLndQp9q3V6ETmL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tRkiCvFUnumOLH66' => 
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
        'as' => 'generated::tRkiCvFUnumOLH66',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rvfkihGntpjMHFj6' => 
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
        'as' => 'generated::rvfkihGntpjMHFj6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tKNlaGLAD2jnPwYZ' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/unidade/pedido/by_slug/{restaurante}/{unidade}',
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
        'as' => 'generated::tKNlaGLAD2jnPwYZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4YVI853f5p3JBq7s' => 
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
        'as' => 'generated::4YVI853f5p3JBq7s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::y8KI39oTywXtWlLP' => 
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
        'as' => 'generated::y8KI39oTywXtWlLP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tuVvI17D64sC51BF' => 
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
        'as' => 'generated::tuVvI17D64sC51BF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::F0gBe4OWybYkXiAE' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/unidade/pedido/update_entregador/{id}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PedidoController@updateEntregador',
        'controller' => 'App\\Http\\Controllers\\PedidoController@updateEntregador',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/unidade/pedido',
        'where' => 
        array (
        ),
        'as' => 'generated::F0gBe4OWybYkXiAE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::46qYzbMM7t3UwWEA' => 
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
        'as' => 'generated::46qYzbMM7t3UwWEA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SRIzcIOdfIeQTCwG' => 
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
        'as' => 'generated::SRIzcIOdfIeQTCwG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RwOCTqG4jJXqu0u4' => 
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
        'as' => 'generated::RwOCTqG4jJXqu0u4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2wvNLtCqtKGO8V7q' => 
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
        'as' => 'generated::2wvNLtCqtKGO8V7q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::sveBsn0rns280aKe' => 
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
        'as' => 'generated::sveBsn0rns280aKe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9lZxJPiztIswaTg0' => 
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
        'as' => 'generated::9lZxJPiztIswaTg0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::v2WrWGqn5LbtOV0M' => 
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
        'as' => 'generated::v2WrWGqn5LbtOV0M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BDnl42iywYBNnZpY' => 
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
        'as' => 'generated::BDnl42iywYBNnZpY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nohNUhVSOz4b1jr9' => 
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
        'as' => 'generated::nohNUhVSOz4b1jr9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0Z5Ju3rrZnYdtEhU' => 
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
        'as' => 'generated::0Z5Ju3rrZnYdtEhU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6FVekmRfCVbJQxZC' => 
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
        'as' => 'generated::6FVekmRfCVbJQxZC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FOkdWSxNkOECkuqM' => 
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
        'as' => 'generated::FOkdWSxNkOECkuqM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yCEMnsul6P9jPvQ7' => 
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
        'as' => 'generated::yCEMnsul6P9jPvQ7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6XCCsl5BVUAVvEFX' => 
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
        'as' => 'generated::6XCCsl5BVUAVvEFX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vsc4fmKHew1CHJ6O' => 
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
        'as' => 'generated::vsc4fmKHew1CHJ6O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ferFbWaWewfn9omB' => 
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
        'as' => 'generated::ferFbWaWewfn9omB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ne6VHBY02fZPe0KM' => 
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
        'as' => 'generated::ne6VHBY02fZPe0KM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Ul9OL4TxoFNiJFn2' => 
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
        'as' => 'generated::Ul9OL4TxoFNiJFn2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OCpTT056Py4rU95d' => 
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
        'as' => 'generated::OCpTT056Py4rU95d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::k18gWAX5XBYFKdqr' => 
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
        'as' => 'generated::k18gWAX5XBYFKdqr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wnehvDpDWOLjCpXC' => 
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
        'as' => 'generated::wnehvDpDWOLjCpXC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tkrI6SfKmwtOYJ9m' => 
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
        'as' => 'generated::tkrI6SfKmwtOYJ9m',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qaWHzVOOsrUO1iRJ' => 
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
        'as' => 'generated::qaWHzVOOsrUO1iRJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RUViZ7eeYEY14Lf5' => 
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
        'as' => 'generated::RUViZ7eeYEY14Lf5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RkWRV9DAdA7AvTB8' => 
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
        'as' => 'generated::RkWRV9DAdA7AvTB8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Nlxc9K41YK4pf4bP' => 
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
        'as' => 'generated::Nlxc9K41YK4pf4bP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pzuwsauDtx7CHwvr' => 
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
        'as' => 'generated::pzuwsauDtx7CHwvr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YqcBYNFTtrjLySY6' => 
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
        'as' => 'generated::YqcBYNFTtrjLySY6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5zJxDtbS7irEm9rs' => 
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
        'as' => 'generated::5zJxDtbS7irEm9rs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::74Pi76vKKNQERDfy' => 
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
        'as' => 'generated::74Pi76vKKNQERDfy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UY0EAZuogDnYaeAf' => 
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
        'as' => 'generated::UY0EAZuogDnYaeAf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pElbTy8kabp6ibHA' => 
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
        'as' => 'generated::pElbTy8kabp6ibHA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XgtWAqc3St2LXEWm' => 
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
        'as' => 'generated::XgtWAqc3St2LXEWm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::C35xBeZUZgT3IFak' => 
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
        'as' => 'generated::C35xBeZUZgT3IFak',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::gqmq43grMwZLTICs' => 
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
        'as' => 'generated::gqmq43grMwZLTICs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AsrR3E5WRDRQqHJI' => 
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
        'as' => 'generated::AsrR3E5WRDRQqHJI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::t4sYhoxItoCk14GN' => 
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
        'as' => 'generated::t4sYhoxItoCk14GN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NAdholkOo31Qx0F4' => 
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
        'as' => 'generated::NAdholkOo31Qx0F4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kGNwKgsIuJOpMDv4' => 
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
        'as' => 'generated::kGNwKgsIuJOpMDv4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::sHXv8swEsXbnz2u9' => 
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
        'as' => 'generated::sHXv8swEsXbnz2u9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tqcm9yplfHG3BXjk' => 
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
        'as' => 'generated::tqcm9yplfHG3BXjk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eekjqkNiqrQe5yFT' => 
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
        'as' => 'generated::eekjqkNiqrQe5yFT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::p9fol4p0rwxuU6uu' => 
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
        'as' => 'generated::p9fol4p0rwxuU6uu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::x6VIs3BNsVdaERH4' => 
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
        'as' => 'generated::x6VIs3BNsVdaERH4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UxXfMdD0FHdNpS4Q' => 
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
        'as' => 'generated::UxXfMdD0FHdNpS4Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6yy6iRxbTayoKZRh' => 
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
        'as' => 'generated::6yy6iRxbTayoKZRh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::twf2qrfS8Ue0xWd8' => 
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
        'as' => 'generated::twf2qrfS8Ue0xWd8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::JYBdaSTDNnUwKDQN' => 
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
        'as' => 'generated::JYBdaSTDNnUwKDQN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hZ5XGrsIXhsXnHsf' => 
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
        'as' => 'generated::hZ5XGrsIXhsXnHsf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::u8rmrAcl3LwaoGus' => 
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
        'as' => 'generated::u8rmrAcl3LwaoGus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::X7v8IvThSPXBK4jN' => 
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
        'as' => 'generated::X7v8IvThSPXBK4jN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZfRWbc7f7rU8ltlN' => 
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
        'as' => 'generated::ZfRWbc7f7rU8ltlN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Pf02XKqX9ulvgfc3' => 
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
        'as' => 'generated::Pf02XKqX9ulvgfc3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WZC41RplmQMOOTFc' => 
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
        'as' => 'generated::WZC41RplmQMOOTFc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::icRGoC6pjtHqOZ5H' => 
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
        'as' => 'generated::icRGoC6pjtHqOZ5H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nsPuHvvPiOLeOhmf' => 
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
        'as' => 'generated::nsPuHvvPiOLeOhmf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4YVk7PUfk65pKJcX' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/entregador/by_unidade/{unidade}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\EntregadorController@byUnidade',
        'controller' => 'App\\Http\\Controllers\\EntregadorController@byUnidade',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/entregador',
        'where' => 
        array (
        ),
        'as' => 'generated::4YVk7PUfk65pKJcX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8rI5tu40xQg0CmL7' => 
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
        'as' => 'generated::8rI5tu40xQg0CmL7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CoiMy2qJU76QdOKW' => 
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
        'as' => 'generated::CoiMy2qJU76QdOKW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fB73AqhDMGDtBxE6' => 
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
        'as' => 'generated::fB73AqhDMGDtBxE6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::T96zTCZWhooW5kLj' => 
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
        'as' => 'generated::T96zTCZWhooW5kLj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5UMpAoAKoU5Q3bW0' => 
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
        'as' => 'generated::5UMpAoAKoU5Q3bW0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fLch9PB52glxyFDB' => 
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
        'as' => 'generated::fLch9PB52glxyFDB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6bnrqfkP55QTG94e' => 
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
        'as' => 'generated::6bnrqfkP55QTG94e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::sA673Y4cSvs7RLxY' => 
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
        'as' => 'generated::sA673Y4cSvs7RLxY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PkUFzd4qfIOV1Zou' => 
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
        'as' => 'generated::PkUFzd4qfIOV1Zou',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3Ag436CJ1gEYcORk' => 
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
        'as' => 'generated::3Ag436CJ1gEYcORk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cpuwExRWg57FYaBj' => 
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
        'as' => 'generated::cpuwExRWg57FYaBj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kditR59Kvpg6qStt' => 
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
        'as' => 'generated::kditR59Kvpg6qStt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fwt2ZCYAo1wX59KP' => 
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
        'as' => 'generated::fwt2ZCYAo1wX59KP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8Vvt8gn3mai0LkaN' => 
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
        'as' => 'generated::8Vvt8gn3mai0LkaN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::k0n1l2dQZBMFCW6Y' => 
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
        'as' => 'generated::k0n1l2dQZBMFCW6Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YPhscCZzjHLX9eA1' => 
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
        'as' => 'generated::YPhscCZzjHLX9eA1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qzYj0XqNa6yPqgcF' => 
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
        'as' => 'generated::qzYj0XqNa6yPqgcF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0NMzi67rrMDFnQE0' => 
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
        'as' => 'generated::0NMzi67rrMDFnQE0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6FRvBPoSL1BmOWjI' => 
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
        'as' => 'generated::6FRvBPoSL1BmOWjI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ghYwAKr8kK7nzt2t' => 
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
        'as' => 'generated::ghYwAKr8kK7nzt2t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kOVSDGsh1jeJ2g3O' => 
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
        'as' => 'generated::kOVSDGsh1jeJ2g3O',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4h1HJmNjn4GdcWMv' => 
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
        'as' => 'generated::4h1HJmNjn4GdcWMv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ybQPkbF3zt2GC5VM' => 
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
        'as' => 'generated::ybQPkbF3zt2GC5VM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7MxjDp86rqUwxlRR' => 
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
        'as' => 'generated::7MxjDp86rqUwxlRR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xKu8yaELfKLVCAMN' => 
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
        'as' => 'generated::xKu8yaELfKLVCAMN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XN012SzPNJotQliD' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/cupom_desconto/by_unidade/{unidade}',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CupomDescontoController@byUnidade',
        'controller' => 'App\\Http\\Controllers\\CupomDescontoController@byUnidade',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/cupom_desconto',
        'where' => 
        array (
        ),
        'as' => 'generated::XN012SzPNJotQliD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ThnUbsjvTFkKw6M5' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/cupom_desconto/verify',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\CupomDescontoController@showByCode',
        'controller' => 'App\\Http\\Controllers\\CupomDescontoController@showByCode',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/cupom_desconto',
        'where' => 
        array (
        ),
        'as' => 'generated::ThnUbsjvTFkKw6M5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fb3awHdBpwLEGjZ9' => 
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
        'as' => 'generated::fb3awHdBpwLEGjZ9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LieOiXG8lFisESdd' => 
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
        'as' => 'generated::LieOiXG8lFisESdd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Cq5tMl1sfZvDvZT1' => 
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
        'as' => 'generated::Cq5tMl1sfZvDvZT1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fnONitiNvr7mmsKZ' => 
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
        'as' => 'generated::fnONitiNvr7mmsKZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::sjFB0ZoVSZa9NKHJ' => 
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
        'as' => 'generated::sjFB0ZoVSZa9NKHJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Qmi2EoG3qlIIXtrz' => 
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
        'as' => 'generated::Qmi2EoG3qlIIXtrz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9GAWSUMxxP1VqA4o' => 
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
        'as' => 'generated::9GAWSUMxxP1VqA4o',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::y1eEh2mViP1Y9Z1D' => 
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
        'as' => 'generated::y1eEh2mViP1Y9Z1D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::k2xe6tRKkjffdo0X' => 
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
        'as' => 'generated::k2xe6tRKkjffdo0X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WIGLeUaPh2WOdjDE' => 
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
        'as' => 'generated::WIGLeUaPh2WOdjDE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GGs2fbxeB0UnSPbJ' => 
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
        'as' => 'generated::GGs2fbxeB0UnSPbJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Pik2f7wX1Y9MImkO' => 
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
        'as' => 'generated::Pik2f7wX1Y9MImkO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KDIZx7pqeBfYyfmB' => 
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
        'as' => 'generated::KDIZx7pqeBfYyfmB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tbj2ThPKqBZx1uoB' => 
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
        'as' => 'generated::tbj2ThPKqBZx1uoB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::axHE70EdpEV8rSs2' => 
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
        'as' => 'generated::axHE70EdpEV8rSs2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oTDJNKQrYAXSHnuI' => 
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
        'as' => 'generated::oTDJNKQrYAXSHnuI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::X2hG3nYQeogLUJvx' => 
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
        'as' => 'generated::X2hG3nYQeogLUJvx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3Aymh3uOYXXsFjRp' => 
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
        'as' => 'generated::3Aymh3uOYXXsFjRp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3B0h9oFE7Nj2CUmR' => 
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
        'as' => 'generated::3B0h9oFE7Nj2CUmR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tIAt5dkRhB8bTTBj' => 
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
        'as' => 'generated::tIAt5dkRhB8bTTBj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::iqx92LMedltFRRUI' => 
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
        'as' => 'generated::iqx92LMedltFRRUI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dT5RHpxlMm1UAMFc' => 
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
        'as' => 'generated::dT5RHpxlMm1UAMFc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jweatPxX35hjKPv9' => 
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
        'as' => 'generated::jweatPxX35hjKPv9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vuKXTXhvu6kgYmDd' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{restaurante}/{unidade}/estatistica/receita_dia',
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
        'prefix' => 'api/{restaurante}/{unidade}/estatistica',
        'where' => 
        array (
        ),
        'as' => 'generated::vuKXTXhvu6kgYmDd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pEbWrteiIOKNodt3' => 
    array (
      'methods' => 
      array (
        0 => 'GET',
        1 => 'HEAD',
      ),
      'uri' => 'api/{restaurante}/{unidade}/estatistica/num_pedidos_dia',
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
        'prefix' => 'api/{restaurante}/{unidade}/estatistica',
        'where' => 
        array (
        ),
        'as' => 'generated::pEbWrteiIOKNodt3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DWt0SFDZPJjlcpiu' => 
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
        'as' => 'generated::DWt0SFDZPJjlcpiu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KuwqKouQ7Ikj7SHp' => 
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
        'as' => 'generated::KuwqKouQ7Ikj7SHp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZhIuLSi1vlc84Zgi' => 
    array (
      'methods' => 
      array (
        0 => 'POST',
      ),
      'uri' => 'api/pagamento_unidade/limpar',
      'action' => 
      array (
        'middleware' => 
        array (
          0 => 'api',
          1 => 'auth:api',
        ),
        'uses' => 'App\\Http\\Controllers\\PagamentoUnidadeController@limpar',
        'controller' => 'App\\Http\\Controllers\\PagamentoUnidadeController@limpar',
        'namespace' => 'App\\Http\\Controllers',
        'prefix' => 'api/pagamento_unidade',
        'where' => 
        array (
        ),
        'as' => 'generated::ZhIuLSi1vlc84Zgi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::otd8tdCc743PqPjR' => 
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
        'as' => 'generated::otd8tdCc743PqPjR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::k1tkK19HE2UElRIN' => 
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
        'as' => 'generated::k1tkK19HE2UElRIN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::e4UIh786Q55lM5TK' => 
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
        'as' => 'generated::e4UIh786Q55lM5TK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::reYPc9zqYyVmdyWN' => 
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
        'as' => 'generated::reYPc9zqYyVmdyWN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
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
