<?php

namespace App\Helpers;

class TokenHandler
{
    public static function handle(object $tokens) {
        return json_decode($tokens->getContent(), true);
    }
}