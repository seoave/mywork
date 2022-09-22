<?php

declare(strict_types=1);

namespace App\Controller\Api;

use App\Configuration;
use App\Model\User;
use App\Repository\JsonRepository;

class UserController
{
    public function getList()
    {
        $repository = new JsonRepository(Configuration::getParameter('user_db'));

        return $repository->findAll();
    }

    public function create(array $data): array
    {
        $repository = new JsonRepository(Configuration::getParameter('user_db'));

        $user = User::createFromStorage($data);
        $user = $repository->create($user);

        return $user->toStorage();
    }
}
