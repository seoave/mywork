<?php

    namespace App\Controller;

    class UserProfileController extends AbstractController
    {
        protected array $pageAttributes;

        public function __construct()
        {
            $this->pageAttributes['title'] = 'User profile';
        }

        public function getUserProfile()
        {
            return $this->render('user', $this->pageAttributes);
        }
    }