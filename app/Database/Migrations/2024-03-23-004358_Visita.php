<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Visita extends Migration
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
            'ip_address' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'fecha' => [
                'type' => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('visitas', true);
    }

    public function down()
    {
        $this->forge->dropTable('visitas', true);
    }
}
