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
        $model = new NewsModel();

        $validationRules = [
            'title' => 'required|min_length[3]|max_length[128]',
            'text' => 'required',
        ];

        if ($this->validate($validationRules)) {

            $title = $this->request->getPost('title');
            $url = url_title($title);
            $text = $this->request->getPost('text');

            $model->addNoticia($title, $url, $text);

            echo view("pages/noticiesConfirm");
        } else {
            return redirect()->back()->withInput();
        }
    }
}
