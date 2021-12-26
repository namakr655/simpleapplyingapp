<?php

// example.com/src/Calendar/Controller/LeapYearController.php
namespace Apply\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\RedirectResponse;

class ApplyController
{
    public function index(Request $request, $id)
    {

        if ($request->attributes->get('id')) {

                extract($request->attributes->all(), EXTR_SKIP);
                ob_start();
                include sprintf(__DIR__.'/../../pages/%s.php', $_route);

                return new Response(ob_get_clean());

        }

        return new RedirectResponse('/');
    }
}