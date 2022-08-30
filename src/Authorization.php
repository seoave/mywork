<?php

namespace App;

use App\Model\User;
use App\Repository\JsonRepository;

class Authorization
{
    public static function authorization(string $email, string $password): bool
    {
        $repository = new JsonRepository(Configuration::getParameter('user_db'));
        /** @var User $user */
        $user = $repository->findByEmail($email);
        if ($user === null) {
            return false;
        }

        if (static::userExists($email)) {
            return $user->getPassword() === md5($password . $user->getSalt());
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
}
