<?php

require_once __DIR__ . '/Node.php';
require_once __DIR__ . '/Queue.php';

$queue = new Queue();

$n = 1000000;
// enqueue()
$startEnqueue = microtime(true);
for ($i = 0; $i < $n; $i++) {
    $queue->enqueue(random_int(1, 10000));
}
echo 'Enqueue ' . (microtime(true) - $startEnqueue) . "\n";

// deenqueue()
/*$startDeenqueue = microtime(true);
for ($i = 0; $i < $n; $i++) {
    $queue->deenqueue();
}
echo 'Deenqueue ' . (microtime(true) - $startDeenqueue) . "\n";*/

// peek()
$startPeek = microtime(true);
$queue->peek();
echo 'Peek ' . (microtime(true) - $startPeek) . "\n";
