<?php

namespace Konstantinkotov\jwt\Middlewares;

use Closure;
use Illuminate\Auth\Middleware\Authenticate as Middleware;
use Konstantinkotov\jwt\Resources\AccessDeniedResource;

class AuthorizationMiddleware extends Middleware
{

    public function handle($request, Closure $next, ...$guards)
    {
        $authorization = $request->headers->get('Authorization');
        if(!$authorization){
            return (new AccessDeniedResource($request));
        }
        return $next($request);
    }
}