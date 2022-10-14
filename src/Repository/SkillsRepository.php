<?php

namespace App\Repository;

use App\Model\ModelInterface;
use App\Model\Skill;

class SkillsRepository extends BasePdoRepository
{
    public function create(ModelInterface $model): ?ModelInterface
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO ' . $this->getTableName() . ' (skillName) 
            VALUES (:name)
            ');
        $statement->execute(['name' => $model->getSkillName()]);

        return $model;
    }

    public function update(ModelInterface $model): ?ModelInterface
    {
        // TODO: Implement update() method.
    }

    public function delete($id): ?ModelInterface
    {
        // TODO: Implement delete() method.
    }

    public function findById($id): ?ModelInterface
    {
        // TODO: Implement findById() method.
    }

    public function findByName(string $skill): ?ModelInterface
    {
        $statement = $this->pdo->prepare(
            'SELECT * FROM ' . $this->getTableName() . ' WHERE LOWER(skillName) = :skillName
            ');
        $statement->execute(['skillName' => strtolower($skill)]);
        $result = $statement->fetch(\PDO::FETCH_ASSOC);

        if (! $result) {
            return null;
        }

        return $this->transformtoModel($result);
    }

    protected function transformtoDb(ModelInterface $model): array
    {
        // TODO: Implement transformtoDb() method.
    }

    protected function transformtoModel(array $data): Skill
    {
        return new Skill($data['skillName']);
    }

    protected function getTableName(): string
    {
        return 'skills';
    }

    protected function transformtoModelsArray(array $data): array
    {
        return $data;
    }
}
