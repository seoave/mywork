<?php
declare(strict_types=1);

namespace App\Controller;

class SkillsPageController extends AbstractController
{
    protected array $pageAttributes;

    public function __construct()
    {
        $this->pageAttributes = [
            'title' => 'Skills',
        ];
    }

    public function getSkillsPage(): string
    {
        return $this->render('adminSkills', $this->pageAttributes);
    }
}
