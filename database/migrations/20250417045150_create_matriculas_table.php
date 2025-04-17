<?php

use Phinx\Migration\AbstractMigration;

class CreateMatriculasTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('matriculas');
        $table->addColumn('aluno_id', 'integer', ['signed' => false])
              ->addColumn('curso_id', 'integer', ['signed' => false])
              ->addTimestamps()
              ->addForeignKey('aluno_id', 'alunos', 'id', ['delete'=> 'CASCADE'])
              ->addForeignKey('curso_id', 'areasCurso', 'id', ['delete'=> 'CASCADE'])
              ->create();
    }
}
