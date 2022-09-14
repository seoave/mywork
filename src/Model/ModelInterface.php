<?php

declare(strict_types=1);

namespace App\Model;

use DateTime;

interface ModelInterface
{
    public function setId(?int $id): self;

    public function toStorage(): array;

    public static function createFromStorage(array $data): self;

    public function getName(): string;

    public function getEmail(): string;

    public function getRole(): string;

    public function getSalt(): ?string;

    public function getPassword(): string;

    public function getBirthday(): ?DateTime;

    public function getCountry(): ?string;

    public function getCity(): ?string;

    public function getPhone(): ?string;

    public function getPhoto(): ?string;
}
