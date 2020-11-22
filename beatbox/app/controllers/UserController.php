<?php

namespace App\Controllers;

use App\Core\App;

class UsersController{
    public function index(){
      $users = App::get('database')->selectAll('users');
      return view('admin/View_adm_usuarios', compact('users'));
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