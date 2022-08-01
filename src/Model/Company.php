<?php

namespace App\Model;

class Company extends User
{
    private string $contactPersonName;
    private string $contactPersonPhone;
    private string $about;
    private array $owners;
    private string $history;
    private int $numberOfEmployees;
    private int $successfulHires;
    private string $address;
    /**
     * @var string
     * HR agency | Employer
     */
    private string $companyType;

    public function getContactPersonName(): string
    {
        return $this->contactPersonName;
    }

    public function setContactPersonName(string $contactPersonName): void
    {
        $this->contactPersonName = $contactPersonName;
    }

    public function getContactPersonPhone(): string
    {
        return $this->contactPersonPhone;
    }

    public function setContactPersonPhone(string $contactPersonPhone): void
    {
        $this->contactPersonPhone = $contactPersonPhone;
    }

    public function getAbout(): string
    {
        return $this->about;
    }

    public function setAbout(string $about): void
    {
        $this->about = $about;
    }

    public function getOwners(): array
    {
        return $this->owners;
    }

    public function setOwners(array $owners): void
    {
        $this->owners = $owners;
    }

    public function getHistory(): string
    {
        return $this->history;
    }

    public function setHistory(string $history): void
    {
        $this->history = $history;
    }

    public function getNumberOfEmployees(): int
    {
        return $this->numberOfEmployees;
    }

    public function setNumberOfEmployees(int $numberOfEmployees): void
    {
        $this->numberOfEmployees = $numberOfEmployees;
    }

    public function getSuccessfulHires(): int
    {
        return $this->successfulHires;
    }

    public function setSuccessfulHires(int $successfulHires): void
    {
        $this->successfulHires = $successfulHires;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function setAddress(string $address): void
    {
        $this->address = $address;
    }

    public function getCompanyType(): string
    {
        return $this->companyType;
    }

    public function setCompanyType(string $companyType): void
    {
        $this->companyType = $companyType;
    }
}
