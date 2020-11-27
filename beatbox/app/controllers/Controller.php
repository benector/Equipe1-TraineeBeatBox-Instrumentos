<?php

namespace App\Controllers;
use App\Core\App;

class Controller {

    public function index ()
    {
        $title = 'Beatbox Instumentos';
        $css_pages=[
            '/public/css/styles-home.css',
        ];

        require 'app/views/site/header.php';
        
        return view ('/site/index');
    }

    public function quemSomos ()
    {      
        require 'app/views/site/header.php';
        require 'app/views/site/navbar.php';
        return view ('/site/quemSomos');
    }

    public function login ()
    {   
        require 'app/views/site/header.php';
        require 'app/views/site/navbar.php';
        return view ('/site/login');
    }
    

    public function contato ()
    {   
        require 'app/views/site/header.php';
        require 'app/views/site/navbar.php';
        return view ('/site/contato');
    }
        
}