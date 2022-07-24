<?php

use DataStructure\Tree\Node;

require_once __DIR__ . '/Node.php';

$tree = new Node(2);
/*$tree
    ->insert(3)
    ->insert(8)
    ->insert(9)
    ->insert(1);*/
var_dump($tree);
var_dump($tree->search(2));