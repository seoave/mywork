<?php
$alfabet = 'abcdefghijklmnopqrstuvwxyz0123456789';
$cipherTable = array_combine(str_split($alfabet), str_split(strrev($alfabet)));

function atbashCipher(string $input, $cipherTable): string
{
    if (empty($input)) {
        return 'Add input string, only english letters';
    }

    $output = '';
    $arrayFromInput = str_split(strtolower($input));

    foreach ($arrayFromInput as $char) {
        if (array_key_exists($char, $cipherTable)) {
            $output .= $cipherTable[$char];
        } else {
            $output .= ' ';
        }
    }

    return $input . ' = ' . $output;
}

var_export(atbashCipher('I love Ukraine 333', $cipherTable));
