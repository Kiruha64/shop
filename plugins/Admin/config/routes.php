<?php
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;

Router::extensions('json', 'xml');

Router::plugin(
    'Admin',
    ['path' => '/admin'],
    function (RouteBuilder $routes) {

        $routes->connect('/', ['controller' => 'Admin', 'action' => 'index']);


        $routes->connect('/categories/', ['controller' => 'Categories', 'action' => 'index']);
        $routes->connect('/categories/add', ['controller' => 'Categories', 'action' => 'add']);
        $routes->connect('/categories/add/:id', ['controller' => 'Categories', 'action' => 'add'], ['pass' => ['id']]);
        $routes->connect('/categories/view/:id', ['controller' => 'Categories', 'action' => 'view'], ['pass' => ['id']]);
        $routes->connect('/categories/edit/:id', ['controller' => 'Categories', 'action' => 'edit'], ['pass' => ['id']]);
        $routes->connect('/categories/delete/:id', ['controller' => 'Categories', 'action' => 'delete'], ['pass' => ['id']]);

        $routes->connect('/typecategories/', ['controller' => 'Typecategories', 'action' => 'index']);
        $routes->connect('/typecategories/add', ['controller' => 'Typecategories', 'action' => 'add']);
        $routes->connect('/typecategories/add/:id', ['controller' => 'Typecategories', 'action' => 'add'], ['pass' => ['id']]);
        $routes->connect('/typecategories/view/:id', ['controller' => 'Typecategories', 'action' => 'view'], ['pass' => ['id']]);
        $routes->connect('/typecategories/edit/:id', ['controller' => 'Typecategories', 'action' => 'edit'], ['pass' => ['id']]);
        $routes->connect('/typecategories/delete/:id', ['controller' => 'Typecategories', 'action' => 'delete'], ['pass' => ['id']]);




        $routes->connect('/products/', ['controller' => 'Products', 'action' => 'index']);
        $routes->connect('/products/add', ['controller' => 'Products', 'action' => 'add']);
        $routes->connect('/products/add/:id', ['controller' => 'Products', 'action' => 'add'], ['pass' => ['id']]);
        $routes->connect('/products/view/:id', ['controller' => 'Products', 'action' => 'view'], ['pass' => ['id']]);
        $routes->connect('/products/edit/:id', ['controller' => 'Products', 'action' => 'edit'], ['pass' => ['id']]);
        $routes->connect('/products/delete/:id', ['controller' => 'Products', 'action' => 'delete'], ['pass' => ['id']]);


        $routes->connect('/users/', ['controller' => 'Users','action' => 'index']);
        $routes->connect('/users/add', ['controller' => 'Users', 'action' => 'add']);
        $routes->connect('/users/add/:id', ['controller' => 'Users', 'action' => 'add'], ['pass' => ['id']]);
        $routes->connect('/users/view/:id', ['controller' => 'Users', 'action' => 'view'], ['pass' => ['id']]);
        $routes->connect('/users/edit/:id', ['controller' => 'Users', 'action' => 'edit'], ['pass' => ['id']]);
        $routes->connect('/users/delete/:id', ['controller' => 'Users', 'action' => 'delete'], ['pass' => ['id']]);



    }
);
