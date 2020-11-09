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


    //Aqui vão as funções de manipulação da base de dados
    //Essas funções rodam comandos SQL
    
}
