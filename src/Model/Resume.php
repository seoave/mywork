<?php

    namespace App\Model;

    class Resume implements ModelInterface
    {
        private int $userId;
        private ?int $experienceTerm;
        private ?string $experience;
        private ?string $about;
        private ?string $education;
        private ?string $position;
        private ?int $salary;
        private ?array $jobTypes;
        private ?string $englishLevel;
        private ?array $skills;
        private ?string $category;
        private ?string $country;
        private ?string $city;

        public function __construct($userId)
        {
            $this->userId = $userId;
        }

        public function getExperience(): ?string
        {
            return $this->experience;
        }

        public function setExperience(?string $experience): void
        {
            $this->experience = $experience;
        }

        public function getSalary(): ?int
        {
            return $this->salary;
        }

        public function setSalary(?int $salary): void
        {
            $this->salary = $salary;
        }

        public function getJobTypes(): ?array
        {
            return $this->jobTypes;
        }

        public function setJobTypes(?array $jobTypes): void
        {
            $this->jobTypes = $jobTypes;
        }

        public function getEnglishLevel(): ?string
        {
            return $this->englishLevel;
        }

        public function setEnglishLevel(?string $languages): void
        {
            $this->englishLevel = $languages;
        }

        public function getSkills(): ?array
        {
            return $this->skills;
        }

        public function setSkills(?array $skills): void
        {
            $this->skills = $skills;
        }

        public function getCategory(): ?string
        {
            return $this->category;
        }

        public function setCategory(?string $category): void
        {
            $this->category = $category;
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

        public function getExperienceTerm(): ?int
        {
            return $this->experienceTerm;
        }

        public function setExperienceTerm(?int $experienceTerm): void
        {
            $this->experienceTerm = $experienceTerm;
        }

        public function setId(?int $id): ModelInterface
        {
            die('Id');
        }

        public function toStorage(): array
        {
            die('toStorage');
        }

        public static function createFromStorage(array $data): ModelInterface
        {
            die('createFromStorage');
        }

        public function getUserId(): int
        {
            return $this->userId;
        }

        public function setUserId(int $userId): void
        {
            $this->userId = $userId;
        }

        public function getPosition(): ?string
        {
            return $this->position;
        }

        public function setPosition(?string $position): void
        {
            $this->position = $position;
        }

        public function getAbout(): ?string
        {
            return $this->about;
        }

        public function setAbout(?string $about): void
        {
            $this->about = $about;
        }

        public function getEducation(): ?string
        {
            return $this->education;
        }

        public function setEducation(?string $education): void
        {
            $this->education = $education;
        }
    }
