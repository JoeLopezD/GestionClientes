<?php

namespace App\Models;

use CodeIgniter\Model;

class ClientesModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'clientes';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['id','DNI','name','surname','phone','address','population','location','email','birth_date','created_at','delete_at','updated_at'];

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




    public function getClients ($slug=false) {
        if ($slug===false) {
            return $this->findAll();

        }
        return $this->where('id',$slug)->first();
    }




    public  function addClient($dni, $name, $surname, $phone, $email, $address, $population, $location, $birth){
        $this->insert(["DNI"=>$dni,"name" => $name, "surname" => $surname, "phone" => $phone, "address" => $address, "location" => $location, "email" => $email, "phone" => $phone, "population" => $population]);

        // 'DNI','name','surname','phone','address','location','email','birth_date'
    }
}
