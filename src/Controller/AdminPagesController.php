<?php

declare(strict_types=1);

namespace App\Controller;

use App\DI\Container;
use App\Redirection;
use App\Session;

class AdminPagesController extends AbstractController
{
    protected array $pageAttributes = [];

    public function adminCredentialCheck(): bool
    {
        Session::activateSession();
        $userRepository = Container::getInstance()->getUserRepository();
        $user = $userRepository->findById($_SESSION['userId']);

        if (! $user || $user->getRole() !== 'administrator') {
            var_dump($user);
            //  Redirection::redirectTo('/logout');
        }

        return true;
    }
}
