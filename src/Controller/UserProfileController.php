<?php

    namespace App\Controller;

    use App\DI\Container;
    use App\Repository\RepositoryInterface;
    use App\Session;
    use DateTime;
    use DateTimeZone;

    class UserProfileController extends AbstractController
    {
        protected array $pageAttributes;
        private RepositoryInterface $userRepository;
        private string $imagesDirectory;

        public function __construct()
        {
            $container = Container::getInstance();
            $this->pageAttributes['title'] = 'User profile';
            $this->userRepository = $container->getUserRepository();
            $parameters = $container->getParameters();
            $this->imagesDirectory = $parameters['images_dir'];
        }

        public function getUserProfile(): ?string
        {
            Session::activateSession();
            $this->updatePageAttributes();

            return $this->render('user', $this->pageAttributes);
        }

        private function updatePageAttributes(): void
        {
            $userProfile = null;
            if ($_SESSION['userId']) {
                $this->pageAttributes['userId'] = $_SESSION['userId'];
                $userProfile = $this->userRepository->findById($_SESSION['userId']);
            }

            if ($userProfile) {
                $updatedUserProfile = [];
                $updatedUserProfile['userName'] = $userProfile->getName();
                $updatedUserProfile['userRole'] = $userProfile->getRole();
                $updatedUserProfile['userPhone'] = $userProfile->getPhone();
                $updatedUserProfile['userBirthday'] = $userProfile->getBirthday()->format('Y-m-d');
                $updatedUserProfile['userEmail'] = $userProfile->getEmail();
                $updatedUserProfile['userCountry'] = $userProfile->getCountry();
                $updatedUserProfile['userCity'] = $userProfile->getCity();

                $userPhoto = 'avatar.png';
                if ($userProfile->getPhoto()) {
                    $userPhoto = $userProfile->getPhoto();
                }

                $updatedUserProfile['userPhoto'] = $userPhoto;

                $this->pageAttributes = array_merge($this->pageAttributes, $updatedUserProfile);
            }
        }

        public function sendEditUserForm(): string
        {
            Session::activateSession();
            // todo update photo
            var_dump($_FILES);
            //var_dump($_POST);

            $userName = ! empty($_POST['userName']) ? trim($_POST['userName']) : null;
            $userPhone = ! empty($_POST['userPhone']) ? trim($_POST['userPhone']) : null;
            $userBirthday = ! empty($_POST['userBirthday']) ? $_POST['userBirthday'] : null;
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

            $user = null;

            if ($_SESSION['userId']) {
                $user = $this->userRepository->findById($_SESSION['userId']);
            }

            if ($userName) {
                $user->setName($userName);
            }

            if ($userEmail) {
                $user->setEmail($userEmail);
            }

            if ($userBirthday) {
                $datetime = DateTime::createFromFormat(
                    'Y-m-d', $userBirthday, new DateTimeZone('Europe/Kiev'
                ))->setTime(0, 0);
                $user->setBirthday($datetime);
            }

            if ($userCountry) {
                $user->setCountry($userCountry);
            }

            if ($userCity) {
                $user->setCity($userCity);
            }

            if ($userPhone) {
                $user->setPhone($userPhone);
            }

            if (isset($_FILES['userPhoto'])) {
                $destination = $this->imagesDirectory . $_FILES['userPhoto']['name'];
                move_uploaded_file($_FILES['userPhoto']['tmp_name'], $destination);
                $user->setPhoto($_FILES['userPhoto']['name']);
            }

            $this->userRepository->update($user);

            $this->updatePageAttributes();

            return $this->render('user', $this->pageAttributes);
        }
    }
