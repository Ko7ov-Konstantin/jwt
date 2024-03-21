<?php

namespace Konstantinkotov\jwt\src\Application;

use Illuminate\Support\Str;

class TokenApplication
{
    public function generate(int $token_length = 100) : string
    {
        $token = Str::random($token_length);
        return implode('.', str_split($token, round($token_length / 3)));
    }
}