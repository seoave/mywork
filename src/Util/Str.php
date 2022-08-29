<?php

declare(strict_types=1);

namespace App\Util;

class Str
{
    public static function random(int $length): string
    {
        $result = '';
        $characters = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
        for ($i = 0; $i < $length; $i++) {
            $index = mt_rand(0, mb_strlen($characters) - 1);
            $result .= $characters[$index];
        }
        return $result;
    }
}