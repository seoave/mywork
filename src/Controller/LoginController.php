<?php

declare(strict_types=1);

namespace App\Controller;

use App\Authorization;

class LoginController extends AbstractController
{
    private array $pageAttributes;

    public function __construct()
    {
        $pageAttributes = [
            'title' => 'Login'
        ];

        $this->pageAttributes = $pageAttributes;
    }

    public function getPageAttributes(): array
    {
        return $this->pageAttributes;
    }

    public function setPageAttributes(array $pageAttributes): void
    {
        $this->pageAttributes = $pageAttributes;
    }


    public function getLoginPage(): string
    {
        return $this->render('login', $this->getPageAttributes());
    }

    public function sendLoginForm()
    {
        $loginEmail = trim($_POST['loginEmail']);
        $loginPassword = trim($_POST['loginPassword']);

        if (! $loginEmail || ! $loginPassword) {
            $this->pageAttributes['loginMessage'] = 'Your email or password is empty. Please, fill all fields';
            return $this->render('login', $this->getPageAttributes());
        }

        if (Authorization::authorization($loginEmail, $loginPassword)) {
            return 'Pass is ok';
        } else {
            $this->pageAttributes['loginMessage'] = 'Your email does not exists or password is wrong. 
            Repeat or <a href="/registration">Register</a>';
            return $this->render('login', $this->getPageAttributes());
        }

        return $this->render('login', $this->pageAttributes);
    }
}
