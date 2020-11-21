<?php

namespace App\Controllers;
use App\Core\App;

class PagesController {

    public function index ()
    {
        $title = 'Beatbox Instumentos';
        $css_pages=[
            '/public/css/styles-home.css',
        ];

        require 'app/views/site/partials/header.php';
        // require 'app/views/site/navbar.php';
        
        return view ('/site/index');
    }

    public function quemSomos ()
    {      
        $title = "Beatbox Quem Somos";
        $css_pages=[
            '/public/css/stylesquemsomos.css',
        ];

        require 'app/views/site/partials/header.php';
        // require 'app/views/site/navbar.php';
        return view ('/site/quemSomos');
    }

    public function login ()
    {   
        $title = "Beatbox Login";
        $css_pages=[
            '/public/css/styles-login.css',
        ];

        require 'app/views/site/partials/header.php';
        // require 'app/views/site/navbar.php';
        return view ('/site/login');
    }
    

    public function contato ()
    {   
        $title = "Beatbox Contato";
        $css_pages=[
            '/public/css/contato-styles.css',
        ];

        require 'app/views/site/partials/header.php';
        // require 'app/views/site/navbar.php';
        return view ('/site/contato');
    }
        
}