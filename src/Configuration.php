<?php

declare(strict_types=1);

namespace App;

class Configuration
{
    public static function getParameter(string $name): ?string
    {
        $parameters = include __DIR__ . '/../config/parameters.php';

        return $parameters[$name] ?? null;
    }
}