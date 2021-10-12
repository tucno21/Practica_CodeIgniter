<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InfoUsers extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id_user'          => [ //nombre de la columna
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
        $this->forge->addKey('id_user', true); //asigna id primario
        //columna de esta tabla - nobre de la otra tabla  - y su id //
        //CASCADE - ACTUALIZA O ELIMINA AMBAS TABLAS //'SET NULL' si una fila se elimina la otra no es afectado
        // $this->forge->addForeignKey('id_county', 'countries', 'id', 'CASCADE', 'SET NULL');
        // $this->forge->addForeignKey('id_user', 'users', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_county', 'countries', 'id');
        $this->forge->addForeignKey('id_user', 'users', 'id');
        $this->forge->createTable('info_users'); //nombre de la tabla a crear
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('info_users'); //nombre de la tabla //este seccion elimina la tabla
    }
}
