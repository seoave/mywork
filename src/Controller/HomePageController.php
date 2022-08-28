<?php

declare(strict_types=1);

namespace App\Controller;

class HomePageController extends AbstractController
{
    public function getHomePage()
    {
        return $this->render('home');
    }

}