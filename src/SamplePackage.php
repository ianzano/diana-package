<?php

use Diana\Kernel\Kernel;
use Diana\Routing\RoutingPackage;
use Diana\Runtime\Application;
use Diana\Runtime\Package;
use Diana\Support\Debug;

class SamplePackage extends Package
{
    public function __construct(Application $app)
    {
        $app->registerController(TestController::class);
    }

    public function register(): void
    {
    }

    public function boot(): void
    {

    }
}