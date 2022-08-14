<?php
require_once __DIR__ . '/bootstrap.php';

use App\Model\User;

$user = new User('Dolores');
$user->setCity('WildWest');


$datetime = new DateTime();
$timezone = new DateTimeZone('Europe/Kiev');
$datetime->setTimezone($timezone);
echo $datetime->format('d M Y');

var_dump($user);
