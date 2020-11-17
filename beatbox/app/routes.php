 <?php

// use App\Core\Router;

$router->get('','PagesController@index');

$router->get('quem-somos','PagesController@quemSomos');

$router->get('produtos','ProdutosController@produtos');

$router->get('contato','PagesController@contato');

$router->get('login','PagesController@login');

$router->get('produtos-admin', 'ProdutosAdminController@produtosAdmin');

$router->post('produtos/create', 'ProdutosAdminController@create');

$router->post('produtos/delete', 'ProdutosAdminController@delete');

$router->get('adm/categorias', 'CategoriasController@index');

$router->post('adm/categorias/create', 'CategoriasController@create');

$router->post('adm/categorias/delete', 'CategoriasController@delete');

$router->post('adm/categorias/edit', 'CategoriasController@update')

?>;
