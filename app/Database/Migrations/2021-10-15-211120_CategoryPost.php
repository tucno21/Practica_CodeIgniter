<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CategoryPost extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();
        $this->forge->addField([
            'id_post'          => [ //nombre de la columna
                'type'           => 'INT', //tipo de columna
                'constraint'     => 11, // tamaño de la columna
                'unsigned'       => true,
                'null' => false, //no nulo
            ],
            'id_category'          => [ //nombre de la columna
                'type'           => 'INT', //tipo de columna
                'constraint'     => 11, // tamaño de la columna
                'unsigned'       => true,
                'null' => false, //no nulo
            ],

        ]);
        $this->forge->addForeignKey('id_post', 'posts', 'id', 'CASCADE', 'CASCADE');
        $this->forge->addForeignKey('id_category', 'categories', 'id', 'CASCADE', 'CASCADE');
        $this->forge->createTable('categories_posts'); //nombre de la tabla a crear
        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('categories_posts'); //nombre de la tabla //este seccion elimina la tabla
    }
}
