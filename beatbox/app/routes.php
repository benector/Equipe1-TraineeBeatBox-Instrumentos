<?php
 
 $router->get('','Controller@index');

 $router->get('produtos','Controller@produtos');

 $router->get('contato','Controller@contato');
 
 $router->get('login','Controller@login');

 $router->get('quemsomos','Controller@quemsomos');

 $router->get('admin','Controller@admin');

 $router->get('admin/categorias','Controller@admin_categorias');

 $router->get('admin/usuarios','Controller@admin_usuarios');

 $router->get('admin/produtos','Controller@admin_produtos');
