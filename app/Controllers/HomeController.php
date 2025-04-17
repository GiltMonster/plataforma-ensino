<?php

namespace App\Controllers;

use App\Middleware\AuthMiddleware;

class HomeController
{
    public function index()
    {

        AuthMiddleware::verificar();
        
        echo "<h1>Dashboard do sistema</h1>";
        echo "<h2>Bem-vindo ao sistema de gerenciamento de alunos!</h2>";

        echo '<a href="/?url=login/logout">Sair</a>';
        echo '<br><br>';
        echo '<a href="/?url=aluno/index">Gerenciar Alunos</a>';
        echo '<br>';
        echo '<a href="/?url=area/index">Gerenciar Áreas</a>';
    }
}
