<?php

declare(strict_types=1);

namespace App\Controller;

use App\Configuration;
use App\Model\User;
use App\Repository\JsonRepository;

class LoginController extends AbstractController
{
    public function getLoginPage()
    {
        return $this->render('login');
    }

    public function sendLoginForm()
    {
        $loginEmail = trim($_POST['loginEmail']);
        $loginPassword = trim($_POST['loginPassword']);

        if (empty($loginEmail) || empty($loginPassword)) {
            echo 'Your login or password is empty.'; // send message to login page
            // header("Location: /login");
         //   exit();
        }

        if (static::authorization($loginEmail, $loginPassword)) {
            echo 'Pass is OK';
            //  header("Location: /candidate"); // TODO condition hr or candidate
        } else {
            echo 'Your password is wrong.'; // send message to login page
            // header("Location: /login");
           // exit();
        }
    }

    public static function authorization(string $email, string $password): bool
    {
        $repository = new JsonRepository(Configuration::getParameter('user_db'));
        /** @var User $user */
        $user = $repository->findEmail($email);
        if ($user === null) {
            return false;
        }
        return $user->getPassword() === md5($password . $user->getSalt());
    }
}