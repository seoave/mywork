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
        $this->pageAttributes = ['title' => 'Login'];
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

    public function sendLoginForm(): ?string
    {
        $loginEmail = trim($_POST['loginEmail']);
        $loginPassword = trim($_POST['loginPassword']);

        if (! $loginEmail || ! $loginPassword) {
            $this->pageAttributes['loginMessage'] = 'Your email or password is empty. Please, fill all fields';

            return $this->render('login', $this->getPageAttributes());
        }

        $userRole = Authorization::dbAuth($loginEmail, $loginPassword);

        if ($userRole) {
            switch ($userRole) {
                case 'registered':
                case 'administrator':
                    Redirection::redirectTo('/admin');
                    break;
                case 'recruiter':
                    Redirection::redirectTo('/account/recruiter');
                    break;
                case 'candidate':
                    Redirection::redirectTo('/account/developer');
                    break;
            }
        } else {
            $this->pageAttributes['loginMessage'] = 'Your email does not exist or password is wrong.
            Repeat or <a href="/registration">Register</a>';

            return $this->render('login', $this->getPageAttributes());
        }

        return null;
    }
}
