<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\ModelInterface;
use App\Model\User;

class UserRepository extends BasePdoRepository
{

    protected function transformtoDb(ModelInterface $model): array
    {
        // TODO: Implement transformtoDb() method.
        die('transformtoDb() method');
    }

    protected function transformtoModel(array $data): ModelInterface
    {
        $user = new User($data['name'], $data['email']);
        $user->setId((int) $data['id']);
        $user->setRole($data['role']);
        $user->setCountry($data['country']);
        $user->setCity($data['city']);
        $user->setPhone($data['phone']);
        $user->setPhoto($data['photo']);
        return $user;
    }

    public function findByEmail(string $email): ?ModelInterface
    {
        $statement = $this->pdo->prepare('SELECT * FROM users WHERE email = :email');
        $statement->execute(['email' => $email]);

        return $statement->fetch(\PDO::FETCH_ASSOC) ?? null;
    }

    public function create(ModelInterface $model): ?ModelInterface
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO :table (name, email, role, salt, password, birthday, country, city, phone, photo) 
                   VALUES (:name,:email, :role, :salt,:password,:birthday,:country,:city,:phone,:photo)'
        );
        $statement->execute(
            [
                'name' => $model->getName(),
                'email' => $model->getEmail(),
                'role' => $model->getRole(),
                'salt' => $model->getSalt(),
                'password' => $model->getPassword(),
                'birthday' => $model->getBirthday(),
                'country' => $model->getCountry(),
                'city' => $model->getCity(),
                'phone' => $model->getPhone(),
                'photo' => $model->getPhoto(),
            ]
        );

        return $model;
    }
}