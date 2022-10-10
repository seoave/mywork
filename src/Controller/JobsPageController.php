<?php
    declare(strict_types=1);

    namespace App\Controller;

    class JobsPageController extends AbstractController
    {
        protected array $pageAttributes;

        public function __construct()
        {
            $this->pageAttributes = [
                'title' => 'Jobs',
            ];
        }

        public function getJobs()
        {
            return $this->render('jobs', $this->pageAttributes);
        }
    }
    