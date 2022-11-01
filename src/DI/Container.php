<?php
declare(strict_types=1);

namespace App\DI;

use App\Repository\CompanyRepository;
use App\Repository\JsonRepository;
use App\Repository\RepositoryInterface;
use App\Repository\ResumeRepository;
use App\Repository\SkillsRepository;
use App\Repository\UserRepository;

class Container
{
    private static ?Container $instance = null;
    private ?RepositoryInterface $userRepository = null;
    private ?RepositoryInterface $resumeRepository = null;
    private ?RepositoryInterface $skillsRepository = null;
    private ?RepositoryInterface $companyRepository = null;
    private ?\PDO $pdo = null;
    private array $parameters;

    private function __construct()
    {
        $this->parameters['project_dir'] = $_SERVER['DOCUMENT_ROOT'];
        $this->parameters['images_dir'] = $_SERVER['DOCUMENT_ROOT'] . '/assets/images/';
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

    public function getSkillsRepository(): ?RepositoryInterface
    {
        if ($this->skillsRepository === null) {
            $this->skillsRepository = new SkillsRepository();
        }

        return $this->skillsRepository;
    }

    public function getCompanyRepository(): ?RepositoryInterface
    {
        if ($this->companyRepository === null) {
            $this->companyRepository = new CompanyRepository();
        }

        return $this->companyRepository;
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

    public function getParameters(): array
    {
        return $this->parameters;
    }
}
