<?php

namespace App\Controllers;

use App\Middleware\AuthMiddleware;

class HomeController
{
    public function index()
    {

        AuthMiddleware::verificar();
        
        echo "<h1>Dashboard do sistema</h1>";
        echo '<a href="/?url=login/logout">Sair</a>';
    }
}
