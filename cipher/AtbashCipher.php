<?php

namespace Cipher;

class AtbashCipher
{
    private $cipherTable;

    public function __construct()
    {
        $alfabet = 'abcdefghijklmnopqrstuvwxyz0123456789';
        $this->cipherTable = array_combine(str_split($alfabet), str_split(strrev($alfabet)));
    }

    public function encode(string $input): string
    {
        if (empty(trim($input))) {
            return 'Add input string, only english letters and numbers';
        }

        $output = '';
        $arrayFromInput = str_split(strtolower($input));

        foreach ($arrayFromInput as $char) {
            if (array_key_exists($char, $this->cipherTable)) {
                $output .= $this->cipherTable[$char];
            } else {
                $output .= ' ';
            }
        }

        return $input . ' = ' . $output;
    }

    public function decode(string $encoded): string
    {
        if (empty(trim($encoded))) {
            return 'Add input string';
        }

        $output = '';
        $arrayFromEncoded = str_split(strtolower($encoded));

        foreach ($arrayFromEncoded as $char) {
            if (in_array($char, $this->cipherTable)) {
                $output .= array_search($char, $this->cipherTable);
            } else {
                $output .= ' ';
            }
        }

        return $encoded . ' = ' . $output;
    }
}
