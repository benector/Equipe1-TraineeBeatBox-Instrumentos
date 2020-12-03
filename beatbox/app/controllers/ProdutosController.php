<?php

namespace App\Controllers;
use App\Core\App;



class ProdutosController {

    public function produtos ()
    {     
        
        $pagination= new Paginacao('produtos', 8);

        $produtos = App::get('database')->paginaRows('produtos',$pagination->limiteDeItens,$pagination->offset);

        $parametros =[
            'pagination'=>$pagination,
            'produtos' =>$produtos,
          ];

        $title = "Beatbox Produtos";
        $css_pages=[
            '/public/css/styles-produtos.css',
        ];
        
        require 'app/views/site/partials/header.php';
        
        return view ('/site/produtos',$parametros);
      
    }       
}