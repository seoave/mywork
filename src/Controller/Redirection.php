<?php

namespace App\Controller;

class Redirection
{
    public static function redirectTo(string $path): bool
    {
        header("Location: $path");
        return true;
    }
}