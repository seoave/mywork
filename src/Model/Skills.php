<?php

namespace App\Model;

class Skills
{
    private ?array $skills;

    public function getSkills(): ?array
    {
        return $this->skills;
    }

    public function setSkills(array $skills): void
    {
        $this->skills = $skills;
    }
}
