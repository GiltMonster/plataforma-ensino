<?php

namespace App\Controllers;

use App\Middleware\AuthMiddleware;
use App\Models\Area;

class AreaController
{
    private $area;

    public function __construct()
    {
        AuthMiddleware::verificar();
        $this->area = new Area();
    }

    public function index(): void
    {
        $areas = $this->area->all();
        require_once __DIR__ . '/../Views/areas/index.php';
    }

    public function create(): void
    {
        require_once __DIR__ . '/../Views/areas/create.php';
    }

    public function store(): void
    {
        $this->area->create($_POST);
        header('Location: /?url=area/index');
    }

    public function edit(): void
    {
        $area = $this->area->find($_GET['id']);
        require_once __DIR__ . '/../Views/areas/edit.php';
    }

    public function update(): void
    {
        $this->area->update($_POST['id'], $_POST);
        header('Location: /?url=area/index');
    }

    public function delete(): void
    {
        $this->area->delete($_GET['id']);
        header('Location: /?url=area/index');
    }
}
