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

    public function getDeveloperProfilePage(): string
    {
        return $this->render('developerAccount', $this->pageAttributes);
    }

    public function getDeveloperPublicProfile(): string
    {
        return $this->render('developer', []);
    }

    public function sendEditDeveloperProfile(): ?string
    {
        var_dump($_POST);

        $position = trim($_POST['developerPosition']);
        $salary = $_POST['developerDesiredSalary'];
        $experienceTerm = $_POST['developerExperienceTerm'];
        $country = $_POST['country'];
        $city = trim($_POST['developerCity']);
        $category = $_POST['developerCategory'];
        $experience = trim($_POST['developerExperience']);
        $about = trim($_POST['developerAbout']);
        $english = $_POST['developerEnglishLevel'];
        $jobTypes = $_POST['desireJobTypes'];

        // TODO add / update developer resume
        //

        return $this->render('developerAccount', $this->pageAttributes);
    }
}
