<?php

use Konstantinkotov\jwt\Application\TokenApplication;

class JWT
{
    public static function token() : TokenApplication
    {
        return (new TokenApplication());
    }
}