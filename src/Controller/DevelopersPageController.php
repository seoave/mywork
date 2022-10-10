<?php
    declare(strict_types=1);

    namespace App\Controller;

    class DevelopersPageController extends AbstractController
    {
        protected array $pageAttributes;

        public function __construct()
        {
            $this->pageAttributes = [
                'title' => 'Developers',
            ];
        }

        public function getDevelopers()
        {
            return $this->render('developers', $this->pageAttributes);
        }
    }
    