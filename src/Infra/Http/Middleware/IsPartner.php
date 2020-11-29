<?php

namespace :uc:vendor\:uc:package\Infra\Http\Middleware;

use Closure;

/**
 * Class IsPartner
 * @package :uc:vendor\:uc:package\Infra\Http\Middleware
 */
class IsPartner
{
    /**
     * @param $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        return $next($request);
    }
}
