<?php

    return [
        '/contact-us' => [
            'get' => [
                'controller' => \App\Controller\ContactController::class,
                'method' => 'getContactPage',
            ],
            'post' => [
                'controller' => \App\Controller\ContactController::class,
                'method' => 'sendContactForm',
            ],
        ],
        '/login' => [
            'get' => [
                'controller' => \App\Controller\LoginController::class,
                'method' => 'getLoginPage',
            ],
            'post' => [
                'controller' => \App\Controller\LoginController::class,
                'method' => 'sendLoginForm',
            ],
        ],
        '/registration' => [
            'get' => [
                'controller' => \App\Controller\RegisterController::class,
                'method' => 'getRegisterPage',
            ],
            'post' => [
                'controller' => \App\Controller\RegisterController::class,
                'method' => 'sendRegisterForm',
            ],
        ],
        '/' => [
            'get' => [
                'controller' => \App\Controller\HomePageController::class,
                'method' => 'getHomePage',
            ],
        ],
        '/404' => [
            'get' => [
                'controller' => \App\Controller\Page404Controller::class,
                'method' => 'get404Page',
            ],
        ],
        '/admin' => [
            'get' => [
                'controller' => \App\Controller\DashboardController::class,
                'method' => 'getDashboardPage',
            ],
        ],
        '/account' => [
            'get' => [
                'controller' => \App\Controller\UserProfileController::class,
                'method' => 'getUserProfile',
            ],
            'post' => [
                'controller' => \App\Controller\UserProfileController::class,
                'method' => 'sendEditUserForm',
            ],
        ],
        '/account/developer' => [
            'get' => [
                'controller' => \App\Controller\DeveloperProfilePageController::class,
                'method' => 'getDeveloperProfilePage',
            ],
            'post' => [
                'controller' => \App\Controller\DeveloperProfilePageController::class,
                'method' => 'sendEditDeveloperProfile',
            ],
        ],
        '/jobs' => [
            'get' => [
                'controller' => \App\Controller\JobsPageController::class,
                'method' => 'getJobs',
            ],
        ],
        '/developers' => [
            'get' => [
                'controller' => \App\Controller\DevelopersPageController::class,
                'method' => 'getDevelopers',
            ],
        ],
        '/developers/(?<id>\d+)' => [
            'get' => [
                'controller' => \App\Controller\DeveloperPublicPageController::class,
                'method' => 'getDeveloper',
            ],
        ],
        '/logout' => [
            'get' => [
                'controller' => \App\Controller\LogoutController::class,
                'method' => 'getLogout',
            ],
        ],
    ];
