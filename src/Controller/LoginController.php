<?php

declare(strict_types=1);

namespace App\Controller;

use App\Authorization;
use App\Redirection;

class LoginController extends AbstractController
{
    protected array $pageAttributes;

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

    public function sendLoginForm(): string
    {
        $loginEmail = trim($_POST['loginEmail']);
        $loginPassword = trim($_POST['loginPassword']);

        if (! $loginEmail || ! $loginPassword) {
            $this->pageAttributes['loginMessage'] = 'Your email or password is empty. Please, fill all fields';
            return $this->render('login', $this->getPageAttributes());
        }

        $userRole = Authorization::authorization($loginEmail, $loginPassword);

        if ($userRole) {
            switch ($userRole) {
                case 'registered':
                case 'administrator':
                    Redirection::redirectTo('/admin');
                    break;
                case 'recruiter':
                    $controller = new RecruiterProfilePageController();
                    echo $controller->getRecruiterProfilePage();
                    break;
                case 'candidate':
                    Redirection::redirectTo('/developer');
                    break;
            }
        } else {
            $this->pageAttributes['loginMessage'] = 'Your email does not exist or password is wrong. 
            Repeat or <a href="/registration">Register</a>';
            return $this->render('login', $this->getPageAttributes());
        }

        return $this->render('login', $this->pageAttributes);
    }
}
