<?php

    require_once __DIR__ . '/bootstrap.php';

    $routes = array_merge(
        include(__DIR__ . '/routes/api.php'),
        include(__DIR__ . '/routes/web.php'),
    );

    $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
    $method = mb_strtolower($_SERVER['REQUEST_METHOD']);
    $response = null;

    if (! isset($routes[$uri][$method])) {
        $controller = new \App\Controller\Page404Controller();
        $response = $controller->get404Page();
    }

    foreach ($routes as $routeUri => $route) {
        $routeUri = addcslashes($routeUri, '/');
        preg_match("/^$routeUri$/", $uri, $params);
        // var_dump($params);
        if (count($params) > 0) {
            $controller = new $route[$method]['controller'];
            $controllerMethod = $route[$method]['method'];
            $response = $controller->$controllerMethod($params);
        }
    }

    echo $response;
