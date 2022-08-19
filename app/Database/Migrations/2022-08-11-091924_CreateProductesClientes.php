<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductesClientes extends Migration
{
    public function up()
{
        $this->forge->addField([
                'id'          => [
                        'type'           => 'INT',
                        'auto_increment' => true,
                ],
                'dni_client'          => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '20',
                        'auto_increment' => false,
                ],
                'num_factura'          => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '150',
                ],
                'created_at datetime default current_timestamp',
                'delete_at datetime default null',
                'updated_at datetime default current_timestamp on update current_timestamp'
        ]);
        $this->forge->addPrimaryKey('id', true);
        // $this->forge->addForeignKey('id_client', 'clientes', 'id');
        // $this->forge->addForeignKey('id_producte', 'productes', 'id');
        $this->forge->createTable('ProductesClientes');


}

public function down()
{
        $this->forge->dropTable('ProductesClientes');
}
}
