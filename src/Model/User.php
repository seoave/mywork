<?php

declare(strict_types=1);

namespace App\Model;

use App\Util\Str;
use DateTime;

class User implements ModelInterface
{
    private ?int $id = null;
    private string $name;
    private ?string $email;
    private ?string $role = 'registered'; // guest, registered, candidate, recruiter, editor, administrator
    private DateTime|null $birthday = null;
    private ?string $country = null;
    private ?string $city = null;
    private ?string $phone = null;
    private ?string $photo = null;
    private ?string $password = null;
    private ?string $salt = null;

    public function __construct(string $name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getBirthday(): DateTime|null
    {
        return $this->birthday;
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

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): void
    {
        $this->phone = $phone;
    }

    public function getPhoto(): string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): void
    {
        $this->photo = $photo;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setRole(?string $role): void
    {
        $this->role = $role;
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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(?string $plainPassword): self
    {
        if ($this->salt === null) {
            $this->setSalt(Str::random(13));
        }

        $this->password = md5($plainPassword . $this->getSalt());

        return $this;
    }

    public function getSalt(): ?string
    {
        return $this->salt;
    }

    public function setSalt(?string $salt): self
    {
        $this->salt = $salt;

        return $this;
    }

    public function toStorage(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'role' => $this->role,
            'email' => $this->email,
            'salt' => $this->salt,
            'password' => $this->password,
            'birthday' => $this->birthday?->getTimestamp(),
            'country' => $this->country,
            'city' => $this->city,
            'phone' => $this->phone,
            'photo' => $this->photo
        ];
    }

    public static function createFromStorage(array $data): self
    {
        $user = new User($data['name'], $data['email']);
        $user->setId($data['id'] ?? null);
        $user->setRole($data['role'] ?? null);

        $user->setSalt($data['salt'] ?? null);
        $user->setCountry($data['country'] ?? null);
        $user->setCity($data['city'] ?? null);
        $user->setPhone($data['phone'] ?? null);
        $user->setPhoto($data['photo'] ?? null);
        $user->password = ($data['password'] ?? null);

        if ($data['birthday'] ?? null !== null) {
            $user->setBirthday((new \DateTime())->setTimezone($data['birthday']));
        }


        return $user;
    }
}
