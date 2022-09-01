<?php

declare(strict_types=1);

namespace App\Controller;

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

    public function getHomePage()
    {
        return $this->render('home', $this->pageAttributes);
    }
}