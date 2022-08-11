<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateProductes extends Migration
{
    public function up()
{
        $this->forge->addField([
                'id'          => [
                        'type'           => 'INT',
                        'constraint'     => 255,
                        'auto_increment' => true,
                ],
                'product_name'          => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '160',
                ],
                'ref_code'          => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '60',
                ],
                'details'          => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '255',
                ],
                'price'          => [
                        'type'           => 'FLOAT',
                ],
                'doc_name'          => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '150',
                ],
                'seguro'          => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '150',
                ],
                'num_factura'          => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '150',
                ],
                'num_alvara'          => [
                        'type'           => 'VARCHAR',
                        'constraint'     => '150',
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
        $this->forge->createTable('productes');
}

public function down()
{
        $this->forge->dropTable('productes');
}
}
