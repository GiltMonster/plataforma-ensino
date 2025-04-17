<?php

namespace App\Controllers;

use App\Middleware\AuthMiddleware;
use App\Models\Aluno;

class AlunoController
{
    private $aluno;

    public function __construct()
    {
        AuthMiddleware::verificar(); 
        $this->aluno = new Aluno();
    }

    public function index()
    {
        $alunos = $this->aluno->all();
        require_once __DIR__ . '/../Views/alunos/index.php';
    }
    public function show()
    {
        $nameOurEmail = $_POST['nameOurEmail'];
        $alunos = $this->aluno->findByEmailOrNome($nameOurEmail);
        require_once __DIR__ . '/../Views/alunos/index.php';
    }



    public function create()
    {
        require_once __DIR__ . '/../Views/alunos/create.php';
    }

    public function store()
    {
        $this->aluno->create($_POST);
        header('Location: /?url=aluno/index');
    }

    public function edit()
    {
        $id = $_GET['id'];
        $aluno = $this->aluno->find($id);
        require_once __DIR__ . '/../Views/alunos/edit.php';
    }

    public function update()
    {
        $id = $_POST['id'];
        $this->aluno->update($id, $_POST);
        header('Location: /?url=aluno/index');
    }

    public function delete()
    {
        $id = $_GET['id'];
        $this->aluno->delete($id);
        header('Location: /?url=aluno/index');
    }
}
