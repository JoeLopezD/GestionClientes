<?php

namespace App\Models;

use CodeIgniter\Model;

class ProductesModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'productes';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id','product_name','ref_code','details','price','doc_name','seguro','num_factura','num_alvara','created_at','delete_at','updated_at'];

    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];



    public  function addProduct($alvara_num, $product, $ref_code, $desc, $price, $doc_name, $seguro, $num_factura){
        $this->insert(['product_name'=>$product,'ref_code'=>$ref_code,'details'=>$desc,'price'=>$price,'doc_name'=>$doc_name,'seguro'=>$seguro,'num_factura'=>$num_factura,'num_alvara'=>$alvara_num]);
    }


    public function getProducts($alvara_num){
        return $this->where('num_alvara',$alvara_num)->findAll();
    }
}
