<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\ModelInterface;

interface RepositoryInterface
{
    public function findAll(): array;

    public function find($id): ?ModelInterface;

    public function create(ModelInterface $model): ?ModelInterface;

    public function update(ModelInterface $model): ?ModelInterface;

    public function delete($id): ?ModelInterface;
}
