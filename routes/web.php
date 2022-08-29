<?php

return [
    '/contact-us' => [
        'get' => [
            'controller' => \App\Controller\ContactController::class,
            'method' => 'getContactPage'
        ],
        'post' => [
            'controller' => \App\Controller\ContactController::class,
            'method' => 'sendContactForm'
        ]
    ],
    '/login' => [
        'get' => [
            'controller' => \App\Controller\LoginController::class,
            'method' => 'getLoginPage'
        ],
        'post' => [
            'controller' => \App\Controller\LoginController::class,
            'method' => 'sendLoginForm'
        ]
    ],
    '/registration' => [
        'get' => [
            'controller' => \App\Controller\RegisterController::class,
            'method' => 'getRegisterPage'
        ],
        'post' => [
            'controller' => \App\Controller\RegisterController::class,
            'method' => 'sendRegisterForm'
        ]
    ],
    '/' => [
        'get' => [
            'controller' => \App\Controller\HomePageController::class,
            'method' => 'getHomePage'
        ]
    ]
];

