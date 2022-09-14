<?php

namespace App;

use App\DI\Container;

class Authorization
{
    public static function dbAuth(string $email, string $password): ?string
    {
        $userRepository = Container::getInstance()->getUserRepository();
        $user = $userRepository->findByEmail($email);

        if ($user === null) {
            return null;
        }

        if ($user->getPassword() === md5($password . $user->getSalt())) {
            session_start();
            $_SESSION['userId'] = $user->getId();
            $_SESSION['userName'] = $user->getName();
            $_SESSION['userRole'] = $user->getRole();
            return $user->getRole();
        }

        return null;
    }
}
