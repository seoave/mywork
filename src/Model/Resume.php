<?php

    namespace App\Model;

    class Resume
    {
        private string $name;
        private string $surname;
        private int $experienceTerm;
        private string $experience;
        private string $position;
        private int $salary;
        private array $jobTypes;
        private string $englishLevel;
        private array $skills;
        private string $category;
        private string $country;
        private string $city;

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

        public function getExperience(): string
        {
            return $this->experience;
        }

        public function setExperience(string $experience): void
        {
            $this->experience = $experience;
        }

        public function getPosition(): string
        {
            return $this->position;
        }

        public function sePosition(string $position): void
        {
            $this->position = $position;
        }

        public function getSalary(): string
        {
            return $this->salary;
        }

        public function setSalary(string $salary): void
        {
            $this->salary = $salary;
        }

        public function getJobTypes(): array
        {
            return $this->jobTypes;
        }

        public function setJobTypes(array $jobTypes): void
        {
            $this->jobTypes = $jobTypes;
        }

        public function getEnglishLevel(): string
        {
            return $this->englishLevel;
        }

        public function setEnglishLevel(array $languages): void
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

        public function getCategory(): string
        {
            return $this->category;
        }

        public function setCategory(string $category): void
        {
            $this->category = $category;
        }

        public function getCountry(): array
        {
            return $this->country;
        }

        public function setCountry(array $country): void
        {
            $this->country = $country;
        }

        public function getCity(): array
        {
            return $this->city;
        }

        public function setCity(array $city): void
        {
            $this->city = $city;
        }

        public function getExperienceTerm(): int
        {
            return $this->experienceTerm;
        }

        public function setExperienceTerm(int $experienceTerm): void
        {
            $this->experienceTerm = $experienceTerm;
        }
    }
