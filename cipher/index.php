<?php

use Cipher\AtbashCipher;

include_once __DIR__ . '/AtbashCipher.php';

$atbash = new AtbashCipher();

var_dump($atbash->encode('Holodets varila mama'));
var_dump($atbash->decode('2vyv65qr o9s1y9 x9x9'));
