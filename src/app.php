<?php

// example.com/src/app.php
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();

$routes->add('apply', new Routing\Route('/apply/{id}', [
        'id' => null,

        '_controller' => function ($request) {
        if ($request->attributes->get('id')) {

                extract($request->attributes->all(), EXTR_SKIP);
                ob_start();
                include sprintf(__DIR__.'/../src/pages/%s.php', $_route);

                return new Response(ob_get_clean());

        }

        return new RedirectResponse('/');
    }
]));

return $routes;