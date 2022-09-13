<?php

namespace App;

use App\Model\User;
use App\Repository\JsonRepository;

class Authorization
{
    public static function authorization(string $email, string $password): string|bool
    {
        $repository = new JsonRepository(Configuration::getParameter('user_db'));
        /** @var User $user */
        $user = $repository->findByEmail($email);
        if ($user === null) {
            return false;
        }

        if (static::userExists($email)) {
            if ($user->getPassword() === md5($password . $user->getSalt())) { // TODO separate method
                session_start();
                $_SESSION['userId'] = $user->getId();
                $_SESSION['userName'] = $user->getName();
                $_SESSION['userRole'] = $user->getRole();
                return $user->getRole();
            }
        }
        return false;
    }

    public static function userExists(string $email): bool
    {
        $repository = new JsonRepository(Configuration::getParameter('user_db'));
        /** @var User $user */
        $user = $repository->findByEmail($email);
        if ($user === null) {
            return false;
        }
        return true;
    }

    public static function dbAuth(string $email, string $password): ?string
    {
        // find user email
        // if null - no user, go register
        // if exists check password hash
        // if match - return user
        // else return null

        return 'dbAuth method';
    }
}
