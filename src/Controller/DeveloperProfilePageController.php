<?php

namespace App\Controller;

class DeveloperProfilePageController extends AbstractController
{
    protected array $pageAttributes;

    public function __construct()
    {
        $pageAttributes = [
            'title' => 'Developer profile'
        ];

        $this->pageAttributes = $pageAttributes;
    }

    public function getDeveloperProfilePage()
    {
        return $this->render('developer', $this->pageAttributes);
    }
}
