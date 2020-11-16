<?php
 
 $router->get('','Controller@index');

 $router->get('produtos','Controller@produtos');

 $router->get('contato','Controller@contato');
 
 $router->get('login','Controller@login');

 $router->get('quemsomos','Controller@quemsomos');

 $router->get('admin','Controller@admin');

 $router->get('admin/categorias','Controller@admin_categorias');

 $router->get('admin/produtos','Controller@admin_produtos');

 $router->get('admin/usuarios','UsersController@index'); 

 $router->post('admin/create_user','UsersController@create');  

 $router->post('admin/update_user','UsersController@update');  

 $router->post('admin/delete_user','UsersController@delete');  