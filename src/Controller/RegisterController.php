<?php

declare(strict_types=1);

namespace App\Controller;

use App\Authorization;
use App\Configuration;
use App\Model\User;
use App\Repository\JsonRepository;

class RegisterController extends AbstractController
{
    public function getRegisterPage()
    {
        return $this->render('registration');
    }

    public function sendRegisterForm(): void
    {
        // var_export($_POST);
        $name = trim($_POST['registrationName'] ?? null);
        $email = trim($_POST['registrationEmail'] ?? null);
        $plainPassword = trim($_POST['registrationPassword'] ?? null);
        $role = trim($_POST['registrationRole'] ?? null);

        if (! $name || ! $email || ! $plainPassword || ! $role) {
            echo 'Fill all fields';
        }

        if (Authorization::userExists($email)) {
            echo 'This email is using by existing user. <a href="/login">Login, please.</a>';
            // header("Location: /login");
            // exit();
        } else {
            $newUser = new User($name, $email);
            $newUser->setPassword($plainPassword);
            $newUser->setRole($role);

            $repository = new JsonRepository(Configuration::getParameter('user_db'));
            $repository->create($newUser);

            // header("Location: /candidate/profile/{profileId}");
            // exit();
        }

        if (isset($newUser)) {
            if ($newUser?->getRole() === 'candidate') {
                echo 'Redirect to your candidate profile';
                // header("Location: /candidate/profile/{profileId}");
                // exit();
            } else {
                echo 'Redirect to your recruiter profile';
                // header("Location: /candidate/profile/{profileId}");
                // exit();
            }
        }
    }
}
