<?php
declare(strict_types=1);

namespace App\Controller;

use App\Redirection;

class LogoutController
{
    public function getLogout()
    {
        session_start();
        session_unset();
        session_destroy();
        Redirection::redirectTo('/login');
    }
}