<?php

namespace App\Controllers;
use App\Core\App;

class ProdutosController {

    public function produtos ()
    {   
        $produtos = App::get('database')->selectAll('produtos'); 

        
        $title = 'Beatbox Instumentos';
        $css_pages=[
            '/public/css/styles-produtos.css'
            
        ];

        require 'app/views/site/header.php';
        
        return view ('/site/produtos',compact('produtos'));
    }
   
       
}