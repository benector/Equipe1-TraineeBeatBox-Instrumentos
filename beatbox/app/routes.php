 <?php

// use App\Core\Router;

$router->get('','Controller@index');

$router->get('quem-somos','Controller@quemSomos');

$router->get('produtos','Controller@produtos');

$router->get('contato','Controller@contato');

$router->get('login','Controller@login');

?>