<?php

use Diana\Runtime\Package;

class SamplePackage extends Package
{
    public function register(): void // TODO: Dependency injection here
    {
        // $router->loadRoutes(); // load additional routes to the router
    }

    public function boot(): void
    {

    }
}