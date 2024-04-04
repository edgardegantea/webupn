<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contacto extends Migration
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
                'nombre' => [
                    'type' => 'VARCHAR',
                    'constraint' => '120',
                ],
                'email' => [
                    'type' => 'VARCHAR',
                    'constraint' => '100',
                ],
                'telefono' => [
                    'type' => 'VARCHAR',
                    'constraint' => '20',
                ],
                'direccion' => [
                    'type' => 'VARCHAR',
                    'constraint' => '255',
                ],
                'fecha' => [
                    'type' => 'DATETIME',
                ],
                'created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP',
                'updated_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP',
                'deleted_at TIMESTAMP NULL'
            ]
        );

        $this->forge->addKey('id', true);
        $this->forge->createTable('contactos', true);
    }

    public function down()
    {
        $this->forge->dropTable('contactos', true);
    }
}
