<?php

declare(strict_types=1);

namespace App\Repository;

class JsonRepository
{
    public function __construct(
        private string $filePath
    ) {
        if (! file_exists($this->filePath)) {
            file_put_contents($this->filePath, []);
        }
    }

    public function find($id): object
    {
    }

    public function create(object $model)
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
        $updatedUsersJson = json_encode($currentUsers);
        file_put_contents($this->filePath, $updatedUsersJson);
    }

    public function update($model): object
    {
    }

    public function delete($id)
    {
    }
}
