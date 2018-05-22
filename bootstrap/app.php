<?php
    require __DIR__. '/../vendor/autoload.php';

    $app = new \Slim\App([
        'settings' =>[
            'determineRouteBeforeAppMiddleware' => false,
            'displayErrorDetails' => true,
            'db' => [
                'driver' => 'mysql',
                'host' => 'localhost',
                'database' => 'idrisstore',
                'username' => 'root',
                'password' => 'homebrew',
                'charset'   => 'utf8',
                'collation' => 'utf8_unicode_ci',
                'prefix'    => '',
            ]
        ]
    ]);
    $container = $app->getContainer();

    //Some Jargon
    $capsule = new \Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($container['settings']['db']);
    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    $container['db'] = function($container) use ($capsule){
        
        return $capsule;
    };

    $container['APIController'] = function($container){
        return new \App\Controllers\APIController($container);
    };
    

    require __DIR__.'/../app/routes.php';