<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\ModelInterface;
use App\Model\User;

class UserRepository extends BasePdoRepository
{
    protected function transformtoDb(ModelInterface $model): array
    {
        return [
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
        ];
    }

    protected function transformtoModel(array $data): ModelInterface
    {
        $user = new User($data['name'], $data['email']);
        $user->setId((int) $data['id']);
        $user->setRole($data['role']);
        $user->setSalt($data['salt']);
        $user->setPassword($data['password']);
        $user->setCountry($data['country']);
        $user->setCity($data['city']);
        $user->setPhone($data['phone']);
        $user->setPhoto($data['photo']);
        $user->setBirthday((new \DateTime())->setTimestamp((int) $data['birthday'])->setTimezone(new \DateTimeZone('Europe/Kiev')));

        return $user;
    }

    public function findByEmail(string $email): ?ModelInterface
    {
        $statement = $this->pdo->prepare('SELECT * FROM users WHERE email = :email');
        $statement->execute(['email' => $email]);
        $userArray = $statement->fetch(\PDO::FETCH_ASSOC);

        if (! $userArray) {
            return null;
        }

        return $this->transformtoModel($userArray);
    }

    public function create(ModelInterface $model): ?ModelInterface
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO ' . $this->getTableName() . ' (name, email, role, salt, password, birthday, country, city, phone, photo) 
                   VALUES (:name, :email, :role, :salt, :password, :birthday, :country, :city, :phone, :photo)'
        );
        $statement->execute($this->transformtoDb($model));

        return $model;
    }

    protected function getTableName(): string
    {
        return 'users';
    }

    public function update(ModelInterface $model): ?ModelInterface
    {
        $statement = $this->pdo->prepare(
            'UPDATE ' . $this->getTableName() . ' 
                SET name = :name, birthday = :birthday, 
                country = :country, city = :city, phone = :phone, photo = :photo
                WHERE id = :id'
        );
        $statement->execute([
            'id' => $model->getId(),
            'name' => $model->getName(),
            'birthday' => $model->getBirthday()->getTimestamp(),
            'country' => $model->getCountry(),
            'city' => $model->getCity(),
            'phone' => $model->getPhone(),
            'photo' => $model->getPhoto(),
        ]);

        return $model;
    }

    public function delete($id): ?ModelInterface
    {
        // TODO: Implement delete() method.
        return 'deleted ' . $id;
    }

    public function findById($userId): ?ModelInterface
    {
        $statement = $this->pdo->prepare('SELECT * FROM users WHERE id = :userId');
        $statement->execute(['userId' => $userId]);
        $userArray = $statement->fetch(\PDO::FETCH_ASSOC);

        if (! $userArray) {
            return null;
        }

        return $this->transformtoModel($userArray);
    }

    protected function transformtoModelsArray(array $results): array
    {
        $records = [];
        foreach ($results as $recordFromDB) {
            $records[] = $this->transformtoModel($recordFromDB);
        }

        return $records;
    }
}
