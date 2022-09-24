<?php

    namespace App\Controller;

    use App\DI\Container;
    use App\Repository\RepositoryInterface;
    use App\Session;

    class UserProfileController extends AbstractController
    {
        protected array $pageAttributes;
        private RepositoryInterface $userRepository;

        public function __construct()
        {
            $this->pageAttributes['title'] = 'User profile';
            $this->userRepository = Container::getInstance()->getUserRepository();
        }

        public function getUserProfile()
        {
            Session::activateSession();
            $this->updatePageAttributes();

            return $this->render('user', $this->pageAttributes);
        }

        private function updatePageAttributes(): void
        {
            if ($_SESSION['userId']) {
                $this->pageAttributes['userId'] = $_SESSION['userId'];
                $userProfile = $this->userRepository->findById($_SESSION['userId']);
                //  var_dump($userProfile);
            }

            if ($userProfile) {
                $updatedUserProfile = [];
                $updatedUserProfile['userName'] = $userProfile->getName();
                $updatedUserProfile['userRole'] = $userProfile->getRole();
                $updatedUserProfile['userPhone'] = $userProfile->getPhone();
                $updatedUserProfile['userBirthday'] = $userProfile->getBirthday();
                $updatedUserProfile['userEmail'] = $userProfile->getEmail();
                $updatedUserProfile['userCountry'] = $userProfile->getCountry();
                $updatedUserProfile['userCity'] = $userProfile->getCity();

                // var_dump($updatedUserProfile);

                $this->pageAttributes = array_merge($this->pageAttributes, $updatedUserProfile);
            }
        }
    }