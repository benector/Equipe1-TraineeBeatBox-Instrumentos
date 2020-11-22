<?php
 
 $router->get('','Controller@index');

 $router->get('produtos','Controller@produtos');

 $router->get('contato','Controller@contato');
 
 $router->get('login','Controller@login');

 $router->get('quem-somos','Controller@quemsomos');

 $router->get('adm','Controller@admin');

 $router->get('adm/categorias','Controller@admin_categorias');

 $router->get('adm/produtos','Controller@admin_produtos');

 $router->get('adm/usuarios','UsersController@index'); 

 $router->post('adm/usuarios/create','UsersController@create');  

 $router->post('adm/usuarios/update','UsersController@update');  

 $router->post('adm/usuarios/delete','UsersController@delete');  