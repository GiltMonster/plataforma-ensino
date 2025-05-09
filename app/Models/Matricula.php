<?php

namespace App\Models;

use PDO;

class Matricula
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=db;dbname=plataforma', 'root', 'root');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function all()
    {
        $stmt = $this->pdo->query("
            SELECT m.id, a.nome as aluno, c.titulo as areasCurso
            FROM matriculas m
            JOIN alunos a ON m.aluno_id = a.id
            JOIN areasCurso c ON m.curso_id = c.id
            ORDER BY a.nome
        ");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($aluno_id, $curso_id)
    {
        $stmt = $this->pdo->prepare("INSERT INTO matriculas (aluno_id, curso_id, created_at, updated_at) VALUES (?, ?, NOW(), NOW())");
        return $stmt->execute([$aluno_id, $curso_id]);
    }

    public function find($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM matriculas WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $aluno_id, $curso_id)
    {
        $stmt = $this->pdo->prepare("UPDATE matriculas SET aluno_id = ?, curso_id = ?, updated_at = NOW() WHERE id = ?");
        return $stmt->execute([$aluno_id, $curso_id, $id]);
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM matriculas WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
