<?php

    declare(strict_types=1);

    namespace App\Repository;

    use App\Model\ModelInterface;

    class ResumeRepository extends BasePdoRepository
    {

        protected function transformtoDb(ModelInterface $model): array
        {
            // TODO: Implement transformtoDb() method.
        }

        protected function transformtoModel(array $data): ModelInterface
        {
            // TODO: Implement transformtoModel() method.
        }

        protected function getTableName(): string
        {
            return 'resumes';
        }

        public function findByEmail(string $email): ?ModelInterface
        {
            // TODO: Implement findByEmail() method.
        }

        public function create(ModelInterface $model): ?ModelInterface
        {
            $statement = $this->pdo->prepare(
                'INSERT INTO resumes (
                     user_id, position, salary, experience_term, country, city, skills, category, experience, about, english, job_types)
                VALUES (
                    :user_id, :position, :salary, :experience_term, :country, :city, :skills, :category, :experience, :about, :english, :job_types)'
            );
            $statement->execute($this->transformtoDb());

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
    }
