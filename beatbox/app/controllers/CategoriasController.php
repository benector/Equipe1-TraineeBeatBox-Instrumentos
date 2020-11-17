<?php

namespace App\Controllers;
use App\Core\App;

class CategoriasController {


    public function index()
    {   
        $categorias = App::get('database')->selectAll('categorias'); 

        require 'app/views/site/header.php';
        return view ('/admin/categorias', compact('categorias'));
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