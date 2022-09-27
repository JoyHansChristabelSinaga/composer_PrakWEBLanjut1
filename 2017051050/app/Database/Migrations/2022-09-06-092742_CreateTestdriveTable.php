<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTestdriveTable extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'id' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'NPM' => [
                'type'       => 'VARCHAR',
                'constraint' => '10',
            ],
            'Nama'=> [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'Alamat' => [
                'type' => 'TEXT',
            ],
            'Deskripsi' => [
                'type' => 'TEXT',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('mahasiswa');
    }

    public function down()
    {
        $this->forge->dropTable('blog');
    }
}
