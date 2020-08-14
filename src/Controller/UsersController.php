<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Users Controller
 *
 */
class UsersController extends AppController
{
    public function index()
    {
        echo "Listado de usuarios";
        exit();
    }
    public function view($name)
    {
        echo "Detalle de usuarios";
        exit();
    }
    public function add()
    {
        echo "agregar  usuarios";
        exit();
    }
}