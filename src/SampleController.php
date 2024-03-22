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
        return 'You are running Diana on version ' . App::getVersion() . '.<p>You are running the following kernel: ' . App::resolve('kernel')::class . '.<p>You have loaded the following packages:<ul>' . App::getPackages()->wrap('<li>', '</li>') . '</ul>You have loaded the following controllers: <ul>' . App::getControllers()->wrap('<li>', '</li>') . '</ul>';
    }
}