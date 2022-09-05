<?php

namespace App\Controller;

class DashboardController extends AbstractController
{
    protected array $pageAttributes;

    public function __construct()
    {
        $pageAttributes = [
            'title' => 'Dashboard'
        ];

        $this->pageAttributes = $pageAttributes;
    }

    public function getDashboardPage()
    {
        return $this->render('dashboard', $this->pageAttributes);
    }
}
