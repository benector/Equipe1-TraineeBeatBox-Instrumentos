<?php

namespace App\Controllers;
use App\Core\App;

class ProdutosController {

    public function produtos ()
    {   
      
        $produtos = App::get('database')->selectAll('produtos'); 
        $categorias = App::get('database')->selectAll('categorias');
      
            $parametros =[
                'categorias'=>$categorias,
                'produtos' =>$produtos
              ];
        
      
        $title = 'Beatbox Instumentos';
        $css_pages=[
            'public/css/styles-produto.css',
            '/public/css/styles-produtos.css'   
        ];

        require 'app/views/site/header.php';
        
        return view ('/site/produtos',$parametros);
    }

    public function pesquisar(){
        
        $pesquisar = $_POST['busca'];
        $produtos = App::get('database')->search('produtos', $pesquisar);
        $categorias = App::get('database')->selectAll('categorias');

        $parametros =[
            'categorias'=>$categorias,
            'produtos' =>$produtos
          ];
          $title = 'Beatbox Instumentos';
          $css_pages=[
              'public/css/styles-produto.css',
              '/public/css/styles-produtos.css'   
          ];
  
          require 'app/views/site/header.php';

          return view ('/site/produtos',$parametros);
}

public function filtrar()
{
    $pesquisar = array();
    if (isset($_POST['criterio']))
    {
        array_push($pesquisar,$_POST['criterio']);
    }
    else{
        $pesquisar = '';
    }
        
        $produtos = App::get('database')->filtro('produtos', $pesquisar);
        $categorias = App::get('database')->selectAll('categorias');

        $parametros =[
            'categorias'=>$categorias,
            'produtos' =>$produtos
          ];
          $title = 'Beatbox Instumentos';
          $css_pages=[
              'public/css/styles-produto.css',
              '/public/css/styles-produtos.css'   
          ];
  
          require 'app/views/site/header.php';

          return view ('/site/produtos',$parametros);   
}
   
       
}