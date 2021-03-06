<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id'          => [ //nombre de la columna
                'type'           => 'INT', //tipo de columna
                'constraint'     => 11, // tamaño de la columna
                'unsigned'       => true,
                'auto_increment' => true,
                'null' => false, //no nulo
            ],
            'username'       => [
                'type'       => 'VARCHAR',
                'constraint' => '120',
                'null' => false, //no nulo
                'unique' => true, //que el email sea unico
            ],
            'email'       => [
                'type'       => 'VARCHAR',
                'constraint' => '120',
                'null' => false, //no nulo
                'unique' => true, //que el email sea unico
            ],
            'password'       => [
                'type'       => 'VARCHAR',
                'constraint' => '60',
                'null' => false, //no nulo
            ],
            'id_group'       => [
                'type'       => 'INT',
                'constraint' => '11',
                'unsigned'   => true,
                'null'       => false, //no nulo
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => false,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'deleted_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true); //asigna id primario
        $this->forge->addForeignKey('id_group', 'groups', 'id');
        $this->forge->createTable('users'); //nombre de la tabla a crear
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('users'); //nombre de la tabla //este seccion elimina la tabla
    }
}
