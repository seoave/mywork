<?php

require_once __DIR__ . '/bootstrap.php';

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
