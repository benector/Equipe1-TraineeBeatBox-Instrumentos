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

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s (%s) values(%s)',
            $table,
            implode(", ", array_keys($parameters)),
            "'" . implode("', '", array_values($parameters)) . "'"
        );

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function delete($table, $id)
    {
        $sql = "delete from {$table} where id = {$id}";

        try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function update($table, $parameters){

        $sql = "UPDATE {$table} set" ;

        foreach ($parameters as $key => $value) {
            if ($key != 'id') {
                $sql .= " {$key}='$value',";
            }
        }
        $sql = substr($sql, 0, -1);

        $sql .= " where id = {$parameters['id']}";

        try {
            $stmt = $this->pdo->prepare($sql);
            $stmt->execute();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }


    public function filtro($table, $criterios)
    {

        $sql = "SELECT * FROM produtos WHERE categoria";
        $i = 0;

        foreach ($criterios as $i => $value) {
           
            $sql .= " LIKE '$value' ";
            $sql .= "OR categoria";
        }
 

   try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function pesquisa($table, $criterios,$search, $operador)
    {   
        $sql = "SELECT * FROM produtos WHERE nome LIKE '%$search%'";
        $sql .= $operador . " categoria ";
        $i = 0;

        foreach ($criterios as $i => $value) {
           
            $sql .= " LIKE '$value' ";
            $sql .= "OR categoria";
            
            
        }
        
         try {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e) {
            die($e->getMessage());
        }

    }

    public function numberRows($table)
    {
        $sql="SELECT COUNT(*) FROM {$table}";
        
        try
        {
            $stmt = $this->pdo->prepare($sql);

            $stmt->execute();

            return $stmt->fetchColumn();

        }catch(Exception $e)
        {
            die($e->getMessage());
        }
    }

    public function paginaRows($table, $limite, $offset)
    {
        $sql= "SELECT * FROM {$table} LIMIT {$limite} OFFSET {$offset}";
    

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
}
