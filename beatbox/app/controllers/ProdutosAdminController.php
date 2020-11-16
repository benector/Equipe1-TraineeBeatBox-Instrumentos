<?php

namespace App\Controllers;
use App\Core\App;

class ProdutosAdminController {

    public function produtosAdmin ()
    {   
        $produtos = App::get('database')->selectAll('produtos');  
       return view ('/admin/produtos',compact( 'produtos'));
    }
    public function selectAll($table)
    {
        $sql = "select * from {$table}";

        try
        {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);

        }catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function create()
    {
      $parameters = [
        'nome' => $_POST['nome'],
        'categoria' => $_POST['categoria'],
        'preco' => $_POST['preco'],
        'quantidade' => $_POST['quantidade'],
        'img' => $_POST['img']
      ];

      App::get('database')->insert('produtos', $parameters );

      header('Location: /produtos');

    }

    public function delete()
    {
      App::get('database')->delete('produtos', $_POST['id'] );

      header('Location: /produtos');

    }
        
}