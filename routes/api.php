<?php

return [
    '/api/users' => [
        'get' => [
            'controller' => \App\Controller\Api\UserController::class,
            'method' => 'getList'
        ]
    ],
    '/api/users' => [
        'post' => [
            'controller' => \App\Controller\Api\UserController::class,
            'method' => 'create'
        ]
    ]
];
