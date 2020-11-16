<?php

namespace App\Controllers;
use App\Core\App;

class CategoriasController {


    public function index()
    {
        require 'app/views/site/header.php';
        return view ('/admin/categorias');
    }
}