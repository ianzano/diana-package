<?php
use Diana\Routing\Attributes\Get;

class TestController
{
    public static $route = '/package';

    #[Get('/test')]
    public function test()
    {
        return "OK";
    }
}