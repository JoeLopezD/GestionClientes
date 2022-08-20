<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClientesModel;
use App\Models\ProductesModel;
use App\Models\AlvaranesModel;

class GestionProductosController extends BaseController
{
    public function create($dni = null)
    {
        $model = new ClientesModel();
        $data['clients'] = $model->getClients($dni);
        
        $dni_client=$data['clients']['DNI'];


        echo view("pages/productManagement/novaCompra", $data);
    }


    


    public function addProducte($dni = null)
    {
        $model = new ProductesModel();

        $modelAlvara = new AlvaranesModel();
        $validationRules = [
            'alvara_num' => 'required',
            'product' => 'required',
            'ref_code' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'doc_name' => 'required',
            'seguro' => 'required',
            'num_factura' => 'required',
        ];

        if ($this->validate($validationRules)) {

            $alvara_num = $this->request->getPost('alvara_num');
            $product = $this->request->getPost('product');
            $ref_code = $this->request->getPost('ref_code');
            $desc = $this->request->getPost('desc');
            $price = $this->request->getPost('price');
            $doc_name = $this->request->getPost('doc_name');
            $seguro = $this->request->getPost('seguro');
            $num_factura = $this->request->getPost('num_factura');

        $existeAlvara=$modelAlvara->getAlvaranes_alv($alvara_num);

        if($existeAlvara==null){

            $model->addProduct($alvara_num, $product, $ref_code, $desc, $price, $doc_name, $seguro, $num_factura);


            $modelAlvara->addAlvara($dni,$alvara_num);
        }
        else{
            session()->setFlashdata('error', 'ERROR! El alvara introduit ja ha estat introduit anteriorment');
            return redirect()->back()->withInput();
        }

        $data['DNI'] = $dni;

        echo view("pages/productManagement/producteAfegit", $data);
    }
}




    public function add($dni,$alvara_num)
    {
        $data['DNI'] = $dni;
        
        $data['alvara_num']=$alvara_num;
        echo view("pages/productManagement/updateCompra", $data);
    }


    public function updateProducte($dni)
    {
        $model = new ProductesModel();

        $modelAlvara = new AlvaranesModel();
        $validationRules = [
            'alvara_num' => 'required',
            'product' => 'required',
            'ref_code' => 'required',
            'desc' => 'required',
            'price' => 'required',
            'doc_name' => 'required',
            'seguro' => 'required',
            'num_factura' => 'required',
        ];

        if ($this->validate($validationRules)) {

            $alvara_num = $this->request->getPost('alvara_num');
            $product = $this->request->getPost('product');
            $ref_code = $this->request->getPost('ref_code');
            $desc = $this->request->getPost('desc');
            $price = $this->request->getPost('price');
            $doc_name = $this->request->getPost('doc_name');
            $seguro = $this->request->getPost('seguro');
            $num_factura = $this->request->getPost('num_factura');

            $model->addProduct($alvara_num, $product, $ref_code, $desc, $price, $doc_name, $seguro, $num_factura);


            $data['DNI'] = $dni;

            echo view("pages/productManagement/producteAfegit", $data);
    }

}
}