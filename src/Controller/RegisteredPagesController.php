<?php

declare(strict_types=1);

namespace App\Controller;

use App\DI\Container;
use App\Redirection;
use App\Session;

class RegisteredPagesController extends AbstractController
{
    protected array $pageAttributes = [];

    public function registeredCredentialCheck(): bool
    {
        Session::activateSession();
        $userRepository = Container::getInstance()->getUserRepository();
        $user = $userRepository->findById($_SESSION['userId']);

        if (! $user || $user->getRole() === 'administrator') {
            Redirection::redirectTo('/logout');
        }

        return true;
    }
}
