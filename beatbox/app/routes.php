 <?php

// use App\Core\Router;

$router->get('','PagesController@index');

$router->get('quem-somos','PagesController@quemSomos');

$router->get('produtos','ProdutosController@produtos');

$router->get('contato','PagesController@contato');

$router->get('login','PagesController@login');

$router->get('adm/produtos', 'ProdutosAdminController@produtosAdmin');

$router->post('produtos/create', 'ProdutosAdminController@create');

$router->post('produtos/delete', 'ProdutosAdminController@delete');

$router->get('adm/categorias', 'CategoriasController@index');

$router->post('adm/categorias/create', 'CategoriasController@create');

$router->post('adm/categorias/delete', 'CategoriasController@delete');

$router->post('adm/categorias/edit', 'CategoriasController@update');

$router->get('adm', 'PagesController@admIndex');

$router->get('adm/usuarios','UsersController@index'); 

$router->post('adm/usuarios/create','UsersController@create');  

$router->post('adm/usuarios/update','UsersController@update');  

$router->post('adm/usuarios/delete','UsersController@delete');

?>


