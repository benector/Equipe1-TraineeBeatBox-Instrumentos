Dentro dessa pasta vai um controller de cada página

<?php

//namespace App\Controllers;
use App\Core\App;

class Controller {

    public function index ()
    {
        return view ('/site/index');
    }
    
}