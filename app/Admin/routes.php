<?php

use Illuminate\Routing\Router;

Admin::registerAuthRoutes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
], function (Router $router) {

    $router->get('/', 'HomeController@index');

    $router->resources([
      'tags' => TagController::class,
      'publicacoes' => PublicacoesController::class,
      'noticias' => NoticiasController::class,
      'banners' => BannerController::class,
      'usuarios' => UsuariosController::class,
      'parceiros' => ParceirosController::class,
      'colaboradores' => ColaboradoresController::class,
      'eventos' => EventosController::class,

  ]);

    Route::group([
        'prefix' => 'portal',
        'as' => 'portal.'
    ], function (Router $router) {
        $router->resources([
            'alunoprof' => PortalAlunoProfController::class,
            'faculdade' => FaculdadeController::class,
            'curso' => FaculdadeCursoController::class,
        ]);
    });

    $router->get('api/users', 'NoticiasController@users');

});
