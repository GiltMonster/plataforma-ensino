<?php

use Phinx\Migration\AbstractMigration;

class CreateAlunosTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('alunos');
        $table->addColumn('nome', 'string', ['null' => false])
            ->addColumn('email', 'string', ['null' => false])
            ->addColumn('data_nascimento', 'date', ['null' => true])
            ->addTimestamps()
            ->addIndex(['email'], ['unique' => true])
            ->addIndex(['nome'])
            ->create();
    }
}
