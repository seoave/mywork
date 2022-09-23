<?php

    namespace App\Controller;

    use App\DI\Container;
    use App\Repository\RepositoryInterface;

    class DeveloperPublicPageController extends AbstractController
    {
        protected array $pageAttributes;
        private RepositoryInterface $resumeRepository;
        private RepositoryInterface $userRepository;

        public function __construct()
        {
            $this->pageAttributes = [
                'title' => 'Developer',
            ];
            $this->resumeRepository = Container::getInstance()->getResumeRepository();
            $this->userRepository = Container::getInstance()->getUserRepository();
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

            if (! $resume) {
                return 'no Developer\'s resume in DB';
            }

            $developerProfile['name'] = $user->getName();
            $developerProfile['phone'] = $user->getPhone();
            $developerProfile['email'] = $user->getEmail();
            $developerProfile['position'] = $resume->getPosition();
            $developerProfile['salary'] = $resume->getSalary();
            $developerProfile['jobTypes'] = implode(', ', $resume->getJobTypes());
            $developerProfile['skills'] = implode(', ', $resume->getSkills());
            $developerProfile['englishLevel'] = $resume->getEnglishLevel();
            $developerProfile['about'] = $resume->getAbout();
            $developerProfile['education'] = $resume->getEducation();
            $developerProfile['experience'] = $resume->getExperience();
            $developerProfile['experienceTerm'] = $resume->getExperienceTerm();
            $developerProfile['address']['country'] = $resume->getCountry();
            $developerProfile['address']['city'] = $resume->getCity();
            $developerProfile['address'] = implode(', ', $developerProfile['address']);
            $developerProfile['title'] = $user->getName() . ' ' . $resume->getPosition();
            $this->pageAttributes = array_merge($this->pageAttributes, $developerProfile);

            // var_dump($this->pageAttributes);

            // TODO photo

            return $this->render('developer', $this->pageAttributes);
        }
    }
