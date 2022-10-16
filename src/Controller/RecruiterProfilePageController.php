<?php

namespace App\Controller;

class RecruiterProfilePageController extends AbstractController
{
    protected array $pageAttributes;

    public function __construct()
    {
        $pageAttributes = [
            'title' => 'Recruiter profile',
            'companyName' => '',
            'aboutCompany' => '',
            'companyWebSite' => '',
            'companyEmployees' => 0,
            'companyCountry' => null,
            'companyCity' => '',
            'technologies' => [],
        ];

        $this->pageAttributes = $pageAttributes;
    }

    public function getRecruiterProfilePage()
    {
        return $this->render('recruiterAccount', $this->pageAttributes);
    }
}
