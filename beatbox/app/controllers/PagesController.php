<?php

namespace App\Controllers;
use App\Core\App;

class PagesController {

    public function index ()
    {
        $title = 'Beatbox Instumentos';

        require 'app/views/site/header.php';
        require 'app/views/site/navbar.php';
        
        return view ('/site/index');
    }

    public function quemSomos ()
    {      
        $title= 'Beatbox Quem Somos';

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