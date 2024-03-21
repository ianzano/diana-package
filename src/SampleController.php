<?php

use Diana\Routing\Attributes\Get;
use Diana\Routing\Attributes\Middleware;

class SampleController
{
    public static $route = '/app';

    #[Get('/home')]
    #[Middleware(SampleMiddleware::class)]
    public function home()
    {
        return 'Welcome home. You have loaded the following controllers: ' . join(', ', App::getControllers()) . '.';
    }
}