<?php

    namespace App\Controller;

    use App\DI\Container;
    use App\Model\Resume;
    use App\Repository\RepositoryInterface;
    use App\Session;

    class DeveloperProfilePageController extends AbstractController
    {
        protected array $pageAttributes;
        private RepositoryInterface $resumeRepository;

        public function __construct()
        {
            $this->pageAttributes = [
                'title' => 'Developer profile',
            ];
            $this->resumeRepository = Container::getInstance()->getResumeRepository();
        }

        public function getDeveloperProfilePage(): string
        {
            Session::activateSession();
            $this->updatePageAttributes();

            return $this->render('developerAccount', $this->pageAttributes);
        }

        public function sendEditDeveloperProfile(): ?string
        {
            Session::activateSession();

            $position = $_POST['developerPosition'] ? trim($_POST['developerPosition']) : null;
            $salary = ! empty($_POST['developerDesiredSalary']) ? (int) $_POST['developerDesiredSalary'] : null;
            $experienceTerm = ! empty($_POST['developerExperienceTerm']) ? (int) $_POST['developerExperienceTerm'] : null;
            $country = $_POST['country'] ?? null;
            $city = $_POST['developerCity'] ? trim($_POST['developerCity']) : null;
            $category = $_POST['developerCategory'] ?? null;
            $skills = $_POST['developerSkills'] ?? null;
            $experience = $_POST['developerExperience'] ? trim($_POST['developerExperience']) : null;
            $about = $_POST['developerAbout'] ? trim($_POST['developerAbout']) : null;
            $education = $_POST['developerEducation'] ? trim($_POST['developerEducation']) : null;
            $englishLevel = $_POST['developerEnglishLevel'] ?? null;
            $jobTypes = $_POST['desireJobTypes'] ?? null;

            $resumeByUserId = false;
            $newResume = false;

            if (
                $position || $salary || $experienceTerm
                || $country || $city || $category || $experience
                || $about || $englishLevel || $jobTypes
            ) {
                if ($_SESSION['userId']) {
                    $newResume = new Resume($_SESSION['userId']);
                    $newResume->setExperienceTerm($experienceTerm);
                    $newResume->setExperience($experience);
                    $newResume->setPosition($position);
                    $newResume->setSalary($salary);
                    $newResume->setJobTypes($jobTypes);
                    $newResume->setEnglishLevel($englishLevel);
                    $newResume->setSkills($skills);
                    $newResume->setCategory($category);
                    $newResume->setCountry($country);
                    $newResume->setCity($city);
                    $newResume->setAbout($about);
                    $newResume->setEducation($education);

                    $resumeByUserId = $this->resumeRepository->findById($_SESSION['userId']);
                }

                if ($resumeByUserId) {
                    $this->resumeRepository->update($newResume);
                } else {
                    $this->resumeRepository->create($newResume);
                }

                $this->updatePageAttributes();
                $this->pageAttributes['updateDeveloperProfileMessage'] = 'Profile updated';
            }

            return $this->render('developerAccount', $this->pageAttributes);
        }

        private function updatePageAttributes(): void
        {
            $currentUserResume = false;

            if ($_SESSION['userId']) {
                $this->pageAttributes['userId'] = $_SESSION['userId'];
                $currentUserResume = $this->resumeRepository->findById($_SESSION['userId']);
            }

            if ($currentUserResume) {
                $updatedResumeArray = [];
                $updatedResumeArray['category'] = $currentUserResume->getCategory();
                $updatedResumeArray['position'] = $currentUserResume->getPosition();
                $updatedResumeArray['salary'] = $currentUserResume->getSalary();
                $updatedResumeArray['experienceTerm'] = $currentUserResume->getExperienceTerm();
                $updatedResumeArray['experience'] = $currentUserResume->getExperience();
                $updatedResumeArray['city'] = $currentUserResume->getCity();
                $updatedResumeArray['country'] = $currentUserResume->getCountry();
                $updatedResumeArray['about'] = $currentUserResume->getAbout();
                $updatedResumeArray['education'] = $currentUserResume->getEducation();
                $updatedResumeArray['skills'] = $currentUserResume->getSkills();
                $updatedResumeArray['english'] = $currentUserResume->getEnglishLevel();
                $updatedResumeArray['jobTypes'] = $currentUserResume->getJobTypes();

                $this->pageAttributes = array_merge($this->pageAttributes, $updatedResumeArray);
            }
        }

        public function getDeveloperPublicProfile(): string
        {
            return $this->render('developer', []);
        }
    }
