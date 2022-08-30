<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\ModelInterface;
use App\Model\User;

class JsonRepository
{
    public function __construct(
        private string $filePath
    ) {
        if (! file_exists($this->filePath)) {
            file_put_contents($this->filePath, []);
        }
    }

    public function find($id): ?ModelInterface
    {
        if (! is_readable($this->filePath)) {
            die('File does not exist');
        }

        $currentUsers = json_decode(file_get_contents($this->filePath), true);

        foreach ($currentUsers as $user) {
            if ($user['id'] == $id) {
                return User::createFromStorage($user);
            }
        }

        return null;
    }

    public function findByEmail(string $email): ?ModelInterface
    {
        if (! is_readable($this->filePath)) {
            die('File does not exist');
        }

        $currentUsers = json_decode(file_get_contents($this->filePath), true);

        foreach ($currentUsers as $user) {
            if ($user['email'] == $email) {
                return User::createFromStorage($user);
            }
        }

        return null;
    }

    public function findAll(): array
    {
        $users = json_decode(file_get_contents($this->filePath), true);
        return array_map(
            fn(array $user) => User::createFromStorage($user),
            $users
        );
    }

    public function create(ModelInterface $model): ModelInterface
    {
        if (! is_readable($this->filePath)) {
            die('File does not exist');
        }

        $currentUsersJson = file_get_contents($this->filePath);
        $currentUsers = json_decode($currentUsersJson, true);
        $lastUser = $currentUsers ? end($currentUsers) : null;

        if (empty($lastUser)) {
            $model->setId(0);
        } else {
            $model->setId($lastUser['id'] + 1);
        }

        $currentUsers[] = $model->toStorage();
        file_put_contents($this->filePath, json_encode($currentUsers));

        return $model;
    }

    public function update($model): object
    {
        // TODO
    }

    public function delete($id)
    {
        //TODO
    }
}
