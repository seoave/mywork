<?php

namespace App\Model;

use DateTime;

class Vacancy
{
    private string $positionName;
    private string $companyName;
    private DateTime $createDate;
    private DateTime $modifiedDate;
    private string $shortDescription;
    private string $fullDescription;
    private array $workLanguages;
    private string $yearOfExperience;
    /**
     * @var string
     * junior| middle|senior
     */
    private string $experienceLevel;
    private array $workTypes;
    private array $skills;
    private string $country;
    private string $city;
    private string $industry;
    private string $contactPersonName;
    private string $contactPersonPhone;


    public function getPositionName(): string
    {
        return $this->positionName;
    }

    public function setPositionName(string $positionName): void
    {
        $this->positionName = $positionName;
    }

    public function getCompanyName(): string
    {
        return $this->companyName;
    }

    public function setCompanyName(string $companyName): void
    {
        $this->companyName = $companyName;
    }

    public function getCreateDate(): DateTime
    {
        return $this->createDate;
    }

    public function setCreateDate(DateTime $createDate): void
    {
        $this->createDate = $createDate;
    }

    public function getModifiedDate(): DateTime
    {
        return $this->modifiedDate;
    }

    public function setModifiedDate(DateTime $modifiedDate): void
    {
        $this->modifiedDate = $modifiedDate;
    }

    public function getShortDescription(): string
    {
        return $this->shortDescription;
    }

    public function setShortDescription(string $shortDescription): void
    {
        $this->shortDescription = $shortDescription;
    }

    public function getFullDescription(): string
    {
        return $this->fullDescription;
    }

    public function setFullDescription(string $fullDescription): void
    {
        $this->fullDescription = $fullDescription;
    }

    public function getWorkLanguages(): array
    {
        return $this->workLanguages;
    }

    public function setWorkLanguages(array $workLanguages): void
    {
        $this->workLanguages = $workLanguages;
    }

    public function getYearOfExperience(): string
    {
        return $this->yearOfExperience;
    }

    public function setYearOfExperience(string $yearOfExperience): void
    {
        $this->yearOfExperience = $yearOfExperience;
    }

    public function getExperienceLevel(): string
    {
        return $this->experienceLevel;
    }

    public function setExperienceLevel(string $experienceLevel): void
    {
        $this->experienceLevel = $experienceLevel;
    }

    public function getWorkTypes(): array
    {
        return $this->workTypes;
    }

    public function setWorkTypes(array $workTypes): void
    {
        $this->workTypes = $workTypes;
    }

    public function getSkills(): array
    {
        return $this->skills;
    }

    public function setSkills(array $skills): void
    {
        $this->skills = $skills;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function getIndustry(): string
    {
        return $this->industry;
    }

    public function setIndustry(string $industry): void
    {
        $this->industry = $industry;
    }

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
}
