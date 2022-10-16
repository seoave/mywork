<?php

namespace App\Controller;

use App\DI\Container;
use App\Model\Company;
use App\Repository\RepositoryInterface;
use App\Session;

class RecruiterProfilePageController extends AbstractController
{
    protected array $pageAttributes;
    private RepositoryInterface $companyRepository;

    public function __construct()
    {
        $this->pageAttributes = [
            'title' => 'Recruiter profile',
            'companyName' => '',
            'aboutCompany' => '',
            'companyWebSite' => '',
            'companyEmployees' => 0,
            'companyCountry' => null,
            'companyCity' => '',
            'technologies' => Container::getInstance()->getSkillsRepository()->findAll(),
            'companyTechnologies' => [],
        ];

        $this->companyRepository = Container::getInstance()->getCompanyRepository();
        Session::activateSession();
    }

    public function getRecruiterProfilePage(): string
    {
        return $this->render('recruiterAccount', $this->pageAttributes);
    }

    public function sendCompanyProfile(): string
    {
        var_dump($_POST, $_SESSION);
        $companyName = ! empty($_POST['companyName']) ? $_POST['companyName'] : null;
        $companyAbout = ! empty($_POST['companyAbout']) ? $_POST['companyAbout'] : null;
        $companyWebSite = ! empty($_POST['companyWebSite']) ? $_POST['companyWebSite'] : null;
        $companyEmployees = ! empty($_POST['companyEmployees']) ? $_POST['companyEmployees'] : null;
        $companyCountry = ! empty($_POST['companyCountry']) ? $_POST['companyCountry'] : null;
        $companyCity = ! empty($_POST['companyCity']) ? $_POST['companyCity'] : null;

        if ($companyName) {
            $company = new Company($companyName, $_SESSION['userId']);

            var_dump($company);

            if ($this->companyRepository->findByName($companyName) === null) {
                //  $this->companyRepository->create();
            } else {
                // $this->companyRepository->update();
            }
        }

        // if not exists - create new company

        // if exists - update company

        // update pageAttributes

        return $this->render('recruiterAccount', $this->pageAttributes);
    }
}
