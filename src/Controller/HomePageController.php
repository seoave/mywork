<?php

    declare(strict_types=1);

    namespace App\Controller;

    use App\DI\Container;

    class HomePageController extends AbstractController
    {
        protected array $pageAttributes;

        public function __construct()
        {
            $pageAttributes = [
                'title' => 'HomePage',
            ];

            $this->pageAttributes = $pageAttributes;
        }

        public function getHomePage(): string
        {
            $userRepository = Container::getInstance()->getUserRepository();

            // var_dump($userRepository->findAll());
            //var_dump($userRepository->findByEmail('bernard@mail.ww'));

            $resumeRepository = Container::getInstance()->getResumeRepository();

            //var_dump($resumeRepository);

            return $this->render('home', $this->pageAttributes);
        }
    }