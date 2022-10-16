<?php

namespace App\Repository;

use App\Model\Company;
use App\Model\ModelInterface;

class CompanyRepository extends BasePdoRepository
{
    public function findAll(): array
    {
        // TODO: Implement findAll() method.
    }

    public function findByName(string $name): ?ModelInterface
    {
        $statement = $this->pdo->prepare(
            'SELECT * FROM ' . $this->getTableName() . '
            WHERE name = :name 
            ');
        $statement->execute(['name' => $name]);

        $companyArray = $statement->fetch(\PDO::FETCH_ASSOC);

        if (! $companyArray) {
            return null;
        }

        return $this->transformtoModel($companyArray);
    }

    public function findById($id): ?ModelInterface
    {
        // TODO: Implement findById() method.
    }

    public function create(ModelInterface $model): ?ModelInterface
    {
        // TODO: Implement create() method.
    }

    public function update(ModelInterface $model): ?ModelInterface
    {
        // TODO: Implement update() method.
    }

    public function delete($id): ?ModelInterface
    {
        // TODO: Implement delete() method.
    }

    public function getTableName(): string
    {
        return 'companies';
    }

    protected function transformtoDb(ModelInterface $model): array
    {
        // TODO: Implement transformtoDb() method.
    }

    protected function transformtoModel(array $data): ModelInterface
    {
        $company = new Company($data['name'], $data['userId']);
        $company->setAbout($data['about']);
        $company->setCity($data['city']);
        $company->setCountry($data['country']);
        $company->setNumberOfEmployees($data['employees']);

        return $company;
    }

    protected function transformtoModelsArray(array $data): array
    {
        // TODO: Implement transformtoModelsArray() method.
    }
}
