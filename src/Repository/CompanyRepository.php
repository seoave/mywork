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
        $statement = $this->pdo->prepare(
            'SELECT * FROM ' . $this->getTableName() . '
            WHERE userId = :userId 
            ');
        $statement->execute(['userId' => $id]);

        $companyArray = $statement->fetch(\PDO::FETCH_ASSOC);

        if (! $companyArray) {
            return null;
        }

        return $this->transformtoModel($companyArray);
    }

    public function create(ModelInterface $model): ?ModelInterface
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO ' . $this->getTableName() . ' (userId, name, about, website, employees, country, city, technologies)
            VALUES (:userId, :name, :about, :website, :employees, :country, :city, :technologies)
            ');
        $statement->execute($this->transformtoDb($model));

        return $model;
    }

    public function update(ModelInterface $model): ?ModelInterface
    {
        $statement = $this->pdo->prepare(
            'UPDATE ' . $this->getTableName() . '
            SET name = :name, about = :about, website = :website, employees = :employees, country = :country, 
                city = :city, technologies = :technologies
            ');

        $modelArray = $this->transformtoDb($model);

        if ($statement->execute(array_splice($modelArray,1))) {
            return $model;
        }

        return null;
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
        return [
            'userId' => $model->getRecruiterId(),
            'name' => $model->getName(),
            'about' => $model->getAbout(),
            'website' => $model->getWebsite(),
            'employees' => $model->getNumberOfEmployees(),
            'country' => $model->getCountry(),
            'city' => $model->getCity(),
            'technologies' => implode(',', $model->getTechnologies()),
        ];
    }

    protected function transformtoModel(array $data): ModelInterface
    {
        $company = new Company($data['name'], $data['userId']);
        $company->setAbout($data['about']);
        $company->setCity($data['city']);
        $company->setCountry($data['country']);
        $company->setNumberOfEmployees($data['employees']);
        $company->setWebsite($data['website']);
        $company->setTechnologies(explode(',', $data['technologies']));

        return $company;
    }

    protected function transformtoModelsArray(array $data): array
    {
        // TODO: Implement transformtoModelsArray() method.
    }
}
