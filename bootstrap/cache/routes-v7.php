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
            '_route' => 'generated::tejxmIUuhuJ3lH1Q',
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
            '_route' => 'generated::sMYOy7Joktime2oD',
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
            '_route' => 'generated::uEPMUwPmGQiXKFtr',
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
            '_route' => 'generated::Epuda01Hf6caFpLj',
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
            '_route' => 'generated::FVS7idUposur1yzz',
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
            '_route' => 'generated::Pv4YWfVISTU6K0R4',
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
            '_route' => 'generated::IFxOKnwr1uH6H18t',
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
            '_route' => 'generated::zO74TkzHU1fInSXa',
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
            '_route' => 'generated::Y3dr0O3pBmhAVP2T',
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
            '_route' => 'generated::EnOY6mKZ9M7fXNlF',
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
            '_route' => 'generated::rCsJJz5nV8l20Lbc',
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
            '_route' => 'generated::00zeQXFXybyGywQu',
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
            '_route' => 'generated::AOlUwmeQAFoNa0kw',
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
            '_route' => 'generated::7iGyS2niYzr1jTf9',
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
            '_route' => 'generated::pHI6Sv7SdndhN14n',
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
            '_route' => 'generated::MAX8PTDCEOLSIaPS',
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
            '_route' => 'generated::u2J8ihO2T58B1QBF',
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
            '_route' => 'generated::NpWuYoy7pVaF7qED',
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
            '_route' => 'generated::ZshReEynz1GD2V7X',
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
            '_route' => 'generated::CllLNeIl37fADQU1',
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
            '_route' => 'generated::EHaYNK8oSgHefkLO',
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
            '_route' => 'generated::iKQEw2W8R1KUaEHC',
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
            '_route' => 'generated::ShoMPY76Q3Emfw8y',
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
            '_route' => 'generated::oJNsE3dAgj7qozIO',
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
            '_route' => 'generated::XopfCrvRN7GHIp40',
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
            '_route' => 'generated::BEBnCvjeo3Y3vyqS',
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
            '_route' => 'generated::WKL304q1ZXmwZmO0',
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
            '_route' => 'generated::9tNmxhWlVSAj0ZE6',
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
            '_route' => 'generated::0NL250eZe285ne1f',
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
            '_route' => 'generated::Fx3TBfxubSOaZl3G',
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
            '_route' => 'generated::s2VokxS88roEMmSL',
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
            '_route' => 'generated::UTbMlf3Jyx1YoIsM',
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
            '_route' => 'generated::2F9Gb7tiKaWrKlER',
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
            '_route' => 'generated::pAMlq6ePQN6591Mk',
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
            '_route' => 'generated::inlBSbfO0JCexsuK',
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
            '_route' => 'generated::Fs6eXeMN8mBA8owp',
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
            '_route' => 'generated::bQon6buUZC3Of4zm',
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
            '_route' => 'generated::NG1Owgbz4kWaEgrF',
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
            '_route' => 'generated::mYtshjWz2uJXQesh',
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
            '_route' => 'generated::Qe9e5vBLwNuQvSVM',
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
            '_route' => 'generated::cGN1dy4tKZdaz1Ku',
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
            '_route' => 'generated::2Zg712Nx3bvdRVnQ',
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
            '_route' => 'generated::EzCf4msm50v0R9mX',
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
            '_route' => 'generated::frw8ahPULAZZpZMq',
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
            '_route' => 'generated::DdOWbpJGBEWlQPv6',
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
            '_route' => 'generated::jdvao1bfIvnZyCNk',
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
            '_route' => 'generated::ad8ospojvckYpF5G',
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
            '_route' => 'generated::D5Zxi5Gsck7QvBc9',
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
            '_route' => 'generated::szaX7TFHD0oUs2EB',
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
            '_route' => 'generated::Kt94ocZaFo9LH912',
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
            '_route' => 'generated::PpF1HNKd5FyPECoi',
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
            '_route' => 'generated::WLKG4vzG9xPz6Lah',
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
            '_route' => 'generated::VwLPqkOQzdsX1Ev3',
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
            '_route' => 'generated::VqKh2oA6IILUcglS',
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
            '_route' => 'generated::2F4bm4b33RG1Rt4p',
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
            '_route' => 'generated::Z3yT1ASwjc1JpfjC',
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
            '_route' => 'generated::zDjLe5Nsyi2kUqCQ',
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
            '_route' => 'generated::zwGcUBsAOC6rbzZd',
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
            '_route' => 'generated::VA2E91aDDWxpTGTH',
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
            '_route' => 'generated::Sh2y3TXQuf50bTsz',
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
            '_route' => 'generated::YupBdteGR3UPtFDb',
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
            '_route' => 'generated::G25xo7HEY2g4OTPZ',
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
            '_route' => 'generated::0VA6MhbcNw4S6Uiw',
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
            '_route' => 'generated::bkf3CkynAWn80fxt',
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
            '_route' => 'generated::GCqFpBxI20SiF3XI',
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
            '_route' => 'generated::5Hn7ILDLHpfuyPge',
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
            '_route' => 'generated::XyZm5gsEFl6GXbps',
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
            '_route' => 'generated::MDm5NGsY8vSTu7r5',
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
            '_route' => 'generated::TPBJKUwyrEkeKYGI',
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
            '_route' => 'generated::Yjnw8uQVOoU5mGSB',
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
            '_route' => 'generated::NIpM7nvmqUOjJWsp',
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
            '_route' => 'generated::MWWQ1PlvxzvdbeZa',
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
            '_route' => 'generated::6Pfm4NUq4TN5mkbW',
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
            '_route' => 'generated::euZLmR6I4UR8rofx',
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
      0 => '{^(?|/oauth/(?|tokens/([^/]++)(*:32)|clients/([^/]++)(?|(*:58))|personal\\-access\\-tokens/([^/]++)(*:99))|/api/(?|en(?|dereco(?|/(?|show/([^/]++)(*:146)|update/([^/]++)(*:169)|destroy/([^/]++)(*:193))|_(?|restaurante/(?|show/([^/]++)(*:234)|update/([^/]++)(*:257)|destroy/([^/]++)(*:281))|entrega/(?|show/([^/]++)(*:314)|update/([^/]++)(*:337)|destroy/([^/]++)(*:361))))|tregador/(?|show/([^/]++)(*:397)|by_unidade/([^/]++)(*:424)|update/([^/]++)(*:447)|destroy/([^/]++)(*:471)))|u(?|suario_unidade/desassociar/([^/]++)/([^/]++)(*:529)|nidade/(?|s(?|how/([^/]++)(*:563)|obre_nos/(?|show/([^/]++)(*:596)|update/([^/]++)(*:619)|destroy/([^/]++)(*:643)))|check_slug/([^/]++)/([^/]++)(*:681)|update/([^/]++)(*:704)|destroy/([^/]++)(*:728)|pedido/(?|by_slug/([^/]++)/([^/]++)(*:771)|update_status/([^/]++)(*:801)|show/([^/]++)(*:822))|tempo_espera_entrega/(?|show/([^/]++)(*:868)|update/([^/]++)(*:891)|destroy/([^/]++)(*:915))|horario_funcionamento/(?|show/([^/]++)(*:962)|update/([^/]++)(*:985)|destroy/([^/]++)(*:1009))))|f(?|orma_pagamento/(?|show/([^/]++)(*:1056)|update/([^/]++)(*:1080)|destroy/([^/]++)(*:1105))|uso_horario/(?|show/([^/]++)(*:1143)|update/([^/]++)(*:1167)|destroy/([^/]++)(*:1192)))|p(?|roduto(?|/(?|show/([^/]++)(*:1233)|update/([^/]++)(*:1257)|destroy/([^/]++)(*:1282))|_pedido/(?|show/([^/]++)(*:1316)|update/([^/]++)(*:1340)|destroy/([^/]++)(*:1365)))|e(?|dido_adicional(?|/(?|show/([^/]++)(*:1414)|update/([^/]++)(*:1438)|destroy/([^/]++)(*:1463))|_opcao/(?|show/([^/]++)(*:1496)|update/([^/]++)(*:1520)|destroy/([^/]++)(*:1545)))|r(?|gunta/(?|show/([^/]++)(*:1582)|update/([^/]++)(*:1606)|destroy/([^/]++)(*:1631))|missao/(?|show/([^/]++)(*:1664)|update/([^/]++)(*:1688)|destroy/([^/]++)(*:1713))|iodo/(?|show/([^/]++)(*:1744)|update/([^/]++)(*:1768)|destroy/([^/]++)(*:1793)))))|c(?|ategoria(?|/(?|by_slug/([^/]++)/([^/]++)(*:1850)|show/([^/]++)(*:1872)|update/([^/]++)(*:1896)|destroy/([^/]++)(*:1921))|cardapio/(?|show/([^/]++)(*:1956)|update/([^/]++)(*:1980)|destroy/([^/]++)(*:2005))|menu/(?|show/([^/]++)(*:2036)|update/([^/]++)(*:2060)|destroy/([^/]++)(*:2085)))|onfig_entrega/(?|show/([^/]++)(*:2126)|update/([^/]++)(*:2150)|destroy/([^/]++)(*:2175))|upom_desconto/(?|show/([^/]++)(*:2215)|by_unidade/([^/]++)(*:2243)|update/([^/]++)(*:2267)|destroy/([^/]++)(*:2292)))|horario_funcionamento(?|/(?|show/([^/]++)(*:2344)|update/([^/]++)(*:2368)|destroy/([^/]++)(*:2393))|_delivery/(?|show/([^/]++)(*:2429)|update/([^/]++)(*:2453)|destroy/([^/]++)(*:2478)))|a(?|diciona(?|l/(?|show/([^/]++)(*:2521)|update/([^/]++)(*:2545)|destroy/([^/]++)(*:2570))|is/(?|show/([^/]++)(*:2599)|update/([^/]++)(*:2623)|destroy/([^/]++)(*:2648)))|rea_entrega/(?|show/([^/]++)(*:2687)|update/([^/]++)(*:2711)|destroy/([^/]++)(*:2736)))|restaurante/(?|show/([^/]++)(*:2775)|u(?|nidades/([^/]++)(*:2804)|pdate/([^/]++)(*:2827))|check_slug/([^/]++)(*:2856)|destroy/([^/]++)(*:2881))|opcao/(?|show/([^/]++)(*:2913)|update/([^/]++)(*:2937)|destroy/([^/]++)(*:2962))|d(?|ados_empresa/(?|show/([^/]++)(*:3005)|update/([^/]++)(*:3029)|destroy/([^/]++)(*:3054))|ias_semana/(?|show/([^/]++)(*:3091)|update/([^/]++)(*:3115)|destroy/([^/]++)(*:3140)))|([^/]++)(?|(*:3162)|/([^/]++)(*:3180))|register(*:3198)|login(*:3212)))/?$}sDu',
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
            '_route' => 'generated::1oZCS93OvMYrauN6',
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
            '_route' => 'generated::gfbKBxi1SOXEGP2e',
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
            '_route' => 'generated::J3vMUZETVDDrksca',
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
            '_route' => 'generated::G6L7BOYB3hDsTGa9',
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
            '_route' => 'generated::CYUFQUgjZoed4FOA',
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
            '_route' => 'generated::IUzSdAa4L6BSpJLZ',
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
            '_route' => 'generated::V2oGFoRHdxq2wv9d',
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
            '_route' => 'generated::xMLEESjDwbMKYaz8',
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
            '_route' => 'generated::a3fj4iTM8K6dd8bz',
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
            '_route' => 'generated::RimwGpoldA4vB8gG',
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
            '_route' => 'generated::6iSgO8wJmFflxGhv',
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
            '_route' => 'generated::CaCtKJ9EmmlvnkLH',
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
            '_route' => 'generated::hCDaIjTRCypdRkXu',
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
            '_route' => 'generated::a0x6vTHA5sTz8Bpz',
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
            '_route' => 'generated::z7RFe6QOE2gFti76',
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
            '_route' => 'generated::lBZ4yeAdEcexsQyu',
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
            '_route' => 'generated::2LBbAPrI3nRBcnHo',
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
            '_route' => 'generated::Tynk0w4HCFYTxCSW',
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
            '_route' => 'generated::UWRabj0A4VjfZj4N',
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
            '_route' => 'generated::mDAX4vSfQbC0IfiE',
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
            '_route' => 'generated::KDyh0jGUz0AHud9I',
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
            '_route' => 'generated::wekncYBLD55Aaj3l',
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
      801 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::gUWgYvf4C7PrjdQj',
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
      822 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HQRfjnMfjpqQvwLV',
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
      868 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::eAzjJZ3zdmrEV4mo',
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
      891 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::W8Mh21STLGKNXMH8',
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
      915 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CtptbSyeDifKWjPl',
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
      962 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yuTWFI3XQFhqwsEa',
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
      985 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wmpXJmLs7s8HVHOL',
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
      1009 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qdZjCeBXEw64FUZr',
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
      1056 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wi4r2KeeI0RLvR6x',
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
      1080 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GXVftp5cnozC7Fb0',
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
      1105 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::48rNmItS2FA11JAw',
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
      1143 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::r6Wg7BDMSt0GGD8x',
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
      1167 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vFN0uAT6p4njsLiY',
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
      1192 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yUnUwV5W2KOfCY2B',
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
      1233 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::3xiay57VmjW5vEI1',
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
      1257 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::aRTWUbYQmombC9Dl',
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
      1282 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::vsntSOaO0x3VJRvI',
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
      1316 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::2heASwU9jqhT0XTv',
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
      1340 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0dcoWErRBIoeGf0X',
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
      1365 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::0Opp6oAlVXEQFh4n',
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
      1414 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5aYq602jugecl0tO',
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
      1438 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::HSzp2hAuYJGEzjZD',
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
      1463 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::KLdrWFje9UyvBcrL',
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
      1496 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DhFiIrt4PlGctldM',
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
      1520 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tEzrwCx5QrGBnIQr',
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
      1545 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::e5JOZmMOgdiP3Ela',
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
      1582 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xCtenKSvtdwFWcQw',
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
      1606 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::t88jT4WH2K4HCxFj',
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
      1631 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qjCZJyX80Jpub73Q',
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
      1664 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oJ8XCsypczUubHL9',
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
      1688 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::XAMSlgi6HjnuYYJc',
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
      1713 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::igf1bOdxSDkjFe2b',
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
      1744 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::hEEjKTSkpcGPmTK0',
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
      1768 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::drLbTX4Iskn6VKpn',
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
      1793 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::EZF2wygboZ2ErZRa',
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
      1850 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::fTvJEMcklGqhdrBS',
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
      1872 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jCiJZlXVrKDYvZ6R',
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
      1896 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wve4maalIA8FLrsz',
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
      1921 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::dWS7b4KSKGBknY6e',
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
      1956 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::h13Dga5gUxaT4KV1',
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
      1980 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::CSJCVNG0Gasw59vB',
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
      2005 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::UQNtL1QCjDmVzSgk',
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
      2036 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yaS3T6DyKJR79dNx',
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
      2060 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::8Cop6u6yrw7VXXXf',
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
      2085 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::qtcGtKCaER4cYaZI',
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
      2126 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::Wxyg9qwwT4KGMA6a',
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
      2150 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::idrxDxwdGUpPdDPj',
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
      2175 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::w11qdu5OFDK2j9YG',
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
      2215 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::TfxBC6dyOtO62MU1',
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
      2243 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jqjv20gOucRyevlL',
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
      2267 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::g461g69HdrMjZl7g',
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
      2292 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::nGhdtkbuyuFUMKXx',
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
      2344 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::VY2LHQMwGBv9qdET',
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
      2368 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::J2b6rH5zJILEBNPX',
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
      2393 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::yqhtyw8HrPYfC3qK',
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
      2429 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::T1I1xZcJp2NiiJRA',
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
      2453 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FKrdDZL3n5wMn72f',
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
      2478 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::5vzRPUmMmJ9Gd41N',
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
      2521 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::P9JwXKaqp8vtsUY1',
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
      2545 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oLv4zG73RIuHAhfp',
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
      2570 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6VRyS2UTsWVpqm2v',
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
      2599 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::4k7FwyRrrSbNhU9F',
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
      2623 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::sR3ydf3JgyK8f51I',
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
      2648 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::QnkTowg3cb0RM5Gl',
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
      2687 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GlbVrkarUJaUjtio',
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
      2711 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::xusz7IliBQlK0toH',
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
      2736 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::jz1svLvZTu4tmYtr',
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
      2775 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GaZUxuynB5UXXO1x',
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
      2804 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::LLpOiFTorzquaBzR',
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
      2827 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::oJH91nZnJQQBpjVb',
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
      2856 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DDyjOl3KvDeXnIUu',
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
      2881 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::FmM1ZWW4ht0DJeb0',
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
      2913 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::wysnTJUHDbCpKZYQ',
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
      2937 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::GQKtI8lj5MTXLonb',
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
      2962 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::6FVwmgInAbkMbom5',
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
      3005 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OPAKQnvu3lReUUNG',
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
      3029 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::9seit0sdsEF8ymoi',
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
      3054 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::pONpXPowrEm5GWUA',
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
      3091 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::tO7RELDlm9krBay8',
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
      3115 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::AHfDY4i2cstZSeQ1',
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
      3140 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::v5UqJrLEr9VIgO8h',
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
      3162 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::IyxUL06vqfohNRpA',
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
      3180 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::DEcduI7CPcsI8uUV',
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
      3198 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::OJECqnb7YE9x6FuE',
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
      3212 => 
      array (
        0 => 
        array (
          0 => 
          array (
            '_route' => 'generated::NIX4AlpcPQacksZc',
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
    'generated::tejxmIUuhuJ3lH1Q' => 
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
        'as' => 'generated::tejxmIUuhuJ3lH1Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::1oZCS93OvMYrauN6' => 
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
        'as' => 'generated::1oZCS93OvMYrauN6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::sMYOy7Joktime2oD' => 
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
        'as' => 'generated::sMYOy7Joktime2oD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::gfbKBxi1SOXEGP2e' => 
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
        'as' => 'generated::gfbKBxi1SOXEGP2e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::J3vMUZETVDDrksca' => 
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
        'as' => 'generated::J3vMUZETVDDrksca',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::uEPMUwPmGQiXKFtr' => 
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
        'as' => 'generated::uEPMUwPmGQiXKFtr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::a0x6vTHA5sTz8Bpz' => 
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
        'as' => 'generated::a0x6vTHA5sTz8Bpz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Epuda01Hf6caFpLj' => 
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
        'as' => 'generated::Epuda01Hf6caFpLj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wi4r2KeeI0RLvR6x' => 
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
        'as' => 'generated::wi4r2KeeI0RLvR6x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FVS7idUposur1yzz' => 
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
        'as' => 'generated::FVS7idUposur1yzz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GXVftp5cnozC7Fb0' => 
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
        'as' => 'generated::GXVftp5cnozC7Fb0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::48rNmItS2FA11JAw' => 
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
        'as' => 'generated::48rNmItS2FA11JAw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Pv4YWfVISTU6K0R4' => 
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
        'as' => 'generated::Pv4YWfVISTU6K0R4',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::3xiay57VmjW5vEI1' => 
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
        'as' => 'generated::3xiay57VmjW5vEI1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::IFxOKnwr1uH6H18t' => 
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
        'as' => 'generated::IFxOKnwr1uH6H18t',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::aRTWUbYQmombC9Dl' => 
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
        'as' => 'generated::aRTWUbYQmombC9Dl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vsntSOaO0x3VJRvI' => 
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
        'as' => 'generated::vsntSOaO0x3VJRvI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zO74TkzHU1fInSXa' => 
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
        'as' => 'generated::zO74TkzHU1fInSXa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::fTvJEMcklGqhdrBS' => 
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
        'as' => 'generated::fTvJEMcklGqhdrBS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jCiJZlXVrKDYvZ6R' => 
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
        'as' => 'generated::jCiJZlXVrKDYvZ6R',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Y3dr0O3pBmhAVP2T' => 
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
        'as' => 'generated::Y3dr0O3pBmhAVP2T',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Wve4maalIA8FLrsz' => 
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
        'as' => 'generated::Wve4maalIA8FLrsz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::dWS7b4KSKGBknY6e' => 
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
        'as' => 'generated::dWS7b4KSKGBknY6e',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EnOY6mKZ9M7fXNlF' => 
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
        'as' => 'generated::EnOY6mKZ9M7fXNlF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::h13Dga5gUxaT4KV1' => 
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
        'as' => 'generated::h13Dga5gUxaT4KV1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::rCsJJz5nV8l20Lbc' => 
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
        'as' => 'generated::rCsJJz5nV8l20Lbc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CSJCVNG0Gasw59vB' => 
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
        'as' => 'generated::CSJCVNG0Gasw59vB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UQNtL1QCjDmVzSgk' => 
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
        'as' => 'generated::UQNtL1QCjDmVzSgk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::00zeQXFXybyGywQu' => 
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
        'as' => 'generated::00zeQXFXybyGywQu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yaS3T6DyKJR79dNx' => 
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
        'as' => 'generated::yaS3T6DyKJR79dNx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AOlUwmeQAFoNa0kw' => 
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
        'as' => 'generated::AOlUwmeQAFoNa0kw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::8Cop6u6yrw7VXXXf' => 
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
        'as' => 'generated::8Cop6u6yrw7VXXXf',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qtcGtKCaER4cYaZI' => 
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
        'as' => 'generated::qtcGtKCaER4cYaZI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::7iGyS2niYzr1jTf9' => 
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
        'as' => 'generated::7iGyS2niYzr1jTf9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::G6L7BOYB3hDsTGa9' => 
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
        'as' => 'generated::G6L7BOYB3hDsTGa9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pHI6Sv7SdndhN14n' => 
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
        'as' => 'generated::pHI6Sv7SdndhN14n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CYUFQUgjZoed4FOA' => 
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
        'as' => 'generated::CYUFQUgjZoed4FOA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::IUzSdAa4L6BSpJLZ' => 
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
        'as' => 'generated::IUzSdAa4L6BSpJLZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MAX8PTDCEOLSIaPS' => 
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
        'as' => 'generated::MAX8PTDCEOLSIaPS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::VY2LHQMwGBv9qdET' => 
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
        'as' => 'generated::VY2LHQMwGBv9qdET',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::u2J8ihO2T58B1QBF' => 
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
        'as' => 'generated::u2J8ihO2T58B1QBF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::J2b6rH5zJILEBNPX' => 
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
        'as' => 'generated::J2b6rH5zJILEBNPX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yqhtyw8HrPYfC3qK' => 
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
        'as' => 'generated::yqhtyw8HrPYfC3qK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NpWuYoy7pVaF7qED' => 
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
        'as' => 'generated::NpWuYoy7pVaF7qED',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::P9JwXKaqp8vtsUY1' => 
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
        'as' => 'generated::P9JwXKaqp8vtsUY1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ZshReEynz1GD2V7X' => 
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
        'as' => 'generated::ZshReEynz1GD2V7X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oLv4zG73RIuHAhfp' => 
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
        'as' => 'generated::oLv4zG73RIuHAhfp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6VRyS2UTsWVpqm2v' => 
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
        'as' => 'generated::6VRyS2UTsWVpqm2v',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CllLNeIl37fADQU1' => 
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
        'as' => 'generated::CllLNeIl37fADQU1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GaZUxuynB5UXXO1x' => 
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
        'as' => 'generated::GaZUxuynB5UXXO1x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::LLpOiFTorzquaBzR' => 
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
        'as' => 'generated::LLpOiFTorzquaBzR',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DDyjOl3KvDeXnIUu' => 
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
        'as' => 'generated::DDyjOl3KvDeXnIUu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EHaYNK8oSgHefkLO' => 
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
        'as' => 'generated::EHaYNK8oSgHefkLO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oJH91nZnJQQBpjVb' => 
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
        'as' => 'generated::oJH91nZnJQQBpjVb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FmM1ZWW4ht0DJeb0' => 
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
        'as' => 'generated::FmM1ZWW4ht0DJeb0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::iKQEw2W8R1KUaEHC' => 
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
        'as' => 'generated::iKQEw2W8R1KUaEHC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::z7RFe6QOE2gFti76' => 
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
        'as' => 'generated::z7RFe6QOE2gFti76',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UWRabj0A4VjfZj4N' => 
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
        'as' => 'generated::UWRabj0A4VjfZj4N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ShoMPY76Q3Emfw8y' => 
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
        'as' => 'generated::ShoMPY76Q3Emfw8y',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mDAX4vSfQbC0IfiE' => 
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
        'as' => 'generated::mDAX4vSfQbC0IfiE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KDyh0jGUz0AHud9I' => 
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
        'as' => 'generated::KDyh0jGUz0AHud9I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wekncYBLD55Aaj3l' => 
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
        'as' => 'generated::wekncYBLD55Aaj3l',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oJNsE3dAgj7qozIO' => 
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
        'as' => 'generated::oJNsE3dAgj7qozIO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XopfCrvRN7GHIp40' => 
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
        'as' => 'generated::XopfCrvRN7GHIp40',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::gUWgYvf4C7PrjdQj' => 
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
        'as' => 'generated::gUWgYvf4C7PrjdQj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HQRfjnMfjpqQvwLV' => 
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
        'as' => 'generated::HQRfjnMfjpqQvwLV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::BEBnCvjeo3Y3vyqS' => 
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
        'as' => 'generated::BEBnCvjeo3Y3vyqS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WKL304q1ZXmwZmO0' => 
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
        'as' => 'generated::WKL304q1ZXmwZmO0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::eAzjJZ3zdmrEV4mo' => 
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
        'as' => 'generated::eAzjJZ3zdmrEV4mo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9tNmxhWlVSAj0ZE6' => 
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
        'as' => 'generated::9tNmxhWlVSAj0ZE6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::W8Mh21STLGKNXMH8' => 
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
        'as' => 'generated::W8Mh21STLGKNXMH8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CtptbSyeDifKWjPl' => 
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
        'as' => 'generated::CtptbSyeDifKWjPl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0NL250eZe285ne1f' => 
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
        'as' => 'generated::0NL250eZe285ne1f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yuTWFI3XQFhqwsEa' => 
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
        'as' => 'generated::yuTWFI3XQFhqwsEa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Fx3TBfxubSOaZl3G' => 
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
        'as' => 'generated::Fx3TBfxubSOaZl3G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wmpXJmLs7s8HVHOL' => 
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
        'as' => 'generated::wmpXJmLs7s8HVHOL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qdZjCeBXEw64FUZr' => 
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
        'as' => 'generated::qdZjCeBXEw64FUZr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::s2VokxS88roEMmSL' => 
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
        'as' => 'generated::s2VokxS88roEMmSL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::lBZ4yeAdEcexsQyu' => 
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
        'as' => 'generated::lBZ4yeAdEcexsQyu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::UTbMlf3Jyx1YoIsM' => 
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
        'as' => 'generated::UTbMlf3Jyx1YoIsM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2LBbAPrI3nRBcnHo' => 
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
        'as' => 'generated::2LBbAPrI3nRBcnHo',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Tynk0w4HCFYTxCSW' => 
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
        'as' => 'generated::Tynk0w4HCFYTxCSW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2F9Gb7tiKaWrKlER' => 
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
        'as' => 'generated::2F9Gb7tiKaWrKlER',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pAMlq6ePQN6591Mk' => 
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
        'as' => 'generated::pAMlq6ePQN6591Mk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::V2oGFoRHdxq2wv9d' => 
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
        'as' => 'generated::V2oGFoRHdxq2wv9d',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::inlBSbfO0JCexsuK' => 
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
        'as' => 'generated::inlBSbfO0JCexsuK',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xMLEESjDwbMKYaz8' => 
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
        'as' => 'generated::xMLEESjDwbMKYaz8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::a3fj4iTM8K6dd8bz' => 
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
        'as' => 'generated::a3fj4iTM8K6dd8bz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Fs6eXeMN8mBA8owp' => 
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
        'as' => 'generated::Fs6eXeMN8mBA8owp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::wysnTJUHDbCpKZYQ' => 
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
        'as' => 'generated::wysnTJUHDbCpKZYQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bQon6buUZC3Of4zm' => 
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
        'as' => 'generated::bQon6buUZC3Of4zm',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GQKtI8lj5MTXLonb' => 
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
        'as' => 'generated::GQKtI8lj5MTXLonb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6FVwmgInAbkMbom5' => 
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
        'as' => 'generated::6FVwmgInAbkMbom5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NG1Owgbz4kWaEgrF' => 
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
        'as' => 'generated::NG1Owgbz4kWaEgrF',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::4k7FwyRrrSbNhU9F' => 
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
        'as' => 'generated::4k7FwyRrrSbNhU9F',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::mYtshjWz2uJXQesh' => 
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
        'as' => 'generated::mYtshjWz2uJXQesh',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::sR3ydf3JgyK8f51I' => 
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
        'as' => 'generated::sR3ydf3JgyK8f51I',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::QnkTowg3cb0RM5Gl' => 
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
        'as' => 'generated::QnkTowg3cb0RM5Gl',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Qe9e5vBLwNuQvSVM' => 
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
        'as' => 'generated::Qe9e5vBLwNuQvSVM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::cGN1dy4tKZdaz1Ku' => 
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
        'as' => 'generated::cGN1dy4tKZdaz1Ku',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2heASwU9jqhT0XTv' => 
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
        'as' => 'generated::2heASwU9jqhT0XTv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2Zg712Nx3bvdRVnQ' => 
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
        'as' => 'generated::2Zg712Nx3bvdRVnQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0dcoWErRBIoeGf0X' => 
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
        'as' => 'generated::0dcoWErRBIoeGf0X',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0Opp6oAlVXEQFh4n' => 
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
        'as' => 'generated::0Opp6oAlVXEQFh4n',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EzCf4msm50v0R9mX' => 
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
        'as' => 'generated::EzCf4msm50v0R9mX',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5aYq602jugecl0tO' => 
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
        'as' => 'generated::5aYq602jugecl0tO',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::frw8ahPULAZZpZMq' => 
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
        'as' => 'generated::frw8ahPULAZZpZMq',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::HSzp2hAuYJGEzjZD' => 
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
        'as' => 'generated::HSzp2hAuYJGEzjZD',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::KLdrWFje9UyvBcrL' => 
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
        'as' => 'generated::KLdrWFje9UyvBcrL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DdOWbpJGBEWlQPv6' => 
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
        'as' => 'generated::DdOWbpJGBEWlQPv6',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DhFiIrt4PlGctldM' => 
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
        'as' => 'generated::DhFiIrt4PlGctldM',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jdvao1bfIvnZyCNk' => 
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
        'as' => 'generated::jdvao1bfIvnZyCNk',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tEzrwCx5QrGBnIQr' => 
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
        'as' => 'generated::tEzrwCx5QrGBnIQr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::e5JOZmMOgdiP3Ela' => 
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
        'as' => 'generated::e5JOZmMOgdiP3Ela',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::ad8ospojvckYpF5G' => 
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
        'as' => 'generated::ad8ospojvckYpF5G',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xCtenKSvtdwFWcQw' => 
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
        'as' => 'generated::xCtenKSvtdwFWcQw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::D5Zxi5Gsck7QvBc9' => 
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
        'as' => 'generated::D5Zxi5Gsck7QvBc9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::t88jT4WH2K4HCxFj' => 
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
        'as' => 'generated::t88jT4WH2K4HCxFj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::qjCZJyX80Jpub73Q' => 
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
        'as' => 'generated::qjCZJyX80Jpub73Q',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::szaX7TFHD0oUs2EB' => 
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
        'as' => 'generated::szaX7TFHD0oUs2EB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::RimwGpoldA4vB8gG' => 
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
        'as' => 'generated::RimwGpoldA4vB8gG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6iSgO8wJmFflxGhv' => 
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
        'as' => 'generated::6iSgO8wJmFflxGhv',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Kt94ocZaFo9LH912' => 
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
        'as' => 'generated::Kt94ocZaFo9LH912',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::CaCtKJ9EmmlvnkLH' => 
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
        'as' => 'generated::CaCtKJ9EmmlvnkLH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hCDaIjTRCypdRkXu' => 
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
        'as' => 'generated::hCDaIjTRCypdRkXu',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::PpF1HNKd5FyPECoi' => 
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
        'as' => 'generated::PpF1HNKd5FyPECoi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OPAKQnvu3lReUUNG' => 
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
        'as' => 'generated::OPAKQnvu3lReUUNG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::WLKG4vzG9xPz6Lah' => 
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
        'as' => 'generated::WLKG4vzG9xPz6Lah',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::9seit0sdsEF8ymoi' => 
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
        'as' => 'generated::9seit0sdsEF8ymoi',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::pONpXPowrEm5GWUA' => 
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
        'as' => 'generated::pONpXPowrEm5GWUA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::VwLPqkOQzdsX1Ev3' => 
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
        'as' => 'generated::VwLPqkOQzdsX1Ev3',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Wxyg9qwwT4KGMA6a' => 
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
        'as' => 'generated::Wxyg9qwwT4KGMA6a',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::VqKh2oA6IILUcglS' => 
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
        'as' => 'generated::VqKh2oA6IILUcglS',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::idrxDxwdGUpPdDPj' => 
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
        'as' => 'generated::idrxDxwdGUpPdDPj',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::w11qdu5OFDK2j9YG' => 
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
        'as' => 'generated::w11qdu5OFDK2j9YG',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::2F4bm4b33RG1Rt4p' => 
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
        'as' => 'generated::2F4bm4b33RG1Rt4p',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::oJ8XCsypczUubHL9' => 
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
        'as' => 'generated::oJ8XCsypczUubHL9',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Z3yT1ASwjc1JpfjC' => 
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
        'as' => 'generated::Z3yT1ASwjc1JpfjC',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XAMSlgi6HjnuYYJc' => 
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
        'as' => 'generated::XAMSlgi6HjnuYYJc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::igf1bOdxSDkjFe2b' => 
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
        'as' => 'generated::igf1bOdxSDkjFe2b',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zDjLe5Nsyi2kUqCQ' => 
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
        'as' => 'generated::zDjLe5Nsyi2kUqCQ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GlbVrkarUJaUjtio' => 
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
        'as' => 'generated::GlbVrkarUJaUjtio',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::zwGcUBsAOC6rbzZd' => 
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
        'as' => 'generated::zwGcUBsAOC6rbzZd',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::xusz7IliBQlK0toH' => 
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
        'as' => 'generated::xusz7IliBQlK0toH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jz1svLvZTu4tmYtr' => 
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
        'as' => 'generated::jz1svLvZTu4tmYtr',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::VA2E91aDDWxpTGTH' => 
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
        'as' => 'generated::VA2E91aDDWxpTGTH',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::TfxBC6dyOtO62MU1' => 
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
        'as' => 'generated::TfxBC6dyOtO62MU1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::jqjv20gOucRyevlL' => 
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
        'as' => 'generated::jqjv20gOucRyevlL',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Sh2y3TXQuf50bTsz' => 
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
        'as' => 'generated::Sh2y3TXQuf50bTsz',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::YupBdteGR3UPtFDb' => 
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
        'as' => 'generated::YupBdteGR3UPtFDb',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::g461g69HdrMjZl7g' => 
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
        'as' => 'generated::g461g69HdrMjZl7g',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::nGhdtkbuyuFUMKXx' => 
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
        'as' => 'generated::nGhdtkbuyuFUMKXx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::G25xo7HEY2g4OTPZ' => 
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
        'as' => 'generated::G25xo7HEY2g4OTPZ',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::tO7RELDlm9krBay8' => 
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
        'as' => 'generated::tO7RELDlm9krBay8',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::0VA6MhbcNw4S6Uiw' => 
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
        'as' => 'generated::0VA6MhbcNw4S6Uiw',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::AHfDY4i2cstZSeQ1' => 
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
        'as' => 'generated::AHfDY4i2cstZSeQ1',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::v5UqJrLEr9VIgO8h' => 
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
        'as' => 'generated::v5UqJrLEr9VIgO8h',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::bkf3CkynAWn80fxt' => 
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
        'as' => 'generated::bkf3CkynAWn80fxt',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::hEEjKTSkpcGPmTK0' => 
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
        'as' => 'generated::hEEjKTSkpcGPmTK0',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::GCqFpBxI20SiF3XI' => 
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
        'as' => 'generated::GCqFpBxI20SiF3XI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::drLbTX4Iskn6VKpn' => 
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
        'as' => 'generated::drLbTX4Iskn6VKpn',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::EZF2wygboZ2ErZRa' => 
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
        'as' => 'generated::EZF2wygboZ2ErZRa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5Hn7ILDLHpfuyPge' => 
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
        'as' => 'generated::5Hn7ILDLHpfuyPge',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::r6Wg7BDMSt0GGD8x' => 
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
        'as' => 'generated::r6Wg7BDMSt0GGD8x',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::XyZm5gsEFl6GXbps' => 
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
        'as' => 'generated::XyZm5gsEFl6GXbps',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::vFN0uAT6p4njsLiY' => 
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
        'as' => 'generated::vFN0uAT6p4njsLiY',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::yUnUwV5W2KOfCY2B' => 
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
        'as' => 'generated::yUnUwV5W2KOfCY2B',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MDm5NGsY8vSTu7r5' => 
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
        'as' => 'generated::MDm5NGsY8vSTu7r5',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::T1I1xZcJp2NiiJRA' => 
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
        'as' => 'generated::T1I1xZcJp2NiiJRA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::TPBJKUwyrEkeKYGI' => 
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
        'as' => 'generated::TPBJKUwyrEkeKYGI',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::FKrdDZL3n5wMn72f' => 
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
        'as' => 'generated::FKrdDZL3n5wMn72f',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::5vzRPUmMmJ9Gd41N' => 
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
        'as' => 'generated::5vzRPUmMmJ9Gd41N',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::Yjnw8uQVOoU5mGSB' => 
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
        'as' => 'generated::Yjnw8uQVOoU5mGSB',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NIpM7nvmqUOjJWsp' => 
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
        'as' => 'generated::NIpM7nvmqUOjJWsp',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::MWWQ1PlvxzvdbeZa' => 
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
        'as' => 'generated::MWWQ1PlvxzvdbeZa',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::6Pfm4NUq4TN5mkbW' => 
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
        'as' => 'generated::6Pfm4NUq4TN5mkbW',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::euZLmR6I4UR8rofx' => 
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
        'as' => 'generated::euZLmR6I4UR8rofx',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::IyxUL06vqfohNRpA' => 
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
        'as' => 'generated::IyxUL06vqfohNRpA',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::DEcduI7CPcsI8uUV' => 
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
        'as' => 'generated::DEcduI7CPcsI8uUV',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::OJECqnb7YE9x6FuE' => 
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
        'as' => 'generated::OJECqnb7YE9x6FuE',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
      'wheres' => 
      array (
      ),
      'bindingFields' => 
      array (
      ),
      'lockSeconds' => NULL,
      'waitSeconds' => NULL,
    ),
    'generated::NIX4AlpcPQacksZc' => 
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
        'as' => 'generated::NIX4AlpcPQacksZc',
      ),
      'fallback' => false,
      'defaults' => 
      array (
      ),
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
