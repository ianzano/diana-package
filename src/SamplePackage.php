<?php

use Diana\Runtime\Package;
use Diana\Support\Debug;

class SamplePackage extends Package
{
    public function register(): void
    {
        $this->registerController(TestController::class);
    }

    public function boot(): void
    {

    }
}