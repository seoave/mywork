<?php

use App\Model\User;
use App\Repository\JsonRepository;

require_once __DIR__ . '/bootstrap.php';

$DS = DIRECTORY_SEPARATOR;
$repository = new JsonRepository(__DIR__ . $DS . 'db' . $DS . 'users.json');

/*$robot = new User('Mr. Robot', 'robot@robo.cop');
$robot->setPassword('111');
$repository->create($robot);*/

$routes = array_merge(
    include(__DIR__ . '/routes/api.php'),
    include(__DIR__ . '/routes/web.php'),
);

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = mb_strtolower($_SERVER['REQUEST_METHOD']);
$response = null;

if (isset($routes[$uri][$method])) {
    $controller = new $routes[$uri][$method]['controller'];
    $controllerMethod = $routes[$uri][$method]['method'];
    $response = $controller->$controllerMethod();
}

echo $response;
