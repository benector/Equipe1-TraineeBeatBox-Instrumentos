<?php

namespace App\Controllers;
use App\Core\App;

class CategoriasController {


    public function index()
    {   
      $produtos = App::get('database')->selectAll('produtos');
    
      $pagination= new Paginacao('categorias', 10);

      $categorias = App::get('database')->paginaRows('categorias',$pagination->limiteDeItens,$pagination->offset);
      

      $title = "Beatbox ADM - Categorias";

      $parametros =[
        'categorias'=>$categorias,
        'produtos' =>$produtos,
        'pagination' => $pagination,
      ];

      require 'app/views/admin/partials/admin_navbar.view.php';
      return view ('/admin/categorias', $parametros);
    }
    public function create()
    {
      $parameters = [
        'categoria' => $_POST['categoria'],
        'quantidade' => $_POST['quantidade'],
        'descrição' => $_POST['descrição']
      ];

      App::get('database')->insert('categorias', $parameters );

      header('Location: /adm/categorias');

    }

    public function delete()
    {
      App::get('database')->delete('categorias', $_POST['id'] );

      header('Location: /adm/categorias');
    }

    public function update()
    {   
        $parameters = [
        'categoria' => $_POST['categoria'],
        'quantidade' => $_POST['quantidade'],
        'descrição' => $_POST['descrição'],
        'id' => $_POST['id']
        ];


        App::get('database')->update('categorias', $parameters);

        header('Location: /adm/categorias');
    }

}