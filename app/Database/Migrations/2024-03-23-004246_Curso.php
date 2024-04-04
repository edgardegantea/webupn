<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Curso extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => true,
                    'auto_increment' => true,
                ],
                'titulo' => [
                    'type' => 'TEXT',
                ],
                'resumen' => [
                    'type' => 'TEXT',
                    'constraint' => '100',
                ],
                'contenido' => [
                    'type' => 'LONGTEXT'
                ],
                'temario' => [
                    'type' => 'LONGTEXT'
                ],
                'estado' => [
                    'type' => 'VARCHAR',
                    'constraint' => '20',
                ],
                'tipo' => [
                    'type' => 'VARCHAR',
                    'constraint' => '20',
                ],
                'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
                'updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
                'deleted_at TIMESTAMP NULL'
            ]
        );

        $this->forge->addKey('id', true);
        $this->forge->createTable('cursos', true);
    }

    public function down()
    {
        $this->forge->dropTable('cursos', true);
    }
}
