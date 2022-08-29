<?php
declare(strict_types=1);

namespace App\Controller;

class ContactController extends AbstractController
{
    public function getContactPage()
    {
        return $this->render('form');
    }

    public function sendContactForm(): string
    {
        var_export($_POST);
        var_export($_GET);
        die();
    }
}