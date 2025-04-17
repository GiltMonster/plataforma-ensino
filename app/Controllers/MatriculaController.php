<?php

namespace App\Controllers;

use App\Middleware\AuthMiddleware;
use App\Models\Matricula;
use App\Models\Aluno;
use App\Models\Area;


class MatriculaController
{
    private $matricula;
    private $aluno;
    private $areasCurso;

    public function __construct()
    {
        AuthMiddleware::verificar();
        $this->matricula = new Matricula();
        $this->aluno = new Aluno();
        $this->areasCurso = new Area();
    }

    public function index()
    {
        $matriculas = $this->matricula->all();
        require_once __DIR__ . '/../Views/matriculas/index.php';
    }

    public function create()
    {
        $alunos = $this->aluno->all();
        $areasCursos = $this->areasCurso->all();
        require_once __DIR__ . '/../Views/matriculas/create.php';
    }

    public function store()
    {
        $this->matricula->create($_POST['aluno_id'], $_POST['curso_id']);
        header('Location: /?url=matricula/index');
    }

    public function edit()
    {
        $matricula = $this->matricula->find($_GET['id']);
        $alunos = $this->aluno->all();
        $areasCursos = $this->areasCurso->all();

        require_once __DIR__ . '/../Views/matriculas/edit.php';
    }
    public function update()
    {
        $this->matricula->update($_POST['id'], $_POST['aluno_id'], $_POST['curso_id']);
        header('Location: /?url=matricula/index');
    }

    public function delete()
    {
        $this->matricula->delete($_GET['id']);
        header('Location: /?url=matricula/index');
    }
}
