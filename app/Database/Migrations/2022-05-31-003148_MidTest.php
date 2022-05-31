<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MidTest extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id_customer'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'name'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'email' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'phone' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'order' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'product' => [
                'type'           => 'VARCHAR',
                'constraint'     => '100',
            ],
            'reason' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'subject' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'tell' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'created_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ],
            'updated_at' => [
                'type'           => 'DATETIME',
                'null'           => true,
            ]
        ]);
        $this->forge->addPrimaryKey('id_customer');
        $this->forge->createTable('customer');
    }

    //--------------------------------------------------------------------

    public function down()
    {
        $this->forge->dropTable('customer');
    }
}
