<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClientesModel;


class GestionProductosController extends BaseController
{
    public function create($dni = null)
    {
        $model = new ClientesModel();
        $data['clients'] = $model->getClients($dni);
        
        $dni_client=$data['clients']['DNI'];


        echo view("pages/productManagement/novaCompra", $data);
    }
}
