<?php

namespace App\Models;

use PDO;
use PDOException;

class Aluno
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=db;dbname=plataforma', 'root', 'root');
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

    public function findByEmailOrNome($nameOurEmail)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM alunos WHERE email LIKE '%' ? '%' OR nome LIKE '%' ? '%' ORDER BY alunos.nome ASC");
        $stmt->execute([$nameOurEmail, $nameOurEmail]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($data)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM alunos WHERE email = ?");
        $stmt->execute([$data['email']]);
        if ($stmt->rowCount() > 0) {
            $_SESSION['erro'] = 'Email já cadastrado';
            header('Location: /?url=aluno/create');
            exit;
        }

        $stmt = $this->pdo->prepare("INSERT INTO alunos (nome, email, data_nascimento, created_at, updated_at) VALUES (?, ?, ?, NOW(), NOW())");
        return $stmt->execute([$data['nome'], $data['email'], $data['data_nascimento'] ? $data['data_nascimento'] : null]);
    }

    public function update($id, $data)
    {
        $stmt = $this->pdo->prepare("UPDATE alunos SET nome = ?, email = ?, data_nascimento = ?, updated_at = NOW() WHERE id = ?");
        return $stmt->execute([$data['nome'], $data['email'], $data['data_nascimento'] ? $data['data_nascimento'] : null, $id]);
    }

    public function delete($id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM alunos WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
