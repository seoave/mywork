<?php
declare(strict_types=1);

namespace App\Controller;

use App\DI\Container;
use App\Model\Skill;
use App\Redirection;

class NewSkillPageController extends AbstractController
{
    protected array $pageAttributes;

    public function __construct()
    {
        $this->pageAttributes = [
            'title' => 'New skill',
        ];
    }

    public function getNewSkillPage(): string
    {
        return $this->render('adminNewSkill', $this->pageAttributes);
    }

    public function sendNewSkill()
    {
        if (empty($_POST['newSkill'])) {
            return $this->render('adminNewSkill', $this->pageAttributes);
        }

        $skillsRepository = Container::getInstance()->getSkillsRepository();
        if ($skillsRepository->findByName($_POST['newSkill'])) {
            $this->pageAttributes['skillExistsMessage'] = 'This skill exists';

            return $this->render('adminNewSkill', $this->pageAttributes);
        }

        $newSkill = new Skill($_POST['newSkill']);

        $skillsRepository->create($newSkill);

        return Redirection::redirectTo('/admin/skills');
    }
}
