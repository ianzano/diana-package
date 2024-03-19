<?php

use Diana\Runtime\Package;
use Diana\Support\Debug;

class SamplePackage extends Package
{
    public function register(): void
    {
        // $router->loadRoutes(); // load additional routes to the router
    }

    public function boot(): void
    {

    }
}