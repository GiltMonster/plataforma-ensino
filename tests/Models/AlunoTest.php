<?php

use PHPUnit\Framework\TestCase;
use App\Models\Aluno;

class AlunoTest extends TestCase
{
    public function testAlunoModelInstancia()
    {
        $aluno = new Aluno();
        $this->assertInstanceOf(Aluno::class, $aluno);
    }

    public function testCriaAluno()
    {
        $aluno = new Aluno();
        $sucesso = $aluno->create([
            'nome' => 'Teste Aluno',
            'email' => 'teste@teste.com',
            'data_nascimento' => '2000-01-01'
        ]);

        $this->assertTrue($sucesso);
    }

    public function testAtualizaAluno()
    {
        $aluno = new Aluno();
        $sucesso = $aluno->update(1, [
            'nome' => 'Aluno Atualizado',
            'email' => 'testeA@teste.com',
            'data_nascimento' => '2002-01-01'
        ]);

        $this->assertTrue($sucesso);

    }
}
