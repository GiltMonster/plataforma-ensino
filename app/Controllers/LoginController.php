<?php

namespace App\Controllers;

class LoginController
{
    function show(): void
    {
        include_once __DIR__ . '/../Views/login.php';
    }

    function auth(): void
    {
        session_start();
        $email = $_POST['email'] ?? '';
        $senha = $_POST['senha'] ?? '';

        $adminEmail = 'admin@gmail.com';
        $adminSenha = 'admin';

        if ($email == $adminEmail && $senha == $adminSenha) {
            $_SESSION['admin'] = true;
            header('Location: /?url=home/index');
            exit;
        } else {
            $_SESSION['erro_login'] = 'Usuário ou senha inválidos';
            header('Location: /?url=login/show');
            exit;
        }
    }

    function logout(): void
    {
        session_start();
        session_destroy();
        header('Location: /?url=login/show');
        exit;
    }

    function mostrar() : void {

        echo "<h1>exemplo de controller</h1>";
        
    }

}
