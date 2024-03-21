<?php

namespace Konstantinkotov\jwt\src\Traits;

trait JWTSubjectTrait
{
    public int $token_length = 100;

    public function generate(): string
    {
        $token = \JWT::token()->generate($this->token_length);
        $this->api_token = $token;
        $this->save();

        return $token;
    }
}