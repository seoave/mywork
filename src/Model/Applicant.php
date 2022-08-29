<?php

namespace App\Model;

class Applicant extends User
{
    private string $surname;

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }
}
