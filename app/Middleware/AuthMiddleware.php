<?php

namespace App\Middleware;

class AuthMiddleware
{
    public static function verificar(): void {
        session_start();
        if (!isset($_SESSION['admin']) || $_SESSION['admin'] !== true) {
            $_SESSION['erro_login'] = 'Você precisa estar logado para acessar esta página.';
            header('Location: /?url=login/show');
            exit;
        } 
    }
}
