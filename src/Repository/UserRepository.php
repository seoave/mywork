<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\ModelInterface;
use App\Model\User;

class UserRepository extends BasePdoRepository
{

    protected function transformtoDb(ModelInterface $model): array
    {
        // TODO: Implement transformtoDb() method.
        die('transformtoDb() method');
    }

    protected function transformtoModel(array $data): ModelInterface
    {
        var_dump($data);
        return (new User($data['name'], $data['email']))
            ->setId((int) $data['id'])
            ->setRole($data['role'])
            ->setBirthday($data['birthday'] ? (new \DateTime())->setTimestamp($data['birthday']) : null);
    }
}