<?php

namespace App\Model;

class Company implements ModelInterface
{
    private string $name;
    private int $recruiterId;
    private ?string $about;
    private ?int $numberOfEmployees;
    private ?string $country;
    private ?string $city;
    private ?string $website;
    private ?array $technologies;

    public function __construct(string $name, int $recruiterId)
    {
        $this->name = $name;
        $this->recruiterId = $recruiterId;
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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setAbout(?string $about): void
    {
        $this->about = $about;
    }

    public function getAbout(): ?string
    {
        return $this->about;
    }

    public function getNumberOfEmployees(): ?int
    {
        return $this->numberOfEmployees;
    }

    public function setNumberOfEmployees(?int $numberOfEmployees): void
    {
        $this->numberOfEmployees = $numberOfEmployees;
    }

    public function getCountry(): ?string
    {
        return $this->country;
    }

    public function setCountry(?string $country): void
    {
        $this->country = $country;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(?string $city): void
    {
        $this->city = $city;
    }

    public function getRecruiterId(): int
    {
        return $this->recruiterId;
    }

    public function setRecruiterId(int $recruiterId): void
    {
        $this->recruiterId = $recruiterId;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): void
    {
        $this->website = $website;
    }

    public function getTechnologies(): ?array
    {
        return $this->technologies;
    }

    public function setTechnologies(?array $technologies): void
    {
        $this->technologies = $technologies;
    }
}
