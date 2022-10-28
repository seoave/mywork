<?php
declare(strict_types=1);

namespace App\Controller;

use App\DI\Container;
use App\Redirection;

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

    public function getRecruiter(array $params): string
    {
        $userRepository = Container::getInstance()->getUserRepository();
        $user = $userRepository->findById($params['id']);

        if ($user === null) {
            Redirection::redirectTo('/404');
        }

        $companyRepository = Container::getInstance()->getCompanyRepository();
        $company = $companyRepository->findById($params['id']);

        $recruiter['name'] = $user->getName();
        $recruiter['photo'] = $user->getPhoto();
        $recruiter['country'] = $user->getCountry();

        if ($company) {
            $companyArr['companyName'] = $company->getName();
            $companyArr['companyWebSite'] = $company->getWebsite();
            $companyArr['companyAbout'] = $company->getAbout();
            $companyArr['companyEmployees'] = $company->getNumberOfEmployees();
            $companyArr['companyAddress']['country'] = $company?->getCountry();
            $companyArr['companyAddress']['city'] = $company?->getCity();
            $companyArr['companyAddress'] = implode(', ', $companyArr['companyAddress']);

            $this->pageAttributes = array_merge($this->pageAttributes, $companyArr);
        }

        $this->pageAttributes = array_merge($this->pageAttributes, $recruiter);

        return $this->render('recruiter', $this->pageAttributes);
    }
}
