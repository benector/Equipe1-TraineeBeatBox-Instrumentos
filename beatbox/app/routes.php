 <?php

// use App\Core\Router;

$router->get('','Controller@index');

$router->get('quem-somos','Controller@quemSomos');

$router->get('produtos','ProdutosController@produtos');

$router->get('contato','Controller@contato');

$router->get('login','Controller@login');

$router->get('produtos-admin', 'ProdutosAdminController@produtosAdmin');

$router->post('produtos/create', 'ProdutosAdminController@create');

$router->post('produtos/delete', 'ProdutosAdminController@delete');
?>
