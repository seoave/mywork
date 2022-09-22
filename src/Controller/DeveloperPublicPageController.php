<?php

    namespace App\Controller;

    use App\DI\Container;

    class DeveloperPublicPageController extends AbstractController
    {
        protected array $pageAttributes;

        public function __construct()
        {
            $this->pageAttributes = [
                'title' => 'Developer profile',
            ];
            $this->resumeRepository = Container::getInstance()->getResumeRepository();
        }

        public function getDeveloper(array $params)
        {
            $this->render('developer', []);
        }
    }
