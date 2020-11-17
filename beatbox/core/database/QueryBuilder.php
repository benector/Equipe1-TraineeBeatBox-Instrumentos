<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder
{

    protected $pdo;


    public function __construct($pdo)
    {
        $this->pdo = $pdo;

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


    public function insert($table, $parameters)
    {
        $sql = sprintf('insert into %s (%s) values(%s)', $table, implode(", ", array_keys($parameters)),
        "'" . implode("', '", array_values($parameters)) . "'");

        try
        {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

        }catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function delete($table, $id)
    {
        $sql = "delete from {$table} where id = {$id}";

        try
        {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

        }catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function update($table, $parameters){
        $sql = "UPDATE categorias SET categoria='{$parameters['categoria']}', descrição ='{$parameters['descrição']}', quantidade='{$parameters['quantidade']}' WHERE id={$parameters['id']}";
        try{
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
        } catch(Exception $e){
            die($e->getMessage());
        }

    }

    //Aqui vão as funções de manipulação da base de dados
    //Essas funções rodam comandos SQL
    
}
