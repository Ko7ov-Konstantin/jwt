<?php

namespace Konstantinkotov\jwt\Traits;

trait JWTControllerTrait
{
    /**
     * The method will return the token which must be inside the headers params of the request.
     *
     * @return string
     */
    public function token() : string
    {
        [,$token] = explode(" ", request()->headers->get("Authorization"));
        return $token;
    }
}