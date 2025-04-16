<?php

use Phinx\Migration\AbstractMigration;

class CreateAlunosTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('alunos');
        $table->addColumn('nome', 'string')
              ->addColumn('email', 'string')
              ->addColumn('data_nascimento', 'date')
              ->addTimestamps()
              ->create();
    }
}
