<?php

declare(strict_types=1);

namespace App\Controller;

use App\Authorization;

class LoginController extends AbstractController
{
    public function getLoginPage(): string
    {
        return $this->render('login');
    }

    public function sendLoginForm()
    {
        $loginEmail = trim($_POST['loginEmail']);
        $loginPassword = trim($_POST['loginPassword']);

        if (empty($loginEmail) || empty($loginPassword)) {
            echo 'Your login or password is empty.'; //TODO send message to login page
            // header("Location: /login");
            //   exit();
        }

        if (Authorization::authorization($loginEmail, $loginPassword)) {
            echo 'Pass is OK';
            //  header("Location: /candidate"); // TODO condition hr or candidate
        } else {
            echo 'Your password is wrong.'; //TODO send message to login page
            // header("Location: /login");
            // exit();
        }
    }
}
