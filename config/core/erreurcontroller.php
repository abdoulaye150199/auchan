<?php
namespace Src\config\core;

class ErreurController
{
    public static function notFound()
    {
        http_response_code(404);
        include __DIR__ . '/../../error.vu.php';
    }
}