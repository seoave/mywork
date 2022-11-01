<?php

declare(strict_types=1);

namespace App\Controller;

use App\DI\Container;

class NewPositionPageController extends AbstractController
{
    protected array $pageAttributes;

    public function __construct()
    {
        $this->pageAttributes = [
            'title' => 'New position',
        ];
    }

    public function getNewPositionPage(): string
    {
        $this->updatePageAttributes();

        return $this->render('newPosition', $this->pageAttributes);
    }

    public function sendNewPosition(): void
    {
        var_dump($_POST);
    }

    public function updatePageAttributes(): void
    {
        $updatedResumeArray = [];
        $updatedResumeArray['skills'] = Container::getInstance()->getSkillsRepository()->findAll();
        $updatedResumeArray['categories'] = ['PHP', 'CSS', 'Javascript']; // TODO class Skills
        $updatedResumeArray['jobTypes'] = ['Remote', 'Office', 'Part-time']; // TODO class Skills

        $this->pageAttributes = array_merge($this->pageAttributes, $updatedResumeArray);
    }
}
