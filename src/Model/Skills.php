<?php

namespace App\Model;

class Skills implements ModelInterface
{
    private ?array $skills;

    public function __construct(?array $skills)
    {
        $this->skills = $skills;
    }

    public function getSkills(): ?array
    {
        return $this->skills;
    }

    public function setSkills(array $skills): void
    {
        $this->skills = $skills;
    }

    public function setId(?int $id): ModelInterface
    {
        // TODO: Implement setId() method.
    }

    public function toStorage(): array
    {
        // TODO: Implement toStorage() method.
    }

    public static function createFromStorage(array $data): ModelInterface
    {
        // TODO: Implement createFromStorage() method.
    }
}
