<?php

namespace App\Models;

use PDO;

class Area
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=db;dbname=plataforma', 'root', 'root');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function all()
    {
        $stmt = $this->pdo->query("SELECT * FROM areasCurso ORDER BY titulo ASC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM areasCurso WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO areasCurso (titulo, descricao, created_at, updated_at) VALUES (?, ?, NOW(), NOW())");
        return $stmt->execute([$data['titulo'], $data['descricao']]);
    }

    public function update($id, $data)
    {
        $stmt = $this->pdo->prepare("UPDATE areasCurso SET titulo = ?, descricao = ?, updated_at = NOW() WHERE id = ?");
        return $stmt->execute([$data['titulo'], $data['descricao'], $id]);
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM areasCurso WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
