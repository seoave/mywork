<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\ModelInterface;

class ResumeRepository extends BasePdoRepository
{

    protected function transformtoDb(ModelInterface $model): array
    {
        // TODO: Implement transformtoDb() method.
    }

    protected function transformtoModel(array $data): ModelInterface
    {
        // TODO: Implement transformtoModel() method.
    }

    protected function getTableName(): string
    {
        // TODO: Implement getTableName() method.
    }

    public function findByEmail(string $email): ?ModelInterface
    {
        // TODO: Implement findByEmail() method.
    }
}
