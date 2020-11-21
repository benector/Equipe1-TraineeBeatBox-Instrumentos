<?php

namespace App\Controllers;
use App\Core\App;

class VizualizarController {

    public function produto()
    {   
        $produtos = App::get('database')->selectAll('produtos'); 

        require 'app/views/site/header.php';
        require 'app/views/site/navbar.php';
        return view ('/site/vizualizar-produto',compact( 'produtos'));
 
    }
        
}