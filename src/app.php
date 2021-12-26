<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
 
$routes->add('apply', new Routing\Route('/apply/{id}', [
        'id' => null,
        '_controller' => 'Apply\Controller\ApplyController::index',
]));

return $routes;