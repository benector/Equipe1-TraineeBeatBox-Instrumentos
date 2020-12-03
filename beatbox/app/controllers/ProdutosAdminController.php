<?php

namespace App\Controllers;
use App\Core\App;

class ProdutosAdminController {

    public function produtosAdmin ()
    {   
        $produtos = App::get('database')->selectAll('produtos'); 
        $categorias = App::get('database')->selectAll('categorias'); 
      
        $parametros =[
          'categorias'=>$categorias,
          'produtos' =>$produtos,
        ];
       
        return view ('/admin/produtos',$parametros);
        
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
        'descricao' => $_POST['descricao'],
        'preco' => $_POST['preco'],
        'quantidade' => $_POST['quantidade'],
        'img' => $_POST['img']
      ];

      App::get('database')->insert('produtos', $parameters );

      header('Location: /adm/produtos');

    }

    public function delete()
    {
      App::get('database')->delete('produtos', $_POST['id'] );
      $val = $_POST['img'];

      header('Location: /adm/produtos');

    }

    public function update(){
      
      $parameters = [
        'id' => $_POST['id'],
        'nome' => $_POST['nome'],
        'categoria' => $_POST['categoria'],
        'descricao' => $_POST['descricao'],
        'preco' => $_POST['preco'],
        'quantidade' => $_POST['quantidade'],
        'img' => $_POST['img'],
           
      ];

      if (isset($parameters['img']) && empty($parameters['img'])){
        array_pop($parameters);
      }

     
      App::get('database')->update('produtos', $parameters);

      

      header('Location: /adm/produtos');
     }
     
}
        
