<?php

use App\Model\User;
use App\Repository\JsonRepository;

require_once __DIR__ . '/bootstrap.php';

$userDolores = new User('Dolores');
$userDolores->setCity('WildWest');
$userPiter = new User('Piter');
$userPiter->setCountry('WildWest');

$DS = DIRECTORY_SEPARATOR;
$repository = new JsonRepository(__DIR__ . $DS . 'db' . $DS . 'users.json');
var_dump($repository);
$repository->create($userDolores);
//$repository->create($userPiter);
