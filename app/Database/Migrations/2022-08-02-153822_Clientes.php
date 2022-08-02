<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Clientes extends Migration
{
    public function up()
{
        $this->forge->addField([
                'id'          => [
                        'type'           => 'INT',
                        'constraint'     => 255,
                        'auto_increment' => true,
                ],
                'DNI'          => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '20',
                        'auto_increment' => false,
                ],
                'name'          => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '50',
                        'auto_increment' => false,
                ],
                'surname'          => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '100',
                        'auto_increment' => false,
                ],
                'phone'          => [
                        'type'           => 'INT',
                        'constraint'     => 10,
                        'auto_increment' => false,
                ],
                'address'          => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '120',
                        'auto_increment' => false,
                ],
                'location'          => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '50',
                        'auto_increment' => false,
                ],
                'email'          => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '150',
                        'auto_increment' => false,
                ],
                'birth_date'          => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '10',
                        'auto_increment' => false,
                ],
                'created_at datetime default current_timestamp',
                'delete_at datetime default null',
                'updated_at datetime default current_timestamp on update current_timestamp'
        ]);
        $this->forge->addKey('DNI');
        $this->forge->addPrimaryKey('id', true);

        $this->forge->createTable('clientes');
}

public function down()
{
        $this->forge->dropTable('clientes');
}
}
