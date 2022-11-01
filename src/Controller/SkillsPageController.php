<?php
declare(strict_types=1);

namespace App\Controller;

use App\DI\Container;

class SkillsPageController extends AdminPagesController
{
    protected array $pageAttributes;

    public function __construct()
    {
        $this->pageAttributes = [
            'title' => 'Skills',
            'skills' => Container::getInstance()->getSkillsRepository()->findAll(),
        ];
    }

    public function getSkillsPage(): string
    {
        $this->adminCredentialCheck();

        return $this->render('adminSkills', $this->pageAttributes);
    }
}
