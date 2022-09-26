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

        public function sendEditUserForm(): string
        {
            Session::activateSession();
            // todo update photo
            //   var_dump($_FILES);
            var_dump($_POST);

            $userName = ! empty($_POST['userName']) ? trim($_POST['userName']) : null;
            $userPhone = ! empty($_POST['userPhone']) ? trim($_POST['userPhone']) : null;
            //       $userBirthday = ! empty($_POST['userBirthday']) ? $_POST['userBirthday'] : null; // TODO
            $userEmail = ! empty($_POST['userEmail']) ? trim($_POST['userEmail']) : null;
            $userCountry = ! empty($_POST['userCountry']) ? trim($_POST['userCountry']) : null;
            $userCity = ! empty($_POST['userCity']) ? trim($_POST['userCity']) : null;

            if (! $userName || ! $userEmail) {
                $this->pageAttributes['notice'] = 'Name or Email should not be empty';
                $this->render('user', $this->pageAttributes);
            }

            if (! filter_var($userEmail, FILTER_VALIDATE_EMAIL)) {
                $this->pageAttributes['notice'] = 'Invalid email format';
                $this->render('user', $this->pageAttributes);
            }

            // update user profile

            if ($_SESSION['userId']) {
                $user = $this->userRepository->findById($_SESSION['userId']);
                var_dump($user);
            }

            if ($userName) {
                $user->setName($userName);
            }

            if ($userEmail) {
                $user->setEmail($userEmail);
            }

            // TODO birthday
//            if ($userBirthday) {
//                $user->setBirthday($userBirthday);
//            }

            if ($userCountry) {
                $user->setCountry($userCountry);
            }

            if ($userCity) {
                $user->setCity($userCity);
            }

            if ($userPhone) {
                $user->setPhone($userPhone);
            }

            // TODO photo
//            if ($userPhoto) {
//                $user->setPhoto($userPhoto);
//            }

            var_dump($user);

            $this->userRepository->update($user);

            $this->updatePageAttributes();

            return $this->render('user', $this->pageAttributes);
        }
    }
