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




    public function getClients ($dni=false) {
        if ($dni===false) {
            return $this->findAll();

        }
        return $this->where('dni',$dni)->first();
    }




    public  function addClient($dni, $name, $surname, $phone, $email, $address, $population, $location, $birth){
        $this->insert(["DNI"=>$dni,"name" => $name, "surname" => $surname, "phone" => $phone, "address" => $address, "location" => $location, "email" => $email, "phone" => $phone, "population" => $population, "birth_date" => $birth]);
    }



    public  function updateClient($idClient, $dni, $name, $surname, $phone, $email, $address, $population, $location, $birth){

        $data = [
            "DNI"=>$dni,
            "name" => $name, 
            "surname" => $surname,
            "phone" => $phone,
            "address" => $address,
            "location" => $location,
             "email" => $email, 
             "phone" => $phone, 
             "population" => $population, 
             "birth_date" => $birth
        ];

        $this->update($idClient,$data);
        }


    public function deleteClient($dni){
        $this->where('DNI', $dni)->delete();
    }





    public function getByTitleOrText($search)
{
        return $this->select(['DNI', 'name', 'surname', 'location','population','phone','email'])->orLike('phone', $search, 'both', true)->orLike('email', $search, 'both', true)->orLike('population', $search, 'both', true)->orLike('location', $search, 'both', true)->orLike('surname', $search, 'both', true)->orLike('DNI', $search, 'both', true)->orLike('name', $search, 'both', true);
}
}
