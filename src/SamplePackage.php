<?php

use Diana\Runtime\Application;
use Diana\Runtime\Package;

class SamplePackage extends Package
{
    public function register(Application $app): void
    {
        $app->registerController(TestController::class);
    }

    public function boot(): void
    {

    }
}