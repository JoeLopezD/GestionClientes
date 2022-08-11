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
                'id_client'          => [
                    'type'           => 'INT',
                    'constraint'     => 255,
                ],
                'id_producte'          => [
                    'type'           => 'INT',
                    'constraint'     => 255,
                ],
                'created_at'      =>  [
                          'type'         =>  'DATETIME',
                           'null'         =>  true,
                           'default'    =>  null,
                ],
                'updated_at'     =>  [
                          'type'         =>  'DATETIME',
                           'null'         =>  true,
                           'default'    =>  null,
                ]
        ]);
        $this->forge->addPrimaryKey('id', true);
        $this->forge->addForeignKey('id_client', 'clientes', 'id');
        $this->forge->addForeignKey('id_producte', 'productes', 'id');
        $this->forge->createTable('ProductesClientes');


}

public function down()
{
        $this->forge->dropTable('ProductesClientes');
}
}
