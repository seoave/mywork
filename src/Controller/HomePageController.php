<?php

declare(strict_types=1);

namespace App\Controller;

use App\DI\Container;

class HomePageController extends AbstractController
{
    protected array $pageAttributes;

    public function __construct()
    {
        $pageAttributes = [
            'title' => 'HomePage'
        ];

        $this->pageAttributes = $pageAttributes;
    }

    public function getHomePage(): string
    {
        $userRepository = Container::getInstance()->getUserRepository();
        var_dump($userRepository->findAll());
        return $this->render('home', $this->pageAttributes);
    }
}