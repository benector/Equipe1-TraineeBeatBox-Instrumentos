<?php

namespace App\Controllers;
use App\Core\App;

class CategoriasController {


    public function index()
    {
        $title = "Beatbox ADM - Categorias";
        $page_css=[
            '../public/css/styles-adm.css',
        ];

        require 'app/views/site/header.php';
        return view ('/admin/categorias');
    }
}