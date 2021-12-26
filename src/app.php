<?php

// example.com/src/app.php
use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('test', new Routing\Route('/test'));

return $routes;