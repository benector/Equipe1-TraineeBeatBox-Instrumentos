 <?php

// use App\Core\Router;

$router->get('','PagesController@index');

$router->get('quem-somos','PagesController@quemSomos');

$router->get('produtos','PagesController@produtos');

$router->get('contato','PagesController@contato');

$router->get('login','PagesController@login');

?>