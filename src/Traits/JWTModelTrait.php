<?php

namespace Konstantinkotov\jwt\Traits;

use Konstantinkotov\jwt\JWT;

trait JWTModelTrait
{
    public int $token_length = 100;

    /**
     * The method will create a token, save it to the users table in api_token column and return it to the place where it was called.
     *
     * @return string
     */
    public function generateToken(): string
    {
        $token = JWT::token()->generate($this->token_length);
        $this->api_token = $token;
        $this->save();

        return $token;
    }
}