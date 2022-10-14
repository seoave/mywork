<?php

namespace App\Model;

class Skill implements ModelInterface
{
    private ?string $skillName;

    public function __construct(?string $skillName)
    {
        $this->skillName = $skillName;
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

    public function getSkillName(): ?string
    {
        return $this->skillName;
    }

    public function setSkillName(?string $skillName): void
    {
        $this->skillName = $skillName;
    }
}
