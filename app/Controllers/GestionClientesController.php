<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class GestionClientesController extends BaseController
{
    public function index()
    {
        //

        echo view('pages/userManagement/vistaGeneral');
    }
}
