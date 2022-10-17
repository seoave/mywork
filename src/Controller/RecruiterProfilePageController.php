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
        $this->updatePageAttributes();

        return $this->render('recruiterAccount', $this->pageAttributes);
    }

    public function sendCompanyProfile(): string
    {
        $companyName = ! empty($_POST['companyName']) ? $_POST['companyName'] : null;
        $companyAbout = ! empty($_POST['companyAbout']) ? $_POST['companyAbout'] : null;
        $companyWebSite = ! empty($_POST['companyWebSite']) ? $_POST['companyWebSite'] : null;
        $companyEmployees = ! empty($_POST['companyEmployees']) ? $_POST['companyEmployees'] : null;
        $companyCountry = ! empty($_POST['companyCountry']) ? $_POST['companyCountry'] : null;
        $companyCity = ! empty($_POST['companyCity']) ? $_POST['companyCity'] : null;
        $companyTechnologies = ! empty($_POST['technologies']) ? $_POST['technologies'] : null;

        if ($companyName) {
            $company = new Company($companyName, $_SESSION['userId']);
            $company->setAbout($companyAbout);
            $company->setWebsite($companyWebSite);
            $company->setNumberOfEmployees($companyEmployees);
            $company->setCountry($companyCountry);
            $company->setCity($companyCity);
            $company->setTechnologies($companyTechnologies);

            if ($this->companyRepository->findByName($companyName) === null) {
                $this->companyRepository->create($company);
            } else {
                $this->companyRepository->update($company);
            }
        }

        $this->updatePageAttributes();

        return $this->render('recruiterAccount', $this->pageAttributes);
    }

    private function updatePageAttributes(): void
    {
        if ($_SESSION['userId']) {
            $company = $this->companyRepository->findById($_SESSION['userId']);

            $updatedCompanyArray['companyName'] = $company->getName();
            $updatedCompanyArray['aboutCompany'] = $company->getAbout();
            $updatedCompanyArray['companyWebSite'] = $company->getWebsite();
            $updatedCompanyArray['companyEmployees'] = $company->getNumberOfEmployees();
            $updatedCompanyArray['companyCountry'] = $company->getCountry();
            $updatedCompanyArray['companyCity'] = $company->getCity();
            $updatedCompanyArray['companyTechnologies'] = $company->getTechnologies();

            $this->pageAttributes = array_merge($this->pageAttributes, $updatedCompanyArray);
        }
    }
}
