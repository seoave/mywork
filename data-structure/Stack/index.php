<?php
include_once __DIR__ . '/Node.php';
include_once __DIR__ . '/Stack.php';

$node = new Node(1);
$stack = new Stack();

$stack
    ->push('sss')
    ->push('aaa')
    ->push('ddd')
    ->pop()
    ->push(888)
    ->pop()
    ->pop()
    ->pop();

var_dump($stack->peek());
