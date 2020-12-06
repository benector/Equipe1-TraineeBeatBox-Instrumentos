<?php

namespace App\Controllers;

use App\Core\App;

class UsersController{
    public function index(){

      $pagination= new Paginacao('users', 10);

      $users = App::get('database')->paginaRows('users',$pagination->limiteDeItens,$pagination->offset);

      $parametros= [
        'users'=>$users,
        'pagination'=>$pagination,
      ];
  
      $title = "Beatbox ADM - Usuários";

      require 'app/views/admin/partials/admin_navbar.view.php';      
      
      return view('admin/View_adm_usuarios', $parametros);
    }

    public function create(){
      $parameters = [
        'name' => $_POST['name'],
        'email'=> $_POST['email'],
        'password'=>$_POST['password']
      ];

      App::get('database')->insert('users', $parameters);

      header('Location: /adm/usuarios');
    }

    public function delete(){
      App::get('database')->delete('users',$_POST['id']);
      header('Location: /adm/usuarios');
    }

     public function update(){
      $parameters = [
        'name' => $_POST['name'],
        'email'=> $_POST['email'],
        'password'=>$_POST['password'],
        'id'=>$_POST['id']
      ];
      
      App::get('database')->update('users', $parameters);

      header('Location: /adm/usuarios');
     }
}

?>