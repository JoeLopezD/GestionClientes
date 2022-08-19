<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ClientesModel;
use App\Models\ProductesModel;
use App\Models\AlvaranesModel;


class GestionClientesController extends BaseController
{
    public function index()
    {
        //

        $model = new ClientesModel();
        $data['clients'] = $model->getClients();


        $searchData = $this->request->getGet();

        $search = $searchData['q'] ?? '';


        if ($search != '') {
            $paginateData = $model->getByTitleOrText($search)->paginate(4);
        }
        else{
            $paginateData=$model->paginate(4);
        }


        $data = [
            // 'page_title' => 'CI4 Pager & search filter',
            // 'title' => 'Llistat paginat',
            'clients' => $paginateData,
            'pager' => $model->pager,
            // 'search' => $search,
            // 'activepage' => $activePage,
        ];




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

        $modelAlvaranes = new AlvaranesModel();


        $data['alvaranes']=$modelAlvaranes->getAlvaranes_dni($dni);
        $data['clients'] = $model->getClients($dni);

        if (empty($data['clients'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('No se ha encontrado el cliente con DNI: ' . $dni);
        }


        // dd($data['alvaranes']);
        echo view("pages/userManagement/detailClient", $data);

    }




    public function update($dni = null)
    {
        $model = new ClientesModel();

        $data['clients'] = $model->getClients($dni);

        if (empty($data['clients'])) {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('No se ha encontrado el cliente con DNI: ' . $dni);
        }

        $session = \Config\Services::session();
        $idClient=$data['clients']['id'];
        // dd($idClient);
        $_SESSION['item'] = $idClient;
        $session->markAsFlashdata($idClient);

        echo view("pages/userManagement/updateClient", $data);
    }

    public function update_post()
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

            $session = \Config\Services::session();
            $idClient=$session->get('item');

            // dd($idClient);

            $dni = $this->request->getPost('dni');
            $name = $this->request->getPost('name');
            $surname = $this->request->getPost('surname');
            $phone = $this->request->getPost('phone');
            $email = $this->request->getPost('email');
            $address = $this->request->getPost('address');
            $population = $this->request->getPost('population');
            $location = $this->request->getPost('location');
            $birth = $this->request->getPost('birth');

            $model->updateClient($idClient, $dni, $name, $surname, $phone, $email, $address, $population, $location, $birth);

            echo view("pages/userManagement/updateClientConfirm");
        } else {
            return redirect()->back()->withInput();
        }
    }


    function deleteClient($dni){
        $model = new ClientesModel();
        $model->deleteClient($dni);
        echo view("pages/userManagement/deleteConfirm");
        }

}
