<?php
use Diana\Contracts\Middleware;
use Diana\IO\Request;
use Diana\IO\Response;

class SampleMiddleware implements Middleware
{
    public function run(Request $request, Closure $next)
    {
        return $next($request);
    }
}