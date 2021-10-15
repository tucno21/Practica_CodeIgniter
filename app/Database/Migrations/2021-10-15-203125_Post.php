<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Post extends Migration
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
            'title'       => [
                'type'       => 'VARCHAR',
                'constraint' => '120',
                'null' => false, //no nulo
            ],
            'slug'       => [
                'type'       => 'VARCHAR',
                'constraint' => '140',
                'null' => false, //no nulo
                'unique' => true, //que el email sea unico
            ],
            'body'       => [
                'type'       => 'TEXT',
                'null' => false, //no nulo
            ],
            'cover'       => [
                'type'       => 'VARCHAR',
                'constraint' => '40',
                'null' => false, //no nulo
            ],
            'id_author'       => [
                'type'       => 'INT',
                'constraint' => '11',
                'unsigned'   => true,
                'null'       => true, //no nulo
            ],
            'published_at' => [
                'type' => 'DATETIME',
                'null' => false,
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
        $this->forge->addForeignKey('id_author', 'users', 'id');
        $this->forge->createTable('posts'); //nombre de la tabla a crear
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('posts'); //nombre de la tabla //este seccion elimina la tabla
    }
}
