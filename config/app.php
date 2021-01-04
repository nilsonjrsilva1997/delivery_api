<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => env('APP_NAME', 'Laravel'),

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL', null),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Faker Locale
    |--------------------------------------------------------------------------
    |
    | This locale will be used by the Faker PHP library when generating fake
    | data for your database seeds. For example, this will be used to get
    | localized telephone numbers, street address information and more.
    |
    */

    'faker_locale' => 'en_US',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => [

        /*
         * Laravel Framework Service Providers...
         */
        Illuminate\Auth\AuthServiceProvider::class,
        Illuminate\Broadcasting\BroadcastServiceProvider::class,
        Illuminate\Bus\BusServiceProvider::class,
        Illuminate\Cache\CacheServiceProvider::class,
        Illuminate\Foundation\Providers\ConsoleSupportServiceProvider::class,
        Illuminate\Cookie\CookieServiceProvider::class,
        Illuminate\Database\DatabaseServiceProvider::class,
        Illuminate\Encryption\EncryptionServiceProvider::class,
        Illuminate\Filesystem\FilesystemServiceProvider::class,
        Illuminate\Foundation\Providers\FoundationServiceProvider::class,
        Illuminate\Hashing\HashServiceProvider::class,
        Illuminate\Mail\MailServiceProvider::class,
        Illuminate\Notifications\NotificationServiceProvider::class,
        Illuminate\Pagination\PaginationServiceProvider::class,
        Illuminate\Pipeline\PipelineServiceProvider::class,
        Illuminate\Queue\QueueServiceProvider::class,
        Illuminate\Redis\RedisServiceProvider::class,
        Illuminate\Auth\Passwords\PasswordResetServiceProvider::class,
        Illuminate\Session\SessionServiceProvider::class,
        Illuminate\Translation\TranslationServiceProvider::class,
        Illuminate\Validation\ValidationServiceProvider::class,
        Illuminate\View\ViewServiceProvider::class,

        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,

    ],

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => [
        'HorarioFuncionamentoDelivery' => App\HorarioFuncionamentoDelivery::class,
        'HorarioFuncionamentoDeliveryValidateService' => App\Http\Services\HorarioFuncionamentoDeliveryValidateService::class,
        'HorarioFuncionamentoDelivery' => App\HorarioFuncionamentoDelivery::class,
        'HorarioFuncionamentoDeliveryValidateService' => App\Http\Services\HorarioFuncionamentoDeliveryValidateService::class,
        'HorarioFuncionamentoDelivery' => App\HorarioFuncionamentoDelivery::class,
        'HorarioFuncionamentoDeliveryValidateService' => App\Http\Services\HorarioFuncionamentoDeliveryValidateService::class,
        'FusoHorario' => App\FusoHorario::class,
        'FusoHorarioValidateService' => App\Http\Services\FusoHorarioValidateService::class,
        'Periodo2' => App\Periodo2::class,
        'Periodo2ValidateService' => App\Http\Services\Periodo2ValidateService::class,
        'Periodo1' => App\Periodo1::class,
        'Periodo1ValidateService' => App\Http\Services\Periodo1ValidateService::class,
        'DiasSemanaHorarioDelivery' => App\DiasSemanaHorarioDelivery::class,
        'DiasSemanaHorarioDeliveryValidateService' => App\Http\Services\DiasSemanaHorarioDeliveryValidateService::class,
        'CupomDesconto' => App\CupomDesconto::class,
        'CupomDescontoValidateService' => App\Http\Services\CupomDescontoValidateService::class,
        'AreaEntrega' => App\AreaEntrega::class,
        'AreaEntregaValidateService' => App\Http\Services\AreaEntregaValidateService::class,
        'ConfigEntrega' => App\ConfigEntrega::class,
        'ConfigEntregaValidateService' => App\Http\Services\ConfigEntregaValidateService::class,
        'DadosEmpresa' => App\DadosEmpresa::class,
        'DadosEmpresaValidateService' => App\Http\Services\DadosEmpresaValidateService::class,
        'Entregador' => App\Entregador::class,
        'EntregadorValidateService' => App\Http\Services\EntregadorValidateService::class,
        'Pergunta' => App\Pergunta::class,
        'PerguntaValidateService' => App\Http\Services\PerguntaValidateService::class,
        'PesquisaSatisfacao' => App\PesquisaSatisfacao::class,
        'PesquisaSatisfacaoValidateService' => App\Http\Services\PesquisaSatisfacaoValidateService::class,
        'PedidoAdicionalOpcao' => App\PedidoAdicionalOpcao::class,
        'PedidoAdicionalOpcaoValidateService' => App\Http\Services\PedidoAdicionalOpcaoValidateService::class,
        'PedidoAdicional' => App\PedidoAdicional::class,
        'PedidoAdicionalValidateService' => App\Http\Services\PedidoAdicionalValidateService::class,
        'ProdutoPedido' => App\ProdutoPedido::class,
        'ProdutoPedidoValidateService' => App\Http\Services\ProdutoPedidoValidateService::class,
        'Pedido' => App\Pedido::class,
        'PedidoValidateService' => App\Http\Services\PedidoValidateService::class,
        'Adicional' => App\Adicional::class,
        'AdicionalValidateService' => App\Http\Services\AdicionalValidateService::class,
        'Opcao' => App\Opcao::class,
        'OpcaoValidateService' => App\Http\Services\OpcaoValidateService::class,
        'Teste' => App\Teste::class,
        'TesteValidateService' => App\Http\Services\TesteValidateService::class,
        'Teste' => App\Teste::class,
        'TesteValidateService' => App\Http\Services\TesteValidateService::class,
        'EnderecoEntrega' => App\EnderecoEntrega::class,
        'EnderecoEntregaValidateService' => App\Http\Services\EnderecoEntregaValidateService::class,
        'Pedido' => App\Pedido::class,
        'PedidoValidateService' => App\Http\Services\PedidoValidateService::class,
        'Restaurante' => App\Restaurante::class,
        'RestauranteValidateService' => App\Http\Services\RestauranteValidateService::class,
        'Opcao' => App\Opcao::class,
        'OpcaoValidateService' => App\Http\Services\OpcaoValidateService::class,
        'Produto' => App\Produto::class,
        'ProdutoValidateService' => App\Http\Services\ProdutoValidateService::class,
        'HorarioFuncionamento' => App\HorarioFuncionamento::class,
        'HorarioFuncionamentoValidateService' => App\Http\Services\HorarioFuncionamentoValidateService::class,
        'EnderecoEstabelecimento' => App\EnderecoEstabelecimento::class,
        'EnderecoEstabelecimentoValidateService' => App\Http\Services\EnderecoEstabelecimentoValidateService::class,
        'EnderecoEstabelecimento' => App\EnderecoEstabelecimento::class,
        'EnderecoEstabelecimentoValidateService' => App\Http\Services\EnderecoEstabelecimentoValidateService::class,
        'EnderecoUnidade' => App\EnderecoUnidade::class,
        'EnderecoUnidadeValidateService' => App\Http\Services\EnderecoUnidadeValidateService::class,
        'Endereco' => App\Endereco::class,
        'EnderecoValidateService' => App\Http\Services\EnderecoValidateService::class,
        'CategoriaMenu' => App\CategoriaMenu::class,
        'CategoriaMenuValidateService' => App\Http\Services\CategoriaMenuValidateService::class,
        'CategoriaCardapio' => App\CategoriaCardapio::class,
        'CategoriaCardapioValidateService' => App\Http\Services\CategoriaCardapioValidateService::class,
        'Endereco' => App\Endereco::class,
        'EnderecoValidateService' => App\Http\Services\EnderecoValidateService::class,
        'App' => Illuminate\Support\Facades\App::class,
        'Arr' => Illuminate\Support\Arr::class,
        'Artisan' => Illuminate\Support\Facades\Artisan::class,
        'Auth' => Illuminate\Support\Facades\Auth::class,
        'Blade' => Illuminate\Support\Facades\Blade::class,
        'Broadcast' => Illuminate\Support\Facades\Broadcast::class,
        'Bus' => Illuminate\Support\Facades\Bus::class,
        'Cache' => Illuminate\Support\Facades\Cache::class,
        'Config' => Illuminate\Support\Facades\Config::class,
        'Cookie' => Illuminate\Support\Facades\Cookie::class,
        'Crypt' => Illuminate\Support\Facades\Crypt::class,
        'DB' => Illuminate\Support\Facades\DB::class,
        'Eloquent' => Illuminate\Database\Eloquent\Model::class,
        'Event' => Illuminate\Support\Facades\Event::class,
        'File' => Illuminate\Support\Facades\File::class,
        'Gate' => Illuminate\Support\Facades\Gate::class,
        'Hash' => Illuminate\Support\Facades\Hash::class,
        'Http' => Illuminate\Support\Facades\Http::class,
        'Lang' => Illuminate\Support\Facades\Lang::class,
        'Log' => Illuminate\Support\Facades\Log::class,
        'Mail' => Illuminate\Support\Facades\Mail::class,
        'Notification' => Illuminate\Support\Facades\Notification::class,
        'Password' => Illuminate\Support\Facades\Password::class,
        'Queue' => Illuminate\Support\Facades\Queue::class,
        'Redirect' => Illuminate\Support\Facades\Redirect::class,
        'Redis' => Illuminate\Support\Facades\Redis::class,
        'Request' => Illuminate\Support\Facades\Request::class,
        'Response' => Illuminate\Support\Facades\Response::class,
        'Route' => Illuminate\Support\Facades\Route::class,
        'Schema' => Illuminate\Support\Facades\Schema::class,
        'Session' => Illuminate\Support\Facades\Session::class,
        'Storage' => Illuminate\Support\Facades\Storage::class,
        'Str' => Illuminate\Support\Str::class,
        'URL' => Illuminate\Support\Facades\URL::class,
        'Validator' => Illuminate\Support\Facades\Validator::class,
        'View' => Illuminate\Support\Facades\View::class,

    ],

];
