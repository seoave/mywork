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
    '/admin/skills' => [
        'get' => [
            'controller' => \App\Controller\SkillsPageController::class,
            'method' => 'getSkillsPage',
        ],
    ],
    '/admin/skills/new' => [
        'get' => [
            'controller' => \App\Controller\NewSkillPageController::class,
            'method' => 'getNewSkillPage',
        ],
        'post' => [
            'controller' => \App\Controller\NewSkillPageController::class,
            'method' => 'sendNewSkill',
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
    '/account/recruiter' => [
        'get' => [
            'controller' => \App\Controller\RecruiterProfilePageController::class,
            'method' => 'getRecruiterProfilePage',
        ],
        'post' => [
            'controller' => \App\Controller\RecruiterProfilePageController::class,
            'method' => 'sendCompanyProfile',
        ],
    ],
    '/account/recruiter/new-position' => [
        'get' => [
            'controller' => \App\Controller\NewPositionPageController::class,
            'method' => 'getNewPositionPage',
        ],
        'post' => [
            'controller' => \App\Controller\NewPositionPageController::class,
            'method' => 'sendNewPosition',
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
    '/recruiters' => [
        'get' => [
            'controller' => \App\Controller\RecruitersPageController::class,
            'method' => 'getRecruiters',
        ],
    ],
    '/developers/(?<id>\d+)' => [
        'get' => [
            'controller' => \App\Controller\DeveloperPublicPageController::class,
            'method' => 'getDeveloper',
        ],
    ],
    '/recruiters/(?<id>\d+)' => [
        'get' => [
            'controller' => \App\Controller\RecruiterPublicProfilePageController::class,
            'method' => 'getRecruiter',
        ],
    ],
    '/logout' => [
        'get' => [
            'controller' => \App\Controller\LogoutController::class,
            'method' => 'getLogout',
        ],
    ],
];
