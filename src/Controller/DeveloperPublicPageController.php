<?php

namespace App\Controller;

use App\DI\Container;
use App\Repository\RepositoryInterface;
use DateTime;

class DeveloperPublicPageController extends AbstractController
{
    protected array $pageAttributes;
    private RepositoryInterface $resumeRepository;
    private RepositoryInterface $userRepository;
    private DateTime $now;

    public function __construct()
    {
        $this->pageAttributes = [
            'title' => 'Developer',
        ];
        $this->resumeRepository = Container::getInstance()->getResumeRepository();
        $this->userRepository = Container::getInstance()->getUserRepository();
        $this->now = (new \DateTime())->setTimezone(new \DateTimeZone('Europe/Kiev'))->setTime(0, 0);
    }

    public function getDeveloper(array $params): ?string
    {
        if (! $params['id']) {
            return 'No userId in URL parameters';
        }

        $user = $this->userRepository->findById($params['id']);

        if (! $user) {
            return 'No such user';
        }

        $resume = $this->resumeRepository->findById($params['id']);

        $userPhoto = 'avatar.png';

        if ($user->getPhoto()) {
            $userPhoto = $user->getPhoto();
        }

        $developerProfile['userPhoto'] = $userPhoto;
        $developerProfile['name'] = $user->getName();
        $developerProfile['phone'] = $user->getPhone();
        $developerProfile['email'] = $user->getEmail();
        $developerProfile['position'] = $resume?->getPosition();
        $developerProfile['salary'] = $resume?->getSalary();
        $developerProfile['jobTypes'] = $resume ? implode(', ', $resume->getJobTypes()) : null;
        $developerProfile['age'] = $this->now->diff($user->getBirthday())->format('%y');
        $developerProfile['skills'] = $resume ? implode(', ', $resume->getSkills()) : null;
        $developerProfile['englishLevel'] = $resume?->getEnglishLevel();
        $developerProfile['about'] = $resume?->getAbout();
        $developerProfile['education'] = $resume?->getEducation();
        $developerProfile['experience'] = $resume?->getExperience();
        $developerProfile['experienceTerm'] = $resume?->getExperienceTerm();
        $developerProfile['address']['country'] = $resume?->getCountry();
        $developerProfile['address']['city'] = $resume?->getCity();
        $developerProfile['address'] = implode(', ', $developerProfile['address']);
        $developerProfile['title'] = $user->getName() . ' ' . $resume?->getPosition();

        $this->pageAttributes = array_merge($this->pageAttributes, $developerProfile);

        return $this->render('developer', $this->pageAttributes);
    }
}
