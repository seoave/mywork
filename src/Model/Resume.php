<?php

namespace App\Model;

use DateTime;

class Resume
{
    private string $name;
    private string $surname;
    private DateTime $birthday;
    private string $experience;
    private string $wishPosition;
    private string $wishSalary;
    private array $wishWorkTypes;
    private array $languages;
    private array $skills;
    private string $specialization;
    private array $wishCountries;
    private array $wishCities;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    public function getBirthday(): DateTime
    {
        return $this->birthday;
    }

    public function setBirthday(DateTime $birthday): void
    {
        $this->birthday = $birthday;
    }

    public function getExperience(): string
    {
        return $this->experience;
    }

    public function setExperience(string $experience): void
    {
        $this->experience = $experience;
    }

    public function getWishPosition(): string
    {
        return $this->wishPosition;
    }

    public function setWishPosition(string $wishPosition): void
    {
        $this->wishPosition = $wishPosition;
    }

    public function getWishSalary(): string
    {
        return $this->wishSalary;
    }

    public function setWishSalary(string $wishSalary): void
    {
        $this->wishSalary = $wishSalary;
    }

    public function getWishWorkTypes(): array
    {
        return $this->wishWorkTypes;
    }

    public function setWishWorkTypes(array $wishWorkTypes): void
    {
        $this->wishWorkTypes = $wishWorkTypes;
    }

    public function getLanguages(): array
    {
        return $this->languages;
    }

    public function setLanguages(array $languages): void
    {
        $this->languages = $languages;
    }

    public function getSkills(): array
    {
        return $this->skills;
    }

    public function setSkills(array $skills): void
    {
        $this->skills = $skills;
    }

    public function getSpecialization(): string
    {
        return $this->specialization;
    }

    public function setSpecialization(string $specialization): void
    {
        $this->specialization = $specialization;
    }

    public function getWishCountries(): array
    {
        return $this->wishCountries;
    }

    public function setWishCountries(array $wishCountries): void
    {
        $this->wishCountries = $wishCountries;
    }

    public function getWishCities(): array
    {
        return $this->wishCities;
    }

    public function setWishCities(array $wishCities): void
    {
        $this->wishCities = $wishCities;
    }
}
