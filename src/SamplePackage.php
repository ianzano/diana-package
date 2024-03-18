<?php

use Diana\Drivers\Interfaces\RoutingDriver;
use Diana\Runtime\Application;
use Diana\Runtime\Package;
use Diana\Support\Debug;
use Diana\Support\Obj;

class SamplePackage extends Package
{
    public function register(RoutingDriver $routingDriver): void
    {
        // $router->loadRoutes(); // load additional routes to the router
    }

    public function boot(): void
    {

    }
}