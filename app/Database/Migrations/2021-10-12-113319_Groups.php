<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Groups extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id'          => [ //nombre de la columna
                'type'           => 'INT', //tipo de columna
                'constraint'     => 11, // tamaño de la columna
                'unsigned'       => true,
                'auto_increment' => true,
                'null' => false, //no nulo
            ],
            'name'       => [
                'type'       => 'VARCHAR',
                'constraint' => '80',
                'null' => false, //no nulo
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true); //asigna id primario
        $this->forge->createTable('groups'); //nombre de la tabla a crear
    }

    public function down()
    {
        $this->forge->dropTable('groups'); //nombre de la tabla //este seccion elimina la tabla
    }
}
