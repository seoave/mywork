<?php

declare(strict_types=1);

namespace App\Controller;

class AbstractController
{
    protected const TEMPLATE_EXT = ['php', 'html'];

    public function render(string $templateName): string
    {
        $basePath = $_SERVER['DOCUMENT_ROOT'] . '/templates/';

        foreach (self::TEMPLATE_EXT as $ext) {
            $fileName = $basePath . $templateName . '.' . $ext;
            if (file_exists($fileName)) {
                return file_get_contents($fileName);
            }
        }

        throw new \HttpRuntimeException('Template is not found');
    }
}