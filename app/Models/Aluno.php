<?php

namespace App\Models;

use PDO;
use PDOException;

class Aluno
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=plataforma', 'root', 'rootroot');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function all()
    {
        $stmt = $this->pdo->query("SELECT * FROM alunos ORDER BY id DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM alunos WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $stmt = $this->pdo->prepare("INSERT INTO alunos (nome, email, data_nascimento, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())");
        return $stmt->execute([$data['nome'], $data['email'], $data['data_nascimento']]);
    }

    public function update($id, $data)
    {
        $stmt = $this->pdo->prepare("UPDATE alunos SET nome = ?, email = ?, data_nascimento = ?, updated_at = NOW() WHERE id = ?");
        return $stmt->execute([$data['nome'], $data['email'], $data['data_nascimento'], $id]);
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM alunos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
