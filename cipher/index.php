<?php

use Cipher\AtbashCipher;

include_once __DIR__ . '/AtbashCipher.php';

$atbash = new AtbashCipher();

var_dump($atbash->encode('Zdes prodaetsa slavyanskyi shkaf'));
var_dump($atbash->decode('k65r usv695qr9 ry9ol9wrzl1 r2z94'));
