<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\ModelInterface;

class JobsRepository extends BasePdoRepository
{
    public function create(ModelInterface $model): ?ModelInterface
    {
        // TODO: Implement create() method.
    }

    public function update(ModelInterface $model): ?ModelInterface
    {
        // TODO: Implement update() method.
    }

    public function delete($id): ?ModelInterface
    {
        // TODO: Implement delete() method.
    }

    public function findById($id): ?ModelInterface
    {
        // TODO: Implement findById() method.
    }

    protected function transformtoDb(ModelInterface $model): array
    {
        // TODO: Implement transformtoDb() method.
    }

    protected function transformtoModel(array $data): ModelInterface
    {
        // TODO: Implement transformtoModel() method.
    }

    protected function transformtoModelsArray(array $data): array
    {
        // TODO: Implement transformtoModelsArray() method.
    }

    protected function getTableName(): string
    {
        // TODO: Implement getTableName() method.
    }
}
