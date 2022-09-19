<?php

    namespace App\Controller;

    use App\DI\Container;
    use App\Model\Resume;
    use App\Redirection;

    class DeveloperProfilePageController extends AbstractController
    {
        protected array $pageAttributes;

        public function __construct()
        {
            $this->pageAttributes = [
                'title' => 'Developer profile',
            ];
        }

        public function getDeveloperProfilePage(): string
        {
            $this->updatePageAttributes();

            return $this->render('developerAccount', $this->pageAttributes);
        }

        public function getDeveloperPublicProfile(): string
        {
            return $this->render('developer', []);
        }

        public function sendEditDeveloperProfile(): ?string
        {
            $this->updatePageAttributes();

            $position = $_POST['developerPosition'] ? trim($_POST['developerPosition']) : null;
            $salary = ! empty($_POST['developerDesiredSalary']) ? (int) $_POST['developerDesiredSalary'] : null;
            $experienceTerm = ! empty($_POST['developerExperienceTerm']) ? (int) $_POST['developerExperienceTerm'] : null;
            $country = $_POST['country'] ?? null;
            $city = $_POST['developerCity'] ? trim($_POST['developerCity']) : null;
            $category = $_POST['developerCategory'] ?? null;
            $skills = $_POST['developerSkills'] ?? null;
            $experience = $_POST['developerExperience'] ? trim($_POST['developerExperience']) : null;
            $about = $_POST['developerAbout'] ? trim($_POST['developerAbout']) : null;
            $englishLevel = $_POST['developerEnglishLevel'] ?? null;
            $jobTypes = $_POST['desireJobTypes'] ?? null;

            if (
                ! $position || ! $salary || ! $experienceTerm
                || ! $country || ! $city || ! $category || ! $experience
                || ! $about || ! $englishLevel || ! $jobTypes
            ) {
                if ($_SESSION['userId']) {
                    $resume = new Resume($_SESSION['userId']);
                    $resume->setExperienceTerm($experienceTerm);
                    $resume->setExperience($experience);
                    $resume->setPosition($position);
                    $resume->setSalary($salary);
                    $resume->setJobTypes($jobTypes);
                    $resume->setEnglishLevel($englishLevel);
                    $resume->setSkills($skills);
                    $resume->setCategory($category);
                    $resume->setCountry($country);
                    $resume->setCity($city);
                    $resume->setAbout($about);

                    $resumeRepository = Container::getInstance()->getResumeRepository();
                    $resumeByUserId = $resumeRepository->findById($_SESSION['userId']);
                }

                if ($resumeByUserId) {
                    $updated = $resumeRepository->update($resume);
                    //var_dump($updated);
                } else {
                    $resumeRepository->create($resume);
                }

                $this->pageAttributes['updateDeveloperProfileMessage'] = 'Profile updated';
            }

            return Redirection::redirectTo('/account/developer');
        }

        private function updatePageAttributes()
        {
            $resumeRepository = Container::getInstance()->getResumeRepository();

            if (session_status() !== 2) {
                session_start();
            }

            if ($_SESSION['userId']) {
                $currentResume = $resumeRepository->findById($_SESSION['userId']);
                //var_dump($currentResume);
            }

            $resumeArray = [];
            $resumeArray['category'] = $currentResume->getCategory();
            $resumeArray['position'] = $currentResume->getPosition();
            $resumeArray['salary'] = $currentResume->getSalary();
            $resumeArray['experienceTerm'] = $currentResume->getExperienceTerm();
            $resumeArray['experience'] = $currentResume->getExperience();
            $resumeArray['city'] = $currentResume->getCity();
            $resumeArray['country'] = $currentResume->getCountry();
            $resumeArray['about'] = $currentResume->getAbout();
            $resumeArray['skills'] = $currentResume->getSkills();
            $resumeArray['english'] = $currentResume->getEnglishLevel();
            $resumeArray['jobTypes'] = $currentResume->getJobTypes();

            $this->pageAttributes = array_merge($this->pageAttributes, $resumeArray);
        }
    }
