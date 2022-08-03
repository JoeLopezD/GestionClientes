<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClientesModel;


class GestionClientesController extends BaseController
{
    public function index()
    {
        //

        $model = new ClientesModel();
        $data['clients'] = $model->getClients();


        echo view('pages/userManagement/vistaGeneral', $data);
    }





    public function create()
    {
        //$this->request->getMethod()=='post'
        echo view("pages/userManagement/nouClient", ['title' => 'Nou Client']);
    }

    public function create_post()
    {
        $model = new ClientesModel();

        $validationRules = [
            'dni' => 'required',
            'name' => 'required',
            'surname' => 'required',
            'phone' => 'required',
            'email' => 'required',
            'address' => 'required',
            'population' => 'required',
            'location' => 'required',
            'birth' => 'required',

        ];

        if ($this->validate($validationRules)) {

            $dni = $this->request->getPost('dni');
            $name = $this->request->getPost('name');
            $surname = $this->request->getPost('surname');
            $phone = $this->request->getPost('phone');
            $email = $this->request->getPost('email');
            $address = $this->request->getPost('address');
            $population = $this->request->getPost('population');
            $location = $this->request->getPost('location');
            $birth = $this->request->getPost('birth');



            $model->addClient($dni, $name, $surname, $phone, $email, $address, $population, $location, $birth);

            echo view("pages/userManagement/nouClientConfirm");
        } else {
            return redirect()->back()->withInput();
        }
    }






    public function view($dni = null)
    {
        $model = new ClientesModel();

        $data['clients'] = $model->getClients($dni);

        if (empty($data['clients'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('No se ha encontrado el cliente con DNI: ' . $dni);
        }

        //$data['title'] = $data['noticies']['title'];

        echo view("pages/userManagement/detailClient", $data);

    }




    public function update($dni = null)
    {
        $model = new ClientesModel();

        $data['clients'] = $model->getClients($dni);

        if (empty($data['clients'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('No se ha encontrado el cliente con DNI: ' . $dni);
        }

        //$data['title'] = $data['noticies']['title'];

        //$this->request->getMethod()=='post'
        echo view("pages/userManagement/updateClient", $data);
    }

}
