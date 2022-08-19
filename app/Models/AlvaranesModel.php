<?php

namespace App\Models;

use CodeIgniter\Model;

class AlvaranesModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'productesclientes';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id','dni_client','num_factura','created_at','delete_at','updated_at'];

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


    public function addAlvara($dni,$alvara_num){
        $this->insert(['dni_client'=>$dni,'num_factura'=>$alvara_num]);
    }



    public function getAlvaranes_alv ($alvara_num) {
        return $this->where('num_factura',$alvara_num)->first();
    }


    public function getAlvaranes_dni($dni){
        return $this->where('dni_client',$dni)->findAll();
    }

}