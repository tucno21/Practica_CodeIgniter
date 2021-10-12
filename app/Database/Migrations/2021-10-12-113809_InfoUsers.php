<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InfoUsers extends Migration
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
                'constraint' => '100',
                'null' => false, //no nulo
            ],
            'surname'       => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
                'null' => false, //no nulo
            ],
            'id_county'       => [
                'type'       => 'INT',
                'constraint' => '11',
                'unsigned'   => true,
                'null'       => false, //no nulo
            ],
            'create_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true); //asigna id primario
        $this->forge->createTable('info_users'); //nombre de la tabla a crear
    }

    public function down()
    {
        $this->forge->dropTable('info_users'); //nombre de la tabla //este seccion elimina la tabla
    }
}
