<?php

namespace App\Controllers;

use App\Core\App;

class Controller {
    public function index(){
        return require'app/views/site/index.view.php';
    }

    public function produtos(){
        return require'app/views/site/View_Produtos.view.php';
    }

    public function login(){
        return require'app/views/site/login.view.php';
    }

    public function quemsomos(){
        return require'app/views/site/QuemSomos.view.php';
    }

    public function contato(){
        return require'app/views/site/Form_contato.view.php';
    }

    public function admin(){
        return require'app/views/admin/admin.view.php';
    }

    public function admin_categorias(){
        return require'app/views/admin/View_adm_categoria.view.php';
    }

    public function admin_produtos(){
        return require'app/views/admin/View_adm_produtos.view.php';
    }

    public function admin_usuarios(){
        return require'app/views/admin/View_adm_usuarios.view.php';
    }
}
?>