<?php

declare(strict_types=1);

namespace App\Model;

interface ModelInterface
{
    public function setId(?int $id): self;

    public function toStorage(): array;

    public static function createFromStorage(array $data): self;
}
