<?php

use Cake\Routing\RouteBuilder;
use Cake\Routing\Route\DashedRoute;

return function (RouteBuilder $routes): void {
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder): void {
        $builder->connect('/dashboard', ['controller' => 'Pages', 'action' => 'home']);
        $builder->connect('/login', ['controller' => 'Auth', 'action' => 'login']);
        $builder->connect('/logout', ['controller' => 'Auth', 'action' => 'logout']);
        $builder->fallbacks();
    });
};
