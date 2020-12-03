 <?php

// use App\Core\Router;

$router->get('','Controller@index');

$router->get('quem-somos','Controller@quemSomos');

$router->get('produtos','ProdutosController@produtos');

$router->get('contato','Controller@contato');

$router->get('login','Controller@login');

$router->get('adm/produtos', 'ProdutosAdminController@produtosAdmin');

$router->post('busca', 'ProdutosController@pesquisar');

$router->post('adm/produto/create', 'ProdutosAdminController@create');

$router->post('adm/produto/delete', 'ProdutosAdminController@delete');

$router->post('adm/produto/update','ProdutosAdminController@update');  

?>
