<?php

namespace App\Controller;

class Page404Controller extends AbstractController
{
    public function get404Page()
    {
        return $this->render('page404');
    }
}