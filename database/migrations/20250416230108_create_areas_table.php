<?php

use Phinx\Migration\AbstractMigration;

class CreateAreasTable extends AbstractMigration
{
    public function change()
    {
        $table = $this->table('areasCurso');
        $table->addColumn('titulo', 'string', ['null' => false])
            ->addColumn('descricao', 'string')
            ->addTimestamps()
            ->create();
    }
}
