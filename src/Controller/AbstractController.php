<?php

    declare(strict_types=1);

    namespace App\Controller;

    use HttpRuntimeException;

    class AbstractController
    {
        protected array $pageAttributes;

        protected const TEMPLATE_EXT = ['php', 'html'];

        public function render(string $templateName, array $args): string
        {
            $basePath = $_SERVER['DOCUMENT_ROOT'] . '/templates/';

            foreach (self::TEMPLATE_EXT as $ext) {
                $fileName = $basePath . $templateName . '.' . $ext;
                $args['title'] = $args['title'] ?? 'No title';
                if (file_exists($fileName)) {
                    ob_start();
                    if (session_status() !== 2) {
                        session_start();
                    }
                    include $fileName;
                    $view = ob_get_contents();
                    ob_end_clean();

                    return $view;
                }
            }

            throw new HttpRuntimeException('Template is not found');
        }
    }