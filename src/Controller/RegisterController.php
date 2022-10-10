<?php

    declare(strict_types=1);

    namespace App\Controller;

    use App\DI\Container;
    use App\Model\User;

    class RegisterController extends AbstractController
    {
        protected array $pageAttributes;

        public function __construct()
        {
            $this->pageAttributes = ['title' => 'Registration'];
        }

        public function getRegisterPage(): string
        {
            return $this->render('registration', $this->pageAttributes);
        }

        public function sendRegisterForm(): ?string
        {
            $name = trim($_POST['registrationName'] ?? null);
            $email = trim($_POST['registrationEmail'] ?? null);
            $plainPassword = trim($_POST['registrationPassword'] ?? null);
            $role = trim($_POST['registrationRole'] ?? null);

            if (empty($name) || empty($email) || empty($plainPassword)) {
                $this->pageAttributes['registerMessage'] = 'Fill all fields';

                return $this->render('registration', $this->pageAttributes);
            }

            $userRepository = Container::getInstance()->getUserRepository();

            if ($userRepository->findByEmail($email)) {
                $this->pageAttributes['registerMessage'] = 'This email is using by existing user. <a href="/login">Login, please.</a>';

                return $this->render('registration', $this->pageAttributes);
            } else {
                $newUser = new User($name, $email);
                $newUser->setNewPassword($plainPassword);
                $newUser->setRole($role);
            }

            if ($userRepository->create($newUser)) {
                $this->pageAttributes['registerMessage'] = 'You are registered. <a href="/login">Login, please.</a>';

                return $this->render('registration', $this->pageAttributes);
            }

            return null;
        }
    }
