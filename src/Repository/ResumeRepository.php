<?php

declare(strict_types=1);

namespace App\Repository;

use App\Model\ModelInterface;
use App\Model\Resume;
use PDO;

class ResumeRepository extends BasePdoRepository
{
    protected function transformtoDb(ModelInterface $model): array
    {
        return [
            'user_id' => $model->getUserId(),
            'position' => $model->getPosition(),
            'salary' => $model->getSalary(),
            'experience_term' => $model->getExperienceTerm(),
            'country' => $model->getCountry(),
            'city' => $model->getCity(),
            'skills' => $model->getSkills() ? implode(',', $model->getSkills()) : null,
            'category' => $model->getCategory(),
            'experience' => $model->getExperience(),
            'about' => $model->getAbout(),
            'education' => $model->getEducation(),
            'english' => $model->getEnglishLevel(),
            'job_types' => $model->getJobTypes() ? implode(',', $model->getJobTypes()) : null,
        ];
    }

    protected function transformtoModel(array $data): ModelInterface
    {
        $model = new Resume($data['user_id']);
        $model->setPosition($data['position']);
        $model->setSalary((int) $data['salary']);
        $model->setExperienceTerm((int) $data['experience_term']);
        $model->setCountry($data['country']);
        $model->setCity($data['city']);
        $model->setSkills($data['skills'] ? explode(',', $data['skills']) : null);
        $model->setCategory($data['category']);
        $model->setExperience($data['experience']);
        $model->setAbout($data['about']);
        $model->setEducation($data['education']);
        $model->setEnglishLevel($data['english']);
        $model->setJobTypes($data['job_types'] ? explode(',', $data['job_types']) : null);

        return $model;
    }

    protected function getTableName(): string
    {
        return 'resumes';
    }

    public function create(ModelInterface $model): ?ModelInterface
    {
        $statement = $this->pdo->prepare(
            'INSERT INTO resumes (
                     user_id, position, salary, experience_term, country, city, skills, category, experience, about, education, english, job_types)
                VALUES (
                    :user_id, :position, :salary, :experience_term, :country, :city, :skills, :category, :experience, :about, :education, :english, :job_types)'
        );
        $statement->execute($this->transformtoDb($model));

        return $model;
    }

    public function update(ModelInterface $model): ?ModelInterface
    {
        $statement = $this->pdo->prepare(
            'UPDATE resumes
                SET position = :position, salary = :salary, experience_term = :experience_term, 
                    country = :country, city = :city, skills = :skills, category = :category, 
                    experience = :experience, about = :about, education = :education, english = :english, job_types = :job_types
                    WHERE user_id = :user_id');

        if ($statement->execute($this->transformtoDb($model))) {
            return $model;
        }

        return null;
    }

    public function delete($id): ?ModelInterface
    {
        // TODO: Implement delete() method.
        return 'Delete method';
    }

    public function findById($id): ?ModelInterface
    {
        $statement = $this->pdo->prepare(
            'SELECT * FROM ' . $this->getTableName() . ' WHERE user_id = :id'
        );
        $statement->execute(['id' => $id]);
        $resumeArray = $statement->fetch(PDO::FETCH_ASSOC);

        if (! $resumeArray) {
            return null;
        }

        return $this->transformtoModel($resumeArray);
    }

    protected function transformtoModelsArray(array $data): array
    {
        // TODO: Implement transformtoModelsArray() method.
    }
}
