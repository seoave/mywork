<?php

namespace App\Controller;

class RecruiterProfilePageController extends AbstractController
{
    protected array $pageAttributes;

    public function __construct()
    {
        $pageAttributes = [
            'title' => 'Recruiter profile'
        ];

        $this->pageAttributes = $pageAttributes;
    }

    public function getRecruiterProfilePage()
    {
        return $this->render('recruiterProfile', $this->pageAttributes);
    }
}
