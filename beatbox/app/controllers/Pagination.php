<?php


namespace App\Controllers;
use App\Core\App;

class Paginacao {

    protected  $totalDeProdutos;
    protected  $totalDePáginas;
    public  $paginaAtual;
    public  $limiteDeItens;
    public  $offset;
    protected  $table;

    public function __construct($table = '',$limiteDeItens = 1)
    {
        $this->table=$table;
        $this->limiteDeItens=$limiteDeItens;
        $this->paginaAtual=(!empty($_GET['pagina']) ? $_GET['pagina'] : '1');
        $this->totalDeProdutos = App::get('database')->numberRows('produtos');
        $this->totalDePáginas = ceil($this->totalDeProdutos/$this->limiteDeItens);
        $this->offset=($this->limiteDeItens * $this->paginaAtual)-$this->limiteDeItens;
        
    }

    public function createLinks()
    {   
        $host= $_SERVER['HTTP_HOST'];
        
        $disabled= ($this->paginaAtual == 1) ? "disabled" : "";
        
        $html="
            <div class='paginacao'>
                <nav aria-label='Navegação de página exemplo'>
                    <ul class='pagination justify-content-center'>
                        <li class='page-item {$disabled}'>
                            <a class='page-link' href='http://localhost:3000/produtos/?pagina=" . ($this->paginaAtual-1) ."'>&#8666</a></li>";
        $i=1;
        $pagina=0;
    
        while( $i <= 3 && $pagina < $this->totalDePáginas ){

                $pagina= ($this->paginaAtual-2) + $i;
                $disabled= ($this->paginaAtual == $pagina) ? "disabled" : "";
                if($pagina>0){
                        $html.="<li class='page-item {$disabled}'><a class='page-link' href='http://{$host}/produtos/?pagina={$pagina}'>{$pagina}</a></li>";
                    }
                $i++;            
        };
    

        $disabled= ($this->paginaAtual == $this->totalDePáginas) ? "disabled" : "";
        $html.="<li class='page-item {$disabled}'>
            <a class='page-link' href='http://localhost:3000/produtos/?pagina=" . ($this->paginaAtual+1) ."'>&#8667</a>";
        $html.="</ul></nav></div>";
       

        return $html;
    }
}