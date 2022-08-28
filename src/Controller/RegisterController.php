<?php

declare(strict_types=1);

namespace App\Controller;

class RegisterController extends AbstractController
{
    public function getRegisterPage()
    {
        return $this->render('registration');
    }

}