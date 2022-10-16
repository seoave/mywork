<?php
declare(strict_types=1);

namespace App\Controller;

class RecruiterPublicProfilePageController extends AbstractController
{
    protected array $pageAttributes;

    public function __construct()
    {
        $pageAttributes = [
            'title' => 'Recruiter',
        ];

        $this->pageAttributes = $pageAttributes;
    }

    public function getRecruiter(): string
    {
        return $this->render('recruiter', $this->pageAttributes);
    }
}
