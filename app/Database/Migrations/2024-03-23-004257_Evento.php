<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Evento extends Migration
{
    public function up()
    {
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
            'id' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => true,
                    'auto_increment' => true,
                ],
                'autor' => [
                    'type' => 'INT',
                    'constraint' => 11,
                    'unsigned' => true,
                    'auto_increment' => false,
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
        $this->forge->addForeignKey('autor', 'usuarios', 'id');
        $this->forge->createTable('eventos', true);

        $this->db->enableForeignKeyChecks();
    }

    public function down()
    {
        $this->forge->dropTable('eventos', true);
    }
}
