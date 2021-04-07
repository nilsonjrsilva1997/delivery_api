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
            '_route' => 'generated::LIaqTWlsnpyfXE78',
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
            '_route' => 'generated::AbRu9tiEOMkc4Gbc',
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
            '_route' => 'generated::QXU7KegijKEBn4dg',
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
            '_route' => 'generated::rlwZTISJ7tNeb2HH',
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
            '_route' => 'generated::8LPEIRQnhxX45vIj',
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
            '_route' => 'generated::2D5UkhIEyxz3E1ey',
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
            '_route' => 'generated::xT3fXhfM9UxNBSWW',
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
            '_route' => 'generated::UZ1wpG4vDrAe6vgL',
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
            '_route' => 'generated::QX0yOMxbsMqkrqqt',
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
            '_route' => 'generated::qgnRm3IWciizVnco',
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
            '_route' => 'generated::lApfs4mpnMS9xuMH',
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
            '_route' => 'generated::pG52Y2tFztfOn10R',
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
            '_route' => 'generated::qOzT2lVJY5bY3mAm',
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
            '_route' => 'generated::i6w0teZTjjcRnWi7',
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
            '_route' => 'generated::wnIs7kXzbdLOwJqJ',
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
            '_route' => 'generated::tstM61KhjRuKySN6',
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
            '_route' => 'generated::aRBHtfkYYtfWJ2bQ',
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
            '_route' => 'generated::rBzil3BKXhJvbcix',
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
            '_route' => 'generated::haMQVVqbNdP7O9vT',
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
            '_route' => 'generated::8CWo4PCWtmzIZRji',
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
            '_route' => 'generated::oj5hu8boCIU5anET',
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
            '_route' => 'generated::bixCxU8Qr5ess7yv',
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
            '_route' => 'generated::3Mfbyfspae7TmyJe',
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
            '_route' => 'generated::IYSh4P6GpoLlLdU3',
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
            '_route' => 'generated::Efl0eypS21nkU3tk',
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
            '_route' => 'generated::jPBVNClGnn4iaEsM',
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
            '_route' => 'generated::PIgPMv2cG2C1k3N4',
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
            '_route' => 'generated::dKfVeVuKFKzpSYOz',
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
            '_route' => 'generated::b5etfLwQ1MkGzpm2',
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
            '_route' => 'generated::gTunKTrFAbOZQu3E',
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
            '_route' => 'generated::FYWoDHnf6g6qNdvq',
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
            '_route' => 'generated::ecEV57B8xpcnBQll',
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
            '_route' => 'generated::BHwgRpcCO3OQAoXR',
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
            '_route' => 'generated::RFVAvy1CEyLP869P',
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
            '_route' => 'generated::McOf8uzRmqe7aVoG',
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
            '_route' => 'generated::8mei4sswlNoBJi7U',
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
            '_route' => 'generated::RBdu9XesAoUAG2yU',
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
            '_route' => 'generated::LhXye5uNsSgNnuu4',
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
            '_route' => 'generated::g6RuUk3imusWjvq5',
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
            '_route' => 'generated::X9SY0XFVZanBpmax',
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
            '_route' => 'generated::FIPMxt6jzgigVEOP',
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
            '_route' => 'generated::T2SusRwYVRhJW86R',
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
            '_route' => 'generated::O1rDw2kPElpbIt3s',
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
            '_route' => 'generated::bItN9uIgN50lMHNP',
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
            '_route' => 'generated::OzmT16OV5yLAKkzY',
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
            '_route' => 'generated::IrZCEz1obm9d7mNe',
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
            '_route' => 'generated::rdO6Xya8xjCUc3fy',
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
            '_route' => 'generated::DtPo9ibc0k4VP9jI',
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
            '_route' => 'generated::L0qVRWDzKkPRBjVU',
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
            '_route' => 'generated::ky3x6sgfl4teRhtF',
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
            '_route' => 'generated::u5wHZbkx1N8QJRk7',
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
            '_route' => 'generated::p4xthxwkNtLoFYvH',
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
            '_route' => 'generated::SV2ULkyx89CUft6E',
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
            '_route' => 'generated::UAtja8DRprJKdyK7',
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
            '_route' => 'generated::Zai8yhy9c2OFKoeS',
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
            '_route' => 'generated::M7sYKlInTDsmonof',
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
            '_route' => 'generated::jgq0gum0EVAw52il',
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
            '_route' => 'generated::PX0kjcCVlODrTVKf',
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
            '_route' => 'generated::pY6qzN8fbzz1sLKa',
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
            '_route' => 'generated::u0BRyrVTqkXjnLWh',
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
            '_route' => 'generated::CHHGjNRYQrAVGVAO',
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
            '_route' => 'generated::XmBWwY63Ia5FYgus',
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
            '_route' => 'generated::wLCUB3Agjcas4fQT',
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
            '_route' => 'generated::3zrnYfGGQrF5ZlLT',
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
            '_route' => 'generated::QxxPkL6NQJNxvEqa',
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
            '_route' => 'generated::ZphqyayhRSLsMY96',
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
            '_route' => 'generated::8ee2P6IH2iSfiia8',
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
            '_route' => 'generated::foBJ9sxUOagKJV1M',
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
            '_route' => 'generated::A9q443DfGLWhyNuS',
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
            '_route' => 'generated::HUHegxyex3PjZZIR',
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
            '_route' => 'generated::JHg5Jurec9UKJ2pa',
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
            '_route' => 'generated::AWdjfrGyjwaYF436',
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
            '_route' => 'generated::PUAyAy2fmtPO5fRB',
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
            '_route' => 'generated::wptvJJxAuK5qfLFL',
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
      0 => '{^(?|/oauth/(?|tokens/([^/]++)(*:32)|clients/([^/]++)(?|(*:58))|personal\\-access\\-tokens/([^/]++)(*:99))|/api/(?|en(?|dereco(?|/(?|show/([^/]++)(*:146)|update/([^/]++)(*:169)|destroy/([^/]++)(*:193))|_(?|restaurante/(?|show/([^/]++)(*:234)|update/([^/]++)(*:257)|destroy/([^/]++)(*:281))|entrega/(?|show/([^/]++)(*:314)|update/([^/]++)(*:337)|destroy/([^/]++)(*:361))))|tregador/(?|show/([^/]++)(*:397)|update/([^/]++)(*:420)|destroy/([^/]++)(*:444)))|u(?|suario_unidade/desassociar/([^/]++)/([^/]++)(*:502)|nidade/(?|s(?|how/([^/]++)(*:536)|obre_nos/(?|show/([^/]++)(*:569)|update/([^/]++)(*:592)|destroy/([^/]++)(*:616)))|check_slug/([^/]++)/([^/]++)(*:654)|update/([^/]++)(*:677)|destroy/([^/]++)(*:701)|pedido/(?|by_slug/([^/]++)(*:735)|update_status_pedido/([^/]++)(*:772)|show/([^/]++)(*:793))|tempo_espera_entrega/(?|show/([^/]++)(*:839)|update/([^/]++)(*:862)|destroy/([^/]++)(*:886))|horario_funcionamento/(?|show/([^/]++)(*:933)|update/([^/]++)(*:956)|destroy/([^/]++)(*:980))))|f(?|orma_pagamento/(?|show/([^/]++)(*:1026)|update/([^/]++)(*:1050)|destroy/([^/]++)(*:1075))|uso_horario/(?|show/([^/]++)(*:1113)|update/([^/]++)(*:1137)|destroy/([^/]++)(*:1162)))|p(?|roduto(?|/(?|show/([^/]++)(*:1203)|update/([^/]++)(*:1227)|destroy/([^/]++)(*:1252))|_pedido/(?|show/([^/]++)(*:1286)|update/([^/]++)(*:1310)|destroy/([^/]++)(*:1335)))|e(?|dido_adicional(?|/(?|show/([^/]++)(*:1384)|update/([^/]++)(*:1408)|destroy/([^/]++)(*:1433))|_opcao/(?|show/([^/]++)(*:1466)|update/([^/]++)(*:1490)|destroy/([^/]++)(*:1515)))|r(?|gunta/(?|show/([^/]++)(*:1552)|update/([^/]++)(*:1576)|destroy/([^/]++)(*:1601))|missao/(?|show/([^/]++)(*:1634)|update/([^/]++)(*:1658)|destroy/([^/]++)(*:1683))|iodo/(?|show/([^/]++)(*:1714)|update/([^/]++)(*:1738)|destroy/([^/]++)(*:1763)))))|c(?|ategoria(?|/(?|show/([^/]++)(*:1808)|update/([^/]++)(*:1832)|destroy/([^/]++)(*:1857))|cardapio/(?|show/([^/]++)(*:1892)|update/([^/]++)(*:1916)|destroy/([^/]++)(*:1941))|menu/(?|show/([^/]++)(*:1972)|update/([^/]++)(*:1996)|destroy/([^/]++)(*:2021)))|upom(?|desconto/(?|show/([^/]++)(*:2064)|update/([^/]++)(*:2088)|destroy/([^/]++)(*:2113))|_desconto/(?|show/([^/]++)(*:2149)|update/([^/]++)(*:2173)|destroy/([^/]++)(*:2198)))|onfig_entrega/(?|show/([^/]++)(*:2239)|update/([^/]++)(*:2263)|destroy/([^/]++)(*:2288)))|horario_funcionamento(?|/(?|show/([^/]++)(*:2340)|update/([^/]++)(*:2364)|destroy/([^/]++)(*:2389))|_delivery/(?|show/([^/]++)(*:2425)|update/([^/]++)(*:2449)|destroy/([^/]++)(*:2474)))|a(?|diciona(?|l/(?|show/([^/]++)(*:2517)|update/([^/]++)(*:2541)|destroy/([^/]++)(*:2566))|is/(?|show/([^/]++)(*:2595)|update/([^/]++)(*:2619)|destroy/([^/]++)(*:2644)))|rea_entrega/(?|show/([^/]++)(*:2683)|update/([^/]++)(*:2707)|destroy/([^/]++)(*:2732)))|restaurante/(?|show/([^/]++)(*:2771)|u(?|nidades/([^/]++)(*:2800)|pdate/([^/]++)(*:2823))|check_slug/([^/]++)(*:2852)|destroy/([^/]++)(*:2877))|opcao/(?|show/([^/]++)(*:2909)|update/([^/]++)(*:2933)|destroy/([^/]++)(*:2958))|d(?|ados_empresa/(?|show/([^/]++)(*:3001)|update/([^/]++)(*:3025)|destroy/([^/]++)(*:3050))|ias_semana/(?|show/([^/]++)(*:3087)|update/([^/]++)(*:3111)|destroy/([^/]++)(*:3136)))|([^/]++)(?|(*:3158)|/([^/]++)(*:3176))|register(*:3194)|login(*:3208)))/?$}sDu',
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
            '_route' => 'generated::omGvlMWdG4E4Ei3q',
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
            '_route' => 'generated::l4CHuHYcpDoGCQ9g',
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
            '_route' => 'generated::UnEeJNREJqtNBHq1',
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
            '_route' => 'generated::c9Zve206Qfoc3RIs',
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
            '_route' => 'generated::4OoNAVkkvS03ssUr',
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
            '_route' => 'generated::CGazBsafnUmqOU1g',
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
            '_route' => 'generated::iR1NV3di4KCaSz30',
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
            '_route' => 'generated::Gu0fBMre1umrWUlB',
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
            '_route' => 'generated::o7VUxp2uie1jtAPZ',
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
            '_route' => 'generated::e4bqwNFLcSGhLh6g',
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
            '_route' => 'generated::tFdtVAk2uPduPXCY',
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
            '_route' => 'generated::tLwx0ZImdhqIaN8D',
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
            '_route' => 'generated::uOL6cK45a2Ij0nZE',
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
            '_route' => 'generated::wkg803SOaXgSKC8V',
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
            '_route' => 'generated::0C6rtWBTxez58qB7',
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
            '_route' => 'generated::4llUbIL2hBQWea2J',
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
            '_route' => 'generated::KA7TUreFDFzTA234',
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
            '_route' => 'generated::3Lv8CYuY3pq2CEoz',
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
            '_route' => 'generated::tPv182qty8hCRQtb',
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
            '_route' => 'generated::59oPeYaJtfj8LByM',
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
            '_route' => 'generated::6SJMqzEkvrFQHZeS',
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
      772 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nt44qVg9wUK0hwX4',
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
      793 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yhNYTiTuoor6kmaZ',
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
      839 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Ct4JkD9mmiPMOjIu',
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
      862 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xVYX2EMvt8TO4aOS',
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
      886 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W8QA9tRKZbVGDZko',
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
      933 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v0vJJ6BWlnKOmW13',
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
      956 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::k1iv9VNvDuNUBNEd',
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
      980 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1boyKV9ZImM3gVVE',
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
      1026 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RMg9DNNTXlfEHTS6',
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
      1050 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Y53qVE9rDf0LZrLF',
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
      1075 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::45aiWhOfr6DuY2Qj',
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
      1113 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iVw4oSf3Od3BcyA5',
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
      1137 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vM6I6vpFKu75CUj4',
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
      1162 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::97aSnBt3L3agLlJ9',
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
      1203 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8kGo5vYifcZWZ4t9',
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
      1227 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fLHTV30J7EZiPX5s',
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
      1252 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::69DxauSZnCgEG5sm',
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
      1286 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GbGrEi0HflcL0eem',
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
      1310 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lgoscBTRsHQ3lMNt',
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
      1335 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uGmKyBZtbQ0vwyFF',
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
      1384 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::baqgdPKN7mJs6kdh',
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
      1408 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hyuRIDTfUEjjQzCJ',
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
      1433 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LVqwK748EE7Nak33',
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
      1466 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::36ntPuiIydwcdXAN',
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
      1490 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hJ7Ze1UGygKdzeBr',
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
      1515 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::54Sii083tUrOn531',
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
      1552 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HoWrHMfB79FlzrUg',
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
      1576 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9fdlRaBba3wGt1vU',
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
      1601 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mBkywOV0jew1hBtJ',
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
      1634 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yXxXVFfQNWahZ5mt',
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
      1658 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1TIj7FKZyVvlm6mS',
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
      1683 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kXL61TK1sWhlunOs',
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
      1714 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::q9jxmc1C616LPytD',
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
      1738 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::41wKtsmeTeFLU3iB',
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
      1763 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xhCrfmztrrFQbPGN',
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
      1808 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ItxIccWbs8p2yF9U',
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
      1832 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::odT9Wb2U5vGuQPrR',
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
      1857 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::RXVjp1F4elFHHTKd',
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
      1892 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r5q1dmGPEOkd7ZPV',
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
      1916 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dtapKbqj5Q7TPQWl',
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
      1941 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::YRVDEpdGzLBELG86',
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
      1972 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::A6x6OIkV4zCvazhq',
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
      1996 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ufhrEJYFqMOGRhhd',
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
      2021 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jBm0xtttqA8VU1g2',
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
      2064 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lT3tDW7rlZCf2M5Y',
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
      2088 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yD4c7cy5PFVEWE0B',
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
      2113 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4FjWHGVdVE4y3s7H',
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
      2149 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::i9noLJK6j2CLdPx6',
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
      2173 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GLLyTNL3qkmyBwmU',
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
      2198 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::kbOe3TIobVidpdI2',
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
      2239 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::U1sc9wzf4nW799NP',
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
      2263 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::rFkIEzGcUNfx03U5',
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
      2288 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XI6ld9Nmd0JQeQjl',
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
      2340 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::p9bUqX7NlFXRfvGA',
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
      2364 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::MWbBi0x2L0Wyxx1x',
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
      2389 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QaFH8Kp9JiIrQGsa',
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
      2425 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::bVBJT3VKY1rDydM0',
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
      2449 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::01czImSSbMrHKlfq',
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
      2474 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FpkvnVOaEvwxyshy',
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
      2517 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OoHxPGi632yUloui',
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
      2541 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::PGOzZN4mygPfSgmg',
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
      2566 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tJRJWoYfTqXdzr4g',
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
      2595 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OaeDm1XiO4QSYrAS',
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
      2619 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::B1SLyWGVFNVxdqNv',
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
      2644 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::WQJY3Un1TOM9xCqb',
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
      2683 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Q1gZvHQtoKCXcpr2',
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
      2707 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::uVzGSZiPUZi5ysJl',
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
      2732 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::lhBrcB2ptweV7kk8',
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
      2771 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T60pDzXEvhfneptv',
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
      2800 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vuiaHwmtKHaP6VWi',
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
      2823 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::1kM9eLHiMLr0TVDy',
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
      2852 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5fde4AVwyYRTqEJc',
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
      2877 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::iyQsTUNNk72oYWjs',
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
      2909 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fnebzxYz8nswRaaI',
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
      2933 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OCVFtp7BrBDsQRam',
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
      2958 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v4bHNzB6e3YrWM9x',
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
      3001 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::BZ6K5dPAxrDeQwmC',
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
      3025 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::REBG1uw2rDaZQdx0',
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
      3050 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QsTrlpbLpXVaKejt',
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
      3087 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5Ykx0Dxhaf2qD16i',
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
      3111 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OnsGFNQZ1egxQihI',
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
      3136 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::mtrrzaviPpvwlPBY',
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
      3158 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AcaACqz1AdAairTQ',
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
      3176 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GgbRIBhU4ZkA64rD',
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
      3194 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h2SR6MSON5Z9NPFP',
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
      3208 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::ImTDNCK6O4rZWNbo',
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
    'generated::LIaqTWlsnpyfXE78' => 
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
        'as' => 'generated::LIaqTWlsnpyfXE78',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::omGvlMWdG4E4Ei3q' => 
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
        'as' => 'generated::omGvlMWdG4E4Ei3q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AbRu9tiEOMkc4Gbc' => 
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
        'as' => 'generated::AbRu9tiEOMkc4Gbc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::l4CHuHYcpDoGCQ9g' => 
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
        'as' => 'generated::l4CHuHYcpDoGCQ9g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UnEeJNREJqtNBHq1' => 
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
        'as' => 'generated::UnEeJNREJqtNBHq1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QXU7KegijKEBn4dg' => 
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
        'as' => 'generated::QXU7KegijKEBn4dg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::uOL6cK45a2Ij0nZE' => 
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
        'as' => 'generated::uOL6cK45a2Ij0nZE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rlwZTISJ7tNeb2HH' => 
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
        'as' => 'generated::rlwZTISJ7tNeb2HH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RMg9DNNTXlfEHTS6' => 
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
        'as' => 'generated::RMg9DNNTXlfEHTS6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8LPEIRQnhxX45vIj' => 
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
        'as' => 'generated::8LPEIRQnhxX45vIj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Y53qVE9rDf0LZrLF' => 
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
        'as' => 'generated::Y53qVE9rDf0LZrLF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::45aiWhOfr6DuY2Qj' => 
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
        'as' => 'generated::45aiWhOfr6DuY2Qj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2D5UkhIEyxz3E1ey' => 
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
        'as' => 'generated::2D5UkhIEyxz3E1ey',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8kGo5vYifcZWZ4t9' => 
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
        'as' => 'generated::8kGo5vYifcZWZ4t9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xT3fXhfM9UxNBSWW' => 
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
        'as' => 'generated::xT3fXhfM9UxNBSWW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fLHTV30J7EZiPX5s' => 
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
        'as' => 'generated::fLHTV30J7EZiPX5s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::69DxauSZnCgEG5sm' => 
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
        'as' => 'generated::69DxauSZnCgEG5sm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UZ1wpG4vDrAe6vgL' => 
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
        'as' => 'generated::UZ1wpG4vDrAe6vgL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ItxIccWbs8p2yF9U' => 
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
        'as' => 'generated::ItxIccWbs8p2yF9U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QX0yOMxbsMqkrqqt' => 
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
        'as' => 'generated::QX0yOMxbsMqkrqqt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::odT9Wb2U5vGuQPrR' => 
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
        'as' => 'generated::odT9Wb2U5vGuQPrR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RXVjp1F4elFHHTKd' => 
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
        'as' => 'generated::RXVjp1F4elFHHTKd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qgnRm3IWciizVnco' => 
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
        'as' => 'generated::qgnRm3IWciizVnco',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::r5q1dmGPEOkd7ZPV' => 
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
        'as' => 'generated::r5q1dmGPEOkd7ZPV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lApfs4mpnMS9xuMH' => 
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
        'as' => 'generated::lApfs4mpnMS9xuMH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dtapKbqj5Q7TPQWl' => 
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
        'as' => 'generated::dtapKbqj5Q7TPQWl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YRVDEpdGzLBELG86' => 
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
        'as' => 'generated::YRVDEpdGzLBELG86',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pG52Y2tFztfOn10R' => 
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
        'as' => 'generated::pG52Y2tFztfOn10R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::A6x6OIkV4zCvazhq' => 
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
        'as' => 'generated::A6x6OIkV4zCvazhq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qOzT2lVJY5bY3mAm' => 
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
        'as' => 'generated::qOzT2lVJY5bY3mAm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ufhrEJYFqMOGRhhd' => 
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
        'as' => 'generated::ufhrEJYFqMOGRhhd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jBm0xtttqA8VU1g2' => 
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
        'as' => 'generated::jBm0xtttqA8VU1g2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::i6w0teZTjjcRnWi7' => 
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
        'as' => 'generated::i6w0teZTjjcRnWi7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lT3tDW7rlZCf2M5Y' => 
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
        'as' => 'generated::lT3tDW7rlZCf2M5Y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wnIs7kXzbdLOwJqJ' => 
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
        'as' => 'generated::wnIs7kXzbdLOwJqJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yD4c7cy5PFVEWE0B' => 
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
        'as' => 'generated::yD4c7cy5PFVEWE0B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4FjWHGVdVE4y3s7H' => 
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
        'as' => 'generated::4FjWHGVdVE4y3s7H',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tstM61KhjRuKySN6' => 
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
        'as' => 'generated::tstM61KhjRuKySN6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::c9Zve206Qfoc3RIs' => 
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
        'as' => 'generated::c9Zve206Qfoc3RIs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::aRBHtfkYYtfWJ2bQ' => 
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
        'as' => 'generated::aRBHtfkYYtfWJ2bQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4OoNAVkkvS03ssUr' => 
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
        'as' => 'generated::4OoNAVkkvS03ssUr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CGazBsafnUmqOU1g' => 
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
        'as' => 'generated::CGazBsafnUmqOU1g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rBzil3BKXhJvbcix' => 
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
        'as' => 'generated::rBzil3BKXhJvbcix',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::p9bUqX7NlFXRfvGA' => 
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
        'as' => 'generated::p9bUqX7NlFXRfvGA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::haMQVVqbNdP7O9vT' => 
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
        'as' => 'generated::haMQVVqbNdP7O9vT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MWbBi0x2L0Wyxx1x' => 
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
        'as' => 'generated::MWbBi0x2L0Wyxx1x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QaFH8Kp9JiIrQGsa' => 
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
        'as' => 'generated::QaFH8Kp9JiIrQGsa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8CWo4PCWtmzIZRji' => 
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
        'as' => 'generated::8CWo4PCWtmzIZRji',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OoHxPGi632yUloui' => 
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
        'as' => 'generated::OoHxPGi632yUloui',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oj5hu8boCIU5anET' => 
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
        'as' => 'generated::oj5hu8boCIU5anET',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PGOzZN4mygPfSgmg' => 
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
        'as' => 'generated::PGOzZN4mygPfSgmg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tJRJWoYfTqXdzr4g' => 
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
        'as' => 'generated::tJRJWoYfTqXdzr4g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bixCxU8Qr5ess7yv' => 
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
        'as' => 'generated::bixCxU8Qr5ess7yv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::T60pDzXEvhfneptv' => 
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
        'as' => 'generated::T60pDzXEvhfneptv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vuiaHwmtKHaP6VWi' => 
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
        'as' => 'generated::vuiaHwmtKHaP6VWi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5fde4AVwyYRTqEJc' => 
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
        'as' => 'generated::5fde4AVwyYRTqEJc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3Mfbyfspae7TmyJe' => 
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
        'as' => 'generated::3Mfbyfspae7TmyJe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1kM9eLHiMLr0TVDy' => 
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
        'as' => 'generated::1kM9eLHiMLr0TVDy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::iyQsTUNNk72oYWjs' => 
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
        'as' => 'generated::iyQsTUNNk72oYWjs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::IYSh4P6GpoLlLdU3' => 
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
        'as' => 'generated::IYSh4P6GpoLlLdU3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wkg803SOaXgSKC8V' => 
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
        'as' => 'generated::wkg803SOaXgSKC8V',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3Lv8CYuY3pq2CEoz' => 
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
        'as' => 'generated::3Lv8CYuY3pq2CEoz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Efl0eypS21nkU3tk' => 
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
        'as' => 'generated::Efl0eypS21nkU3tk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tPv182qty8hCRQtb' => 
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
        'as' => 'generated::tPv182qty8hCRQtb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::59oPeYaJtfj8LByM' => 
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
        'as' => 'generated::59oPeYaJtfj8LByM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6SJMqzEkvrFQHZeS' => 
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
        'as' => 'generated::6SJMqzEkvrFQHZeS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jPBVNClGnn4iaEsM' => 
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
        'as' => 'generated::jPBVNClGnn4iaEsM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PIgPMv2cG2C1k3N4' => 
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
        'as' => 'generated::PIgPMv2cG2C1k3N4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nt44qVg9wUK0hwX4' => 
    array (
      'methods' => 
      array (
        0 => 'PUT',
      ),
      'uri' => 'api/unidade/pedido/update_status_pedido/{id}',
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
        'as' => 'generated::nt44qVg9wUK0hwX4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yhNYTiTuoor6kmaZ' => 
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
        'as' => 'generated::yhNYTiTuoor6kmaZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dKfVeVuKFKzpSYOz' => 
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
        'as' => 'generated::dKfVeVuKFKzpSYOz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::b5etfLwQ1MkGzpm2' => 
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
        'as' => 'generated::b5etfLwQ1MkGzpm2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Ct4JkD9mmiPMOjIu' => 
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
        'as' => 'generated::Ct4JkD9mmiPMOjIu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::gTunKTrFAbOZQu3E' => 
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
        'as' => 'generated::gTunKTrFAbOZQu3E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xVYX2EMvt8TO4aOS' => 
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
        'as' => 'generated::xVYX2EMvt8TO4aOS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::W8QA9tRKZbVGDZko' => 
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
        'as' => 'generated::W8QA9tRKZbVGDZko',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FYWoDHnf6g6qNdvq' => 
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
        'as' => 'generated::FYWoDHnf6g6qNdvq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::v0vJJ6BWlnKOmW13' => 
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
        'as' => 'generated::v0vJJ6BWlnKOmW13',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ecEV57B8xpcnBQll' => 
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
        'as' => 'generated::ecEV57B8xpcnBQll',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::k1iv9VNvDuNUBNEd' => 
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
        'as' => 'generated::k1iv9VNvDuNUBNEd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1boyKV9ZImM3gVVE' => 
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
        'as' => 'generated::1boyKV9ZImM3gVVE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BHwgRpcCO3OQAoXR' => 
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
        'as' => 'generated::BHwgRpcCO3OQAoXR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0C6rtWBTxez58qB7' => 
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
        'as' => 'generated::0C6rtWBTxez58qB7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RFVAvy1CEyLP869P' => 
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
        'as' => 'generated::RFVAvy1CEyLP869P',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4llUbIL2hBQWea2J' => 
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
        'as' => 'generated::4llUbIL2hBQWea2J',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KA7TUreFDFzTA234' => 
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
        'as' => 'generated::KA7TUreFDFzTA234',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::McOf8uzRmqe7aVoG' => 
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
        'as' => 'generated::McOf8uzRmqe7aVoG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8mei4sswlNoBJi7U' => 
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
        'as' => 'generated::8mei4sswlNoBJi7U',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::iR1NV3di4KCaSz30' => 
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
        'as' => 'generated::iR1NV3di4KCaSz30',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RBdu9XesAoUAG2yU' => 
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
        'as' => 'generated::RBdu9XesAoUAG2yU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Gu0fBMre1umrWUlB' => 
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
        'as' => 'generated::Gu0fBMre1umrWUlB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::o7VUxp2uie1jtAPZ' => 
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
        'as' => 'generated::o7VUxp2uie1jtAPZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LhXye5uNsSgNnuu4' => 
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
        'as' => 'generated::LhXye5uNsSgNnuu4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fnebzxYz8nswRaaI' => 
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
        'as' => 'generated::fnebzxYz8nswRaaI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::g6RuUk3imusWjvq5' => 
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
        'as' => 'generated::g6RuUk3imusWjvq5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OCVFtp7BrBDsQRam' => 
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
        'as' => 'generated::OCVFtp7BrBDsQRam',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::v4bHNzB6e3YrWM9x' => 
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
        'as' => 'generated::v4bHNzB6e3YrWM9x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::X9SY0XFVZanBpmax' => 
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
        'as' => 'generated::X9SY0XFVZanBpmax',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OaeDm1XiO4QSYrAS' => 
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
        'as' => 'generated::OaeDm1XiO4QSYrAS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FIPMxt6jzgigVEOP' => 
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
        'as' => 'generated::FIPMxt6jzgigVEOP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::B1SLyWGVFNVxdqNv' => 
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
        'as' => 'generated::B1SLyWGVFNVxdqNv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WQJY3Un1TOM9xCqb' => 
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
        'as' => 'generated::WQJY3Un1TOM9xCqb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::T2SusRwYVRhJW86R' => 
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
        'as' => 'generated::T2SusRwYVRhJW86R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::O1rDw2kPElpbIt3s' => 
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
        'as' => 'generated::O1rDw2kPElpbIt3s',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GbGrEi0HflcL0eem' => 
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
        'as' => 'generated::GbGrEi0HflcL0eem',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bItN9uIgN50lMHNP' => 
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
        'as' => 'generated::bItN9uIgN50lMHNP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lgoscBTRsHQ3lMNt' => 
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
        'as' => 'generated::lgoscBTRsHQ3lMNt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::uGmKyBZtbQ0vwyFF' => 
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
        'as' => 'generated::uGmKyBZtbQ0vwyFF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OzmT16OV5yLAKkzY' => 
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
        'as' => 'generated::OzmT16OV5yLAKkzY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::baqgdPKN7mJs6kdh' => 
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
        'as' => 'generated::baqgdPKN7mJs6kdh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::IrZCEz1obm9d7mNe' => 
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
        'as' => 'generated::IrZCEz1obm9d7mNe',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hyuRIDTfUEjjQzCJ' => 
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
        'as' => 'generated::hyuRIDTfUEjjQzCJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LVqwK748EE7Nak33' => 
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
        'as' => 'generated::LVqwK748EE7Nak33',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rdO6Xya8xjCUc3fy' => 
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
        'as' => 'generated::rdO6Xya8xjCUc3fy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::36ntPuiIydwcdXAN' => 
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
        'as' => 'generated::36ntPuiIydwcdXAN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DtPo9ibc0k4VP9jI' => 
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
        'as' => 'generated::DtPo9ibc0k4VP9jI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hJ7Ze1UGygKdzeBr' => 
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
        'as' => 'generated::hJ7Ze1UGygKdzeBr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::54Sii083tUrOn531' => 
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
        'as' => 'generated::54Sii083tUrOn531',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::L0qVRWDzKkPRBjVU' => 
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
        'as' => 'generated::L0qVRWDzKkPRBjVU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HoWrHMfB79FlzrUg' => 
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
        'as' => 'generated::HoWrHMfB79FlzrUg',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ky3x6sgfl4teRhtF' => 
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
        'as' => 'generated::ky3x6sgfl4teRhtF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9fdlRaBba3wGt1vU' => 
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
        'as' => 'generated::9fdlRaBba3wGt1vU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mBkywOV0jew1hBtJ' => 
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
        'as' => 'generated::mBkywOV0jew1hBtJ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::u5wHZbkx1N8QJRk7' => 
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
        'as' => 'generated::u5wHZbkx1N8QJRk7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::e4bqwNFLcSGhLh6g' => 
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
        'as' => 'generated::e4bqwNFLcSGhLh6g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::p4xthxwkNtLoFYvH' => 
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
        'as' => 'generated::p4xthxwkNtLoFYvH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tFdtVAk2uPduPXCY' => 
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
        'as' => 'generated::tFdtVAk2uPduPXCY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tLwx0ZImdhqIaN8D' => 
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
        'as' => 'generated::tLwx0ZImdhqIaN8D',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::SV2ULkyx89CUft6E' => 
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
        'as' => 'generated::SV2ULkyx89CUft6E',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BZ6K5dPAxrDeQwmC' => 
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
        'as' => 'generated::BZ6K5dPAxrDeQwmC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UAtja8DRprJKdyK7' => 
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
        'as' => 'generated::UAtja8DRprJKdyK7',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::REBG1uw2rDaZQdx0' => 
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
        'as' => 'generated::REBG1uw2rDaZQdx0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QsTrlpbLpXVaKejt' => 
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
        'as' => 'generated::QsTrlpbLpXVaKejt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Zai8yhy9c2OFKoeS' => 
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
        'as' => 'generated::Zai8yhy9c2OFKoeS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::U1sc9wzf4nW799NP' => 
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
        'as' => 'generated::U1sc9wzf4nW799NP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::M7sYKlInTDsmonof' => 
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
        'as' => 'generated::M7sYKlInTDsmonof',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rFkIEzGcUNfx03U5' => 
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
        'as' => 'generated::rFkIEzGcUNfx03U5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XI6ld9Nmd0JQeQjl' => 
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
        'as' => 'generated::XI6ld9Nmd0JQeQjl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jgq0gum0EVAw52il' => 
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
        'as' => 'generated::jgq0gum0EVAw52il',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yXxXVFfQNWahZ5mt' => 
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
        'as' => 'generated::yXxXVFfQNWahZ5mt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PX0kjcCVlODrTVKf' => 
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
        'as' => 'generated::PX0kjcCVlODrTVKf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1TIj7FKZyVvlm6mS' => 
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
        'as' => 'generated::1TIj7FKZyVvlm6mS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kXL61TK1sWhlunOs' => 
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
        'as' => 'generated::kXL61TK1sWhlunOs',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pY6qzN8fbzz1sLKa' => 
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
        'as' => 'generated::pY6qzN8fbzz1sLKa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Q1gZvHQtoKCXcpr2' => 
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
        'as' => 'generated::Q1gZvHQtoKCXcpr2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::u0BRyrVTqkXjnLWh' => 
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
        'as' => 'generated::u0BRyrVTqkXjnLWh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::uVzGSZiPUZi5ysJl' => 
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
        'as' => 'generated::uVzGSZiPUZi5ysJl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lhBrcB2ptweV7kk8' => 
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
        'as' => 'generated::lhBrcB2ptweV7kk8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CHHGjNRYQrAVGVAO' => 
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
        'as' => 'generated::CHHGjNRYQrAVGVAO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::i9noLJK6j2CLdPx6' => 
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
        'as' => 'generated::i9noLJK6j2CLdPx6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XmBWwY63Ia5FYgus' => 
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
        'as' => 'generated::XmBWwY63Ia5FYgus',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GLLyTNL3qkmyBwmU' => 
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
        'as' => 'generated::GLLyTNL3qkmyBwmU',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::kbOe3TIobVidpdI2' => 
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
        'as' => 'generated::kbOe3TIobVidpdI2',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wLCUB3Agjcas4fQT' => 
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
        'as' => 'generated::wLCUB3Agjcas4fQT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5Ykx0Dxhaf2qD16i' => 
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
        'as' => 'generated::5Ykx0Dxhaf2qD16i',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3zrnYfGGQrF5ZlLT' => 
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
        'as' => 'generated::3zrnYfGGQrF5ZlLT',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OnsGFNQZ1egxQihI' => 
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
        'as' => 'generated::OnsGFNQZ1egxQihI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mtrrzaviPpvwlPBY' => 
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
        'as' => 'generated::mtrrzaviPpvwlPBY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QxxPkL6NQJNxvEqa' => 
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
        'as' => 'generated::QxxPkL6NQJNxvEqa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::q9jxmc1C616LPytD' => 
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
        'as' => 'generated::q9jxmc1C616LPytD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZphqyayhRSLsMY96' => 
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
        'as' => 'generated::ZphqyayhRSLsMY96',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::41wKtsmeTeFLU3iB' => 
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
        'as' => 'generated::41wKtsmeTeFLU3iB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xhCrfmztrrFQbPGN' => 
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
        'as' => 'generated::xhCrfmztrrFQbPGN',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8ee2P6IH2iSfiia8' => 
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
        'as' => 'generated::8ee2P6IH2iSfiia8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::iVw4oSf3Od3BcyA5' => 
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
        'as' => 'generated::iVw4oSf3Od3BcyA5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::foBJ9sxUOagKJV1M' => 
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
        'as' => 'generated::foBJ9sxUOagKJV1M',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vM6I6vpFKu75CUj4' => 
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
        'as' => 'generated::vM6I6vpFKu75CUj4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::97aSnBt3L3agLlJ9' => 
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
        'as' => 'generated::97aSnBt3L3agLlJ9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::A9q443DfGLWhyNuS' => 
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
        'as' => 'generated::A9q443DfGLWhyNuS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bVBJT3VKY1rDydM0' => 
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
        'as' => 'generated::bVBJT3VKY1rDydM0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HUHegxyex3PjZZIR' => 
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
        'as' => 'generated::HUHegxyex3PjZZIR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::01czImSSbMrHKlfq' => 
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
        'as' => 'generated::01czImSSbMrHKlfq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FpkvnVOaEvwxyshy' => 
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
        'as' => 'generated::FpkvnVOaEvwxyshy',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::JHg5Jurec9UKJ2pa' => 
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
        'as' => 'generated::JHg5Jurec9UKJ2pa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AWdjfrGyjwaYF436' => 
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
        'as' => 'generated::AWdjfrGyjwaYF436',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PUAyAy2fmtPO5fRB' => 
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
        'as' => 'generated::PUAyAy2fmtPO5fRB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wptvJJxAuK5qfLFL' => 
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
        'as' => 'generated::wptvJJxAuK5qfLFL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AcaACqz1AdAairTQ' => 
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
        'as' => 'generated::AcaACqz1AdAairTQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GgbRIBhU4ZkA64rD' => 
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
        'as' => 'generated::GgbRIBhU4ZkA64rD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::h2SR6MSON5Z9NPFP' => 
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
        'as' => 'generated::h2SR6MSON5Z9NPFP',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ImTDNCK6O4rZWNbo' => 
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
        'as' => 'generated::ImTDNCK6O4rZWNbo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
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
