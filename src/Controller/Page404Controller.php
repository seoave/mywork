<?php

namespace App\Controller;

class Page404Controller extends AbstractController
{
    protected array $pageAttributes;

    public function __construct()
    {
        $this->pageAttributes = ['title' => 'Page 404'];
    }

    public function get404Page(): string
    {
        return $this->render('page404', $this->pageAttributes);
    }
}
