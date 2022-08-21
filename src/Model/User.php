<?php

declare(strict_types=1);

namespace App\Model;

use DateTime;

class User
{
    private ?int $id = null;
    private string $name;
    private string $role = 'registered'; // guest, registered, applicant, recruiter, editor, administrator
    private ?string $login = null;
    private ?string $email = null;
    private ?DateTime $birthday = null;
    private ?string $country = null;
    private ?string $city = null;
    private ?string $phone = null;
    private ?string $photo = null;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    public function getBirthday(): ?DateTime
    {
        return $this->birthday;
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

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getPhoto(): string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): void
    {
        $this->photo = $photo;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(string $role): void
    {
        $this->role = $role;
    }

    public function getLogin(): string
    {
        return $this->login;
    }

    public function setLogin(string $login): void
    {
        $this->login = $login;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function setBirthday(?DateTime $birthday): void
    {
        $this->birthday = $birthday;
    }

    public function toStorage(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'role' => $this->role,
            'login' => $this->login,
            'email' => $this->email,
            'birthday' => $this->birthday?->getTimestamp(),
            'country' => $this->country,
            'city' => $this->city,
            'phone' => $this->phone,
            'photo' => $this->photo
        ];
    }
}
