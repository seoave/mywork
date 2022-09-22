<?php

    declare(strict_types=1);

    namespace App\Repository;

    use App\DI\Container;
    use App\Model\ModelInterface;
    use PDO;

    abstract class BasePdoRepository implements RepositoryInterface
    {
        protected PDO $pdo;

        public function __construct()
        {
            $this->pdo = Container::getInstance()->getPDO();
        }

        public function findAll(): array
        {
            $statement = $this->pdo->query('SELECT * FROM ' . $this->getTableName());
            $results = $statement->fetchAll(PDO::FETCH_ASSOC);
            $users = [];
            foreach ($results as $userFromDB) {
                $users[] = $this->transformtoModel($userFromDB);
            }

            return $users;
        }

        abstract public function create(ModelInterface $model): ?ModelInterface;

        abstract public function update(ModelInterface $model): ?ModelInterface;

        abstract public function delete($id): ?ModelInterface;

        abstract public function findById($id): ?ModelInterface;

        abstract protected function transformtoDb(ModelInterface $model): array;

        abstract protected function transformtoModel(array $data): ModelInterface;

        abstract protected function getTableName(): string;
    }
