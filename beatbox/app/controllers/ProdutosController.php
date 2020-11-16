<?php

namespace App\Controllers;
use App\Core\App;

class ProdutosController {

    public function produtos ()
    {   
        $produtos = App::get('database')->selectAll('produtos'); 

        require 'app/views/site/header.php';
        require 'app/views/site/navbar.php';
        return view ('/site/produtos',compact( 'produtos'));

     

    
    }
        
}