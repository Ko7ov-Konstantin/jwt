<?php

use Konstantinkotov\jwt\src\Application\TokenApplication;

class JWT
{
    public static function token() : TokenApplication
    {
        return (new TokenApplication());
    }
}