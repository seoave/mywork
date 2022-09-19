<?php
    declare(strict_types=1);

    namespace App\DI;

    use App\Repository\JsonRepository;
    use App\Repository\RepositoryInterface;
    use App\Repository\ResumeRepository;
    use App\Repository\UserRepository;

    class Container
    {
        private static ?Container $instance = null;
        private ?RepositoryInterface $userRepository = null;
        private ?RepositoryInterface $resumeRepository = null;
        private ?\PDO $pdo = null;
        private array $parameters;

        private function __construct()
        {
            $this->parameters['project_dir'] = $_SERVER['DOCUMENT_ROOT'];
        }

        public function getPDO(): \PDO
        {
            if ($this->pdo === null) {
                $this->pdo = new  \PDO(
                    'mysql:host=localhost;dbname=' . $_ENV['MYSQL_DB'],
                    $_ENV['MYSQL_USER'],
                    $_ENV['MYSQL_PASSWORD']
                );
                $this->pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            }

            return $this->pdo;
        }

        public function getUserRepository(): RepositoryInterface
        {
            if ($this->userRepository === null) {
                $this->userRepository = new UserRepository();
                //$this->userRepository = new JsonRepository($this->resolveParams($_ENV['USER_DB_PATH']));
            }

            return $this->userRepository;
        }

        public function getResumeRepository(): RepositoryInterface
        {
            if ($this->resumeRepository === null) {
                $this->resumeRepository = new ResumeRepository();
            }

            return $this->resumeRepository;
        }

        public static function getInstance(): self
        {
            if (static::$instance === null) {
                static::$instance = new static();
            }

            return static::$instance;
        }

        private function resolveParams(string $arg)
        {
            foreach ($this->parameters as $name => $value) {
                if (str_contains($arg, '%' . $name . '%')) {
                    $resolved = str_replace('%' . $name . '%', $value, $arg);
                }
            }

            return $resolved;
        }
    }
