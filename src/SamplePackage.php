<?php

use Diana\Runtime\Application;
use Diana\Runtime\Package;

class SamplePackage extends Package
{
    public function __construct(Application $app)
    {
        $app->registerController(TestController::class);
    }

    public function boot(): void
    {

    }
}