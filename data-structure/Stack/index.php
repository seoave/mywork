<?php
include_once __DIR__ . '/Node.php';
include_once __DIR__ . '/Stack.php';

$node = new Node(1);
$stack = new Stack();

$n = 1000; // 10000, 1000000

// test stack push()

$pushStartTime = microtime(true);

for ($i = 0; $i < $n; $i++) {
    $stack->push(random_int(1, 1000000));
}

echo 'Push for ' . $n . ' elements = ' . (microtime(true) - $pushStartTime) . "\n";

// test stack pop()

/*$popStartTime = microtime(true);

for ($i = 0; $i < $n; $i++) {
    $stack->pop();
}

echo 'Pop for ' . $n . ' elements = ' . (microtime(true) - $popStartTime) . "\n";*/

// test stack peek()

$peekStartTime = microtime(true);

for ($i = 0; $i < $n; $i++) {
    $stack->peek();
    $stack->pop();
}

echo 'Peek for ' . $n . ' elements = ' . (microtime(true) - $peekStartTime) . "\n";
